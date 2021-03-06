<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    public function login(Request $request)
    {
        if ($request->isMethod('post') && $request->ajax()) {

            $data = $request->all();
            $validator = \Validator::make($request->all(), [
                'mobile' => ['required', 'numeric'],
            ]);

            if ($validator->fails()) {
                $errors = $validator->errors();

                $validation_errors = [
                    'mobile' => $errors->first('mobile'),
                ];

                $data_validation = array("StatusCode" => 1, "ErrorMessage" => $validation_errors);
                return response()->json($data_validation)->withCallback($request->input('callback'));
            } else {


                $mobile = $data['mobile'];
                $otp = mt_rand(1000, 9999);
                $request->session()->put('otp', $otp);
                $request->session()->put('mobile', $mobile);


                if (User::where('mobile', $mobile)->exists()) {
                    User::where('mobile', $mobile)->update(['password' => bcrypt($otp)]);
                } else {
                    User::create([
                        'mobile' => $mobile,
                        'role_id' => 3,//user
                        'password' => bcrypt($otp)
                    ]);
                }


                $message = "Hello Rider, Your OTP for Rentnhop login is $otp. OTP is valid for next 30 minutes. Happy Riding";
                $data['message'] = $message;
                $sms_type = 'Login OTP';

                send_sms($mobile, $message, $sms_type, 'rentnhop');

                $message = [
                    "StatusCode" => 0,
                    "Message" => "A code has been sent to $mobile",
                    "mobile"=> $mobile,
                    "Class" => "success_popup", "Reload" => "false",
                    "OtpField" => "true",
                   /* "otp" => $otp*/
                ];
                //$request->session()->flash('Message', $message);

                return response()->json($message)->withCallback($request->input('callback'));
            }

        }
    }

    public function otp_login(Request $request)
    {
        if ($request->isMethod('post') && $request->ajax()) {

            $validator = \Validator::make($request->all(), [
                'first' => ['required', 'numeric'],
                'second' => ['required', 'numeric'],
                'third' => ['required', 'numeric'],
                'fourth' => ['required', 'numeric'],
            ]);

            if ($validator->fails()) {

                $data_validation = array("StatusCode" => 7, "ErrorMessage" => '<span class="error-message">Please enter valid otp</span>');
                return response()->json($data_validation)->withCallback($request->input('callback'));
            } else {


                $temp_otp = $request->session()->get('otp');

                $data = $request->all();

                $first = $data['first'];
                $second = $data['second'];
                $third = $data['third'];
                $fourth = $data['fourth'];
                $otp = $first.$second.$third.$fourth;


                if ($temp_otp == $otp) {

                    $mobile = $request->session()->get('mobile');
                    $credentials = [
                        'mobile' => $mobile,
                        'password' => $otp
                    ];


                    if (Auth::attempt($credentials)) {

                        $message = [
                            "StatusCode" => 0,
                            "Message" => 'Logged in successfully',
                            "Class" => "success_popup", "Reload" => "true",
                            "OtpField" => "true",
                            "otp" => $otp
                        ];
                        $request->session()->forget('otp');
                        $request->session()->forget('mobile');
                        return response()->json($message)->withCallback($request->input('callback'));
                    }

                    $message = [
                        "StatusCode" => 2,
                        "Message" => 'The provided credentials do not match our records',
                        "Class" => "error_popup", "Reload" => "true",
                        "OtpField" => "false",
                    ];
                    return response()->json($message)->withCallback($request->input('callback'));
                } else {
                    $message = [
                        "StatusCode" => 2,
                        "Message" => 'Invalid OTP',
                        "Class" => "error_popup", "Reload" => "false",
                        "OtpField" => "true",
                    ];
                    return response()->json($message)->withCallback($request->input('callback'));
                }
            }
        }
    }

    public function resend_otp(Request $request)
    {

        if ($request->isMethod('post') && $request->ajax()) {

            $mobile = $request->session()->get('mobile');
            if (User::where('mobile', $mobile)->exists()) {
                $otp = mt_rand(1000, 9999);
                $request->session()->put('otp', $otp);
                $request->session()->put('mobile', $mobile);
                User::where('mobile', $mobile)->update(['password' => bcrypt($otp)]);

                $message = "Hello Rider, Your OTP for Rentnhop login is $otp. OTP is valid for next 30 minutes. Happy Riding";

                $data['message'] = $message;
                $sms_type = 'Login OTP';

                send_sms($mobile, $message, $sms_type, 'rentnhop');

                $message = [
                    "StatusCode" => 0,
                    "Message" => "A code has been resent to $mobile",
                    "mobile"=> $mobile,
                    "Class" => "success_popup",
                    "Reload" => "false",
                    "OtpField" => "true",
                ];
                $request->session()->flash('Message', $message);
                return response()->json($message)->withCallback($request->input('callback'));

            } else {
                $message = [
                    "StatusCode" => 2,
                    "Message" => 'The provided credentials do not match our records',
                    "Class" => "error_popup", "Reload" => "true",
                    "OtpField" => "false",
                ];
                return response()->json($message)->withCallback($request->input('callback'));
            }
        }
    }
}
