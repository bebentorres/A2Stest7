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

        <div class="row">
            <div class="col-md-6">
                <h2>Update Company Information</h2>
                <input type="text" hidden value="{{Auth::user()->id}}" name="user_id">
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
                <label for="description">Company Description</label>
                <textarea class="form-control" name="description"></textarea>
                <br>
                <label for="">Company Logo</label><br>
                <input type="file" class="form-control" name="" id="">
                <br>
                <hr>
                <h3>Additional Information</h3>
                <label for="benefits" >Benefits:</label>
                <input type="text" class="form-control" name="benefits">
                <br>
                <label for="workhours" >Work Hours:</label>
                <input type="text" class="form-control" name="workhours">
                <br>
                <label for="worksetup" >Work-setup:</label>
                <input type="text" class="form-control" name="worksetup">
                <br>
                <label for="comsize" >Company size:</label>
                <input type="text" class="form-control" name="comsize">
                <br>
                <label for="dcode" >Dress code:</label>
                <input type="text" class="form-control" name="dcode">
                <br>
            </div>
            <div class="col-md-6">
                
            </div>
        </div>
        
        <button type="submit" class="btn btn-success">

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