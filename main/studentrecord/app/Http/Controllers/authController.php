<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class authController extends Controller
{
    public function login()
    {
        return view('login.login');
    }



    public function userlogin(Request $request)
    {
        $request->validate([

            'email' => 'required|email',
            'password' => 'required|min:5|max:12'
        ]);
        $data = User::where('email', '=', $request->email)->first();

        if (!$data) {
            return back()->with('failed', 'Registered First');
        } else {
            if (Hash::check($request->password, $data->password)) {
                $request->session()->put('logged', $data->id);
                return redirect()->route('dashboard');
            } else {
                return back()->with('failed', 'Wrong Password');
            }
        }
    }


    public function logout()
    {
        if (session()->has('logged')) {
            session()->flash('logged');
            return redirect()->route('login');
        }
    }
}
