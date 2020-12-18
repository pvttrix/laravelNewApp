<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index() {
        return view('index');
    }

    public function login() {
        return view('login');
    }

    public function signin(Request $request) {
        if(\Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect()->route('home');
        }
        else {
            return redirect()->back();
        }
    }

    public function logout() {
        \Auth::logout();
        return redirect()->route('login');
    }

    public function registr() {
        return view('registr');
    }

    public function signup(Request $request) {
        $data = \App\Models\User::create([
            
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        //14
        \Illuminate\Support\Facades\DB::table('user_role')->insert([
            'user_id' => $data->id,
            'role_id' => \App\Models\Role::getRoleByName('user')
        ]);
       //14      
        if($data) return redirect()->route('login');
        else redirect()->back();
    }

    public function adminpanel()
    {
        return view('adminPanel');
    }

}
