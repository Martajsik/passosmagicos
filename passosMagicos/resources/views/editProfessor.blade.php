<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/editProfessor.css">
<title>Editar Professor </title>
</head>
<body>

<header class="header__content">
    <nav class="nav">

        <div class="nav__infos">
            {{-- <img class="nav__infos--foto" src="/passosMagicos/storage/app/public/img/dash_prof.jpeg" alt="foto do professor"> --}}
            <h1 class="nav__infos--title">Editar professor xxxxx</h1>
        </div>

        <div class="nav__list">
            <ul class="nav__list--items">
                <li class="nav__list--item"><a class="nav__list--link" href="/adm">Home</a></li>
                <li class="nav__list--item"><a class="nav__list--link" href="/professor/">Voltar</a></li>
                <li class="nav__list--item"><a class="nav__list--link" href="#">Sair</a></li>
            </ul>
        </div>
    </nav>
</header>

<main class="primary__content">
     <section class="primary__content--changes">
         <form class="form" action="" method="post" enctype="multipart/form-data">

                 <label class ="form__label"for="name">Nome Completo:</label>

                 <input class="form__space" type="text" name="name" id="name">

                 <label class ="form__label"for="email">E-mail:</label>

                 <input class="form__space" type="email" name="email" id="email">

                 <label class ="form__label"for="password">Senha:</label>

                 <input class="form__space" type="password" name="password" id="password">

                 <label class ="form__label"for="password-verify">Confirmar senha:</label>

                 <input class="form__space" type="password" name="password-verify" id="password-verify">

                 <label class ="form__label"for="contact">Telefone:</label>

                 <input class="form__space" type="number" name="contact" id="contact">

                 <label class ="form__label"for="subject">Matéria:</label>

                 <input class="form__space" type="text" name="subject" id="subject">

                 <label class ="form__label"for="photo">Foto de Perfil:</label>

                 <input class="form__space" type="file" name="photo" id="photo">


                 <button class="form__button--submit" type="submit">Editar</button>
             </form>
     </section>

</main>

</body>
</html>
