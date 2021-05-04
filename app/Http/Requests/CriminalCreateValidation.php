<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CriminalCreateValidation extends FormRequest
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
            'criminal_name' => ['required'],
            'criminal_address' => ['required'],
            'criminal_gender' => ['required'],
            'criminal_age' => ['required'],
        ];
    }

    public function messages(){
            return [
                'criminal_name.required' => 'Criminal name is required .',
                'criminal_address.required' =>  'Criminal address is required .',
                'criminal_gender.required' =>  'Criminal gender is required .',
                'criminal_age.required' =>  'Criminal age is required .',
            ];
            
    }
}
