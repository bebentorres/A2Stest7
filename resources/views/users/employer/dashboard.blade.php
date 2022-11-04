@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card mb-2">
                    <div class="card-header p-3"><h3>Company Logo and Overview</h3></div>
                    <div class="card-body text-center">
                        <img src="{{asset('build/assets/image/logo.png')}}" width="50%" alt="">
                        <br><br>
                        <p class="">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis saepe provident mollitia sapiente, ipsa dicta, veritatis earum eligendi nulla iste corporis officia molestias totam est deserunt perferendis asperiores dignissimos nostrum voluptatibus odit quae. Minus veniam sed quaerat laboriosam, perspiciatis minima dignissimos eos. Assumenda earum aperiam at, perspiciatis hic quas explicabo, exercitationem obcaecati quod excepturi maiores placeat et repellendus nam autem facere qui id! Ratione est autem ex delectus corrupti asperiores voluptate quidem nesciunt eligendi facere perferendis consequuntur nihil voluptatem voluptas qui magni et veniam veritatis aperiam, praesentium blanditiis ea ut modi! Enim ea molestias dolore dolorum odio est consequuntur pariatur eaque rem. Nam possimus voluptates eos odit? Harum, quo ipsum veritatis alias voluptatem totam. Quae iste modi vitae est velit placeat minima quaerat, dolorum quia culpa error, aut, natus cupiditate sequi quis? Earum deleniti quis non? Velit, qui. Voluptate veritatis sapiente officiis corrupti delectus temporibus totam! Sunt qui soluta quidem!
                        </p> 
                    </div>
                    <br>
                </div>
                <div class="card">
                    <div class="card-header p-3"><h3>Highlights</h3></div>
                    <div class="card-body row">
                        <div class="col-md-6">
                            <h4>Location</h4>
                            @if(empty(Auth::user()->employerprofile->location))
                            <p>N/A</p>
                            @else
                            <p>{{Auth::user()->employerprofile->location}}</p>
                            @endif
                            <h4>Benefits</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe eum repudiandae consequuntur molestias magnam, natus delectus est debitis porro autem praesentium veniam laudantium sint quo quos modi perspiciatis repellendus dolorem!</p>
                            <h4>Work Hours</h4>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ea quisquam accusamus libero maiores ipsum enim, modi soluta voluptatum a qui culpa reprehenderit, esse ratione nihil eius, non voluptate quaerat. Corrupti.</p>
                        </div>
                        <div class="col-md-6">
                            <h4>Company Size</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente animi quos rerum, molestiae magni natus eum? Veritatis reiciendis aliquid aspernatur nihil quam praesentium fuga. Reiciendis ipsum aut expedita est quisquam.</p>
                            <h4>Work Setup</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe eum repudiandae consequuntur molestias magnam, natus delectus est debitis porro autem praesentium veniam laudantium sint quo quos modi perspiciatis repellendus dolorem!</p>
                            <h4>Dress Code</h4>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ea quisquam accusamus libero maiores ipsum enim, modi soluta voluptatum a qui culpa reprehenderit, esse ratione nihil eius, non voluptate quaerat. Corrupti.</p>
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
                            <p>Contact no.: N/A</p>
                        @else
                            <p>Contact no.: {{Auth::user()->employerprofile->cnum}}</p>
                        @endif
                        
                    </div>
                    <div class="card-footer text-center">
                        @if(empty(Auth::user()->employerprofile->cname))
                            <a href="/employer/editprofile" class="btn btn-secondary form-control mb-2">edit profile</a>
                        @else
                            <a href="/employer/editprofile/update" class="btn btn-secondary form-control mb-2">update profile</a>
                        @endif
                        <br>
                        <a href="/employer/createpost" class="btn btn-primary form-control">Create Job Post</a>
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