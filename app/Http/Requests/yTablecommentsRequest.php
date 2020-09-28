<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class yTablecommentsRequest extends FormRequest
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
            //'blog_id'=>'required',
            'name'=>'max:255',
            'email'=>'required|email',
            'message'=>'required|max:255',
        ];
    }
}
