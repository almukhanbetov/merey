<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'title'=>['required', 'string', 'max:255'],
            'category_id'=>['required', 'integer'],
            'content'=>['required', 'string'],
            'author'=>['required', 'string', 'min:2', 'max:255'],
            'image'=>['required', 'file', 'mimes:png,jpg,jpeg,svg'],
            'published'=>['nullable'],
        ];
    }

    public function messages()
    {
        return [
            'title.required'=>"Жол толтырылмаған",
            'category_id.required'=>"Жол толтырылмаған",
            'content.required'=>"Жол толтырылмаған",
            'author.required'=>"Жол толтырылмаған",
            'image.required'=>"Жол толтырылмаған",
            'image.mimes'=>'Тек png, jpg, jpeg, svg'
        ];
    }
}
