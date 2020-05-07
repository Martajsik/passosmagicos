    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Passos magicos</title>
        <link rel="stylesheet" href="css/home.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
        

    </head>

    <body>
         <header>
        <a class="cta" href="{{route('login')}}"><button>Entrar</button></a>
        <a href="#">
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
            @method('POST')
            <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
            {{ __('logout') }}
            </a>
        </form>
        </a>

        </header>
        <section id="header">
            <div class="container">
                <img src="/passosMagicos/public/images/logon.png" class="logo" alt="">
                <div class="header-text">
                    <h1> Seja bem vindo a
                        plataforma de ensino Passos magicos</h1>
                    <span class="square"></span>
                    <p>A passos magicos e uma plataforma de ensino não governamental
                        e sem fins lucrativos que visa o aprendizado de forma fluida
                        trazendo assim todo poder da tecnologia para dentro da sala
                        e assim formando grandes profissionais e grandes pessoas

                    </p>
                    <button class="common-btn">Saiba mais..</button>
                    <div class="line">
                        <span class="line1"></span><br>
                        <span class="line2"></span><br>
                        <span class="line3"></span>
                    </div>
                </div>
            </div>
            <div class="feed">
                <div class="feed--card--container">
                    <div class="card-1">

                    </div>
                </div>
            </div>


        </section>

        <nav id="sideNav">
            <ul>
                <li>
                    <a href="">Home</a>
                </li>
                <li>
                    <a href="#quemsomos">Quem somos</a>
                </li>
                <li>
                    <a href="{{route('login')}}">login</a>
                </li>
                <li>
                    <a href="#footer">contatos</a>
                </li>
                <!-- <li>
                <a href="">home</a>
            </li> -->
            </ul>
        </nav>
        <img src="/passosMagicos/public/images/menu.png" id="menuBtn">

        <section id="about">
            <div class="about-left-col">
                <img src="/passosMagicos/public/images/about.png" alt="">

            </div>
            <div class="about-right-col">
                <div class="about-text">
                    <h1 id="quemsomos">Quem somos</h1>
                    <span class="square"></span>

                    <p>Somos um grupo de amigos, que se uniu para transformar a vida de crianças e adolescentes
                        de baixa renda e alta vulnerabilidade social, através da educação.
                        Nossa maior preocupação é com o futuro e formação desses jovens e crianças:
                        com estudo de qualidade, as crianças são estimuladas a se desenvolverem e
                        interagirem em um ambiente desafiador. Oferecemos ferramentas para despertar nas crianças
                        o interesse pelo estudo e busquem/sonhem com um futuro melhor.
                    </p><br><br>
                    <div class="line">
                        <span class="line1"></span><br>
                        <span class="line2"></span><br>
                        <span class="line3"></span>
                    </div>
                    <h2>Juntos somos mais fortes
                    </h2>
                    <h3>Frase do ano</h3>
                </div>
            </div>
        </section>
        <footer id="footer">
            <div class="middle">
                <a class="bola" href="#">
                    <i class="fab fa-facebook-f"></i>
                </a>

                <a class="bola" href="#">
                    <i class="fab fa-twitter"></i>
                </a>

                <a class="bola" href="#">
                    <i class="fab fa-google"></i>
                </a>

                <a class="bola" href="#">
                    <i class="fab fa-instagram"></i>
                </a>

                <a class="bola" href="#">
                    <i class="fab fa-youtube"></i>
                </a>
            </div>
        </footer>

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
