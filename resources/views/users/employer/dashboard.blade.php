@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{Auth::user()->employerprofile->cname}}</h1>
        <h1>{{Auth::user()->employerprofile->location}}</h1>
        <h1>{{Auth::user()->employerprofile->cnum}}</h1>
        <br>
        <a href="/employer/editprofile" class="btn btn-primary">edit profile</a>
        <a href="/employer/editprofile" class="btn btn-primary">update profile</a>
    </div>
@endsection