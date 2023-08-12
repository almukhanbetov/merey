<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'name'=>['required', 'string', 'max:255'],
            'image'=>['sometimes', 'image', 'mimes:jpg,jpeg,png,svg'],

        ];
    }

    public function messages()
    {
        return [
            'name.required'=>"Жол толтырылмаған",
            'image.required'=>"Жол толтырылмаған",
        ];
    }
}
