@extends('adminlte::page')

@section('title', 'Sistema Avalitivo de Aprendizagem')

@section('content_header')
    <h1>Listagem de usuários</h1>
    <ol class="breadcrumb">
            <li><a href="{{route('home')}}">Página Principal</a></li>
            <li><a href="{{route('listarUser')}}">Usuários</a></li>
            
    </ol>
    
@stop

@section('content')

    @if(isset($success))
        <div class="ui success message">
            <i class="close icon"></i>
            <div class="header">{{$success}} </div>
        </div>
    @endif
       <?php
           $usu = '';
       ?>



        <table class="ui celled striped table">
            <thead>
            <tr>
                <th>
                    Id
                </th>
                <th class="collapsing">
                    Nome do aluno
                </th>
                <th>
                    Email
                </th>
                <th>
                    Papel
                </th>
                <th>
                    Período
                </th>
                <th>
                    Disciplina cursando
                </th>
                <th>
                    Ações
                </th>
            </tr></thead>
            <tbody>
            @foreach($usuarios as $dado)

                @if($dado->criador_id == auth()->user()->id)
                    <tr>
                        <td>{{$dado->id}}</td>
                        <td>{{$dado->name}}</td>

                        <td>{{$dado->email}}</td>
                        <td>{{$dado->nome}}</td>

                        <td>{{$dado->periodo}}</td>
                        <td>{{$dado->quantidade_disciplinas_cursando}}</td>
                        <td>
                            <button data-id="{{$dado->id}}" data-name="{{$dado->name}}" class="excluir ui inverted red button">
                                <i class="trash alternate outline icon"></i>
                            </button>
                            
                            <a href="{{route('editar-usuario',  [$dado->id])}}"><i class="edit icon"></i></a>
                        </td>
                    </tr>
                @endif
            @endforeach
            </tbody>
        </table>
        @if(isset($dataForm))
            {{$usuarios->appends($dataForm)->links()}}
        @else
            {{$usuarios->links()}}
        @endif

        <div class="ui basic modal" style="margin-top: 150px !important;">
            <div class="ui icon header">
                <i class="archive icon"></i>
                Deseja mesmo excluir o usuário <strong id="nomeUser"> </strong>?

            </div>

            <div class="actions">

                <form action="">
                    <input class="id" type="hidden"  value="" id="input-target">
                    <div class="ui red basic cancel inverted button">
                        <i class="remove icon"></i>
                        No
                    </div>

                        <button class="ui green ok inverted button" type="  submit">
                            <i class="checkmark icon">

                            </i>
                            Yes</button>


                </form>

            </div>
        </div>








@stop
