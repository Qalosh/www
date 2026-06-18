<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminAuthController extends Controller
{
    // Форма логіну
    public function loginForm()
    {
        if (Session::get('admin_logged_in')) {
            return redirect('/admin');
        }
        return view('admin.login');
    }

    // Обробка логіну
    public function login(Request $request)
    {
        $request->validate([
            'login'    => 'required',
            'password' => 'required',
        ]);

        $admin = Admin::where('login', $request->login)->first();

        if ($admin && Hash::check($request->password, $admin->password)) {
            Session::put('admin_logged_in', true);
            Session::put('admin_login', $admin->login);
            return redirect('/admin');
        }

        return back()->withErrors(['login' => 'Невірний логін або пароль!']);
    }

    // Вихід
    public function logout()
    {
        Session::forget('admin_logged_in');
        Session::forget('admin_login');
        return redirect('/admin/login');
    }
}