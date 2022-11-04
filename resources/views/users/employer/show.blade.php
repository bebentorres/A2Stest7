@extends('layouts.app')

@section('content')
   <h1>{{$users->name}}</h1>
   <hr>
   <div class="card p-5">
        <p><b>Company Name:{{$employer_profiles->cname}}</b></p>
        <p><b>Location: {{$employer_profiles->location}}</b></p>
        <p><b>Number: {{$employer_profiles->cnum}}</b></p>
        <a href="/employer/{{$employer_profiles->id}}/edit" class="btn btn-lg btn-primary">Edit</a>
        <br>
        <form action="/employer/{{$employer_profiles->id}}" method="post">
            {{-- {{method_field('DELETE')}} --}}
            {!! csrf_field() !!}
            <input class="btn btn-danger w-100" type="submit" value="delete">
         </form>

   </div>
@endsection