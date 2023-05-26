<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            'name' => 'required|string',
            'username' => 'required|string|unique:users,username,' . $this->user->id,
            'phone' => 'required|string',
            'address' => 'required|string',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Nama wajib diisi!',
            'name.string' => 'Nama harus berupa string!',
            'username.required' => 'Username wajib diisi!',
            'username.string' => 'Username harus berupa string!',
            'username.unique' => 'Username telah digunakan!',
            'phone.required' => 'Nomor telepon wajib diisi!',
            'phone.string' => 'Nomor telepon harus berupa string!',
            'address.required' => 'Alamat wajib diisi!',
            'address.string' => 'Alamat harus berupa string!',
        ];
    }
}
