<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequestMenu extends FormRequest
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
            'mn_name' => 'required|max:190|min:3|unique:menus,mn_name,'.$this->id
        ];
    }

    public function messages()
    {
        return [
            'mn_name.required' => 'Tiêu đề không được để trống',
            'mn_name.unique' => 'Tiêu đề này đã tồn tại',
            'mn_name.max' => 'Tiêu đề không quá 190 ký tự',
            'mn_name.min' => 'Tiêu đề phải nhiều hơn 3 ký tự'
        ];
    }
}
