<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTransaksiRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'kode_unit' => ['required'],
            'nama_pembeli' => ['required'],
            'id_type' => ['required'],
            'luas_tanah' => ['required'],
            'luas_bangunan' => ['required'],
            'harga_rumah' => ['required'],
        ];
    }

    public function messages(): array {
        return [
            'id_type' => "Mohon cantumkan tipe rumah yang ingin dibeli.",
        ];
    }
}
