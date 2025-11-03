<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class PostFormRequest extends FormRequest
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
            'post' => ['required', 'between:1,150'],
        ];
    }

    public function messages()
    {
        return [
            'post.required' => '入力してください。',
            'post.between:1,150' => ':min～:max文字で入力してください。',
        ];
    }
}
