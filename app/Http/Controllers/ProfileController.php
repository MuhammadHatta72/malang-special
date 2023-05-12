<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [];
        return view('admin.pages.profile.index', $data);
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::findOrFail($id);
        $data = [
            'user' => $user,
        ];
        return view('admin.pages.profile.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);

        $rules = [
            'name' => 'required|string',
            'username' => 'required|string',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'gender' => 'required',
            'phone' => 'required|string',
            'address' => 'required|string',
            'image_new' => 'nullable|image|mimes:jpg,jpeg,png',
        ];

        $messages = [
            'name.required' => 'Nama wajib diisi!',
            'name.string' => 'Nama harus berupa string!',
            'username.required' => 'Username wajib diisi!',
            'username.string' => 'Username harus berupa string!',
            'email.required' => 'Email wajib diisi!',
            'email.email' => 'Email tidak valid!',
            'email.unique' => 'Email telah ditambahkan!',
            'gender.required' => 'Jenis kelamin wajib diisi!',
            'phone.required' => 'Nomor telepon wajib diisi!',
            'phone.string' => 'Nomor telepon harus berupa string!',
            'address.required' => 'Alamat wajib diisi!',
            'address.string' => 'Alamat harus berupa string!',
            'image_new.image' => 'Foto harus berupa gambar!',
            'image_new.mimes' => 'Foto harus berekstensi jpg, jpeg, atau png!',
        ];

        $request->validate($rules, $messages);

        $user->name = $request->input('name');
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->gender = $request->input('gender');
        $user->phone = $request->input('phone');
        $user->address = $request->input('address');
        $user->username = $request->input('username');

        if ($request->hasFile('image_new')) {
            if ($user->image != 'not_found') {
                File::delete(public_path('image_users/' . $user->image));
            }
            $profile_image = "user_" . $user->id . "." . $request->file('image_new')->extension();
            $request->file('image_new')->move(public_path('image_users/'), $profile_image);
            $user->image = $profile_image;
        }

        $user->save();

        return redirect('/profile')->with('success', 'Profil berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        File::delete(public_path('image_users/' . $user->image));
        $user->image = 'not_found';
        $user->save();
        return redirect('/profile')->with('success', 'Foto profil berhasil dihapus!');
    }
}
