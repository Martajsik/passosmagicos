<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('css/style_login.css')}}">
</head>
<body>
    <form class="box" action="" method="POST">
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
    </form>
</body>
</html>

