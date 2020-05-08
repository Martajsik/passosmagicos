<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('/css/style_login.css')}}">
</head>

<body>
<section id="about">
		<div class="cobertura">
			<div class="about-left-col">
				<img src="/images/offer.png" alt="">
				<!-- ta aqui a imagem senhora -->
			</div>
			<div class="about-right-col">
				<div class="login-content">
					<form action="" method="POST">
                    @csrf
						<h2 class="title">Login</h2>
						<div class="input-div one">
							<div class="i">
								<i class="fas fa-user"></i>
							</div>
							<div class="div">
								<!-- <h5>Username</h5> -->
                                <input type="text" placeholder="usuario" class="input"  name="email">
                                 @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>
						</div>
						<div class="input-div pass">
							<div class="i">
								<i class="fas fa-lock"></i>
							</div>
							<div class="div">
								<!-- <h5>Password</h5> -->
                                <input type="password" placeholder="Senha" class="input" name="password">
                                 @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>
                        </div>
                        {{-- @if (Route::has('password.request'))
						<a href="{{ route('password.request') }}">Esqueceu sua senha?</a>
                        <input type="submit" class="btn" value="Entra"> --}}
                        @if (Route::has('password.request'))
                        <a class=" " href="{{ route('password.request') }}">
                            {{ __('Esqueceu sua senha?') }}
                        </a>
                        @endif
                        <input type="submit" class="btn" value="Entrar">
					</form>
				</div>
			</div>
		</div>
	</section>
    <!-- <form class="box" action="" method="POST">
        @csrf
        <h1>Login</h1>
        <input type="text" name="email" placeholder="email">
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <input type="password" name="password" placeholder="password">
         @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
         @enderror
        <input type="submit" name="" value="login">

          @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
          @endif
        {{-- <a href="{{route('homeAdm')}}">AREA ADM</a> --}}
    </form> -->
</body>
</html>

