<?php

namespace App\Http\Controllers;
use App\User;
use App\Role;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function getIndex()
    {
        return view('index');
    }
    
    public function getSho2oonPage()
    {
        return view('sho2oon');
    }

    public function getAdminPage()
    {
        $users = User::all();
        return view('admin', ['users' => $users]);
    }

    public function getAddMosab()
    {
        return response('A Mosab generated!', 200);
    }

    public function getTamreed()
    {
        return response('A Tamreed here !', 200);
    }
    
    public function postAdminAssignRoles(Request $request)
    {
        $user = User::where('email', $request['email'])->first();
        $user->roles()->detach();
        if ($request['role_user']) {
            $user->roles()->attach(Role::where('name', 'User')->first());
        }
        if ($request['role_sho2oon']) {
            $user->roles()->attach(Role::where('name', 'Sho2oon')->first());
        }
        if ($request['role_tamreed']) {
            $user->roles()->attach(Role::where('name', 'Tamreed')->first());
        }
        if ($request['role_admin']) {
            $user->roles()->attach(Role::where('name', 'Admin')->first());
        }
        return redirect()->back();
    }
}