<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Cate;

class WordRequest extends FormRequest
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
            'word' => 'required|max:32',
            // 'sort' => 'required',
        ];
    }

    public function messages()
    {
        return [
            //エラーメッセージ
            'word.required' => '検索ワードを入力してください',
            'word.max' => '32文字以内で入力してください',
            // 'sort.required' => '入力してください',
        ];
    }
}
