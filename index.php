<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="UTF-8">
    <title>Dark blue Login Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>

    <link rel="stylesheet" href="assets/css/lstyle.css">
    <style>
        body {
            -webkit-transform: scale(1.2);
            -moz-transform: scale(1.2);
            -o-transform: scale(1.2);
        }
    </style>

</head>

<body>

<div id="particles-js"></div>
<body class="login">
<div class="container" style="margin-top: 180px;">
    <div class="login-container-wrapper clearfix">
        <div class="logo">
            <i class="fa fa-sign-in"></i>
        </div>
        <div class="welcome"><strong>Welcome,</strong> please login</div>

        <form class="form-horizontal login-form" method="post" action="mainpage.php">
            <div class="form-group relative">
                <input id="login_username" class="form-control input-lg" type="text" placeholder="Username" name="username" required>
                <i class="fa fa-user"></i>
            </div>
            <div class="form-group relative password">
                <input id="login_password" class="form-control input-lg" type="password" placeholder="Password" name="password" required>
                <i class="fa fa-lock"></i>
            </div>
            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-success btn-lg btn-block">Login</button>
            </div>
            <div class="checkbox pull-left">
                <label><input type="checkbox"> Remember</label>
            </div>
        </form>
    </div>


</div>

</body>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script src='https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js'></script>



<script  src="assets/js/lindex.js"></script>




</body>

</html>
