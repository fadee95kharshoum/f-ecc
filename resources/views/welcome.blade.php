<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('frontend/frame1.css') }}">
    <title>Sing in</title>
</head>
<body>
  <div class="container">
    <div class="logo"><img src="../assets/imgs/logo.svg" alt=""></div>
    <div class="loginForm">
        <p class="welcome">Welcome To Your Future </p>
        <p class="text">learn.. and have fun</p>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <input required type="text" name="email" placeholder="Enter your E-mail">
            <div class="password">
                <input name="password" required type="password" placeholder="Password">
                <img src="{{ asset('frontend/assets/imgs/eye.svg') }}" alt="">
            </div>
            <input type="submit" value="Login">
        </form>
    </div>
    <footer>
     <div class="container">
        <div class="backgroundFooter">
            <img src="{{ asset('frontend/assets/imgs/backgroundFooter.svg') }}" alt="">
        </div>
        <div class="content">
            <div class="socialIcons">
                <img src="{{ asset('frontend/assets/imgs/facebook.svg') }}" alt="">
                <img src="{{ asset('frontend/assets/imgs/behance.svg') }}" alt="">
                <img src="{{ asset('frontend/assets/imgs/insta.svg') }}" alt="">
                <img src="{{ asset('frontend/assets/imgs/linkedIn.svg') }}" alt="">
                <img src="{{ asset('frontend/assets/imgs/twitter.svg') }}" alt="">
            </div>
            <div class="copyrights">© 2021 - 2023 focal X agency All Right Reserved</div>
        </div>
     </div>

    </footer>
  </div>
</body>
</html>
