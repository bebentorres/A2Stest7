@extends('layouts.app')

@section('content')
<h1>{{$jobPost->job_id}}</h1>
<h1>{{$jobPost->job_title}}</h1>
   <hr>
   <div class="card p-5">
        <p><b>Company Number:{{$jobPost->cnum}}</b></p>
        <p><b>Job Description: {{$jobPost->job_description}}</b></p>
        <p><b>Job Salary: {{$jobPost->job_salary}}</b></p>
        <a href="/jobpost/{{$jobPost->id}}/edit" class="btn btn-lg btn-primary">Edit</a>
        <br>
        <form action="/jobpost/{{$jobPost->id}}" method="post">
            {{method_field('DELETE')}}
            {!! csrf_field() !!}
            <input class="btn btn-danger w-100" type="submit" value="delete">
         </form>

   </div>
    
@endsection
