@extends('pages.layout')

@section('content')

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
        <img src="{{ URL('img/road.png') }}" alt="" width="100%" class="road-image">
    </section>




@endsection
