<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'price' => 'required|string',
            'description' => 'required|string',
            'stock' => 'required|string',
            'remainder' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
        ];
    }

    public function message()
    {
        return [
            'name.required' => 'Nama harus diisi!',
            'name.string' => 'Nama harus menggunakan string',
            'price.required' => 'Harga harus diisi!',
            'price.string' => 'Harga harus menggunakan string',
            'description.required' => 'Deskripsi harus diisi!',
            'description.string' => 'Deskripsi harus menggunakan string!',
            'stock.required' => 'Stok harus diisi!',
            'stock.string' => 'Stok harus menggunakan string',
            'remainder.required' => 'Sisa harus diisi!',
            'remainder.string' => 'Sisa harus menggunakan string',
            'image.image' => 'Image harus menggunakan format gambar!',
            'image.mimes' => 'Image harus menggunakan format jpeg,png,jpg!',
            'image.max' => 'Image maksimal 2048kb!',
        ];
    }
}
