<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMarketRequest extends FormRequest
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
            'email' => 'required|email|unique:markets,email,' . $this->market->id,
            'address' => 'required|string',
            'phone' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
            'user_id' => 'required|exists:users,id|unique:markets,user_id,' . $this->market->id,
            'no_bca' => 'required|string',
            'no_bni' => 'required|string',
            'no_bri' => 'required|string',
            'no_mandiri' => 'required|string',
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
            'user_id.required' => 'Admin harus diisi!',
            'user_id.exists' => 'Admin tidak ditemukan!',
            'user_id.unique' => 'Admin telah terdaftar!',
            'image.image' => 'Image harus menggunakan format gambar!',
            'image.mimes' => 'Image harus menggunakan format jpeg,png,jpg!',
            'image.max' => 'Image maksimal 2048kb!',
            'no_bca.required' => 'No Rekening BCA harus diisi!',
            'no_bca.string' => 'No Rekening BCA harus menggunakan string!',
            'no_bni.required' => 'No Rekening BNI harus diisi!',
            'no_bni.string' => 'No Rekening BNI harus menggunakan string!',
            'no_bri.required' => 'No Rekening BRI harus diisi!',
            'no_bri.string' => 'No Rekening BRI harus menggunakan string!',
            'no_mandiri.required' => 'No Rekening Mandiri harus diisi!',
            'no_mandiri.string' => 'No Rekening Mandiri harus menggunakan string!',
        ];
    }
}
