<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'username' => ['required','string','between:2,12'],
            'email' => ['required','email','between:5,40','unique:App\Models\User,email'],
            'password' => ['required','string','between:8,20','confirmed'],
        ];
    }

    public function messages()
    {
        return [
            'username.required' => 'ユーザー名は必須項目です。',
            'username.between' => 'ユーザー名は:min～:max文字で入力してください。',
            'email.required' => 'メールアドレスは必須項目です。',
            'email.email' => '正しいメールアドレスの形式で入力してください。',
            'email.between' => 'メールアドレスは:min～:max文字で入力してください。',
            'email.unique' => 'メールアドレスは既に使用されています。',
            'password.required' => 'パスワードは必須項目です。',
            'password.between' => 'パスワードは:min～:max文字で入力してください。',
            'password.confirmed' => 'パスワードが一致していません。',
        ];
    }
}
