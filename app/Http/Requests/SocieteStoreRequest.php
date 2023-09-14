<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SocieteStoreRequest extends FormRequest
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
     */
    public function rules(): array
    {
        return [
            'Type' => ['required', 'max:255', 'string'],
            'Denomination' => ['required', 'max:255', 'string'],
            'Adresse' => ['required', 'max:255', 'string'],
            'MontantCapital' => ['required', 'max:255'],
            'gerant_id' => ['required', 'exists:gerants,id'],
        ];
    }
}
