<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResRequest extends FormRequest
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
            //バリデーションルール
            'body' => 'required|max:400',
            'name' => 'max:20',
        ];
    }

    public function messages()
    {
        return [
            //エラーメッセージ
            'body.required' => 'レスを入力してください',
            'body.max' => '400文字以内で入力してください',
            'name.max' => '20文字以内で入力してください',
        ];
    }
}
