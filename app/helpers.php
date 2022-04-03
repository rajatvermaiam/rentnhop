<?php

function prd($array)
{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
    die;
}

function pr($array)
{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}


function send_sms($to, $msg, $sms_type, $company_info,$template_id="")
{
    // Account details
    $apiKey = urlencode("YzRlYWRjY2NiNjYyNzVmOTMzODQwYzVlMWRiNTRiZWE=");
    // Message details

    $sender = urlencode('RENTHP');
    $message = rawurlencode($msg);

    $numbers = '91' . $to;

    // Prepare data for POST request
    $data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);

    // Send the POST request with cURL
    $ch = curl_init("https://api.textlocal.in/send/");
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    // Process your response here
    $response = json_decode($response, true);


    if ($response['status'] != "failure") {
        $sms_error = "";
        $status = "success";
    } else {
        $sms_error = "";
        $status = $response['status'];
        $status = "pending";//remove in production
    }

    $sms_data = array(
        'to_sms' => $to,
        'message' => $msg,
        'sms_type' => $sms_type,
        'ip_address' => $_SERVER['REMOTE_ADDR'],
        'company_name' => $company_info,
        'sms_error' => $sms_error,
        'status' => $status,
        'sms_return_result' => json_encode($response),
        'role' => 'customer',
    );
    return $sms_data;

}

/**
 * -------------------------------------
 * Encode Function
 * -------------------------------------
 */
if (!function_exists('rent_encode')) {
    function rent_encode($string, $key = "", $url_safe = true)
    {
        if ($key == null || $key == "") {
            $key = "rentnhop.com";
        }

        $ret = base64_encode($string);
        if ($url_safe) {
            $ret = strtr(
                $ret,
                array(
                    '+' => '.',
                    '=' => '-',
                    '/' => '~',
                )
            );
        }
        return $ret;
    }
}

/**
 * -------------------------------------
 * Decode  Function
 * -------------------------------------
 */

if (!function_exists('rent_decode')) {
    function rent_decode($string, $key = "")
    {
        if ($key == null || $key == "") {
            $key = "rentnhop.com";
        }

        $string = strtr(
            $string,
            array(
                '.' => '+',
                '-' => '=',
                '~' => '/',
            )
        );

        return base64_decode($string);
    }
}
