<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
                'email'=> 'required|max:50',
                'password'=> 'required|min:3',
        ];
    }

    public function messages(){
        return [
            'email.required' => 'Email Required',
            'password.required'=> 'Password required!',
            'email.max'=>'Maximum 50 charecter in Email',
            'password.min'=> 'Password should be Minimum 3 charecter',
        ];
    }
}