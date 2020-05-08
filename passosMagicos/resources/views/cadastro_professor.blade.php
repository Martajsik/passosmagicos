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
<!-- <form name="form" action="{{route('cadastro')}}" method="post" >
    @csrf
    @method('POST')
    <a class="link" href="/adm/professor/lista">Voltar</a>
<h2 class="titulo__h2">Cadastro Professores</h2> -->

<section id="about">
		<div class="cobertura">
			<div class="about-left-col">
				<img src="/images/offer.png" alt="">

			</div>
			<div class="about-right-col">
				<div class="login-content">
					<form action="index.html">
						<h3 class="title">Cadastro</h3>
						<div class="input-div one">
							<div class="i">
								<i class="fas fa-user"></i>
							</div>
							<div class="div">
								<input type="text" placeholder="Nome completo" class="input">
							</div>
						</div>
						<div class="input-div one">
							<div class="i">
								<i class="fas fa-user"></i>
							</div>
							<div class="div">
								<input type="email" placeholder="Email" id="email" name="email"  class="input">
							</div>
						</div>
						<div class="input-div pass">
							<div class="i">
								<i class="fas fa-lock"></i>
							</div>
							<div class="div">
								<input type="password" placeholder="Senha" name="password" class="input">
							</div>
						</div>
						<div class="input-div pass">
							<div class="i">
								<i class="fas fa-lock"></i>
							</div>
							<div class="div">
								<input type="password" placeholder=" Confirmar Senha" name="password-verify" class="input">
							</div>
						</div>
						<div class="input-div one">
							<div class="i">
								<i class="fas fa-user"></i>
							</div>
							<div class="div">
								<input type="text" placeholder="CPF" class="input  cpf " name="cpf" id="cpf" autocomplete="off" maxlength="14">
							</div>
						</div>
						<div class="input-div one">
							<div class="i">
								<i class="fas fa-user"></i>
							</div>
							<div class="div">
								<input type="text" placeholder="RG" class="input rg" name="rg" autocomplete="off">
							</div>
						</div>
						<div class="input-div one">
							<div class="i">
								<i class="fas fa-user"></i>
							</div>
							<div class="div">
								<input type="text" placeholder="CEP" class="input cep " name="cep" id="cep">
							</div>
						</div>
						<div class="input-div one">
							<div class="i">
								<i class="fas fa-user"></i>
							</div>
							<div class="div">
								<input type="text" placeholder="logradouro" class="input" name="logradouro" id="logradouro">
							</div>
						</div>
						<div class="input-div one">
							<div class="i">
								<i class="fas fa-user"></i>
							</div>
							<div class="div">
								<input type="text" placeholder="complemento" class="input" name="complemento" id="complemento">
							</div>
						</div>
						<div class="input-div one">
							<div class="i">
								<i class="fas fa-user"></i>
							</div>
							<div class="div">
								<input type="text" placeholder="bairro" class="input">
							</div>
						</div>
						<div class="input-div one">
							<div class="i">
								<i class="fas fa-user"></i>
							</div>
							<div class="div">
								<input type="text" placeholder="Uf" name="uf" id="uf" class="input">
							</div>
						</div>
						<a href="#">Esqueceu sua senha?</a>

						<input type="submit" class="btn" value="cadastra">
					</form>
				</div>
			</div>
		</div>
	</section>

    <!-- <div class="campo">
        <label for="name">Nome Completo:</label>
        <input class="caixa" type="text" name="name" id="nome">
    </div>
    <div class="email">
        <label for="email">E-mail:</label>
            <input class="caixa" type="text" id="email" name="email"  value="" placeholder=>
    </div>
    <div class="emails">
    </div>
    <div class="campo">
      <label for="password">Senha:</label>
      <input type="password" class="caixa" name="password">
    </div>
    <div class="campo">
    <label for="pssword-verify">Confirme a senha:</label>
      <input type="password" class="caixa" name="password-verify">
    </div>
    <div class="campo">
    <label for="cpf">CPF:</label>
      <input type="text" class="caixa cpf" name="cpf" id="cpf" autocomplete="off" maxlength="14" >

      <label for="rg">RG:</label>
      <input type="text" class="caixa rg" name="rg" autocomplete="off">
    </div>

    <div class="campo">
      <label for="cep">CEP:</label>
      <input type="text" class="caixa cep" name="cep" id="cep" value="">
    </div>

    <div class="campo">
      <label for="logradouro">Logradouro:</label>
      <input type="text" class="caixa" name="logradouro" id="logradouro" value="">
    </div>

    <div class="campo">
      <label for="numero">Numero:</label>
      <input type="text" class="caixa" name="numero" id="numero" value="">
    </div>
    <div class="campo">
      <label for="complemento">Complemento:</label>
      <input type="text" class="caixa" name="complemento" id="complemento"  value="">
    </div>
    <div class="campo">
      <label for="bairro">Bairro:</label>
      <input type="text" class="caixa" name="bairro" id="bairro" value="">
    </div>
    <div class="campo">
      <label for="uf">UF:</label>
      <input type="text" class="caixa" name="uf" id="uf"  value="">
    </div> -->


    <button type="submit" name="envio" class="btn">Cadastrar</button>
</form>
<script   src="https://code.jquery.com/jquery-2.2.4.min.js"   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
<script src="/js/viaCep.js"></script>
<script src="/js/jquery.mask.js"></script>
<script src="/js/mascara.js"></script>
</body>
</html>
