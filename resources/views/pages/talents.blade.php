<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('css/nav-footer.css')}}">
    <link rel="stylesheet" href="{{asset('css/style-melvin.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Document</title>
    <style>
       
    @media (max-width: 1020px) {
        .flex-container {
            display: flex;
        
           
        }

        .cat1 {
            display: flex;
            flex-direction: column;
        }

        .talent-c1 {
          padding: 0;
        }

      }
      
      @media (max-width: 990px) {
        .flex-container {
            display: flex;
          
           
        }

        .cat1 {
            display: flex;
            flex-direction: column;
        }

        .talent-c1 {
          padding: 0;
        }

      }

      @media (max-width: 860px) {
        .flex-container {
            display: flex;
            flex-direction: column;
           
        }

        .cat1 {
            display: flex;
            flex-direction: column;
          
        }

        .talent-c1 {
          padding: 0;
        }

      }

      @media (min-width: 700px) {
        .flex-container {
            display: flex;
            width: auto;
           
        }

        .cat1 {
            display: flex;
            flex-direction: column;
        }

        .talent-c1 {
          padding: 0;
        }

      }

      @media (max-width: 360px) {
        .flex-container {
            display: block;
            
            height: auto;
            width: 400px;
            padding: 0;
        }

        .cat1 {
            display: flex;
            flex-direction: row;
            width: 50%;
            font-size: 5px;
        }

      }
    </style>
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
                <img src="../images/logo.png"> Access Success</a>
            <a></a>
        </div>
        <nav>
            <ul>
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

      
<div class="container">
        <div class="container" id="categories2">
            <h3>Search by Category</h3>
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
                    <h4>Engineering <br>& Architecture<h4>
                </div>
                <div class="card">
                    <h4>Legal<h4>
                </div>
            </div>
        </div>
        <br><br>

        <br>
            <div class="flex-container">
              <div class="cat1" style="flex-grow: 1; width: 25vw; height: max-content; margin-right: 10px; border-radius: 20px; border: none; flex-flow: column nowrap; background-color: #D9D9D9; padding: 20px;">
                    
                    <!-- filter 1 -->
                    <h4 class="text-center" style="margin-top: 20px;">Filter by niche</h4>
                    <input type="checkbox" style="margin-left: 10px">
                    <label for="checkbox">Accounting</label>
                    <br>
                    <input type="checkbox" style="margin-left: 10px">
                    <label for="checkbox" style="padding: 5px;">Content Marketing</label>
                    <br>
                    <input type="checkbox" style="margin-left: 10px">
                    <label for="checkbox" style="padding: 5px;">SEO</label>
                    <br>
                    <input type="checkbox" style="margin-left: 10px">
                    <label for="checkbox" style="padding: 5px;">Web Development</label>
                    <br>
                    <input type="checkbox" style="margin-left: 10px">
                    <label for="checkbox" style="padding: 5px;">Cloud Computing</label>
                    <br>
                    <input type="checkbox" style="margin-left: 10px">
                    <label for="checkbox" style="padding: 5px;">Graphic Design</label>
                    <br>

                      <!-- Filter 2 -->
                    <h4 class="text-center" style="margin-top: 5px;">Filter by availability</h4>
                    <input type="checkbox" style="margin-left: 10px">
                    <label for="checkbox" style="padding: 5px;">Full time</label>
                    <br>
                    <input type="checkbox" style="margin-left: 10px">
                    <label for="checkbox" style="padding: 5px;">Part time</label>
                    <br>
                    <input type="checkbox" style="margin-left: 10px">
                    <label for="checkbox" style="padding: 5px;">Flexible time</label>
                    <br>
                    <input type="checkbox" style="margin-left: 10px">
                    <label for="checkbox" style="padding: 5px;">Project Based</label>
                    <br>
                    <button class="greenbutton regular w-100" style="width: 320px;">Apply Filter</button>

              </div>
              <a href="talent-profile.html" class="nl nla">
                <div style="flex-grow: 5; margin-left: 5px;">
                    <div style="background-color: #D9D9D9; height: 300px; width: max; border-radius: 30px; flex-wrap: wrap;" class="flex-container">
  
                          <div style="flex-grow: 1; justify-content: space-between; padding: 10px; height: 200px; width:200px;" class="talent-c1">
                            <img src="../images/Joe-kalayo.jpg" style="border-radius: 30px; padding: 10px; width: 200px; height: 200px; justify-content: center;" alt="">
                          </div>
                          <!-- start of talent card 1 -->
                           <div style="flex-grow: 2; justify-content: space-between;" >
                              <h3 class="text-start" style="padding-top: 30px;">Joe Kalayo</h3>
                              <p>Graphic Designer/Illustrator</p>
                              <p>National Capital Region</p>
                              <p>Full Time</p>
                              <br>
                              <button class="graybutton">Add to shortlist</button>
                              <button class="graybutton">Remove from list</button>
                              <button class="greenbutton">View profile</button>
                          </div>
                          
                         <!-- <div style="flex-grow: 3;">
                              <p class="text-end" style="padding: 25px; left: 500px;"><i class="bi bi-bookmark greenbutton"></i></p>
      
                              <p><i class="bi bi-briefcase mx-3"></i>2 years of experience</p>
                              <p><i class="bi bi-mortarboard mx-3"></i>BS Fine Arts</p>
                        </div> -->
                         
                  </div>
                
              </a>
              
                      <!-- end of talent card 1 -->
                      <!-- start of talent card 2 -->
            <a href="talent-profile.html" class="nl nla">
                <div style="flex-grow: 5; margin-left: 5px; margin-top: 20px;">
                    <div style="background-color: #D9D9D9; height: 300px; width: max; border-radius: 30px; flex-wrap: wrap;" class="flex-container">
  
                          <div style="flex-grow: 1; justify-content: space-between; padding: 10px; height: 200px; width:200px;">
                            <img src="../images/juan-dela-croix.jpg" style="border-radius: 30px; padding: 10px; width: 200px; height: 200px; justify-content: center;" alt="">
                          </div>
  
                           <div style="flex-grow: 2; justify-content: space-between; padding-left: 10px;">
                              <h3 class="text-start" style="padding-top: 30px;">Juan Dela Cruz</h3>
                              <p>Graphic Designer/Project Manager</p>
                              <p>National Capital Region</p>
                              <p>Full Time</p>
                              <br>
                              <button class="graybutton">Add to shortlist</button>
                              <button class="graybutton">Remove from list</button>
                              <button class="greenbutton">View profile</button>
                          </div>
  
                         <!-- <div style="flex-grow: 3; justify-content: space-between;">
                              <p class="text-end" style="padding: 25px; left: 500px;"><i class="bi bi-bookmark greenbutton text-end"></i></p>
      
                              <p><i class="bi bi-briefcase mx-3"></i>5 years of experience</p>
                              <p><i class="bi bi-mortarboard mx-3"></i>BS Industrial Engineering</p>
                        </div>  -->
                  </div>
            </a>
              
                <!-- end of talent card 2 -->
                <!-- start of talent card 3 -->
            <a href="talent-profile.html" class="nl nla">
                <div style="flex-grow: 5; margin-left: 5px; margin-top: 20px;">
                    <div style="background-color: #D9D9D9; height: 300px; width: max; border-radius: 30px; flex-wrap: wrap;" class="flex-container">
  
                          <div style="flex-grow: 1; justify-content: space-between; padding: 10px; height: 200px; width:200px;">
                            <img src="../images/Roadie-Fernandez.jpg" style="border-radius: 30px; padding: 10px; width: 200px; height: 200px; justify-content: center;" alt="">
                          </div>
  
                           <div style="flex-grow: 2; justify-content: space-between;">
                              <h3 class="text-start" style="padding-top: 30px;">Roadie Fernandez</h3>
                              <p>Data Scientist</p>
                              <p>Baguio</p>
                              <p>Full Time</p>
                              <br>
                              <button class="graybutton">Add to shortlist</button>
                              <button class="graybutton">Remove from list</button>
                              <button class="greenbutton">View profile</button>
                          </div>
  
                         <!-- <div style="flex-grow: 3; justify-content: space-between;">
                              <p class="text-end"  style="padding: 25px; left: 500px;"><i class="bi bi-bookmark greenbutton"></i></p>
      
                              <p><i class="bi bi-briefcase mx-3"></i>7 years of experience</p>
                              <p><i class="bi bi-mortarboard mx-3"></i>BS Statistics</p>
                        </div>  -->
                  </div>
              </div>
            </a>
              
            <!-- end of talent card 3 -->

            </div>
        </div>
    </div>

