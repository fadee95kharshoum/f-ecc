<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('frontend/frame2.css') }}">
    <title>categories</title>
</head>
<body>
    <header>
        <div class="user">
            <img src="{{ asset('frontend/assets/imgs/user.svg') }}" alt="user profile image">
            <p> <span>hello</span> <br> {{ auth()->user()->name }}</p>
        </div>
        <div class="categories">
            <p class="deActive">Branding Records</p>
            <p class="active">Marketing Records</p>
        </div>
    </header>
    <div class="recordsContainer">
        <div class="record">
            <div class="img">
                <img src="{{ asset('frontend/assets/imgs/record.svg') }}" alt="">
            </div>
            <p class="description">
                Les 1  |  Mr. Alaa Darwish
            </p>
        </div>
        <div class="record">
            <div class="img">
                <img src="{{ asset('frontend/assets/imgs/record.svg') }}" alt="">
            </div>
            <p class="description">
                Les 1  |  Mr. Alaa Darwish
            </p>
        </div>
        <div class="record">
            <div class="img">
                <img src="{{ asset('frontend/assets/imgs/record.svg') }}" alt="">
            </div>
            <p class="description">
                Les 1  |  Mr. Alaa Darwish
            </p>
        </div>
        <div class="record">
            <div class="img">
                <img src="{{ asset('frontend/assets/imgs/record.svg') }}" alt="">
            </div>
            <p class="description">
                Les 1  |  Mr. Alaa Darwish
            </p>
        </div>
        <div class="record">
            <div class="img">
                <img src="{{ asset('frontend/assets/imgs/record.svg') }}" alt="">
            </div>
            <p class="description">
                Les 1  |  Mr. Alaa Darwish
            </p>
        </div>
        <div class="record">
            <div class="img">
                <img src="{{ asset('frontend/assets/imgs/record.svg') }}" alt="">
            </div>
            <p class="description">
                Les 1  |  Mr. Alaa Darwish
            </p>
        </div>
        <div class="record">
            <div class="img">
                <img src="{{ asset('frontend/assets/imgs/record.svg') }}" alt="">
            </div>
            <p class="description">
                Les 1  |  Mr. Alaa Darwish
            </p>
        </div>
        <div class="record">
            <div class="img">
                <img src="{{ asset('frontend/assets/imgs/record.svg') }}" alt="">
            </div>
            <p class="description">
                Les 1  |  Mr. Alaa Darwish
            </p>
        </div>
        <div class="record">
            <div class="img">
                <img src="{{ asset('frontend/assets/imgs/record.svg') }}" alt="">
            </div>
            <p class="description">
                Les 1  |  Mr. Alaa Darwish
            </p>
        </div>
        <div class="record">
            <div class="img">
                <img src="{{ asset('frontend/assets/imgs/record.svg') }}" alt="">
            </div>
            <p class="description">
                Les 1  |  Mr. Alaa Darwish
            </p>
        </div>
    </div>
    <div class="sliderControl">
        <img src="{{ asset('frontend/assets/imgs/arrowLeft.svg') }}" alt="">
        <div>
            <p class="active">1</p>
            <p class="deActive">2</p>
            <p class="deActive">3</p>
            <p class="deActive">4</p>
            <p class="deActive">5</p>
        </div>
        <img src="{{ asset('frontend/assets/imgs/arrowRight.svg') }}" alt="">
    </div>
</body>
</html>
