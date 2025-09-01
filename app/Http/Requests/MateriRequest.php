<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MateriRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        // untuk method store
        $rules = [
            'judul'       => 'required|string|max:255',
            'konten'      => 'required|string|max:255',
            'simulasi_id' => 'required|exists:simulasis,id',
        ];

        // untuk method update
        if ($this->isMethod('PUT') || $this->isMethod('PATCH')) {
            $rules['judul'] = 'sometimes|required|string|max:255';
            $rules['konten'] = 'sometimes|required|string|max:255';
            $rules['simulasi_id'] = 'sometimes|required|exists:simulasis,id';
        }

        return $rules;
    }

    public function messages(): array
    {
        return [
            'judul.required' => 'Judul materi wajib diisi.',
            'judul.max'      => 'Judul materi maksimal 255 karakter.',
            'konten.required' => 'Isi konten materi wajib diisi.',
            'konten.max'      => 'Isi konten materi maksimal 255 karakter.',
            'simulasi_id.required'  => 'Simulasi harus dipilih.',
            'simulasi_id.exists'    => 'Simulasi yang dipilih tidak valid.',
        ];
    }
}
