<?php

namespace App\Http\Requests\admin\site;

use Illuminate\Foundation\Http\FormRequest;
use phpDocumentor\Reflection\PseudoTypes\True_;

class registercusRequest extends FormRequest
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
            'Ten'=>"required",
            'UID'=>"required|unique:customers",
            'Password'=>"required|min:5",
            'confirm-password'=>"required|same:Password",
            'SĐT'=>"required|min:10|max:11",
            'Dia_chi'=>"required",
        ];
    }
    public function messages()
    {
        return[
            'Ten.required'=>"Bạn vui lòng nhập",
            'email.unique'=>"Tên đăng nhập đã được sử dụng vui lòng thử lại",
            'email.required'=>"Tên đăng nhập không thể trống",
            'Password.required'=>"Nhập mật khẩu",
            'Password.min'=>"Mật khẩu tối thiểu 5 ký tự",
            'confirm-password.required'=>"Nhập lại mật khẩu",
            'confirm-password.same'=>"Nhập lại mật khẩu không chính xác",
            'SĐT.required'=>"Nhập lại số điện thoại",
            'SĐT.min'=>"Số điện thoại phải có 10 hoặc 11 số",
            'SĐT.max'=>"Số điện thoại phải có 10 hoặc 11 số",
            'Dia_Chi.required'=>"Bạn vui lòng nhập",
        ];
    }
}
