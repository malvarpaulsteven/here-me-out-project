@extends('pages.layout')

@section('content')
<section class="dashboard-page vh-sm-100 d-sm-flex justify-content-center align-items-center" id="">
    <div class="container d-sm-flex">
        <div class="col-lg-6 d-flex justify-content-center align-items-center">
            <h1>{{ \Illuminate\Foundation\Inspiring::quote() }}</h1>
        </div>
        <div class="col-lg-6 d-flex justify-content-center align-items-center">
            <div class="">
                <div class="card w-100 mb-2">
                    <div class="card-body">
                      <h5 class="card-title">QUESTIONS</h5>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      <a href="{{ url('/question')}}" class="btn btn-primary">Go Now!</a>
                    </div>
                </div>
                <div class="card w-100 mb-2">
                    <div class="card-body">
                      <h5 class="card-title">CONNECT WITH OTHER USERS</h5>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      <a href="{{ url('/messenger')}}" class="btn btn-primary">Go Now!</a>
                    </div>
                </div>
                <div class="card w-100 mb-2">
                    <div class="card-body">
                      <h5 class="card-title">TIME CAPSULE</h5>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      <a href="#" class="btn btn-primary">Go Now!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

