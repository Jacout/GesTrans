<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class generalform extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return TRUE;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'UNIDAD' => 'required|numeric',
        'NOMBRE' => 'required',
        'FAMILIA'=>'required',
        'DESCRIP' => 'required',     
        ];
    }
}
