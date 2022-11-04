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
                        <p class="p-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo illum, quas nam, consequatur facere atque, minus fuga quibusdam earum ipsam placeat error obcaecati! Laborum perspiciatis autem placeat iste reprehenderit porro.</p>
                        <hr>
                        
                    </div>
                    <div class="card-body">
                        <h3 class="p-3">Employment History</h3>
                        <br>
                        <div class="p-3">
                            <h4>Project Manager</h4>
                            <p>Manage overall activities, members and progress of ongoing projects.</p>
                        </div>
                        <div class="p-3">
                            <h4>Graphic Designer</h4>
                            <p>Plans and designs brand assets that is in line with the core values of the company.</p>
                        </div>
                        <hr>
                        <h3 class="p-3">Educational Background</h3>
                        <br>
                        <div class="p-3">
                            <h4>Bachelor of Science in Industrial Engineering</h4>
                        </div>
                        <hr>
                        <h3 class="p-3">Additional Information</h3>
                        <br>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card p-3 mb-2">
                    <div>
                        <h4>Address</h4>
                        <p>Makati City</p>
                    </div>
                    <div>
                        <h4>Contact Number</h4>
                        <p>0912-345-6789</p>
                    </div>
                    <div>
                        <h4>Resume</h4>
                        <a href="">Sample.pdf</a>  
                    </div>
                    <br>
                    <div>
                        <h4>Certification</h4>
                        <p>N/A</p>
                    </div>
                    <div>
                        <h4>Languange</h4>
                        <p>Filipino <br>English</p>
                    </div>
                    <div>
                        <h4>Work Availability</h4>
                        <p>I can start as soon as possible</p>
                    </div>
                    <div>
                        <h4>Skills</h4>
                        <p>Graphic Designing <br>Project Management</p>
                    </div>
                </div>
                <div class="card p-3 mb-2">
                    <div>
                        <a href="" class="btn btn-primary form-control mb-2">View Applied Jobs</a>
                        <a href=""class="btn btn-secondary form-control mb-2">Saved Jobs</a>
                        @if(empty(Auth::user()->jobseekerprofile->lname))
                            <a href="/jobseeker/editprofile" class="btn btn-secondary form-control">Edit Profile</a>
                        @else
                            <a href="/jobseeker/editprofile/update" class="btn btn-secondary form-control">Update Profile</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>
@endsection