<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FeedbackRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'description' => ['required', 'string', 'max:200', 'min:5'],
            'user_id' => ['exists:users,id']
        ];
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
            'user_id' => auth('web')->id()
        ]);
    }
}
