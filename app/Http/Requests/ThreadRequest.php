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
            'body' => 'required|max:400',
        ];
    }

    public function messages()
    {
        return [
            //エラーメッセージ
            'title.required' => 'スレタイを入力してください',
            'title.max' => '200文字以内で入力してください',
            'cate.required' => 'カテゴリを選択してください',
            'body.required' => '最初のレスを入力してください',
            'body.max' => '最初のレスは400文字以内で入力してください',
        ];
    }
}
