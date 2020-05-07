<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Editar Aluno </title>
    <link rel="stylesheet" href="/css/editaAlunos.css">
</head>
<body>
    <header class="header__content">
    <nav class="nav">

        <div class="nav__infos">
        <h1 class="nav__infos--title">Editar Aluno {{$usuario->name}}</h1>
        </div>

        <div class="nav__list">
            <ul class="nav__list--items">
                <li class="nav__list--item"><a class="nav__list--link" href="/home">Home</a></li>
                <li class="nav__list--item"><a class="nav__list--link" href="/adm/aluno/lista">Voltar</a></li>
                <li class="nav__list--item"><a class="nav__list--link" href="/login">Sair</a></li>
            </ul>
        </div>
    </nav>
</header>

<main class="primary__content">
     <section class="primary__content--changes">
         <form class="form" action="" method="post" >
             @csrf

                 <label class ="form__label"for="name">Nome Completo:</label>

                 <input class="form__space" type="text" name="name" id="name" value=" {{$usuario->name}}">


                 <label class ="form__label"for="email">E-mail:</label>

                 <input class="form__space" type="email" name="email" id="email" value=" {{$usuario->email}}">
                 {{-- {{$$editara->email}} --}}

                 <label class ="form__label"for="email-verify">Confirmar e-mail:</label>

                 <input class="form__space" type="email" name="email-verify" id="email-verify" value="">

                 <label class ="form__label"for="cpf">CPF:</label>

                 <input class="form__space cpf" type="text" name="cpf" id="cpf" value=" {{$usuario->cpf}}">
                 {{-- {{$$editara->cpf}} --}}

                 <label class ="form__label"for="rg">RG:</label>

                 <input class="form__space rg" type="text" name="rg" id="rg" value=" {{$usuario->rg}}">
                 {{-- {{$$editara->rg}} --}}

                 <label class ="form__label"for="pais">Nome dos pais:</label>

                 <input class="form__space" type="text" name="pais" id="pais" value="{{$editara->nome_pais}}">

                 <button class="form__button--submit" type="submit">Editar</button>
             </form>
     </section>

</main>

<script   src="https://code.jquery.com/jquery-2.2.4.min.js"   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
<script src="/js/jquery.mask.js"></script>
<script src="/js/mascara.js"></script>
</body>
</html>
