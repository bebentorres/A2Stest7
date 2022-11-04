@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">
                        <img src="{{asset('build/assets/image/profile.jpg')}}" class="w-25 rounded-circle mt-5 mb-3" alt="">
                        @if (empty(Auth::user()->jobseekerprofile->fname))
                            <h4>{{Auth::user()->name}}</h4>
                        @else
                            <h4>{{Auth::user()->jobseekerprofile->fname}} {{Auth::user()->jobseekerprofile->lname}}</h4>
                        @endif
                        <h4>{{Auth::user()->email}}</h4>
                        @if (empty(Auth::user()->jobseekerprofile->bday))
                            <h4>N/A</h4>
                        @else
                            <h4>{{Auth::user()->jobseekerprofile->bday}}</h4>
                        @endif
                        <hr>
                        @if (empty(Auth::user()->jobseekerprofile->bio))
                            <p>bio yet to be updated</p>
                        @else
                            <p class="p-3">{{Auth::user()->jobseekerprofile->bio}}</p>
                        @endif
                        
                        <hr>
                        
                    </div>
                    <div class="card-body">
                        <h3 class="p-3">Employment History</h3>
                        <br>
                        @if (empty(Auth::user()->jobseekerprofile->emphistory))
                            <div class="p-3">
                                <h5>yet to be updated</h5>
                            </div>
                        @else
                            <div class="p-3">
                                <h5>{{Auth::user()->jobseekerprofile->emphistory}}</h5>
                            </div>
                        @endif
                        <hr>
                        <h3 class="p-3">Educational Background</h3>
                        <br>
                        @if (empty(Auth::user()->jobseekerprofile->educ))
                            <div class="p-3">
                                <h5>yet to be updated</h5>
                            </div>
                        @else
                            <div class="p-3">
                                <h5>{{Auth::user()->jobseekerprofile->educ}}</h5>
                            </div>
                        @endif
                        <hr>
                        @if (empty(Auth::user()->jobseekerprofile->educ))
                        @else
                        <h3 class="p-3">Additional Information</h3>
                            <div class="p-3">
                                <h5>{{Auth::user()->jobseekerprofile->addinfo}}</h5>
                            </div>
                        @endif
                        <br>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card p-3 mb-2">
                    <div>
                        <h4>Address</h4>
                        @if (empty(Auth::user()->jobseekerprofile->address))
                        <p>yet to be updated</p>
                        @else
                        <p class="p-3">{{Auth::user()->jobseekerprofile->address}}</p>
                        @endif
                    </div>
                    <div>
                        <h4>Contact Number</h4>
                        @if (empty(Auth::user()->jobseekerprofile->number))
                        <p>yet to be updated</p>
                        @else
                        <p class="p-3">{{Auth::user()->jobseekerprofile->number}}</p>
                        @endif
                    </div>
                    <div>
                        <h4>Resume</h4>
                        <a href="">Sample.pdf</a>  
                    </div>
                    <br>
                    <div>
                        <h4>Certification</h4>
                        @if (empty(Auth::user()->jobseekerprofile->cert))
                        <p>yet to be updated</p>
                        @else
                        <p class="p-3">{{Auth::user()->jobseekerprofile->cert}}</p>
                        @endif
                    </div>
                    <div>
                        <h4>Languange</h4>
                        @if (empty(Auth::user()->jobseekerprofile->language))
                        <p>yet to be updated</p>
                        @else
                        <p class="p-3">{{Auth::user()->jobseekerprofile->language}}</p>
                        @endif
                    </div>
                    <div>
                        <h4>Skills</h4>
                        @if (empty(Auth::user()->jobseekerprofile->skills))
                        <p>yet to be updated</p>
                        @else
                        <p class="p-3">{{Auth::user()->jobseekerprofile->skills}}</p>
                        @endif
                    </div>
                </div>
                <div class="card p-3 mb-2">
                    <div>
                        <a href="" class="btn btn-primary form-control mb-2">View Applied Jobs</a>
                        <a href=""class="btn btn-outline-primary form-control mb-2">Saved Jobs</a>
                        @if(empty(Auth::user()->jobseekerprofile->lname))
                            <a href="/jobseeker/editprofile" class="btn btn-outline-primary form-control">Edit Profile</a>
                        @else
                            <a href="/jobseeker/editprofile/update" class="btn btn-outline-primary form-control">Update Profile</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>
@endsection