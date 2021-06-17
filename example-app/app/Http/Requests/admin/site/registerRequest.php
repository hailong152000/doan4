<?php

namespace App\Http\Requests\admin\site;

use Illuminate\Foundation\Http\FormRequest;
use phpDocumentor\Reflection\PseudoTypes\True_;

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
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>"required",
            'email'=>"required|email:rfc,dns|unique:users",
            'password'=>"required|min:5",
            'confirm-password'=>"required|same:password",
            'SDT'=>"required|min:10|max:11",
        ];
    }
    public function messages()
    {
        return[
            'name.required'=>"Bạn vui lòng nhập",
            'email.unique'=>"Email đã được sử dụng vui lòng thử lại",
            'email.email'=>"địa chỉ email.không thể trống",
            'password.required'=>"Nhập mật khẩu",
            'password.min'=>"Mật khẩu tối thiểu 5 ký tự",
            'confirm-password.required'=>"Nhập lại mật khẩu",
            'confirm-password.same'=>"Nhập lại mật khẩu không chính xác",
            'SDT.required'=>"Nhập lại số điện thoại",
            'SDT.min'=>"Số điện thoại phải có 10 hoặc 11 số",
            'SDT.max'=>"Số điện thoại phải có 10 hoặc 11 số",
        ];
    }
}
