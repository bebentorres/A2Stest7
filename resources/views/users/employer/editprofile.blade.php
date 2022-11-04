@extends('layouts.app')

@section('content')

<div class="container">
    <form action="{{route('employer.store')}}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <input type="text" value="{{Auth::user()->id}}" name="user_id" hidden>
        <br>
        <label for="cname" >Company Name</label>
        <input type="text" class="form-control" name="cname">
        <br>
        <label for="location" >Location:</label>
        <input type="text" class="form-control" name="location">
        <br>
        <label for="cnum" >Number:</label>
        <input type="text" class="form-control" name="cnum">
        <br>
        <button type="submit" class="btn btn-primary">
            {{ __('Submit') }}
        </button>
    
        <div>
            @if(Session::has('message'))
                <div class="alert alert-success">
                    {{Session::get('message')}}
                </div>
            @endif
        </div>
    
    </form>
    
</div>
    
@endsection