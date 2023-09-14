<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InfosStoreRequest extends FormRequest
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
            'TitreSite' => ['required', 'max:255', 'string'],
            'adresseSite' => ['required', 'max:255', 'string'],
            'TelephoneSite' => ['required', 'max:255', 'string'],
            'EmailSite' => ['required', 'max:255', 'string'],
            'Localisation' => ['required', 'max:255', 'string'],
        ];
    }
}
