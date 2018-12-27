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

<?php
$fileExtensions = ['jpeg','jpg','png']; // Get all the file extensions

if(isset($_POST['submit'])){

    // Count total files
    $countfiles = count($_FILES['file']['name']);
    echo $countfiles;
    // Looping all files
    for($i=0;$i<$countfiles;$i++){
        $filename = $_FILES['file']['name'][$i];
        echo $filename;
        // Upload file
        move_uploaded_file($_FILES['file']['tmp_name'][$i],'assets/pic/'.$filename);

    }
    header("Location: mainpage.php");

}
?>
<?php include "header.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Image</title>

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="assets/css/add_data.css" rel="stylesheet">
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
</head>
</html>

<div class="wrapper fadeInDown">
    <div id="formContent">
        <div class="fadeIn first">
            <img src="assets/images/icon.svg" id="icon" alt="User Icon"/>
        </div>
        <form action="imageUpload.php" method="post" enctype="multipart/form-data">
            Upload a File:
            <input type="file" name="file[]" id="file" multiple required>
<br>
<br>
<br>
            <input type="submit" name="submit" value="Upload File Now" >
        </form>
    </div>
</div>
<?php include "footer.php" ?>
