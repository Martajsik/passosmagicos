
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Administrador</title>
    <link rel="stylesheet" href="/css/homeAdm.css">
</head>
<body>
<header class="content">
    <div class="content__saudacao">
        <p class="content__text">Bem vindo</p>
    </div>
    <div class="content__list">
        <ul class="content__list--itens">
            <li class="content__list--item">
                <a class="content__list--link" href="/home">Home</a>
            </li>
       </ul>
        <form id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
            @method('POST')
            <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
            {{ __('logout') }}
            </a>
        </form>
    </div>
</header>
<main class="primary__content">
    <div class="card__primary--aluno">
        <div class="card__primary--header">
            <h2 class="card__text">Alunos</h2>
        </div>
        <div class="card__primary--body">
            <button class="card__button">
                <a href="{{route('listaAlunos')}}" class="card__button--link">Visualizar</a>
            </button>
        </div>
    </div>

    <div class="card__primary--professor">
        <div class="card__primary--header">
            <h2 class="card__text">Professores</h2>
        </div>
        <div class="card__primary--body">
            <button class="card__button">
            <a href="{{route('listaProf')}}" class="card__button--link">Visualizar</a>
            </button>
        </div>
    </div>



</main>
</body>
</html>
