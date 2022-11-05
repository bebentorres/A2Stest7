@extends('layouts.app')

@section('content')
    <h1>Employer Profile Page</h1>
    <a class="btn btn-primary" href="/employer">Create New Profile</a>
    <hr>
    <br>
    {{-- @foreach --}}
     {{-- ($employer as $item) --}}
    <div class="card p-5">
        <h2>{{$user->contactName}}</h2>
        <hr>
        <p>Address: {{$item->contactNum}}</p>
        <p>Contact Number: {{$item->address}}</p>
        <a class="btn btn-primary" href="{{ url('edit/'.'$employer_profile->id') }}">Edit profile</a>
      </div>    
      <br>
        
    {{-- @endforeach --}}
    <div>
        {{$contacts->links()}}
    </div>
@endsection