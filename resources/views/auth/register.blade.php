<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Form-v5 by Colorlib</title>
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Font-->
    <link rel="stylesheet" type="text/css" href="{{  asset('form/css/roboto-font.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('form/fonts/font-awesome-5/css/fontawesome-all.min.css') }}">
    <!-- Main Style Css -->
    <link rel="stylesheet" href="{{ asset('form/css/style.css') }}"/>
</head>
<body class="form-v5">
<div class="page-content">
    <div class="form-v5-content">
        <form class="form-detail" action="{{ route('register') }}" method="POST">
            @csrf
            <h2>Регистрация</h2>
            <div class="form-row">
                <label for="full-name">Full Name</label>
                <input type="text" name="name" id="full-name" class="input-text" placeholder="Your Name" value="{{ old('name') }}" required>
                <i class="fas fa-user"></i>
            </div>
            <div class="form-row">
                <label for="your-email">Your Email</label>
                <input type="text" name="email" id="your-email" class="input-text" placeholder="Your Email" value="{{ old('email') }}" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
                <i class="fas fa-envelope"></i>
            </div>
            <div class="form-row">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="input-text" placeholder="Your Password" value="{{ old('password') }}" required>
                <i class="fas fa-lock"></i>
            </div>
            <div class="form-row">
                <label for="password">Password</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                <i class="fas fa-lock"></i>
            </div>
            <div class="form-row-last">
                <input type="submit" name="register" class="register" value="Регистрация">
            </div>
        </form>
    </div>
</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
