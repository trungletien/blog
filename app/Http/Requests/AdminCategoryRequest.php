<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminCategoryRequest extends FormRequest
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
            'name' => 'required|min:3',
            'image' => 'mimes:jpg,png'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Bạn cần thêm dữ liệu cho giá trị này !!!',
            'image.required' => 'Bạn cần thêm dữ liệu cho giá trị này !!!',
            'name.min' => 'Tên loại bài viết cần ít nhất 3 kí tự.',
            'image.mimes' => 'Ảnh chỉ nhận đuôi jpg, png.'
        ];
    }
}
