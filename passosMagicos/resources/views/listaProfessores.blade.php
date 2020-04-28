<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Professores</title>
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
        <h1 class="title"> Lista de Professores </h1>
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
                    @foreach($lista as $professor)
                        @if($professor['tipo']==1)
                    <tr>
                    <td>{{$professor['name']}}</td>
                    </tr>

                    <tr>
                        <td>{{$professor['cpf']}}</td>
                    </tr>

                    <tr>
                        <td>{{$professor['tipo']}}</td>
                    </tr>
                    <form action="" method="post" >
                        @csrf
                        {!! method_field('delete') !!}
                        <tr>
                        <td><a href="">Excluir</a></td>
                        </tr>
                    </form>
                    <tr>
                        <td><a href="/adm/professor/{id}">Ver</a></td>
                        <td><a href="/adm/professor/{id}/editar">Editar</a></td>

                    </tr>
                    @endif
                    @endforeach
                </tbody>
            </table>

            <div class="botoes">
                <button type="submit"><a href="/adm/aluno/cadastro" value="" class="botao__cadastro"></a>Cadastrar Professor</button>

            </div>
        </div>

</main>


</body>
</html>

