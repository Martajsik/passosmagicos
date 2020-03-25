

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{asset('css/cadastro_aluna.css')}}">
    <title>Cadastro aluna</title>
</head>
<body>

    <form class="box" action="index.html" method="POST">
         <h1>Cadastro</h1>
         <input class="nome" type="text" name="name" placeholder="nome">
         <input class="email" type="text" name="email" placeholder="email">
         <input class="senha" type="password" name="password" placeholder="senha">
         <input class="senha" type="password" name="password_confirmed" placeholder="senha">
         <input class="cadastrar" type="submit" name="" value="cadastrar">
    </form>


</body>
</html>
