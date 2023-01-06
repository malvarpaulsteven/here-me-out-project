<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>here-me-out</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <section class="bg-warning text-center text-lg-start" id="hero-container">
        <div class="container">
        <div class="d-lg-flex">
            <div class="">
            <span class="lead fs-4 fw-bold mt-0">You Share, We Listen, You Heal.</span>
            <h1 class="hero-title text-lg-start text-center">YOU ARE NOT ALONE!</h1>
            <p class="lead fs-3 text-lg-start text-center">
                You dont have to keep everything to yourself,<br>
                we are here to hear you out.
                <br>
                We can be an ear that listens to your story,<br>
                and that is what "Hear Me Out" is all about.
            </p>
            <button class="btn btn-primary btn-md w-50 text-center">
                <span>Get Started</span>
            </button>
            </div>
            <img class="mental-image img-fluid w-50  d-lg-block d-none" src="{{ URL('img/mental2.png') }}" alt="" />
        </div>
        </div>
        <img src="img/road.png" alt="" width="100%" class="road-image">
    </section>

    <div class="container">
        @yield('home')
    </div>



</body>
</html>
