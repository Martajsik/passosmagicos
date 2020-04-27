<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Cadastro Professores</title>
    <link rel="stylesheet" href="/css/cadastroprof.css">
</head>
<body>
<form name="form" action="{{route('cadastro')}}" method="post" >
    @csrf
<h2>Cadastro Professores</h2>
    <div class="campo">
        <label for="name">Nome Completo:</label>
        <input class="caixa" type="text" name="name" id="nome">
    </div>
    {{-- <div class="campo">
        <label for="snome">Sobrenome:</label>
        <input class="caixa" type="text" name="snome" id="snome">
    </div> --}}

    <div class="email">
    <label for="email">E-mail:</label>
            <input class="caixa" type="text" id="email" name="email"  value="" placeholder=>
    </div>
    <div class="emails">
    </div>
    {{-- <div class="campo">
    <label for="telefone">Telefone:</label>
            <input class="caixa" type="text" id="telefone" name="telefone" value="">
    </div> --}}
    <div class="campo">
      <label for="password">Senha:</label>
      <input type="password" class="caixa" name="password">
    </div>
    <div class="campo">
    <label for="pssword-verify">Confirme a senha:</label>
      <input type="password" class="caixa" name="password-verify">

      <label for="tipo">Código de cadastro:</label>
      <input type="password" class="caixa" name="tipo">

    </div>
    <div class="campo">
    <label for="cpf">CPF:</label>
      <input type="text" class="caixa" name="cpf">

      <label for="rg">RG:</label>
      <input type="text" class="caixa" name="rg">

    </div>
    {{-- <input type="button" value="Cadastre-se" class="botao"> --}}
    <button type="submit" name="envio">Cadastrar</button>

</form>

</body>
</html>
