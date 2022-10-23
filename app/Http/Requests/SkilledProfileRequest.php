<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SkilledProfileRequest extends FormRequest
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
            'skilled_name' => ['required'],
            'skilled_surname' => ['required', 'string'],
            'skilled_profession'=> ['required'],
            'skilled_industry'=> ['required'],
            'skilled_telephone'=> ['required'],
            'skilled_description'=> ['required'],
            'skilled_experience_organization'=> ['required'],
            'skilled_experience_position'=> ['required'],
            'skilled_experience_from'=> ['required'],
            'skilled_experience_till'=> ['required'],
            'skilled_experience_description'=> ['required'],
            // 'skilled_avatar'=>['required']
        ];
    }
}
