<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class RegisterController extends Controller
{
    public function register()
    {
            return view('register');
    }
    public function actionregister(Request $request)
    {
        $existingUser = User::where('email', $request->email)->first();
        if ($existingUser) {
            Session::flash('error', 'Email sudah terdaftar. Silakan gunakan email lain.');
            return redirect('register');
        }
        $user = User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        if ($user) {
            Session::flash('success', 'Registrasi berhasil. Silakan login menggunakan email dan password.');
        } else {
            Session::flash('gagal', 'Gagal melakukan registrasi. Silakan coba lagi.');
        }
        return redirect('register');
    }
}

