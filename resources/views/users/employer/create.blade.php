@extends('layouts.app')

@section('content')
    <div class="card p-5">
        <h1>Create Employer Profile</h1>
        <hr>
        <form action="/employer/" method="post">
        {!! csrf_field() !!}
        <label style="font-weight: bold">Company Name</label>
        <input class="form-control" type="text" name="cname">
        <br>
        <label style="font-weight: bold">Location</label>
        <input class="form-control" type="text" name="location">
        <br>
        <label style="font-weight: bold">Number</label>
        <input class="form-control" type="number" name="cnum">
        <br>
        <input type="submit" class="btn btn-primary w-100"  value="Create Contact">
        {{ __('Submit') }}
    </form>
    </div>
@endsection