</div>


      
      <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

<footer class="footer">
    <div class="footer container">
        <div class="footer-row">
            <div class="footer-items">
                <ul>
                    <h4>Find Talent</h4>
                    <li><a href="#">How to Hire</a></li>
                    <li><a href="#">Limitation</a></li>
                    <li><a href="#">Report Talent</a></li>
                </ul>
            </div>
            <div class="footer-items"> 
                <ul>
                    <h4>Find Work</h4>
                    <li><a href="#">How to find work</a></li>
                    <li><a href="#">Tips</a></li>
                    <li><a href="#">Report Client</a></li>
                </ul>
            </div>
            <div class="footer-items">
                <ul>
                    <h4>Resources</h4>
                    <li><a href="#">Help and Support</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="#">FAQs</a></li>
                    <li><a href="#">Community</a></li>
                </ul>
            </div>
            <div class="footer-items">
                <ul>
                    <li><h4>Company</h4></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Mission</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul> 
            </div>
        </div>
        <div class="social-links">
            <h4>Social Handles: </h4>
            <span>                 
                <a href="www.facebook.com"><i class="bi bi-facebook fs-1 text-success ms-4"></i></a>
                <a href="www.github.com"><i class="bi bi-github fs-1 text-success ms-4"></i></a>
                <a href="www.linkedin.com"><i class="bi bi-linkedin fs-1 text-success ms-4"></i></a>
                <a href="www.facebook.com"><i class="bi bi-messenger fs-1 text-success ms-4"></i></a>
                <a href="www.twitter.com"><i class="bi bi-twitter fs-1 text-success ms-4"></i></a>
            </span>
        </div>
    </div>
</footer>
</body>
</html>