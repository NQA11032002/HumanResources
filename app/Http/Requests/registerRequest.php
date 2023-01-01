<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class registerRequest extends FormRequest
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
            "firstName" => "required",
            "lastName" => "required",
            "email" => "required",
            "password" => [
                'required',
                'min:6',
                'regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9]).{6,}$/',
            ]
        ];
    }

    public function messages()
    {
        return [
            'firstName.required' => ":attribute không được để trống",
            'lastName.required' => ":attribute không được để trống",
            'email.required' => ":attribute không được để trống",
            "password.required" => ":attribute không được để trống",
            "password.min" => ":attribute phải trên 6 ký tự",
            "password.regex" => ":attribute phải bao gồm *số-chữ thường-chữ hoa*",
        ];
    }

    public function attributes()
    {
        return [
            'firstName' => "Tên",
            'lastName' => "Họ và tên đệm",
            'email' => "Email",
            "password" => "Mật khẩu"
        ];
    }
}