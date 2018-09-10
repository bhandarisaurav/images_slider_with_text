
<?php
$filename = "slider.txt";
$file = fopen($filename, "r+");

if ($file == false) {
    echo("Error in opening file");
    exit();
}

$fileSize = filesize($filename);
$fileText = fread($file, $fileSize);
fclose($file);
?>
<footer class="py-4 bg-dark">
    <div class="container">
        <div class="marquee">
            <p class="m-0 text-center text-white">
                <?php echo $fileText; ?>
            </p></div>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src='assets/js/jquery.min.js'></script>
<script src='assets/js/jquery.marquee.min.js'></script>
<script src='assets/js/custom.js'></script>
<script src='assets/js/bootstrap.bundle.min.js'></script>
<script src='assets/js/sweetalert-dev.js'></script>
