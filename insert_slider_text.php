<html>
<head>
    <link rel="stylesheet" type="text/css" href="assets/css/sweetalert.css">
    <script type="text/javascript" src="assets/js/sweetalert-dev.js"></script>
    <script type="text/javascript">

        function sweetAlert_success() {
            swal({
                    title: "Success",
                    text: "Slider Content added Successfully!!!!",
                    type: "success",
                }
            ).then(function () {
                window.location.href = "index.php";
            });
        }

        function sweetAlert_failed() {
            swal({
                    title: "Failed",
                    text: "Some error occurred while saving. Please try again!!",
                    type: "error"
                }
            ).then(function () {
                window.location.href = "add.php";
            });
        }
    </script>
</head>
<body>
<?php
if (isset($_POST['submit'])) {
    $value = $_POST['text'];
    $filename = "slider.txt";
    $file = fopen($filename, "w");

    if ($file == false) {
        echo("Error in opening new file");
        exit();
    }
    $x = fwrite($file, $value);
    fclose($file);
    if ($x) {
        echo '<script type="text/javascript">sweetAlert_success();</script>';
    } else {
        echo '<script type="text/javascript">sweetAlert_failed();</script>';
    }
} else {
    header("Location: add.php");
}
?>
</body>
</html>