<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductCategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|min:3|max:255|unique:products,name',
            'price' => 'interger|min:1|max:999999999'
        ];
    }

    public function messages(){
        return [
            'name.required' => 'Tên bắt buộc phải nhập vô dùm cái',
            'name.min' => 'Nhập ít hơn 3 chữ r ',
            'name.max' => 'Nhập nhìu hơn 10 chữ r',
            'status.required' => 'Trạng thái đâu'
        ];
    }

}
