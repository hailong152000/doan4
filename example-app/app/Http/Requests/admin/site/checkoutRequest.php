<?php

namespace App\Http\Requests\admin\site;

use Illuminate\Foundation\Http\FormRequest;
use phpDocumentor\Reflection\PseudoTypes\True_;

class checkoutRequest extends FormRequest
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
            'customer_id'=>"required",
            'total_price'=>"different:0",
        ];
    }
    public function messages()
    {
        return[
            'customer_id.required'=>"abc",
            'total_price.different'=>"Chưa có sản phẩm nào để thanh toán,mời bạn tiếp tục mua hàng",
        ];
    }
}
