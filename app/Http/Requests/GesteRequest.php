<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GesteRequest extends FormRequest
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
//            'name' => 'required|unique:bills,bill_number',
            'desc' => 'between:0,100',
            'main' => 'required',
            'img_url' => 'required|max:255|string',
            'web' => 'required|max:255|string',
            'youtube' => 'required|numeric',
            'facebook.*' => 'required|max:255',
            'instagram.0' => 'required|numeric',
            'twitter.*' => 'required|numeric',
            'snapchat.*' => 'min:0|min:',
        ];
    }
}
