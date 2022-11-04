@extends('layouts.app')

@section('content')

<div class="card p-5">
        <h1>Create New Job Post</h1>
        <hr>
        <form action="/job_posts/" method="post">
        {!! csrf_field() !!}
        {{-- <label style="font-weight: bold">Job ID</label>
        <input class="form-control" type="text" name="job_id">
        <br> --}}
        <label style="font-weight: bold">Job Title</label>
        <input class="form-control" type="text" name="job_title">
        <br>
        <label style="font-weight: bold">Company</label>
        <input class="form-control" type="text" name="cnum">
        <br>
        <label style="font-weight: bold">Job Description</label>
        <br>
        <textarea class="form-control" rows="10" cols="30" type="text" name="job_description">
        </textarea>
        <br><br>
        <label style="font-weight: bold">Job Salary</label>
        <input class="form-control" type="text" name="job_salary">
        <br><br>
        <input type="submit" class="btn btn-primary w-100"  value="Create Job Post">
    </form>
    </div>
    
@endsection
