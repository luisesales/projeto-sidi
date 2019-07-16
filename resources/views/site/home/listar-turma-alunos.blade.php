@extends('adminlte::page')

@section('title',
    $nomeDisciplina.' - Descrição'
)

@section('content_header')
    <h1>Descrição da turma</h1>
    <ol class="breadcrumb">
            <li><a href="{{route('home')}}">Página Principal</a></li>
            <li><a href="{{route('turmas/listar')}}">Turmas</a></li>
            <li><a href="">Descrição</a></li>
    </ol>
@stop

@section('content') 
        <div class="ui container">
            <div class="ui segment">
                <h2 class="ui right floated header">
                    @forelse ($classroom as $item)
                        {{$item->disciplina}}
                        -
                        {{$item->codigo}}
                    @empty
                        
                    @endforelse
                </h2>
                    <div class="ui clearing divider"></div>
                <p>
                    <div class="ui grid">
                        <div class="four wide column">
                            <strong class="ui left floated">
                                @forelse ($professor as $item)
                                    {{$item->name}}
                                @empty

                                @endforelse
                            </strong> - Professor Principal
                        </div>
                        <div class="four wide column">

                        </div>

                        <div class="eight wide column">
                            <a class="ui inverted green button text-black right floated" href="{{ route('turma/avaliacoes', ['id'=>$id]) }}">Atividades da turma</a>
                            <a class="ui inverted green button text-black right floated" href="{{ route('registrar', ['id'=>$id]) }}">Adicionar aluno</a>
                        </div>
                    </div>


                    <div class="ui clearing divider mt-4"></div>
                </p>

                
            </div>

        <table class="ui celled striped table">
            <thead>
            <tr>
                <th>Id</th>
                <th class="collapsing">Nome</th>
                <th>Email</th>
                <th>Período</th>
                <th>Disciplinas cursando</th>
            </tr></thead>
            <tbody>
            @if(isset($usuarios))
                @foreach($usuarios as $usuario)
                <tr>
                    <td>
                        {{$usuario->id}}
                    </td>
                    <td>
                        {{$usuario->name}}
                    </td>
                    <td>
                        {{$usuario->email}}
                    </td>
                    <td>
                        {{$usuario->periodo}}
                    </td>
                    <td>
                        {{$usuario->quantidade_disciplinas_cursando}}
                    </td>
                </tr>
            @endforeach
            @else
                
            @endif
            </tbody>
        </table>
    </div>
</div>
@stop
