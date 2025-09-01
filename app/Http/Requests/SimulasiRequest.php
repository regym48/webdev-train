<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SimulasiRequest extends FormRequest
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
            'panduan'     => 'required|string|max:255',
        ];

        // untuk method update
        if ($this->isMethod('PUT') || $this->isMethod('PATCH')) {
            $rules['judul'] = 'sometimes|required|string|max:255';
            $rules['panduan'] = 'sometimes|required|string|max:255';
        }

        return $rules;
    }

    public function messages(): array
    {
        return [
            'judul.required' => 'Judul simulasi wajib diisi.',
            'judul.max'      => 'Judul simulasi maksimal 255 karakter.',
            'panduan.required' => 'Panduan simulasi wajib diisi.',
            'panduan.max'      => 'Panduan simulasi maksimal 255 karakter.',
        ];
    }
}
