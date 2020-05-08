<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de alunos</title>
    <link rel="stylesheet" href="/css/listaAlunos.css">

</head>
<body>
<header>
    <nav>
        <div>
            <p>Area do adm</p>
        </div>
        <div>
            <ul>
                <li><a href="/home">Home</a></li>
                <li><a href="/adm/home">Voltar</a></li>
            </ul>
            <div class="logout">
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                    @method('POST')
                    <button>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('logout') }}
                        </a>
                    </button>
                </form>
            </div>
        </div>
    </nav>
</header>
<main class="content__primary">
    <div class="container">
        <h1 class="title"> Lista de alunos </h1>
            @if(session('mensagem'))
            <div class="alert alert-success"> {{session('mensagem')}}</div>
            @endif
            <table class="table">
                <thead class="table__head">
                    <tr class="table__head--gap">
                        <th class="table__head--field">Nome</td>
                        </tr>
                    <tr>
                        <th>E-mail</td>
                        </tr>
                        <tr>
                            <th>CPF</th>
                        </tr>
                        <tr>
                            <th>RG</th>
                        </tr>
                        <tr>
                            <th>Nome do responsável</th>
                        </tr>
                        <tr>
                            <th>Contato do responsável</th>
                        </tr>
                        <tr>
                            <th>Ações</th>
                        </tr>
                </thead>
                <tbody>
                    @foreach($lista_users as $user)
                        @foreach($lista_alunos as $aluno)
                            @if($user['tipo'] ==2 && $user['id'] == $aluno['user_id'])
                    <tr>
                    <td>{{$user['name']}}</td>
                    </tr>

                    <tr>
                        <td>{{$user['email']}}</td>
                    </tr>

                    <tr>
                        <td>{{$user['cpf']}}</td>
                    </tr>
                    <tr>
                        <td>{{$user['rg']}}</td>
                    </tr>
                    <tr>
                        <td>{{$aluno['nome_pais']}}</td>
                    </tr>

                    <tr>
                        <td>{{$aluno['contato']}}</td>
                    </tr>
                    <form action="{{ route('excluirAluno',$aluno->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <tr>
                            <td>
                                <button type="submit">Excluir</button>
                            </td>
                        </tr>
                    </form>
                    <tr>
                        <td>
                            <button >
                                <a href="{{route('editaAluno',$aluno->id)}}">EDITAR</a>
                            </button>
                        </td>
                    </tr>
                    @endif
                    @endforeach
                    @endforeach
                </tbody>
            </table>

            <div class="botoes">
                <button>
                   <a href="{{route('cadastro.aluno')}}" value="" class="botao__cadastro"> Cadastrar Aluno</a>
                </button>
            </div>
        </div>

</main>
</body>
</html>

