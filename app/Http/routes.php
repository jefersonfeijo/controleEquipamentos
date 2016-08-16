<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    
	//array add()

	//$array = ['nome' => 'Jeferson', 'idade' => '29'];
	//$array = array_add($array, 'email','jefersonfeijo@hotmail.com');
	//$array = array_add($array, 'sobrenome','Feijó');
	//dd($array);

	//array collapse() Quebra o array

	$array = [['banana', 'limão'],['vermelho','azul']];
	$array = array_collapse($array);
	//dd($array);


	//array divide()

	list($key,$value) = array_divide(['nome' => 'Jeferson', 'idade' => '29']);
	//dd($key,$value);

	//array_except() // REMOVER 

	$array = ['nome' => 'Jeferson', 'idade' => '29'];
	$array = array_except($array,['idade']);
	

	//BASE_PATH() //DIRETORIO RAIZ DO PROJETO

	$path = base_path('Config');
	
	//database_path()

	$path = database_path( );
	//dd($path);

	//PUBLIC_PATH();
	$public = public_path();
	//dd($public);

	//storage_path()

	$storage = storage_path();
	//dd($storage);

	//comel_case()
	$texto = "jeferson feijo de oliveira";
	//dd(camel_case($texto));

	//snake_case()
	$texto = "Jferson Feijó De Oliveira";
	//dd(snake_case($texto));
	
	//str_limit()
	$texto = "jeferson feijo de oliveira";
	//dd(str_limit($texto,5));
	//dd($texto);






    return view('welcome');
});




Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/patrimonios', ['uses'=>'Patrimonio@index', 'as' =>'listapatrimonios.index']);

//ROUTE PARA CHAMAR PAGINA DE CADASTRO DE PATRIMONIO
Route::get('/patrimonios/cadastrar', ['uses'=>'Patrimonio@cadastrar', 'as' =>'cadastrarpatrimonios.index']);

//ROUTE PARA CADASTRAR NOVO PATRIMONIO
Route::post('/patrimonios/salvar',['uses'=>'Patrimonio@salvar', 'as' =>'cadastrarpatrimonios.cadastrar']);

//ROUTE PARA EDITAR O PATRIMONIO
Route::get('patrimonio/editar/{id}',['uses'=>'Patrimonio@editar', 'as' =>'editarpatrimonios.editar']);

//ROUTE PARA SALVAR DADOS EDITADO DO PATRIMONIO
Route::put('patrimonio/atualizar/{id}', ['uses'=>'Patrimonio@atualizar', 'as' =>'atualizarpatrimonios.atualizar']);

//ROUTE PARA SALVAR DADOS EDITADO DO PATRIMONIO
Route::get('patrimonio/deletar/{id}', ['uses'=>'Patrimonio@deletar', 'as' =>'deletarpatrimonios.deletar']);

