@extends('layouts.app')

@section('content')
   <div>
      <h1>Edit Profile</h1>
      <form action="{{route('employer.store')}}" method="post">
         {!! csrf_field() !!}
         {{-- cross site request forgery - helps secure data  --}}
         @method("PATCH")
         {{-- PUT if whole resource needs to be updated, PATCH if only a portion is to be updated --}}
         <input type="text" value="{{Auth::user()->id}}" name="user_id" hidden>
         <br>
         <input class="form-control" type="text" name="contactName" value="{{$employer_profiles->id}}">
         <br>
         <label for="">Company Name:</label>
         <input class="form-control" type="text" name="cname" value="{{$employer_profiles->cname}}">
         <br>
         <label for="">Location:</label>
         <input class="form-control" type="text" name="location" value="{{$employer_profiles->location}}">
         <br>
         <label for="">Number:</label>
         <input class="form-control" type="text" name="address" value="{{$employer_profile->cnum}}">
         <br>
         <input class="btn btn-primary w-100" type="submit" value="Edit Information">
         {{__('Submit')}}

      </form>
   </div>
@endsection

