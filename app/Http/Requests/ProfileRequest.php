<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return auth()->user()->getAuthIdentifier();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'last_name' => ['nullable', 'string'],
            'email' => ['required', 'email', 'string'],
            'avatar' => [
                'image',
                'max:1999',
                'mimes:jpeg,png,jpg,gif,svg'
            ]
        ];
    }
}
