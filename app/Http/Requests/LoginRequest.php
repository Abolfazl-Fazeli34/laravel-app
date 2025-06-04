<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return True;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'username' => 'required',
            'email' => 'email|required',
            'password' => 'required|min:8|max:20|alpha_num',
            'confirm_password' => 'required|min:8|max:20|alpha_num|same:password',
        ];
    }
    public function messages(){
        return [
            'username.required' => 'Username is required.',
        ];
    }
}
