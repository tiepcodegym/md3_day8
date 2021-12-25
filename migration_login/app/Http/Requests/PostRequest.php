<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'title'=>'required|min:6|max:25',
            'content'=>'required',
            'user_id'=>'required|numeric',
        ];
    }

    public function messages()
    {
        return [
            'title.required'=>'Khong duoc de trong',
            'title.min'=>'Toi thieu 6 ky tu',
            'title.max'=>'Toi da 25 ky tu'

        ];
    }
}
