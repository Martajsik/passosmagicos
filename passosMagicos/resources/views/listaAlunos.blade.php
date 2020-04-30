<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Alunos</title>
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
        <h1 class="title"> Lista de Alunos </h1>
            {{-- @if(session('mensagem'))
            <div class="alert alert-success"> {{session('mensagem')}}</div>
            @endif --}}
            <table class="table">
                <thead>
                    <tr>
                        <th>Nome</td>
                        </tr>
                        <tr>
                            <th>CPF</th>
                        </tr>
                        <tr>
                            <th>Tipo</th>
                        </tr>
                </thead>
                <tbody>
                    @foreach($lista as $aluno)
                        @if($aluno['tipo']==2)
                    <tr>
                    <td>{{$aluno['name']}}</td>
                    </tr>

                    <tr>
                        <td>{{$aluno['cpf']}}</td>
                    </tr>

                    <tr>
                        <td>{{$aluno['tipo']}}</td>
                    </tr>

                    <tr>
                        <td><a href="/adm/aluno/{id}">Ver</a></td>
                        <td><a href="/adm/aluno/{id}/editar">Editar</a></td>
                        <td><a href="/adm/aluno//{id}/excluir">Excluir</a></td>
                    </tr>
                    @endif
                    @endforeach
                   
                </tbody>
            </table>

            <div class="botoes">
                <button type="submit"><a href="/adm/aluno/cadastro" value="" class="botao__cadastro"></a>Cadastrar Aluno</button>

            </div>
        </div>

</main>


</body>
</html>
