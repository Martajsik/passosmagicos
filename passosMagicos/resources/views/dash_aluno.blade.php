<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('./css/dash_aluno.css')}}">
    <title>Dash aluno</title>
</head>

<body>

<header class="topo">
        <img class="img" src="images/perfil.jpeg">
        
        <nav>
            <h1 class="titulo">Kamy santos</h1>
            <div id="sideNav">
                <ul>
                    <li>
                        <a href="">Home</a>
                    </li>
                    <li>
                        <a href="">Comentários</a>
                    </li>
                    <li>
                        <a href="">Materias</a>
                    </li>
                    <li>
                        <a href="#footer">Notas</a>
                    </li>
                     <li>
                        <a href="">Sair</a>
                    </li> 
                </ul>
            </div>
        </nav>
        <img src="images/menu.png" id="menuBtn">

    </header>
    <section id="about">
        <div class="about-left-col">
            <img src="images/contact.png" alt="">
        </div> 
        
        <div class="about-right-col">
            <div class="about-text">
                <h1 id="quemsomos">Ola aluno</h1>
                <span class="square"></span>

                <p>Seja bem vindo a pagina do aluno, aqui voce consegue realizar diversas atividades
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

    <Main>
        <div class="feed">
            <div class="feed--card--container">
                <div class="card-1">
                    <img src="" alt="">
                </div>
            </div>
            <div class="feed--card--container">
                <div class="card-2">
                 <h2>cometarios</h2>
                 <p>o seu trabalho estava execelente e foi muito bem montado 
                     peercebi bastante o seu esforço
                 </p>
                </div>
            </div>
            <div class="feed--card--container">
                <div class="card-1">
                  <img alt="" class="img card">
                </div>
            </div>
            <div class="feed--card--container">
                <div class="card-2">
                  <h2>comentarios</h2>
                  <br>
                  <p>percebi uma grande evolução no seu aprendizado
                      e fico muito feliz em ver sua dedicação
                  </p>
                </div>
            </div>
        </div>
    </Main>

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
    <!-- <header class="topo">
        <img class="foto" src="img/aluna.jpg">
        <nav>
            <h1 class="titulo">Kamy santos</h1>
            <ul class="nav_links">
                <li><a href="#">serviços</a></li>
                <li><a href="#">projetos</a></li>
                <li><a href="#">sair</a></li>
            </ul>
        </nav>
    </header>
    <main class="feed">
        <div class="feed--card--container">
            <div class="card-1">
            </div>
            <div class="texto">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum adipisci optio error
                    voluptas architecto iusto minus, dicta, est voluptatum magnam id quaerat sit ipsum iure ad modi
                    tempora
                    dignissimos reiciendis.</p>
            </div>
        </div>
         <div class="feed--card--container">
             <div class="card-2">
             </div>
             <div class="texto">
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum adipisci optio error
                     voluptas architecto iusto minus, dicta, est voluptatum magnam id quaerat sit ipsum iure ad modi
                     tempora
                     dignissimos reiciendis.</p>
             </div>
         </div>
          <div class="feed--card--container">
              <div class="card-3">
              </div>
              <div class="texto">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum adipisci optio error
                      voluptas architecto iusto minus, dicta, est voluptatum magnam id quaerat sit ipsum iure ad modi
                      tempora
                      dignissimos reiciendis.</p>
              </div>
          </div>
    </main>
    <!-- <aside class="descricao">
        <div class="texto">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum adipisci optio error
                voluptas architecto iusto minus, dicta, est voluptatum magnam id quaerat sit ipsum iure ad modi tempora
                dignissimos reiciendis.</p>
        </div>
        <div class="texto">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum adipisci optio error
                voluptas architecto iusto minus, dicta, est voluptatum magnam id quaerat sit ipsum iure ad modi tempora
                dignissimos reiciendis.</p>
        </div>
        <div class="texto">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum adipisci optio error
                voluptas architecto iusto minus, dicta, est voluptatum magnam id quaerat sit ipsum iure ad modi tempora
                dignissimos reiciendis.</p>
        </div>
    </aside> -->
    <footer>
        <div class="materias">
            <a class="bola" href="#">
                <p>s</p>
            </a>
            <a class="bola" href="#">
                <p>p</p>
            </a>
            <a class="bola" href="#">
                <p>s</p>
            </a>
            <a class="bola" href="#">
                <p>p</p>
            </a>
            <a class="bola" href="#">
                <p>m</p>
            </a>
        </div>
    </footer> -->
</body>

</html>
