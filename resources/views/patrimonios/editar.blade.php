@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">

                <ol class="breadcrumb panel-heading">
                    <li class="active"><a href="{{route('listapatrimonios.index')}}">Patrimônios</a></li>
                    <li class="active">Cadastrar</li>
                </ol>

                <div class="panel-body">
                
                    <!--FORMULÁRIO DE CADASTRO-->
                   <form action="{{route('atualizarpatrimonios.atualizar', $patrimonios->id)}}" method="post">
                        {{ csrf_field() }}
                        
                        
                        <input type="hidden" name="_method" value="put"> <!--METODO PUT PARA EDITAR O FORMULÁRIO-->

                        <div class="form-group {{ $errors->has('patrimonios') ? 'has-error' : '' }}  ">
                        
                            <label for="nome">Nº do Patrimônio:</label>
                            <input type="text" name="patrimonio" class="form-control" placeholder="789805" value="{{$patrimonios->patrimonio}}">
                            
                        </div>
                        <div class="form-group {{ $errors->has('nome') ? 'has-error' : '' }}">

                            <label for="email">Patrimônio:</label>
                            <input type="text" name="nome" class="form-control" placeholder="Nome do Equipamento" value="{{$patrimonios->nome}}">
                            
                        </div>                      
                        <div class="form-group {{ $errors->has('mac_address') ? 'has-error' : '' }}">

                            <label for="mac_address">Mac Address:</label>
                            <input type="text" name="mac_address" class="form-control" placeholder="D2:11:0B:F0:67:6B" value="{{$patrimonios->mac_address}}">

                        </div> 
                        <div class="form-group {{ $errors->has('cliente') ? 'has-error' : '' }}">
                            
                            <label for="cliente">Cliente:</label>
                            <input type="text" name="cliente" class="form-control" placeholder="Harnet Soluções Inteligentes"value="{{$patrimonios->cliente}}" >

                        </div>  

                        <div class="form-group {{ $errors->has('local_instalacao') ? 'has-error' : '' }}">
                            
                            <label for="local_instalacao">Local de Instalação:</label>
                            <input type="text" name="local_instalacao" class="form-control" placeholder="Térreo" value="{{$patrimonios->local_instalacao}}">
                        </div>  


                        <div class="form-group {{ $errors->has('stauts') ? 'has-error' : ''}} ">
                            <label for="exampleSelect1">Status do Patrimônio:</label>
                            <select class="form-control" name="status" >
                              <option>{{$patrimonios->status}}</option>
                              <option>Funcionando</option>
                              <option>Com Defeito</option>
                            </select>
                          </div>

                        <div class="form-group">

                            <label for="observacao">Observação:</label>
                            <input type="text" name="observacao" class="form-control" value="{{$patrimonios->observacao}}">
                            

                        </div>  

                        <div class="form-group {{ $errors->has('registro') ? 'has-error' : '' }}" >

                            <label for="observacao">Data de Registro:</label>
                            <input type="date" name="registro" class="form-control" value="{{$patrimonios->registro}}">
                            

                        </div>                      

                        <div>
                            <button class="btn btn-success">Editar</button>
                            <a class="btn btn-info" href="{{route('listapatrimonios.index')}}">Cancelar</a>
                        </div>
                   </form>
                   <!--FIM FORMULÁRIO DE CADASTRO-->



                </div>

                
                
            </div>
        </div>
    </div>
</div>
@endsection
