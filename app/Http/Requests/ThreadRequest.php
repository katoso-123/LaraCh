<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ThreadRequest extends FormRequest
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
            'title' => 'required|max:200',
            'cate' => 'required',
        ];
    }

    public function messages()
    {
        return [
            //エラーメッセージ
            'title.required' => 'スレタイを入力してください',
            'title.max' => '200文字以内で入力してください',
            'cate.required' => 'カテゴリを選択してください',
        ];
    }
}
