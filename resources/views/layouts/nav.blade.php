<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('build/assets/app.css')}}">
    <link rel="stylesheet" href="{{asset('build/assets/css/navfooter.css')}}">
    <script src="{{asset('build/assets/app.js')}}"></script>
    <title>Access Success</title>
</head>
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
                <li><a href="/search">Search</a></li>
                <li><a href="about.html">About</a></li>
                <li>
                    <div class="dropdown">
                        <button id="dropdownSearch">Login</button>
                        <div class="dropdown-content">
                            <a href="login_talent.html">Talent</a>
                            <a href="login_partner.html">Partner</a>
                        </div>
                    </div>
                </li>
                <li><a href="signup.html" id="signupbtn">Signup</a></li>
            </ul>
        </nav>
        <div id="toggle-icon" onclick="toggleMobileMenu(this)">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
            <ul class="mobile-view">
                <li><a href="index.html">Home</a></li>
                <li>
                    <div class="dropdown">
                        <button id="dropdownSearch">Search</button>
                        <div class="dropdown-content">
                            <a href="find_job/searchjobs.html">Jobs</a>
                            <a href="find_talent/find-talent.html">Talents</a>
                        </div>
                    </div>
                </li>
                <li><a href="about.html">About</a></li>
                <li>
                    <div class="dropdown">
                        <button id="dropdownSearch">Login</button>
                        <div class="dropdown-content">
                            <a href="login_talent.html">Talent</a>
                            <a href="login_partner.html">Partner</a>
                        </div>
                    </div>
                </li>
                <li><a href="signup.html" id="signupbtn">Signup</a></li>
            </ul>
        </div>
    </header>

</body>
</html>