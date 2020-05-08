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
{{-- <header>
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
            @if(session('mensagem'))
            <div class="alert alert-success"> {{session('mensagem')}}</div>
            @endif
            <table class="table">
                <thead>
                    <tr>
                        <th>Nome</td>
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
                </thead>
                <tbody>
                    @foreach($lista_total as $professor)
                        @if($professor['tipo'] == 1)
                    <tr>
                    <td>{{$professor['name']}}</td>
                    </tr>

                    <tr>
                        <td>{{$professor['email']}}</td>
                    </tr>

                    <tr>
                        <td>{{$professor['cpf']}}</td>
                    </tr>

                    <tr>
                        <td>{{$professor['rg']}}</td>
                    </tr>

                     <form action="{{ route('excluirProf',$professor->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <tr>
                        <td>
                            <button type="submit">Excluir</button>
                        </td>
                    </tr>
                </form>
                     {{-- <form action="{{ route('edita',$professor->id) }}" method="post">
                    @csrf
                    <tr>
                        <td>
                            <button type="submit">Editar</button>
                        </td>
                    </tr>

                </form> --}}
                        {{-- <td>
                        <button >
                            <a href="{{route('edita',$professor->id)}}">EDITAR</a>
                        </button>
                        </td>
                    @endif
                @endforeach
                </tbody>
            </table>
            <div class="botoes">

                   <a href="{{route('cadastro')}}" value="" class="botao__cadastro"> Cadastrar Professor</a>


            </div>
        </div> --}}

{{-- </main> --}}

    <header class="topo">
        <nav>
            <h1 class="titulo">Area do administrador</h1>
            <div id="sideNav">
                <ul>
                    <li>
                        <a href="/home">Home</a>
                    </li>
                    <li>
                        <a href="/adm/home">Voltar</a>
                    </li>
                     <li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                            @method('POST')
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('logout') }}
                                    </a>
                        </form>
                    </li>
                </ul>
            </div>
        </nav>
        <img src="/images/menu.png" id="menuBtn">

    </header>

    <main class="content__primary">
        <div class="container">
            <h1 class="title"> Lista de Professores </h1>
                @if(session('mensagem'))
                <div class="alert alert-success"> {{session('mensagem')}}</div>
                @endif
            <table class="table">
                <thead class="table__head">
                    <tr class="table__head--gap">
                        <th class="table__head--field">Nome</td>
                        </tr>
                    <tr class="table__head--gap">
                        <th class="table__head--field">E-mail</td>
                        </tr>
                        <tr class="table__head--gap">
                            <th class="table__head--field">CPF</th>
                        </tr>
                        <tr class="table__head--gap">
                            <th class="table__head--field">RG</th>
                        <tr class="table__head--gap">
                            <th class="table__head--field">Ações</th>
                        </tr>
                </thead>
                <tbody class="table__body">
                    @foreach($lista_total as $professor)
                        @if($professor['tipo'] == 1)
                    <tr class="table__body--gap">
                    <td class="table__body--field">{{$professor['name']}}</td>
                    </tr>

                    <tr class="table__body--gap">
                        <td class="table__body--field">{{$professor['email']}}</td>
                    </tr>

                    <tr class="table__body--gapC">
                        <td class="table__body--field">{{$professor['cpf']}}</td>
                    </tr>
                    <tr class="table__body--gap">
                        <td class="table__body--field">{{$professor['rg']}}</td>
                    </tr>
                    <tr class="table__body--gapB">
                    <form action="{{ route('excluirProf',$professor->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <tr class="table__body--gapB">
                            <td class="table__body--field">
                                <button class="btn exc" type="submit">Excluir</button>
                            </td>
                        </tr>
                    </form>
                    </tr>
                    <tr class="table__body--gapB">
                        <td class="table__body--field">
                            <button class="btn">
                                <a href="{{route('edita',$professor->id)}}">Editar</a>
                            </button>
                        </td>
                    </tr>
                    @endif
                @endforeach

                </tbody>
            </table>
            <div class="botoes">
                <button class="btnC">
                <a href="{{route('cadastro')}}" value="" class="botao__cadastro"> Cadastrar Professor</a>
                </button>
            </div>
            </div>

    </main>

    <script>
        var menubtn = document.getElementById("menuBtn");
        var sideNav = document.getElementById("sideNav");

        sideNav.style.right = "-250px";
        menuBtn.onclick = function () {
            if (sideNav.style.right == "-250px") {
                sideNav.style.right = "0";
            } else {
                sideNav.style.right = "-250px";
            }
        }
    </script>
</body>
</html>

