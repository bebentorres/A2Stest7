@extends('layouts.app')

@section('content')
<h1>Job Posts</h1>
<hr>
<br>
@foreach ($jobPosts as $item)
<div class="card p-5">
    <h2>{{$item->job_id}}</h2>
    <h2>{{$item->job_title}}</h2>
    <hr>
    <p>Job Description: {{$item->job_description}}</p>
    <p>Salary: {{$item->job_salary}}</p>
    <p>Location: {{$item->job_location}}</p>
    <p>Job Setup: {{$item->job_setup}}</p>
    <p>Date Posted: {{$item->job_post_date}}</p>
    <p>Job Type: {{$item->job_type}}</p>
    <p>Experience required: {{$item->exp_leve}}</p>
  </div>    
  <br>

@endforeach
@endsection

