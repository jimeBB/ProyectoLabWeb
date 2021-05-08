<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Redirect;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Input;
use App\Events\ActivityEvent;


class AuthController extends Controller
{
    public function register(Request $req)
    {
        return view('auth.register');
    }

    public function doRegister(Request $req)
    {
        $data = $req->all();
        Validator::make($req->all(), [
            'name' => 'required',
            'lname' => 'required',
            'email' => 'required|email:rfc,dns|unique:users',
            'birthday' => 'date',
            'password' => 'required|confirmed|min:6',
            
        ])->validate();

        $data['password'] = Hash::make($data['password']);
        $data['role'] = "user";

        user::create($data);

        return redirect()->route('auth.login');
    }

    public function login(Request $req)
    {
       
         
        return view('auth.login');
    }

    public function doLogin(Request $req)
    {
        $credentials = $req->only('email', 'password');

        if (Auth::attempt($credentials)) {
            
            $user = Auth::user();
            $role = $user->role;
            event(new ActivityEvent('login', $user));

            if ($role == 'admin')
                return redirect()->route('landingpage.index');

            return redirect()->route('landingpage.index');
        }
        

        $errors = new MessageBag(['password' => ['Email o contraseña incorrectos']]);
        return redirect()->back()->withErrors($errors);
    }

    public function logout(Request $req)
    {
        $user = Auth::user();
        Auth::logout();
        $req->session()->invalidate();
        $req->session()->regenerateToken();
        
      
        return redirect()->route('landingpage.index');
    }
}
