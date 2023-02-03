<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConfirmRequest extends FormRequest
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
            'fullname' =>  ['required','max:255'],
            'gender' => ['required'],
            'email' =>['required','email:filter,dns', 'max:255'],
            'postcode'=>['required','max:8'],
            'address' => ['required','max:255'],
            'building_name' => ['max:255'],
            'opinion' => ['required','max:120']
        ];
    }

    public function messages()
    {
      return[
        //
      ];
    }
}
