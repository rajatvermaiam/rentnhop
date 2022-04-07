<?php

namespace App\Http\Controllers\adminv\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::with('role')->get();
        return view('adminv.admin.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('adminv.admin.user.createUser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'role_id' => 'required',
        ]);

        $data = $request->all();



        $data['password'] =Hash::make($data['password']);


        if ($data['shop_image']) {
            $imageName = $request->file('shop_image')->getClientOriginalName();
            $imageName = time() . $imageName;
            $request->shop_image->move(public_path('shop_image'), $imageName);
            $data['shop_image'] = $imageName;
        }
        if ($data['agreement_image']) {
            $imageName = $request->file('agreement_image')->getClientOriginalName();
            $imageName = time() . $imageName;
            $request->agreement_image->move(public_path('agreement_image'), $imageName);
            $data['agreement_image'] = $imageName;
        }


        User::create($data);

        return redirect(route('admin.user.index'))->with('success', 'User Has Been created');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param User $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {

        return view('adminv.admin.user.editUser',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($request['email'], 'email')],
            'role_id' => 'required',
        ]);

        $data = $request->all();

        if (isset($data['shop_image'])) {
            $imageName = $request->file('shop_image')->getClientOriginalName();
            $imageName = time() . $imageName;
            $request->shop_image->move(public_path('shop_image'), $imageName);
            $data['shop_image'] = $imageName;
        } else {
            $data['shop_image'] = $user['shop_image'];
        }

        if (isset($data['agreement_image'])) {
            $imageName = $request->file('agreement_image')->getClientOriginalName();
            $imageName = time() . $imageName;
            $request->agreement_image->move(public_path('agreement_image'), $imageName);
            $data['agreement_image'] = $imageName;
        } else {
            $data['agreement_image'] = $user['agreement_image'];
        }

        $user->update($data);

        return redirect(route('admin.user.index'))->with('success', 'User Has Been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param User $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect(route('admin.user.index'))->with('success', 'User Has Been deleted');
    }
}
