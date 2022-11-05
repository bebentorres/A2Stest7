@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
    <div class="col-md-6">
        <h2>Profile Update</h2>
    <form action="/jobseeker/editprofile/update" method="POST" enctype="multipart/form-data">
        {!! csrf_field() !!}
        {{-- <input type="text" value="{{Auth::user()->jobseekerprofile->id}}" name="user_id"> --}}
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
        <label for="bio">Bio:</label>
        <textarea style="100%" class="form-control" rows="5"name="bio" value="{{Auth::user()->jobseekerprofile->bio}}"></textarea>
        <br>
        <label for="emphistory">Employment History:</label>
        <textarea style="100%" class="form-control" rows="5"name="emphistory" value="{{Auth::user()->jobseekerprofile->emphistory}}"></textarea>
        <br>
        <label for="educ">Educational Background:</label>
        <textarea style="100%" class="form-control" rows="5"name="educ" value="{{Auth::user()->jobseekerprofile->educ}}"></textarea>
        <br>
        <label for="cert" >Certifications:</label>
        <input type="text" class="form-control" name="cert" value="{{Auth::user()->jobseekerprofile->cert}}">
        <br>
        <label for="language" >Language:</label>
        <input type="text" class="form-control" name="language" value="{{Auth::user()->jobseekerprofile->language}}">
        <br>
        <label for="skills" >Skills:</label>
        <input type="text" class="form-control" name="skills" value="{{Auth::user()->jobseekerprofile->skills}}">
        <br>
        <label for="addinfo">Additional Information:</label>
        <textarea style="100%" class="form-control" rows="5"name="addinfo" value="{{Auth::user()->jobseekerprofile->addinfo}}"></textarea>
        <br>
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
    </div>
    
</div>
    
@endsection