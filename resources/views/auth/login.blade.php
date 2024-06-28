<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite(['resources/css/login.css', 'resources/js/app.js'])
</head>

<body>
    <div class="login-container">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <h2>Login</h2>
            <p>Please enter your email and password to continue</p>
            <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" id="email" name="email" :value="old('email')" required autofocus autocomplete="username">
                @if ($errors->has('email'))
                <span class="error">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required autocomplete="current-password">
                @if ($errors->has('password'))
                <span class="error">{{ $errors->first('password') }}</span>
                @endif
                <a href="{{ route('password.request') }}" class="forgot-password">Forgot Password?</a>
            </div>
            <div class="form-group remember-me">
                <input type="checkbox" id="remember_me" name="remember">
                <label for="remember_me">Remember Me</label>
            </div>
            <button type="submit">Sign In</button>
        </form>
    </div>
</body>

</html>