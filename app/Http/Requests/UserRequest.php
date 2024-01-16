<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'phone' => 'string|required',
            'address' => 'string|required',
            'city' => 'string|required',
            'country' => 'string|required',
            'zip_code' => 'string|required',
            'title' => 'string|required',
            'description' => 'string|required',
            'mobility' => 'string|required',
        ];
    }
}
