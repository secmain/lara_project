<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ContactFormRequest extends Request
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
            //
            'request_user' => ['required', 'max:50'],
            'mail' => ['required', 'email'],
            'use_camera' => ['max:200'],
            'camera_year' => ['max:5'],
            'content' => ['required', 'max:1000']
        ];
    }
}
