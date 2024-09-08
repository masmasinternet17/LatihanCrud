<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\Return_;

class LoginController extends Controller
{
    public function index () {
        return view ('Login');
    }

    public function login(Request $request)
    {

        // dd($request->all());
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Cek kredensial pengguna
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Jika berhasil login, redirect ke dashboard atau halaman lain
            return redirect()->intended('/');
        }

        // Jika login gagal, kembali ke halaman login dengan pesan error
        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->onlyInput('email');
    }  
    
    public function logout(Request $request)
    {
        Auth::logout(); // Melakukan proses logout

        // Hapus session saat logout
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirect ke halaman login atau halaman utama
        return redirect('/login')->with('status', 'Logout berhasil.');
    }
}
