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
                   <form action="{{route('cadastrarpatrimonios.cadastrar')}}" method="post">
                        {{ csrf_field() }}
                        
                        <div class="form-group {{ $errors->has('patrimonio') ? 'has-error' : '' }}">

                            <label for="patrimonio">Nº do Patrimônio:</label>
                            <input type="text" name="patrimonio" class="form-control" placeholder="789805">
                           
                                @if ($errors->has('patrimonio'))
                               
                                    <strong>{{$errors->first('patrimonio')}}</strong>
                               
                                @endif
                        
                        </div>
                        <div class="form-group {{ $errors->has('patrimonio') ? 'has-error' : ''}}">

                            <label for="nome">Patrimônio:</label>
                            <input type="text" name="nome" class="form-control" placeholder="Nome do Equipamento">
                           
                                @if ($errors->has('nome'))
                               
                                    <strong>{{$errors->first('nome')}}</strong>
                               
                               
                                @endif                            

                        </div>                      
                        <div class="form-group {{ $errors->has('mac_address') ? 'has-error' : '' }} ">

                            <label for="mac_address">Mac Address:</label>
                            <input type="text" name="mac_address" class="form-control" placeholder="Nome do Equipamento">
                           
                                @if ($errors->has('mac_address'))

                                    <strong>{{$errors->first('mac_address')}}</strong>

                                @endif

                        </div> 
                        <div class="form-group {{ $errors->has('cliente') ? 'has-error' : '' }}">
                            
                            <label for="cliente">Cliente:</label>
                            <input type="text" name='cliente' class="form-control" placeholder="Harnet Soluções Inteligentes">

                                @if ($errors->has('cliente'))

                                    <strong>{{ $errors->first('cliente')}}</strong>

                                @endif

                        </div>  

                        <div class="form-group {{ $errors->has('local_instalacao') ? 'has-error' : '' }}">
                            
                            <label for="local_instalacao">Local de Instalação:</label>
                            <input type="text" name="local_instalacao" class="form-control" placeholder="Térreo">

                                @if ($errors->has('local_instalacao'))

                                    <strong>{{$errors->first('local_instalacao')}}</strong>

                                @endif

                        </div>  


                        <div class="form-group {{ $errors->has('status') ? 'has-error' : '' }} ">
                            <label for="exampleSelect1">Status do Patrimônio:</label>
                            <select class="form-control" name="status" >
                              <option>Selecione</option>
                              <option>Funcionando</option>
                              <option>Com Defeito</option>
                            </select>
                          </div>

                            @if ($errors->has('status'))

                                <strong>{{ $errors->first('status') }}</strong>

                            @endif

                        <div class="form-group">

                            <label for="observacao">Observação:</label>
                            <input type="text" name="observacao" class="form-control">
                            

                        </div>  

                        <div class="form-group {{ $errors->has('registro') ? 'has-error' : '' }}">

                            <label for="observacao">Data de Registro:</label>
                            <input type="date" name="registro" class="form-control">
                            
                                @if ($errors->has('registro'))

                                    <strong> {{$errors->first('registro')}} </strong>

                                @endif 

                        </div>                      

                        <div>
                            <button class="btn btn-success">Cadastrar</button>
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
