<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminCreatePackageRequest extends FormRequest
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
            'package_name'=> 'required|max:255',
            'package_description'=>'required | string | min:20',
            'package_price'=>'required | string | min: 1',
            'display_as'=>'required | string',
            'position'=>'required | string',
            'single_page_content'=>'min:20 | string',
            'color'=>'required | string | min: 4'
        ];
    }
}
