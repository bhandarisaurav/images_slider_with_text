<html>
<head>
    <title>Add Data</title>

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="assets/css/add_data.css" rel="stylesheet">
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
</head>
</html>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="index.php">Slider</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="add.php">Add Data
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<div class="wrapper fadeInDown">
    <div id="formContent">
        <div class="fadeIn first">
            <img src="assets/images/icon.svg" id="icon" alt="User Icon"/>
        </div>
        <form method="POST" action="insert_slider_text.php">
            <textarea type="text" id="login" class="fadeIn second" name="text" placeholder="Enter new slider text" required></textarea><br><br>
            <input type="submit" name="submit" class="fadeIn fourth" value="submit">
        <form>
    </div>
</div>
<?php include "footer.php" ?>