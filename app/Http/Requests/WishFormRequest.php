<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class WishFormRequest extends FormRequest
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

        if( Auth::check() ) {
            return [
                'phone'=>'required|digits:11',
                'wishes'=>'required'
            ];
        } else {
            return [
                'name' => 'required|max:100',
                'email'=>'required|email|max:100',
                'phone'=>'required|digits:11',
                'wishes' => 'required'
            ];
        }


    }
}
