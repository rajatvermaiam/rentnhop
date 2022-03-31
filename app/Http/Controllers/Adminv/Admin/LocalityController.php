<?php

namespace App\Http\Controllers\Adminv\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cities;
use App\Models\User;
use Illuminate\Http\Request;

class LocalityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locations = Cities::with('locations')->with('user')->whereNot('parent_id',null)->get();

        return view('adminv.admin.locality.index', compact('locations',));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $city = Cities::latest()->where('parent_id',null)->get();
        $user = User::latest()->whereIn('role_id',[1, 2])->get();
        return view('adminv.admin.locality.createLocality', compact('city','user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'parent_id' => ['required', 'numeric'],
            'user_id'=> ['required', 'numeric'],
            'map_url' => ['required', 'string'],
        ],
            [
                'parent_id.required' => 'The city field is required.',
                'user_id.required' => 'The vendor field is required.'
            ]
        );

        $data = $request->all();

        Cities::create($data);

        return redirect(route('admin.locality.index'))->with('success', 'Price Has Been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $city = Cities::latest()->where('parent_id',null)->get();
        $user = User::latest()->whereIn('role_id',[1, 2])->get();
        $cities = Cities::findOrFail($id);

        return view('adminv.admin.locality.editLocality',compact('cities','user','city','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'parent_id' => ['required', 'numeric'],
            'user_id'=> ['required', 'numeric'],
            'map_url' => ['required', 'string'],
        ],
            [
                'parent_id.required' => 'The city field is required.',
                'user_id.required' => 'The vendor field is required.'
            ]
        );
        $cities = Cities::findOrFail($id);
        $cities->update($request->all());


        return redirect(route('admin.locality.index'))->with('success', 'Price Has Been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cities = Cities::where('id',$id);
        $cities->delete();

        return redirect(route('admin.locality.index'))->with('success', 'Loction Has Been deleted');
    }
}
