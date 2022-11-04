<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <title>Login</title>
</head>
<body>

    <div class="container" id="signup-panel">
        <div class="row">
            <div class="col-md-6">
                <img src="images/signup.svg" alt="" width="100%">
            </div>
            <div class="col-md-6" id="signup">
                <h1>Create Account</h1>
                <div id="choices">
                    <a class= "nl" href="/search">
                        <div class="signup-choices talent">
                            <span>
                                <i class="fa-solid fa-briefcase"></i>
                                <label>I am a jobseeker</label>
                            </span>
                        </div>
                    </a>
                    
                    <a class= "nl" href="/companyOverview">
                        <div class="signup-choices employer">
                            <span>
                                <i class="fa-solid fa-people-roof"></i>
                                <label>I am a hiring manager</label>
                            </span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div>
            
        </div>
    </div>
</body>
</html>