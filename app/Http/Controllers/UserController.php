<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('superadmin_admin');
        $data = [
            'users' => User::all(),
        ];
        return view('admin.pages.users.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $this->authorize('superadmin_admin');
        $user = User::findOrFail($id);
        $data = [
            'user' => $user,
        ];
        return view('admin.pages.users.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $this->authorize('superadmin');
        $user = User::findOrFail($id);
        $data = [
            'user' => $user,
        ];
        return view('admin.pages.users.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $rules = [
            'name' => 'required|string',
            'username' => 'required|string',
            'phone' => 'required|string',
            'address' => 'required|string',
        ];

        $messages = [
            'name.required' => 'Nama wajib diisi!',
            'name.string' => 'Nama harus berupa string!',
            'username.required' => 'Username wajib diisi!',
            'username.string' => 'Username harus berupa string!',
            'phone.required' => 'Nomor telepon wajib diisi!',
            'phone.string' => 'Nomor telepon harus berupa string!',
            'address.required' => 'Alamat wajib diisi!',
            'address.string' => 'Alamat harus berupa string!',
        ];

        $request->validate($rules, $messages);

        $user->name = $request->input('name');
        $user->username = $request->input('username');
        $user->phone = $request->input('phone');
        $user->address = $request->input('address');
        $user->save();

        return redirect('/users')->with('success', 'User berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->authorize('superadmin');
        $user = User::findOrFail($id);
        $user->delete();
        return redirect('/users')->with('error', 'User berhasil dihapus!');
    }
}
