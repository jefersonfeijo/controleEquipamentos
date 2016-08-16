<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class Patrimonio extends Controller
{
    
    public function home()
    {
        $patrimonios = \App\Patrimo::paginate(10);
        return view('patrimonios.home', compact('patrimonios'));
    }



    public function index()
    {
    	$patrimonios = \App\Patrimo::paginate(10);

    	return view('patrimonios.lista', compact('patrimonios'));
    }

    public function cadastrar()
    {
    	return view('patrimonios.cadastrar');
    }

    public function salvar(\App\Http\Requests\CadastroPatrimonio $request)
    {
    	\App\Patrimo::create($request->all());

    	\Session::flash('flash_menssagem',[
    		'msg'=>"PATRIMÔNIO CADASTRADO COM SUCESSO!",
    		'class'=>"alert-success"
    		]);

    	return redirect()->route('cadastrarpatrimonios.index');

    }

    public function editar($id)
    {

    	$patrimonios = \App\Patrimo::find($id);

    	if(!$patrimonios){

    		\Session::flash('flash_menssagem_erroPatrimono_naoEncontrado',[

    			'msg'=>"Patrimônio Não Encontrado! Deseja cadastrar novo patrimônio?",
    			'class'=>"alert-danger"
    			]);

    		return redirect()->route('cadastrarpatrimonios.index');
    	}

    	return view('patrimonios.editar',compact('patrimonios'));

    }

    public function atualizar(Request $request,$id)
    {
        \App\Patrimo::find($id)->update($request->all()); //BUSCANDO CLIENTE E EXIBE OS DADOS DO BD
        
            \Session::flash('flash_menssagem',[
                'msg'=>"Cliente atualizado com sucesso",
                'class'=>"alert-success"
            ]);

            return redirect()->route('listapatrimonios.index');
        
    }

    public function deletar ($id)
    {

        $patrimonio = \App\Patrimo::find($id);
        $patrimonio->delete();

        \Session::flash('flash_messagem',[
            'msg'=>"Patrimônio Deletado com Sucesso!",
            'class'=>"alert-sucess"
            ]);

        return redirect()->route('listapatrimonios.index');



    }


}
