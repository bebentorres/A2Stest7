@extends('layouts.app')

@section('content')

{{-- <div class="container">
    <h1>Your Access</h1>
    <h1>to Success</h1>
</div> --}}

<div class="container"id="slogan">
    <div class="row">
        <div class="col-md-6">
            <div class="ms-5 mt-5">
                <h1 style="font-size:60px; font-weight:bold" class="tagline">Access</h1>
                <h1 style="font-size:60px; font-weight:bold" class="tagline-sm">your
                <span class="tagline">Success</span>
                </h1>
                <div class="mt-2">
                <span >
                    <a href="/search" class="btn btn-success">Find Work</a>
                    <a href="find_talent/find-talent.html" class="btn btn-primary">Find Talent</a>
                </span>
                </div>  
            </div>
            
        </div id="slogan-btn">
        <div class="col-md-6 image mt-5">
            <img src="{{asset('build/assets/image/banner.svg')}}" alt="" width="100%">
        </div>
    </div>   
</div>

    
@endsection