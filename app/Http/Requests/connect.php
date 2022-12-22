<?php

namespace App\Http\Requests;

use Directory;

use Illuminate\Foundation\Http\FormRequest;

class connect extends FormRequest
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
            "password" => "required|min:6"
        ];
    }

    public function messages()
    {
        return [
            "email.required" => ":attribute không được để trống",
            "email.email" => ":attribute đã tồn tại",
            "password.required" => ":attribute không được để trống",
            "password.min" => ":attribute phải từ 6 ký tự trở lên",
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