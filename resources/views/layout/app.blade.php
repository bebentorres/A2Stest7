<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{config('app.name', 'Default Value')}}</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="{{asset('css/nav-footer.css')}}">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <link rel="stylesheet" href="{{asset('css/main.css')}}">
  <link rel="stylesheet" href="{{asset('build/assests/app.css')}}">
  <link rel="stylesheet" href="{{asset('css/login.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
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
    <div class="flex-container">
      @yield('content')
   </div>
   
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