@extends('layouts.app')

@section('content')
<h1>Edit Job Post</h1>
<form action="/jobPosts/{{$jobPost->job_id}}" method="post">
   {!! csrf_field() !!}
   {{-- cross site request forgery - helps secure data  --}}
   @method("PATCH")
   {{-- PUT if whole resource needs to be updated, PATCH if only a portion is to be updated --}}
   <input class="form-control" type="hidden" name="job_id" value="{{$jobPost->job_id}}">
   <br>
   <label for="">Job Title:</label>
   <input class="form-control" type="text" name="job_title" value="{{$jobPost->job_title}}">
   <br>
   <label for="">Company Number:</label>
   <input class="form-control" type="number" name="cnum" value="{{$jobPost->cnum}}">
   <br>
   <label for="">Job Description:</label>
   <input class="form-control" type="text" name="job_description" value="{{$jobPost->job_description}}">
   <br>
   <label for="">Salary</label>
   <input class="form-control" type="text" name="job_salary" value="{{$jobPost->job_salary}}">
   <br>
   <input class="btn btn-primary w-100" type="submit" value="Edit Job Post">

</form>
</div>
@endsection
