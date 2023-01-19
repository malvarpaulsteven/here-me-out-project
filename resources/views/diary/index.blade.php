@extends('pages.layout')
@section('content')
<div class="container diary-page mb-4">
    <div class="card diary-card">
        <div class="card-header d-flex justify-content-between">
            <h5>HearMeOut Diary</h5>
            <a href="{{ url('/diary/create') }}" class="btn btn-success">Add New</a>
        </div>
        <div class="card-body ">
            @foreach ($diaries as $diary )
                <small><p>{{ $diary->display_date}}</p> </small>
                <p>{{ $diary->msg }}</p>
                <a href="{{ URL('/diary/update/' . $diary->id) }}" class="btn btn-primary btn-sm">Update</a>
                <form action="{{ url('/diary/delete-diary') }}" method="post" style="display: inline">
                    {{-- {{ method_field('DELETE') }} --}}
                    {!! csrf_field() !!}
                    <input type="text" name="id" id="id" style="display:none" value="{{ $diary->id }}">
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete message?')">Delete</button>
                </form>
                <hr>
            @endforeach


        </div>
    </div>

</div>

@endsection
