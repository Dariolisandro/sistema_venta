<?php

namespace Modules\Category\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRquest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>'required|string|max:50',
            'description'=>'nullable|string|max:250',
            //
        ];
    }
    public function messages()
    {
        return[
            'name.required'=>'Este campo es requerido',
            'name.string'=>'El valor no es correcto',
            'name.max'=>'Solo se permite 50 caracteres',
            'description.string'=>'El valor no es correcto',
            'description.max'=>'Solo se permite 255 caracteres',
        ];
    }
    public function authorize()
    {
        return true;
    }
}
