@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
  <div class="col-md-8">


<h1>Job Posts</h1>
<hr>
<br>
<a class="btn btn-sm btn-primary" href="jobPosts/create">Create New Job Post</a>
<br><br>
@foreach ($jobPosts as $item)
<div class="card p-5">
    <h4>Job ID: {{$item->job_id}}</h4>
    <h2>{{$item->job_title}}</h2>
    <hr>
    <p>Job Description: {{$item->job_description}}</p>
    <p>Salary: {{$item->job_salary}}</p>
    <p>Location: {{$item->job_location}}</p>
    <p>Job Setup: {{$item->job_setup}}</p>
    <p>Date Posted: {{$item->job_post_date}}</p>
    <p>Job Type: {{$item->job_type}}</p>
    <p>Experience required: {{$item->exp_leve}}</p>

    <a class="btn btn-success" href="/jobPosts/{{$item->job_id}}">Click here for more information</a>
  </div>
  <br>   
  
  <hr>
  <br>
  <div>
  {!! $jobPosts->links() !!}
  </div>
  @endforeach 

</div>
</div>
</div>
  
@endsection

