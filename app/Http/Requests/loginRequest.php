<?php

namespace App\Http\Requests;

use Directory;

use Illuminate\Foundation\Http\FormRequest;

class loginRequest extends FormRequest
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
            "email" => "required|email",
            "password" => "required"
        ];
    }

    public function messages()
    {
        return [
            "email.required" => ":attribute không được để trống",
            "email.email" => ":attribute đã tồn tại",
            "password.required" => ":attribute không được để trống",
        ];
    }

    public function attributes()
    {
        return [
            "email" => "Email",
            "password" > "Mật khẩu"
        ];
    }
}