

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


    <form class="box" action="{{ route('cadastro.aluno') }}" method="POST">
        @csrf
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <h1>Cadastro</h1>
        <input class="senha" type="text" name="tipo" placeholder="tipo">
         <input class="nome" type="text" name="name" placeholder="nome completo">
         <input class="email" type="email" name="email" placeholder="email">
         <input class="senha" type="password" name="password" placeholder="senha">
         <input class="senha" type="password" name="password_confirmation" placeholder="senha">
         <input class="senha cpf" type="text" name="cpf" placeholder="CPF">
         <input class="senha rg" type="text" name="rg" placeholder="RG">
         <input class="senha" type="text" name="nome_pais" placeholder="nome dos pais">
         <input class="senha contato" type="text" name="contato" placeholder="contato">
         <input class="cadastrar" type="submit" name="enviar" value="cadastrar">
    </form>

<script   src="https://code.jquery.com/jquery-2.2.4.min.js"   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
<script src="/js/viaCep.js"></script>
<script src="/js/jquery.mask.js"></script>
<script src="/js/mascara.js"></script>
</body>
</html>
