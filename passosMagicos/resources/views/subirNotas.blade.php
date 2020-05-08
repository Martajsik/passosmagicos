<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Subir Notas </title>
    <link rel="stylesheet" href="/css/editaAlunos.css">
</head>
<body>

    <header class="topo">
        <nav>
            <h1 class="titulo">Subir Notas</h1>
            <div id="sideNav">
                <ul>
                    <li>
                        <a href="/home">Home</a>
                    </li>
                    <li>
                        <a href="/professor/home">Voltar</a>
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

<main class="primary__content">
     <section class="primary__content--changes">
         <form class="form" action="" method="post" >
             @csrf

                 <label class ="form__label"for="name">Nome Aluno:</label>

                 <input class="form__space" type="text" name="name" id="name" >


                 <label class ="form__label"for="periodo">Periodo:</label>

                 <input class="form__space" type="periodo" name="periodo" id="periodo">

                 <label class ="form__label"for="nota">Nota:</label>

                 <input class="form__space" type="text" name="nota" id="nota">

                 <button class="form__button--submit" type="submit">Enviar Nota</button>
             </form>
     </section>

</main>

<script   src="https://code.jquery.com/jquery-2.2.4.min.js"   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
<script src="/js/jquery.mask.js"></script>
<script src="/js/mascara.js"></script>

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
