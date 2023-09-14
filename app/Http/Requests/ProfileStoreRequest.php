<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileStoreRequest extends FormRequest
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
            'Photo' => ['required', 'file'],
            'Adresse' => ['required', 'max:255', 'string'],
            'Telephone' => ['required', 'max:255', 'string'],
        ];
    }
}
