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
                <li><a href="/login">Sair</a></li>
            </ul>
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
                    @foreach($lista_total as $aluno_total)
                        @foreach($lista as $aluno)
                            @if($aluno_total['tipo'] ==2 && $aluno_total['id'] == $aluno['user_id'])
                    <tr>
                    <td>{{$aluno_total['name']}}</td>
                    </tr>

                    <tr>
                        <td>{{$aluno_total['email']}}</td>
                    </tr>

                    <tr>
                        <td>{{$aluno_total['cpf']}}</td>
                    </tr>

                    <tr>
                        <td>{{$aluno_total['rg']}}</td>
                    </tr>
                    {{-- @if($aluno_total['tipo']==2) --}}


                    <tr>
                        <td>{{$aluno['nome_pais']}}</td>
                    </tr>

                    <tr>
                        <td>{{$aluno['contato']}}</td>
                    </tr>

                    {{-- @endif --}}

                     <form action="{{ route('excluirAluno',$aluno->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <tr>
                        <td>
                            <button type="submit">Excluir</button>
                        </td>
                    </tr>
                </form>
                     <form action="{{ route('editaAluno',$aluno->id) }}" method="post">
                    @csrf
                    <tr>
                        <td>
                            <button type="submit">Editar</button>
                        </td>
                    </tr>

                </form>
                    @endif
                    @endforeach
                    @endforeach
                </tbody>
            </table>
            <div class="botoes">

                   <a href="{{route('cadastro.aluno')}}" value="" class="botao__cadastro"> Cadastrar Aluno</a>


            </div>
        </div>

</main>
</body>
</html>

