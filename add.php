<?php
session_start();
if (!isset($_SESSION['user'])) {

    echo "<SCRIPT type='text/javascript'>
                alert('Log In First');
                window.location.replace('index.php')
              </SCRIPT>";
    exit();
}

?>

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
            <a class="navbar-brand" href="mainpage.php">Demo Slider</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="add.php">Add Data</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="imageUpload.php">Add Images</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="viewImages.php">Edit Images</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


<?php
$filename = "slider.txt";
$file = fopen($filename, "r+");
$flag = 0;
if ($file == true) {
    $filename = "slider.txt";
    $file = fopen($filename, "r+");
    $fileSize = filesize($filename);
    $fileText = fread($file, $fileSize);
    if (strlen($fileText) >= 0) {
        $flag = 1;
    }
    fclose($file);
} else {
    header("Location: index.php");
}
?>

<div class="wrapper fadeInDown">
    <div id="formContent">
        <div class="fadeIn first">
            <img src="assets/images/icon.svg" id="icon" alt="User Icon"/>
        </div>
        <form method="POST" action="insert_slider_text.php">
            <textarea type="text" id="login" class="fadeIn second" name="text" placeholder="Enter new slider text"
                      required><?php if ($flag == 1) echo $fileText; else echo ""; ?></textarea><br><br>
            <input type="submit" name="submit"
                   class="fadeIn fourth" <?php if ($flag == 0) echo 'value="Submit"';else echo 'value="Update";' ?> />
            <form>
    </div>
</div>
<?php include "footer.php" ?>