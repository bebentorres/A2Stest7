@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{route('employer.create')}}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="row">
            <div class="col-md-6">
                <h2>Create Job Posting</h2>
                <br>
                <label for="cname" >Job Title:</label>
                <input type="text" class="form-control" name="">
                <br>
                <label for="location" >Job Description:</label>
                <input type="text" class="form-control" name="location">
                <br>
                <label for="cnum" >Minumum Requirement:</label>
                <input type="text" class="form-control" name="cnum">
                <br>
                <label for="">Job Type</label>
                <select name="role" class="form-control" >
                    <option value="">--</option>
                    <option value="">Part-time</option>
                    <option value="">Full-time</option>
                    <option value="">Project-based</option>
                </select>
                <br>
                <label for="">Additional Information:</label><br>
                <textarea class="form-control" name="" id=""></textarea>
                <br>
                <button type="submit" class="btn btn-success form-control">
                    {{ __('Post') }}
                </button>
                <br>
            </div>
            <div class="col-md-6">
                
            </div>
        </div>
        
        
    
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