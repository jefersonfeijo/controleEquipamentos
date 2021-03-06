@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">

                <ol class="breadcrumb panel-heading">

                    <li class="active">Patrimônio</li>
                    
                </ol>

                <div class="panel-body">

                @if(!Auth::guest())
                
                    <p align="right"><a class="btn btn-success" href="{{route('cadastrarpatrimonios.index')}}">Cadastrar Património</a> </p>

                @endif

                </div>

                <div class="panel panel-default">
                 <table class="table table-bordered">



                       <thead> <!--Titulo da Tabela-->
                            <tr>
                                <th>ID</th>
                                <th>PATRIMÔNIO</th>
                                <th>EQUIPAMENTO</th>
                                <th>MAC ADDRESS</th>
                                <th>CLIENTE</th>
                                <th>LOCAL</th>
                                <th>ATUALIZADO</th>
                                <th>STATUS</th>
                                
                               @if (!Auth::guest())

                                <th>AÇÃO</th>

                                @endif
                            </tr>
                        </thead>
                        
                        <tbody> <!--Conteudo da Tabela-->
                            @foreach($patrimonios as $patrimonio)
                            <tr>
                                <td align="center">{{$patrimonio->id}}</td>
                                <td align="center">{{$patrimonio->patrimonio}}</td>
                                <td align="center">{{$patrimonio->nome}}</td>
                                <td align="center">{{$patrimonio->mac_address}}</td>
                                <td>{{$patrimonio->cliente}}</td>
                                <td>{{$patrimonio->local_instalacao}}</td>
                                <td align="center">{{$patrimonio->registro}}</td>
                                <td align="center">
                                   
                                    @if ($patrimonio->status == "Funcionando") 
                                            
                                             <a class="btn glyphicon glyphicon-ok btn-success"></a>
                                        
                                            @else
                                            
                                             <a class="btn glyphicon glyphicon-remove btn-danger"></a>
                                    @endif
                                
                                </td> 

                                @if (!Auth::guest())

                                <td align="center">
                                    <a class="btn glyphicon glyphicon-cog btn-info"href="{{ route('editarpatrimonios.editar',$patrimonio->id)}}"></a>
                                    <a class="btn glyphicon glyphicon-trash btn-danger" href="javascript:(confirm('Deseja Deletar este Patrimônio?') ? window.location.href=' {{route ('deletarpatrimonios.deletar',$patrimonio->id)}}' : '')"></a>
                                </td>
                                
                                @endif
                            </tr>
                            @endforeach
                          
                        </tbody>
                        
                    </table>

                </div>
                <div align="center">{{$patrimonios}}</div>
            </div>
        </div>
    </div>
</div>
@endsection
