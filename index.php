<?php
include 'connectdb.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="8-utf">
        <title></title>
        <link rel="stylesheet" href="CSS.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    </head>
    <body style="font-size:20px;color:white">
     <div id="fullscreen_bg" class="fullscreen_bg"/>
     <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <span><p>Daily SET</p></span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                  <span class="navbar-toggler-icon"></span>
                </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Login</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="api_google_map.php">API</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container" align="center">

	<form class="form-signin" action="login.php" method="POST">
		<h1 class >Sign In</h1>
		<input type="text" class="form-control" placeholder="Username" required autofocus name="username"><br>
		<input type="password" class="form-control" placeholder="Password" required name="password"><br>
        <button type="button" class="btn btn-primary" onclick="window.location = 'Dashboard.html'">Back</button>
        <button class="btn btn-lg btn-primary btn-block" type="submit" value="Log In">Login</button>
        <button class="btn btn-lg btn-primary btn-block" type="submit" onclick="window.location = 'frm_register.php'" value="Register">Register</button>
    </form>
    <br>
</div>
    </body>
</html>