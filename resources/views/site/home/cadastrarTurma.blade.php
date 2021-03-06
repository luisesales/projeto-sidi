@extends('adminlte::page')

@section('title', 'Sidi - Registrar turma')

@section('content_header')
    <h1>Cadastro de turmas</h1>
    <div class="ui small breadcrumb">
        <a class="section" href="{{route('home')}}">Página inicial</a>
        <i class="right chevron icon divider"></i>
        <a class="section">Cadastro de turmas</a>
    </div>
@stop

@section('content')
    <div class="ui container">

        <div class="ui internally celled grid">

            <div class="row">

                    <div class="three wide column">
                            
                    </div>

                    <div class="ten wide column">
                    <div class="d-block mb-4">
                    <h2 class="ui header ">  <a href="{{route('home')}}">
                        <i class="arrow left icon black"></i>
                    </a>
                    {{$titulo_page ?? 'Registrar nova turma'}}
                    </h2>
                    </div>
                        @if(isset($success))
                            <div class="ui positive message">
                                <i class="close icon"></i>
                                <div class="header"> {{$success}}</div>
                            </div>
                        @endif
                        @if(isset($error))
                            <div class="ui negative message">
                                <i class="close icon"></i>
                                <div class="header"> {{$error}}</div>
                            </div>
                        @endif
                        <form class="" action="{{ route('turmas/registrar') }}" method="post">
                            {!! csrf_field() !!}
                            
                            <div class="ui input mb-2 has-feedback d-block ">
                                <input type="text" name="disciplina" class="form-control" value="{{old('disciplina')}}"
                                    placeholder="Digite o nome da disciplina">
                                @error('disciplina')
                                    <div class="ui red message">{{ $message }}</div>
                                @enderror
                            </div>

                            <div>



                                <label id="" title="Clique para mostrar" class="clicarMostrar click h3" for="">Listagem de usuários para adicionar </label>
                                <i class="sort icon clicarMostrar"></i>

                                    <div class="d-none inline field listagem-usuarios" id="">
                                        <div class="">
                                            @foreach ($usersthis as $users)
                                            <input type="checkbox" tabindex="0" class="" name="user[]" value="{{$users->id}}" >
                                            <label for="">{{$users->name}}</label>
                                                <br>
                                            @endforeach
                                        </div>
                                    </div>

                            </div>

                            <button type="submit" class="ui inverted green button btn-lg btn-block">
                            Cadastrar
                            </button>
                            
                        </form>
                    </div>
                    <!--fim do formulário centralizado-->
                    <div class="three wide column">
                            
                    </div>
                </div>
                <!--fim da row-->
            </div>
            

    </div>
@stop
