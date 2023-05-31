<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserRequest;
use App\Models\Cart;
use App\Models\Market;
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
            'users' => User::whereNot('role', '1')->paginate(10),
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
            'roles' => [
                '2' => 'Admin',
                '3' => 'User'
            ]
        ];
        return view('admin.pages.users.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user)
    {

        if (Market::where('user_id', $user->id)->exists()) {
            if ($request->input('role') == '3') {
                return redirect('/users')->with('error', 'User sudah terdaftar di sebagai admin toko!');
            }
        }

        if (Cart::where('user_id', $user->id)->exists()) {
            return redirect('/users')->with('error', 'User telah membeli produk!');
        }

        $user->name = $request->input('name');
        $user->username = $request->input('username');
        $user->phone = $request->input('phone');
        $user->address = $request->input('address');
        $user->role = $request->input('role');
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
        if (Market::where('user_id', $user->id)->exists()) {
            return redirect('/users')->with('error', 'User sudah terdaftar di sebagai admin toko!');
        }
        $user->delete();
        return redirect('/users')->with('error', 'User berhasil dihapus!');
    }
}
