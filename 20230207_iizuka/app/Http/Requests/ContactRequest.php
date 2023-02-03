<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'last_name' =>  ['required','max:50'],
            'first_name' =>  ['required','max:50'],
            'gender' => ['required'],
            'email' =>['required','email:filter,dns'],
            'zip11' => ['required','max:8','min:8'],
            'addr11' => ['required','max:191'],
            'building_name' => ['max:100'],
            'comment' => ['required','max:120']
        ];
    }

    public function messages()
    {
        return [
            'last_name.required' => '姓を入力してください。',
            'last_name.max' => '姓は20文字以下で入力してください。',
            'first_name.required' => '名を入力してください。',
            'first_name.max' => '姓は20文字以下で入力してください。',
            'email.required' => 'メールアドレスを入力してください。',
            'email.email:filter,dns' =>'メールアドレスの形式で入力してください。',
            'zip11.required' => '郵便番号を入力してください。',
            'zip11.max' => '郵便番号は-を入れた8桁で入力してください。',
            'zip11.min' => '郵便番号は-を入れた8桁で入力してください。',
            'addr11.required' => 'ご住所を入力してください。',
            'addr11.max' => '200字以内でご入力ください。',
            'building_name.max' => '50文字以内で入力してください。',
            'comment.required' => 'ご意見を入力してください。',
            'comment.max' => '120文字以内でご入力ください。'
        ];
    }
}
