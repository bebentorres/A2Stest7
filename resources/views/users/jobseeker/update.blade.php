@extends('layouts.app')

@section('content')

<div class="container">
    <form action="/jobseeker/editprofile/update" method="POST" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <input type="text" value="{{Auth::user()->jobseekerprofile->id}}" name="user_id">
        <br>
        <label for="fname" >First Name:</label>
        <input type="text" class="form-control" name="fname" value="{{Auth::user()->jobseekerprofile->fname}}">
        <br>
        <label for="lname" >Last Name:</label>
        <input type="text" class="form-control" name="lname" value="{{Auth::user()->jobseekerprofile->lname}}">
        <br>
        <label for="address">Address:</label>
        <input type="text" class="form-control" name="address" value="{{Auth::user()->jobseekerprofile->address}}">
        <br>
        <label for="bday" >Birth date:</label>
        <input type="date" class="form-control" name="bday" value="{{Auth::user()->jobseekerprofile->bday}}">
        <br>
        <label for="number" >Phone Number:</label>
        <input type="text" class="form-control" name="number" value="{{Auth::user()->jobseekerprofile->number}}">
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