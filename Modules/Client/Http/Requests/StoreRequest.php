<?php

namespace Modules\Client\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [

            'name'=>'string|required|max:255',     
            'phone'=>'string|required|unique:clients|max:8',      
            'email'=>'string|required|unique:clients|max:255|email:rfc,dns',     
            'city'=>'string|required|unique|max9',   
            'country'=>'string|required|unique:clients|max:9', 
            'rut'=>'string|requered|unique:clients|max:11',
            'company'=>'string|requered|unique:clients|max:11',   
            'turn'=>'string|requered|unique:clients|max:11',    
            //
        ];
    }
    public function messages()
    {
        return[
            'name.required'=>'Este campo es requerido',
            'name.string'=>'El valor no es correcto',
            'name.max'=>'Solo se permite 50 caracteres',

            'phone.string'=>'Este campo es requerido',
            'phone.required'=>'Este campo es requerido',
            'phone.unique'=>'El valor no es correcto',
            'phone.max'=>'El valor no es correcto',

            'email.string'=>'Este campo es requerido',
            'email.required'=>'El valor no es correcto',
            'email.unique'=>'Solo se permite 50 caracteres',
            'email.max'=>'El valor no es correcto',
            'email.email'=>'Solo se permite 50 caracteres',

            'city.string'=>'Este campo es requerido',
            'city.required'=>'El valor no es correcto',
            'city.unique'=>'Solo se permite 50 caracteres',
            'city.max'=>'Este campo es requerid',
            
            'country.string'=>'Este campo es requerido',
            'country.required'=>'El valor no es correcto',
            'country.unique'=>'Solo se permite 50 caracteres',
            'country.max'=>'Este campo es requerido',

            'rut.string'=>'El valor no es correcto',
            'rut.required'=>'Solo se permite 50 caracteres',
            'rut.unique'=>'Este campo es requerido',
            'rut.max'=>'El valor no es correcto',

            'company.string'=>'Solo se permite 50 caracteres',
            'company.riquered'=>'Este campo es requerido',
            'company.unique'=>'El valor no es correcto',
            'company.max'=>'Solo se permite 50 caracteres',

            'turn.string'=>'Este campo es requerido',
            'turn.required'=>'El valor no es correcto',
            'turn.unique'=>'Solo se permite 50 caracteres',
            'turn.max'=>'Este campo es requerido',

        ];
    }
    public function authorize()
    {
        return true;
    }
}
