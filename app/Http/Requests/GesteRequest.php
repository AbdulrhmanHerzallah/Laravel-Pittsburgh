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
            'name.*' => 'required',
            'desc.*' => 'required|max:350',
            'file.*' => 'max:2048|image|mimes:jpeg,png,jpg,gif',
            'web.*' => 'max:255|url',
            'youtube.*' => 'max:255|url',
            'facebook.*' => 'max:255|url',
            'instagram.*' => 'max:255|url',
            'twitter.*' => 'max:255|url',
            'snapchat.*' => 'max:255|url',
        ];
    }
}
