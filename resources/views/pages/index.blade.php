@extends('layout.app')

@section('content')
        <div class="container"id="slogan">
        <div class="row">
            <div class="col-md-6">
                <h5 class="tagline">Access</h5>
                <h5 class="tagline-sm">your
                    <span class="tagline">Success</span>
                </h5>
                <div>
                    <span>
                        <a href="find_job/searchjobs_logged.html" class="orangebutton large nl">Find Work</a>
                        <a href="find_talent/find-talent.html" class="greenbutton large nl">Find Talent</a>
                    </span>
                    
                </div>  
            </div id="slogan-btn">
            <div class="col-md-6 image">
                <img src="images/banner.svg" alt="" width="100%">
            </div>
        </div>   
    </div>  

    <div class="container" id="categories">
        <h2>Search by Category</h2>
        <div id="categoryCards">
            <div class="card">
                <h4>IT & Development</h4>
            </div>
            <div class="card">
               <h4>Design & Creative</h4>
            </div>
            <div class="card">
                <h4>Sales and Marketing<h4>
            </div>
            <div class="card">
                <h4>Writing & Translation<h4>
            </div>
            <div class="card">
                <h4>Admin & Support<h4>
            </div>
            <div class="card">
                <h4>Finance & Accounting<h4>
            </div>
            <div class="card">
                <h4>Engineering & Architecture<h4>
            </div>
            <div class="card">
                <h4>Legal<h4>
            </div>
        </div>
    </div>

    <div class="container" id="news">
        <div class="row">
            <div class="col-md-6" id="caption">
                <h3>Jobs on the Hunt</h3>
                <p>We've also added a button to make it easier for you to see which jobs are already open with different companies by industry and area of expertise. Just click on any job title and it'll show all relevant companies. We hope this will make it easier for you find jobs that fit your interests!</p>
                <button class="greenbutton regular">Learn More</button>
            </div>
            <div class="col-md-6" id="image">
                <img src="images/logo.png" alt="" width="100%">
            </div>
            
        </div>
    </div>

@endsection