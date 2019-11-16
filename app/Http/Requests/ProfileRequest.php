<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            'about'     => 'required|min:2',
            'phone'     => 'required',
            'address'   => 'required',
            'website'   => 'nullable',
            'facebook'  => 'nullable',
            'instagram' => 'nullable',
            'other_info'  => 'nullable',
            'other_info2' => 'nullable',
        ];
    }
}
