<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
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
            'title' => 'required',
            'content' => 'required',
            'created_by' => 'required'  
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Tiêu đề là trường bắt buộc',
            'content.required' => 'Nội dung là trường bắt buộc',
            'created_by' => 'Người tạo là trường bắt buộc'
        ];
    }
    
}
