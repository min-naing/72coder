<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BooksFormRequest extends FormRequest
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
            'phone'=>'required|max:50|digits:11',
            'qty' => 'required|numeric',
            'full_address'=>'required'
        ];
    }
}
