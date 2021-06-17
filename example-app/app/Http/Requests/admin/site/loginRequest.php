<?php

namespace App\Http\Requests\admin\site;

use Illuminate\Foundation\Http\FormRequest;
use phpDocumentor\Reflection\PseudoTypes\True_;

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
     * @return array
     */
    public function rules()
    {
        return [
            'email'=>"required|email:rfc,dns",
            'password'=>"required|min:5",
        ];
    }
    public function messages()
    {
        return[
            'email.email'=>"địa chỉ email.không thể trống",
            'password.required'=>"Nhập mật khẩu",
            'password.min'=>"Mật khẩu tối thiểu 5 ký tự",
        ];
    }
}
