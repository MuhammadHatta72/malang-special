<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'username' => 'required|string|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'username.required' => 'Username wajib diisi!',
            'username.string' => 'Username harus berupa string!',
            'username.unique' => 'Username telah digunakan!',
            'email.required' => 'Email wajib diisi!',
            'email.email' => 'Email tidak valid!',
            'email.unique' => 'Email sudah terdaftar!',
            'password.required' => 'Password wajib diisi!',
            'password.string' => 'Password harus berupa string!',
        ];
    }
}
