@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="card mb-2">
                <div class="card-header p-3">
                    @if(empty(Auth::user()->employerprofile->cname))
                        <h3>Company Overview</h3>
                    @else
                        <h3>{{Auth::user()->employerprofile->cname}}</h3>
                    @endif 
                </div>
                <div class="card-body text-center">
                    <img src="{{asset('build/assets/image/logo.png')}}" width="50%" alt="">
                    <br><br>
                    @if(empty(Auth::user()->employerprofile->description))
                        <h3>Company description yet to be updated</h3>
                    @else
                        <h3>{{Auth::user()->employerprofile->description}}</h3>
                    @endif 
                </div>
                <br>
            </div>
            <div class="card">
                <div class="card-header p-3"><h3>Highlights</h3></div>
                <div class="card-body row">
                    <div class="col-md-6">
                        <h4>Location</h4>
                        @if(empty(Auth::user()->employerprofile->location))
                        <p>yet to be updated</p>
                        @else
                        <p>{{Auth::user()->employerprofile->location}}</p>
                        @endif
                        <h4>Benefits</h4>
                        @if(empty(Auth::user()->employerprofile->benefits))
                        <p>yet to be updated</p>
                        @else
                        <p>{{Auth::user()->employerprofile->benefits}}</p>
                        @endif
                        <h4>Work Hours</h4>
                        @if(empty(Auth::user()->employerprofile->workhours))
                        <p>yet to be updated</p>
                        @else
                        <p>{{Auth::user()->employerprofile->workhours}}</p>
                        @endif
                    </div>
                    <div class="col-md-6">
                        <h4>Company Size</h4>
                        @if(empty(Auth::user()->employerprofile->comsize))
                        <p>yet to be updated</p>
                        @else
                        <p>{{Auth::user()->employerprofile->comsize}}</p>
                        @endif
                        <h4>Work Setup</h4>
                        @if(empty(Auth::user()->employerprofile->worksetup))
                        <p>yet to be updated</p>
                        @else
                        <p>{{Auth::user()->employerprofile->worksetup}}</p>
                        @endif
                        <h4>Dress Code</h4>
                        @if(empty(Auth::user()->employerprofile->dcode))
                        <p>yet to be updated</p>
                        @else
                        <p>{{Auth::user()->employerprofile->dcode}}</p>
                        @endif
                    </div>
                </div>
            </div>


        </div>
        <div class="col-md-3">
            <div class="card mb-2">
                <div class="card-header p-3"><h3>Company Profile</h3></div>
                <div class="card-body">
                    <p>Username: {{Auth::user()->name}}</p>
                    @if(empty(Auth::user()->employerprofile->cname))
                        <p>Company Name: N/A</p>
                    @else
                        <p>Company Name: {{Auth::user()->employerprofile->cname}}</p>
                    @endif
                    <p>Email: {{Auth::user()->email}}</p>
                    
                    @if(empty(Auth::user()->employerprofile->cnum))
                        <p>Contact Number.: N/A</p>
                    @else
                        <p>Contact Number.: {{Auth::user()->employerprofile->cnum}}</p>
                    @endif
                    
                </div>
                <div class="card-footer text-center">
                    @if(empty(Auth::user()->employerprofile->cname))
                        <a href="/employer/editprofile" class="btn btn-outline-success form-control mb-2">Edit Profile</a>
                    @else
                        <a href="/employer/editprofile/update" class="btn btn-outline-success form-control mb-2">Update Profile</a>
                    @endif
                    <br>
                    <a href="/employer/createpost" class="btn btn-success form-control">Create Job Post</a>
                </div>
            </div>
            <div class="card" >
                <div class="card-header p-3"><h3>Recent Job Posts</h3></div>
                <div class="card-body">
                    <a href=""style="text-decoration: none">
                        <div class="card p-3 mb-2">
                            <h4>Engineer</h4>
                            <p>Min. 1 year exp<br>Bachelor/College Degree in Engineering</p>  
                        </div> 
                    </a>
                    <a href=""style="text-decoration: none">
                        <div class="card p-3 mb-2">
                            <h4>Accountant</h4>
                            <p>Min. 1 year exp<br>Bachelor/College Degree in Engineering</p>  
                        </div> 
                    </a> 
                </div>      
            </div>
        </div>
        <div class="col-md-8 mt-3">
            
        </div>
    </div>
    
    
</div>
@endsection