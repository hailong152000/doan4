<?php

namespace App\Http\Requests\admin\site;

use Illuminate\Foundation\Http\FormRequest;
use phpDocumentor\Reflection\PseudoTypes\True_;

class PasswordRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'Password'=>"required|min:5",
            'confirm-password'=>"required|same:Password",
        ];
    }
    public function messages()
    {
        return[
            'Password.required'=>"Nhập mật khẩu cũ",
            'Password.min'=>"Mật khẩu tối thiểu 5 ký tự",
            'confirm-password.required'=>"Nhập lại mật khẩu",
            'confirm-password.same'=>"Nhập lại mật khẩu không chính xác",
        ];
    }
}
