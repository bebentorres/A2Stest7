@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
<div class="col-md-6">


<div class="card p-5">
        <h1>Create New Job Post</h1>
        <hr>
        <form action="/jobPosts/" method="post">
        {!! csrf_field() !!}
        {{-- <label style="font-weight: bold">Job ID</label>
        <input class="form-control" type="text" name="job_id">
        <br> --}}
        <input type="text" name="employer_id" hidden value="{{Auth::user()->id}}">
        <label style="font-weight: bold">Job Title</label>
        <input class="form-control" type="text" name="job_title">
        <br>
        {{-- <label style="font-weight: bold">Company Number</label>
        <input class="form-control" type="text" name="cnum">
        <br> --}}
        <label style="font-weight: bold">Job Description</label>
        <br>
        <textarea class="form-control" rows="10" cols="30" type="text" name="job_description">
        </textarea>
        <br><br>
        <label style="font-weight: bold">Job Salary</label>
        <input class="form-control" type="text" name="job_salary">
        <br><br>
        <label style="font-weight: bold">Job Location</label>
        <input class="form-control" type="text" name="job_location">
        <br><br>
        <label style="font-weight: bold">Job Setup</label>
        <input class="form-control" type="text" name="job_setup">
        <br><br>
        <label style="font-weight: bold">Job Type</label>
        <input class="form-control" type="text" name="job_type">
        <br><br>
        <label style="font-weight: bold">Date Posted</label>
        <input class="form-control" type="date" name="job_post_date">
        <br><br>
        <label style="font-weight: bold">Experience Requirement</label>
        <input class="form-control" type="text" name="exp_level">
        <br><br>
        <input type="submit" class="btn btn-primary w-100"  value="Create Job Post">
    </form>
    </div>
</div>
</div>
</div>
    
@endsection
