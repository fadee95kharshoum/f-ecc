<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('frontend/frame3.css') }}">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="user">
            <img src="{{ asset('frontend/assets/imgs/user.svg') }}" alt="user profile image">
            <p> <span>hello</span> <br> Mohammed</p>
        </div>
    </header>
    <div class="container">
       <div class="left">
        <div class="info">
            <p>Les 1  |  Mr. Alaa Darwish</p>
        </div>
        <div class="masterRecord">
            <img src="{{ asset('frontend/assets/imgs/masterRecord.svg') }}" alt="">
        </div>
       </div>
       <div class="right">
        <p class="text">Suggested Videos</p>
        <div class="videos">
            <img src="{{ asset('frontend/assets/imgs/record.svg') }}" alt="">
            <img src="{{ asset('frontend/assets/imgs/record.svg') }}" alt="">
            <img src="{{ asset('frontend/assets/imgs/record.svg') }}" alt="">
            <img src="{{ asset('frontend/assets/imgs/record.svg') }}" alt="">
        </div>
       </div>
    </div>

</body>
</html>
