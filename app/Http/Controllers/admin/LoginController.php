<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function index()
    {
        if (Auth::guard('admin')->check()) {
            return redirect()->route('admin.index');
        }
        return view('admin.login.index');
    }

    public function authenticate(Request $request)
    {
        $credentials = Validator::make($request->all(),  [
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => 'Masukan alamat email!',
            'email.email' => 'Alamat email anda salah!',
            'password.required' => 'Password tidak boleh kosong!',
        ]);

        if ($credentials->fails()) {
            return redirect()->back()->withErrors($credentials)->withInput();
        } else {
            if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
                return redirect()->route('admin.index');
            } else {
                return redirect()->back()->with('error', 'Email and Password Anda Salah!');
            }
        }
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->to('/admin/login')->with('success', 'Berhasil Logout');
    }
}
