@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card p-3">
            <h2>Hello Admin {{Auth::user()->name}}!</h2>
        </div>
    </div>
@endsection