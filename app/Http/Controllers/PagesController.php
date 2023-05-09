<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function dashboard()
    {
        $data = [];
        return view('admin.pages.dashboard', $data);
    }

    public function login()
    {
        $data = [];
        return view('admin.pages.auth.login', $data);
    }

    public function register()
    {
        $data = [];
        return view('admin.pages.auth.register', $data);
    }

    public function profile()
    {
        $data = [];
        return view('admin.pages.profile.index', $data);
    }

    public function editProfile($id)
    {
        $data = [];
        dd($id);
        return view('admin.pages.profile.edit', $data);
    }

    // Page User

    public function home()
    {
        $data = [];
        return view('user.pages.home', $data);
    }
}
