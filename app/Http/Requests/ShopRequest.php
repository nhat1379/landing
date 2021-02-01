<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Shop;

class ShopRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'province_id' => 'required',
            'district_id' => 'required',
            'ward_id' => 'required',
            'address' => 'required',
        ];
    }

    public function messages() {
        return [
            'name.required' => 'Tên công ty là trường bắt buộc',
            'email' => 'Email là trường bắt buộc',
            'phone' => 'Số điện thoại là trường bắt buộc',
            'province_id' => 'Tỉnh/TP là trường bắt buộc',
            'district_id' => 'Quận/Huyện là trường bắt buộc',
            'ward_id' => 'Phường/Xã là trường bắt buộc',
            'address' => 'Địa chỉ là trường bắt buộc'
        ];
    }
}
