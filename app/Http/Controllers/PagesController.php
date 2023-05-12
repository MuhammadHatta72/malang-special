<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function dashboard()
    {
        $data = [
            'user' => auth()->user(),
        ];
        return view('admin.pages.dashboard', $data);
    }

    public function login()
    {
        $data = [];
        return view('admin.pages.auth.login', $data);
    }

    public function loginProcess(Request $request)
    {
        $rules = [
            'email' => 'required|email',
            'password' => 'required|string',
        ];

        $messages = [
            'email.required' => 'Email wajib diisi!',
            'email.email' => 'Email tidak valid!',
            'password.required' => 'Password wajib diisi!',
            'password.string' => 'Password harus berupa string!',
        ];

        $request->validate($rules, $messages);

        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if (auth()->attempt($data)) {
            return redirect('/dashboard')->with('success', 'Anda berhasil login!');
        } else {
            return redirect('/login')->with('error', 'Email atau password salah!');
        }
    }

    public function register()
    {
        $data = [];
        return view('admin.pages.auth.register', $data);
    }

    public function registerProcess(Request $request)
    {
        $rules = [
            'username' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string',
        ];

        $message = [
            'username.required' => 'Nama wajib diisi!',
            'username.string' => 'Nama harus berupa string!',
            'email.required' => 'Email wajib diisi!',
            'email.email' => 'Email tidak valid!',
            'email.unique' => 'Email sudah terdaftar!',
            'password.required' => 'Password wajib diisi!',
            'password.string' => 'Password harus berupa string!',
        ];

        $request->validate($rules, $message);

        $user = new User();
        $user->name = 'User';
        $user->username = $request->username;
        $user->email = $request->email;
        $user->gender = 'not-found';
        $user->address = 'not-found';
        $user->phone = 'not-found';
        $user->role = '2';
        $user->image = 'not-found';
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect('/login')->with('success', 'Anda berhasil register!');
    }


    public function logout()
    {
        auth()->logout();
        return redirect()->route('login')->with('success', 'Anda berhasil logout!');
    }

    // Page User

    public function home()
    {
        $data = [];
        return view('user.pages.home', $data);
    }
}
