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
    <div class="container" id="login-panel">
        <div class="row">
            <div class="col-md-6" id="login-image">
                <img src="images/undraw_login_re_4vu2.svg" alt="" width="100%">
            </div>
            <div class="col-md-6" id="login">
                <div>
                    <h1>A2S Partner Login</h1>
                    <input id="e" type="email" placeholder="email"><br>
                    <input id="pw" type="password" placeholder="password">
                    <div id="Remember">
                        <span><input type="checkbox" id="rem"><label for="rem">Remember me</label></span>
                        <a href="#">forgot?</a>           
                    </div>
                    <button id="loginbtn">login</button>
                    <p>New User? Create an account for FREE! <br>Click <a href="/signup">here</a></p>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>