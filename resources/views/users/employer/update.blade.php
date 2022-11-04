@extends('layouts.app')

@section('content')

<div class="container">
    <form action="{{route('employer.update')}}" method="POST" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="row">
            <div class="col-md-6">
                <h2>Update Company Information</h2>
                <input type="text" hidden value="{{Auth::user()->employerprofile->id}}" name="user_id">
                <br>
                <label for="cname" >Company Name</label>
                <input type="text" class="form-control" name="cname" value="{{Auth::user()->employerprofile->cname}}">
                <br>
                <label for="location" >Location:</label>
                <input type="text" class="form-control" name="location" value="{{Auth::user()->employerprofile->location}}">
                <br>
                <label for="cnum" >Number:</label>
                <input type="text" class="form-control" name="cnum" value="{{Auth::user()->employerprofile->cnum}}">
                <br>
                <label for="description">Company Description</label>
                <textarea class="form-control" name="description" value="{{Auth::user()->employerprofile->description}}"></textarea>
                <br>
                <label for="">Company Logo</label><br>
                <input type="file" class="form-control" name="" id="">
                <br>
                <hr>
                <h3>Additional Information</h3>
                <label for="benefits" >Benefits:</label>
                <input type="text" class="form-control" name="benefits" value="{{Auth::user()->employerprofile->benefits}}">
                <br>
                <label for="workhours" >Work Hours:</label>
                <input type="text" class="form-control" name="workhours" value="{{Auth::user()->employerprofile->workhours}}">
                <br>
                <label for="worksetup" >Work Setup:</label>
                <input type="text" class="form-control" name="worksetup" value="{{Auth::user()->employerprofile->worksetup}}">
                <br>
                <label for="comsize" >Company size:</label>
                <input type="text" class="form-control" name="comsize" value="{{Auth::user()->employerprofile->comsize}}">
                <br>
                <label for="dcode" >Dress code:</label>
                <input type="text" class="form-control" name="dcode" value="{{Auth::user()->employerprofile->dcode}}">
                <br>
            </div>
        </div>
        
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