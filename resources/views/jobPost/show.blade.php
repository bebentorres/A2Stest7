@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
<div class="col-md-6">
<h4>Job ID: {{$jobPost->job_id}}</h4>
<h1>{{$jobPost->job_title}}</h1>
   <hr>
   <div class="card p-5">
        <p><b>Company Number: {{$jobPost->cnum}}</b></p>
        <p><b>Job Description: {{$jobPost->job_description}}</b></p>
        <p><b>Job Salary: {{$jobPost->job_salary}}</b></p>
        <p><b>Location: {{$jobPost->job_location}}</b></p>
        <a href="/jobPosts/{{$jobPost->job_id}}/edit" class="btn btn-primary">Edit</a>
        <br>
        <form action="/jobPosts/{{$jobPost->job_id}}" method="post">
            {{method_field('DELETE')}}
            {!! csrf_field() !!}
            <input class="btn btn-danger w-100" type="submit" value="delete">
         </form>
         

   </div>
</div>
</div>
</div>
    
@endsection
