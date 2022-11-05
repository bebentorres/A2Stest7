@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card p-3">
                    <input class="form-control" id="search1" type="text" placeholder="search jobs, keyword, company, etc">
                    <br>
                    <input class="form-control" id="search2" type="text" placeholder="location, area, city">
                    <br>
                    <input class="form-control" id="search3" type="text" placeholder="specialization">
                    <br>
                    <button class="btn btn-success">Search</button>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card p-3">
                    <h3>Engineer</h3>
                    <h4>Company XYZ</h4>
                    <p>National Capital Region <br>around PHP 30,000</p>
                    <h5>Min. 1 year exp</h5>
                    <h5>Bachelor/College Degree in Engineering</h5>
                    <br>
                    <div class="d-flex">
                        <a href="" style="width:100px"class="btn btn-outline-success me-2">Save</a>
                        <a href="" style="width:100px"class="btn btn-success">Apply Now</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection