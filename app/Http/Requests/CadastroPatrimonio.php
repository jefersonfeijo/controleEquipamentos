<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CadastroPatrimonio extends Request
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

    public function messages()
    {
        return [

            'nome.required'=>'Preencha um nome',
            'nome.max'=>'Nome do Equipamento deve ter ate 255 caracteres',
            'patrimonio.required'=>'O patrimônio deve conter somente 10 caracteres',
            'cliente.required'=>'Preencha o campo de Cliente',
            'status'=>'Status é obrigatório',
            'registro'=>'Campo obrigatório',
            'mac_address.required'=>'Campo obrigatório',

        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            
            'patrimonio'=>'required|max:10',
            'nome'=>'required|max:255',
            'mac_address'=>'required',
            'cliente'=>'required',
            'local_instalacao'=>'required',
            'status'=>'required',
            'registro'=>'required',
        ];
    }
}
