@extends('layout.app')

@section('content')
  <div class="container pt-1 pb-1 about-main-div rounded">

      <div class="container mt-3">
        <div class="row">
          <div class="col-md-6"><img class="img-fluid text-center rounded" src="images/about1.svg" style="height: auto; width: 100%;" alt=""></div>
          <div class="col-md-6 text-justify" style="padding-left: 40px;">
            <h1 style="margin-top:100px; margin-bottom: 30px;">What is A2S?</h1> 
            <p style="text-align: justify; text-justify: inter-word;">Access to Success is an online platform for both jobseekers looking to launch a sustainable career, and companies looking to hire creative and hardworking individuals. Our site removes the nuances of a face to face interview. From our site, you can interact with individuals or companies that could land you that dream job or productive team.</p>
          </div>
      </div>
    </div>
  </div>

  <div class="container rounded mt-3">

      <div class="row">
        
        <div class="col-md-6">  
          <div class="container mt-3">
            <h2 style="margin-top: 150px">Our Mission</h2> 
          </div>

          <div class="container mt-3" style="text-align: justify; text-justify: interword;">
            <p> The team behind Access to Success (A2S) aims to create a fair online job market platform for both jobseekers and employers alike. Unprofessional attitude and fraudulent behavior will not be tolerated.  
            </p>  
          </div>

          <div class="container mt-3">
            <h2>Our Vision</h2> 
          </div>

          <div class="container mt-3" style="text-align: justify; text-justify: interword;">
            <p> With Access to Success (A2S), we aim to create a productive and healthy environment where employers and jobseekers alike can interact with each other.
            </p>
            </div>
        </div>
        

        <div class="col-md-6">
          <img class="img-fluid pt-4 mx-auto rounded" style="width: 100%; height: 65vh;" src="images/about-img.svg" alt="">
        </div>
      </div>
  </div>

<div style="padding: 20px; border-radius: 20px;" class="container">
  <h3 class="text-center" style="margin-bottom: 100px">The Team Behind Access to Success(A2S)</h3>
  <div style="display: flex;">
    
      <div class="col-md-4">
        <img class="img-fluid mb-3" style="width: 15vw; height: auto; border-radius: 160px" src="images/Melvin.jpg" alt="">
        <h4 class="mt-3 mb-1">Melvin Gesulgon</h4>
        <p><em>Web Developer, Team Lead</em></p>
        <p style="margin-right: 10px;">Managed the overall progress of the Access to Success (A2S) website.</p>
      </div>
      <div class="col-md-4">
        <img class="img-fluid mb-3" style="width: 15vw; height: auto; border-radius: 160px" src="images/Ben.jpg" alt="">
        <h4 class="mt-3 mb-1">Ben Torres</h4>
        <p><em>Web Developer, Graphic Designer</em></p>
        <p style="margin-right: 10px;">Responsible for the aesthetics and branding of Access to Success (A2S).</p>
      </div>
      <div class="col-md-4">
        <img class="img-fluid mb-3" style="width: 15vw; height: auto; border-radius: 160px" src="images/kerwin-profile.jpg" alt="">
        <h4 class="mt-3 mb-1">Kerwin Oropeza</h4>
        <p><em>Web Developer</em></p>
        <p>Helped in building a responsive and interactive website for Access to Success (A2S).</p>
      </div>
      <!-- <div class="col-md-4">
        <img class="img-fluid" src="juan-dela-croix.jpg" alt="">
      </div>
      <div class="col-md-4">
        <img class="img-fluid" src="juan-dela-croix.jpg" alt="">
      </div> -->
    </div>
  </div>

      <div class="container">
        <h2 class="text-center fs-1">Contact us</h2> 
      </div>
      <br>

      <div class="container">
        <div class="row ">
            <div class="col-md-7" style="background-color: #003865; border-radius: 50px">
                <form action="" style="color: white; padding: 60px; border-radius: 50px;">
                    <h5>Full Name</h5>
                    <input class="form-control mb-3"  required type="text" name="Full Name">
                    <h5>Email</h5>
                    <input class="form-control mb-3" required type="email">
                    <h5>Subject</h5>
                    <input class="form-control mb-3" required type="text">
                    <h5>Message</h5>
                    <!-- <input class="form-control text-light btn" type="submit" value="Leave Message"> -->
                    <textarea class="form-control mb-3" rows="4" cols="80" name="comment" form="usrform"></textarea>
                    <br>
                    <input class="form-control greenbutton"   type="submit" value="Leave message">
                    <br>
                    <input class="form-control greenbutton" type="reset">
                </form>
            </div>
            <div id="nap" class="col-md-5 rounded" style="margin-top: 90px;">
                <h2 class="text-center">Leave a message</h2>
                <p style="margin-left: 30px; margin-right: 5px;">Couldn't find what you are looking for? Feel free to leave a message and we'll get back with you ASAP.</p>
                <br>
                <h3 class="text-center" style="margin-bottom: 5px;"><i class="bi bi-envelope me-3"></i>Email:</h3>
                <p class="text-center"><a href="mailto:admin@a2s.com">admin@a2s.com</a></p>
                <br>
                <h3 class="text-center" style="margin-bottom: 5px;"><i class="bi bi-telephone me-3"></i>Phone Number:</h3>
                <p class="text-center"><a href="tel:+123456797">+123456797</a></p>
                <br>
                <div class="text-center">
                  <h3 style="margin-bottom: 5px;">Access to Success</h3>
                  <p>2621 Rizal Avenue Extension</p>
                  <p>Metro Manila</p>
                </div>
            </div>
        </div>
      </div>

@endsection