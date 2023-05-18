<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMarketRequest extends FormRequest
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
            'email' => 'required|email|unique:markets',
            'address' => 'required|string',
            'phone' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
        ];
    }

    public function message()
    {
        return [
            'name.required' => 'Name harus diisi!',
            'name.string' => 'Name harus menggunakan string',
            'email.required' => 'Email harus diisi!',
            'email.email' => 'Email harus menggunakan format email!',
            'email.unique' => 'Email sudah terdaftar!',
            'address.required' => 'Address harus diisi!',
            'address.string' => 'Address harus menggunakan string!',
            'phone.required' => 'Phone harus diisi!',
            'phone.string' => 'Phone harus menggunakan string!',
            'image.image' => 'Image harus menggunakan format gambar!',
            'image.mimes' => 'Image harus menggunakan format jpeg,png,jpg!',
            'image.max' => 'Image maksimal 2048kb!',
        ];
    }
}
