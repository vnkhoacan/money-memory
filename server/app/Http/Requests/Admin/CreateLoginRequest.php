<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CreateLoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'email' => [
                'required',
                'email:filter',
                Rule::unique('users', 'email'),
            ],
            'name' => [
                'required',
                'string',
            ],
            'password' => [
                'required',
                'regex:/(^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$)/u',
            ]
        ];
    }

    public function messages()
    {
        return [
            'password.regex' => 'Password minimum eight characters, at least one letter, one number and one special character'
        ];
    }
}
