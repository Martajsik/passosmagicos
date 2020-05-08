<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Professor</title>
    <link rel="stylesheet" href="/css/dash_prof.css">
</head>

<body>

    <header class="topo">
        <nav>
            <h1 class="titulo">Bem vindo, Professor</h1>
            <div id="sideNav">
                <ul>
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
    <main>
        <section id="about">
        <div class="about-left-col">
            <img src="/images/contact.png" alt="">
        </div>

        <div class="about-right-col">
            <div class="about-text">
                <h1 id="quemsomos">Ola Professor</h1>
                <span class="square"></span>

                <p>Seja bem vindo a pagina do professor, aqui voce consegue realizar diversas atividades
                    como verificar as notas e comentarios de cada materia e tambem acompanhar de perto
                    todos os trabalhos e atividades que vai acontecer.
                    Somos um grupo de amigos, que se uniu para transformar a vida de crianças e adolescentes
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
        <div class="container">
            <div class="containerBtns">
                <aside class="conjunto_turmas">
                    <button class="notas">
                         <a href="{{route('professor.notas')}}">Notas</a>
                    </button>
                </aside>
                <!-- Inicio caixa de unidades -->
                <aside class="unidades">
                    <select name="und" id="und">
                        <option selected disabled> Selecione as unidades</option>
                        <option value="Centro">Centro</option>
                         <option value="Felipinho">Felipinho</option>
                        <option value="Granjinha">Granjinha</option>
                    </select>
                </aside>

            </div>
            <!-- Inicio calendario -->
            {{-- <section class="calendario">
                <div class="date">
                    <div class="day">D</div>
                    <div class="day">S</div>
                    <div class="day">T</div>
                    <div class="day">Q</div>
                    <div class="day">Q</div>
                    <div class="day">S</div>
                    <div class="day">S</div>
                    <div class="number">26</div>
                    <div class="number ">27</div>
                    <div class="number">28</div>
                    <div class="number">29</div>
                    <div class="number">30</div>
                    <div class="number">31</div>
                    <div class="number">1</div>
                    <div class="number">2</div>
                    <div class="number ">3</div>
                    <div class="number">4</div>
                    <div class="number">5</div>
                    <div class="number">6</div>
                    <div class="number active">7</div>
                    <div class="number">8</div>
                    <div class="number">9</div>
                    <div class="number">10</div>
                    <div class="number">11</div>
                    <div class="number">12</div>
                    <div class="number">13</div>
                    <div class="number">14</div>
                    <div class="number">15</div>
                    <div class="number">16</div>
                    <div class="number">17</div>
                    <div class="number">18</div>
                    <div class="number">19</div>
                    <div class="number">20</div>
                    <div class="number">21</div>
                    <div class="number">22</div>
                    <div class="number">23</div>
                    <div class="number">24</div>
                    <div class="number">25</div>
                    <div class="number">26</div>
                    <div class="number">27</div>
                    <div class="number">28</div>
                    <div class="number">29</div>
                    <div class="number">30</div>
                </div>
            </section> --}}
            <!-- FIM DO CALENDARIO -->


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
