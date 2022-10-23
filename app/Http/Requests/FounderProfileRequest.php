<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class FounderProfileRequest extends FormRequest
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
            // 'user_id' => ['required'],
            // 'founder_position' => ['required, string'],
            // 'founder_organization' => ['required, string'],
            // 'founder_contact'=> ['required, string']
            // 'founder_name' => ['required', 'string'],
            // 'founder_surname' => ['required', 'string'],
            // 'founder_position'=> ['required', 'string'],
            // 'founder_organization'=> ['required'],
            // 'founder_telephone'=> ['required'],
            // 'founder_insta_link'=> ['required'],
            // 'founder_face_link'=> ['required'],
            // 'founder_linked_link'=> ['required'],
            // 'founder_description'=>['required'],
            // 'founder_avatar'=>['required']
        ];
    }
}
