@extends('pages.layout')
@section('content')
<div class="container diary-page">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h5>Update Message</h5>
        </div>
        <div class="card-body ">
            <form action="{{ url('/diary/update-diary') }}" method="post" enctype="multipart/form-data">
                {!! csrf_field() !!}
                <label for="exampleFormControlTextarea1" class="form-label"></label>
                <textarea class="form-control"  id="msg" name="msg" rows="3"> {{ $diary->msg }}</textarea>
                <input type="text" value="{{$diary->id}}" id="id" name="id" style="display:none">
                <input type="submit" value="Submit" class="btn btn-success mt-3">
            </form>
        </div>
    </div>
</div>
@endsection
