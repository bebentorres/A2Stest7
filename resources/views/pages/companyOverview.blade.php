<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <style>
      @media only screen and (max-width: 600px) {
        #hero-signup-form {
            margin-top: 30px;
            width: 100vw;
        }
      }
      @media only screen and (min-width: 800px) { */
        #hero-signup-form {
            margin-top: 40px;
            width: 30vw;
            height: auto;
        }
        #talent-signup-form {
          margin-left: 0px;
        }
        #signup-talent-btn {
          display: flex;
          justify-content: center;
        }
      } 
     
    </style>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
        <!--Bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <!-- CSS  -->
    <link rel="stylesheet" href="style.css">
        <!-- fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
</head>
<body style="background-color: #F2F2F2;">
    <!-- navbar start -->
    <link rel="stylesheet" href="{{asset('css/nav-footer.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<script>
    function toggleMobileMenu(menu) {
    menu.classList.toggle('open');
}
</script>
<body>
  <header>
    <div class="brand">
        <a href="/">
            <img src="images/logo.png"> Access Success</a>
        <a></a>
    </div>
    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li>
                <div class="dropdown">
                    <button id="dropdownSearch">Search</button>
                    <div class="dropdown-content">
                        <a href="/jobPost">Jobs</a>
                        <a href="/talentAccountPage">Talents</a>
                    </div>
                </div>
            </li>
            <li><a href="/about">About</a></li>
            <li>
                <div class="dropdown">
                    <button id="dropdownSearch">Login</button>
                    <div class="dropdown-content">
                        <a href="/apply">Talent</a>
                        <a href="/companyProfile">Partner</a>
                    </div>
                </div>
            </li>
            <li><a href="/signup" id="signupbtn">Signup</a></li>
        </ul>
    </nav>
    <div id="toggle-icon" onclick="toggleMobileMenu(this)">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
        <ul class="mobile-view">
            <li><a href="/">Home</a></li>
            <li>
                <div class="dropdown">
                    <button id="dropdownSearch">Search</button>
                    <div class="dropdown-content">
                        <a href="/jobs">Jobs</a>
                        <a href="/talents">Talents</a>
                    </div>
                </div>
            </li>
            <li><a href="/about">About</a></li>
            <li>
                <div class="dropdown">
                    <button id="dropdownSearch">Login</button>
                    <div class="dropdown-content">
                        <a href="/apply">Talent</a>
                        <a href="/companyProfile">Partner</a>
                    </div>
                </div>
            </li>
            <li><a href="/signup" id="signupbtn">Signup</a></li>
        </ul>
    </div>
</header>
      <!-- navbar end -->

      <!-- main container start -->
      <div class="flex-container">

        <h1 class="text-center">Create your A2S talent seeker account</h1>
        <!-- <div class="container" style="background-color: #D9D9D9; border-radius: 20px; height: 65vh; width: auto; padding: 20px;"> -->
        <div class="container"> 
          <div class="row" style="padding: 20px;">
            
              <div id="talent-signup-form-container" class="col-md-5" style="background-color: #003865; border-radius: 20px; padding: 20px; height: 90%;">
                <div class="flex-container">
                  <h3 class="text-center" style="color: #D9D9D9; margin: 5px;">Complete your dream roster.<h3> 

                  <h3 class="text-center" style="color: #D9D9D9;"> Sign up NOW!</h3>
                   
                  <div id="talent-form-signup">
                    
                    <form action="login_partner.html">
                      
                        
                      <input class="form-control" type="text" required id="fName" placeholder="First name" style="margin-bottom: 10px;">
                      <br>
                      <input class="form-control " type="text" required id="lName"    placeholder="Last name" style="margin-bottom: 10px;">
                                              <br>
                    
                      <input class="form-control " type="email" required id="email"   placeholder="Email" style="margin-bottom: 10px;">
                      <br>
                      
                        <input class="form-control " type="password" required id="pwd1" placeholder="Enter password" style="margin-bottom: 10px;">
                        <br>
                        <input class="form-control " type="password" required id="pwd2" placeholder="Confirm password" style="margin-bottom: 10px;">
                    <!-- </div> -->
                    <br>
                    <div class="d-flex justify-content-center">
                      <button id="buttonbox signup-talent-btn" onclick="saveData();" class="greenbutton regular" style="margin-left: 5%;">Create account</button>
                    </div>
              </form>
                    <!-- <form action="">
                        
                            <input class="form-control" type="text" required placeholder="First name">
                            <br>
                            <input class="form-control " type="text" required placeholder="Last name">
                      
                          <br>

                            <input class="form-control " type="email" required placeholder="Email">
                            <br>
                            <input class="form-control " type="text" required placeholder="Company name">
                          
                            <br>
                          
                              <input class="form-control " type="password" required placeholder="Enter password">
                              <br>
                              <input class="form-control " type="password" required placeholder="Confirm password">
                          
                          <br>
                          <div class="d-flex justify-content-center">
                            <button id="buttonbox signup-talent-btn" class="greenbutton regular">Create account
                            </button>
                          </div>
                    </form> -->
                  </div>    
                </div>
                

                
              </div>
              <!-- end of first column -->
              <div class="col-md-7">
                <img class="img-fluid" id="hero-signup-form"  src="images/talent-sign-up-form.svg" alt="" style="opacity: 80%; border-radius: 20px; margin-left: 10px;">
              </div>
          
          </div>
        </div>
    </div>




      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
      <script src="js/signup.js"></script>
    </body>
    </html>