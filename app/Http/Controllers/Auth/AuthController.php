<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function post_login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email:dns',
            'password'=> 'required|min:8|max:15',
        ]);

        if ($validator->fails()) {
            Alert::error('Gagal!', 'Email atau password tidak valid!');
            return redirect()->back();
        }

        $credentials = $request->only('email','password');

        if (Auth::attempt($credentials)) {
            toast('Selamat datang admin!', 'success');
            return redirect()->route('admin.dashboard');
        } else {
            Alert::error('Gagal!', 'Email atau password tidak valid!');
        }
    }

    public function logout()
    {
        toast('Berhasil logout!', 'success');
        Auth::logout();
        return redirect()->route('login');
    }
}
