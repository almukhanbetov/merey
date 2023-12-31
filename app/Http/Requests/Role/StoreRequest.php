<?php

namespace App\Http\Requests\Role;
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
            'name'=>['required', 'string', 'max:255'],
            'slug'=>['required', 'string', 'max:100'],

        ];
    }

    public function messages()
    {
        return [
            'name.required'=>"Жол толтырылмаған",
            'slug.required'=>"Жол толтырылмаған",
        ];
    }
}
