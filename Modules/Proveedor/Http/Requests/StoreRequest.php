<?php

namespace Modules\Proveedor\Http\Requests;

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
            'name'=>'required|string|max:255', 
            'email'=>'required|string|max:200|unique:priveders' ,
            'rut'=>'required|string|max:11|min:11|unique:priveders' ,
            'address'=>'nul|string|max:50', 
            'phone'=>'required|string|max:9|min:9',
            'giro'=>'required|string|max:50',
            'rasonSocial'=> 'required|string|max:50',
            //
            //
        ]; 
    }
    public function messages()
    {
        return[
        
             'name.required'=>'Este campo es requerido',
             'name.string'=>'El valor no es correcto',
             'name.max'=>'Solo se permite 255 caracteres',

             'email.required'=>'Este campo es requerido',
             'email.string'=>'El valor no es correcto',
             'email.max'=>'Solo se permite 11 caracteres',
             'email.min'=>'Solo se permite 11 caracteres',
             'email.unique'=>'Este campo es requerido',

             'rut.required'=>'Este campo es requerido',
             'rut.string'=>'El valor no es correcto',
             'rut.max'=>'Solo se permite 50 caracteres',
             'rut.min'=>'Este campo es requerido',
             'rut.unique'=>'El valor no es correcto',

             'address.required'=>'Este campo es requerido',
             'address.string'=>'El valor no es correcto',
             'address.max'=>'Solo se permite 50 caracteres',

             'phone.required'=>'Este campo es requerido',
             'phone.string'=>'El valor no es correcto',
             'phone.max'=>'Solo se permite 50 caracteres',
             'phone.min'=>'Solo se permite 11 caracteres',

             'giro.required'=>'Este campo es requerido',
             'giro.string'=>'El valor no es correcto',
             'giro.max'=>'Solo se permite 50 caracteres',

             'rasonSocial.required'=>'Este campo es requerido',
             'rasonSocial.string'=>'El valor no es correcto',
             'rasonSocial.max'=>'Solo se permite 50 caracteres',





    ];
 }

    public function authorize()
    {
        return true;
    }
}
