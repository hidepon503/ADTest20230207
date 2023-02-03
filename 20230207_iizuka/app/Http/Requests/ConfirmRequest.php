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
            'name' =>  ['required','max:100'],
            'gender' => ['required','max:5'],
            'email' =>['required','email:filter,dns', 'max:191'],
            'postal_code'=>['required','max:8'],
            'address' => ['required','max:191'],
            'building_name' => ['max:100'],
            'comment' => ['required','max:120']
        ];
    }

    public function messages()
    {
      return[
        //
      ];
    }
}
