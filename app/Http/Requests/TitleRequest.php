<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TitleRequest extends FormRequest
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
            'first_title' => 'required|max:200',
            'second_title' => 'required|max:200',
            'third_title' => 'required|max:200',
            'count_title' => 'required|max:200',
            'subscribe_title' => 'required|max:200',
            'meeting_title' => 'required|max:200',
        ];
    }
}
