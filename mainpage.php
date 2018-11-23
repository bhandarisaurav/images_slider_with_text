<?php include "header.php";?>
<?php if (!isset($_POST['submit'])) {
    echo "<SCRIPT type='text/javascript'>
        alert('Log In Again');
        window.location.replace('index.php')</SCRIPT>";
} else {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    if ($user == 'superadmin' && $pass == 'superpassword') {
        ?>
        <style>
            .carousel-indicators li {
                display: inline-block;
                width: 25px;
                height: 25px;
                margin: 10px;
                text-indent: 0;
                cursor: pointer;
                border: none;
                border-radius: 100%;
                background-color: #0000ff;
                box-shadow: inset 1px 1px 1px 1px rgba(0, 0, 0, 0.5);
            }

            .carousel-indicators .active {
                width: 30px;
                height: 30px;
                margin: 10px;
                background-color: #ffff99;
            }
        </style>

        <header>
            <div class="container-fluid">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="2000">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>

                        <?php
                        $files = glob("assets/pic/*.*");
                        for ($i = 1; $i <= count($files) - 1; $i++) {
                            echo "<li data-target='#carouselExampleIndicators' data-slide-to='$i'></li>";
                        }
                        ?>
                        <!--            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>-->
                        <!--            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>-->
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <!-- Slide One - Set the background image for this slide in the line below -->
                        <?php
                        $files = glob("assets/pic/*.*");
                        for ($i = 0; $i < count($files); $i++) {
                            $num = $files[$i];
                            $num = "'" . $num . "'";
//
//                echo '<img src="'.$num.'" alt="random image">'."&nbsp;&nbsp;";
                            if ($i == 0) {
                                echo "
                <div class='carousel-item active'>
                <img src=$num style='position: absolute;top: -9999px;left: -9999px;right: -9999px;bottom: -9999px;margin: auto;'/>
                <div class='carousel-caption d-none d-md-block'>
                </div>
            </div>
                ";
                            } else {
                                echo "
                <div class='carousel-item'>
                <img src=$num style='position: absolute;top: -9999px;left: -9999px;right: -9999px;bottom: -9999px;margin: auto;'/>
                <div class='carousel-caption d-none d-md-block'>
                </div>
            </div>
                ";
                            }
                        }
                        ?>
                        <!--            <div class="carousel-item active" style="background: url('http://placehold.it/1900x1080') no-repeat scroll center center;">-->
                        <!--                <div class="carousel-caption d-none d-md-block">-->
                        <!--                    <h3>First Slide</h3>-->
                        <!--                    <p>This is a description for the first slide.</p>-->
                        <!--                </div>-->
                        <!--            </div>-->

                        <!-- Slide Two - Set the background image for this slide in the line below -->
                        <!--            <div class="carousel-item">-->
                        <!--                <div class="carousel-caption d-none d-md-block">-->
                        <!--                    <h3>Second Slide</h3>-->
                        <!--                    <p>This is a description for the second slide.</p>-->
                        <!--                </div>-->
                        <!--            </div>-->
                        <!-- Slide Three - Set the background image for this slide in the line below -->
                        <!--            <div class="carousel-item">-->
                        <!--                <div class="carousel-caption d-none d-md-block">-->
                        <!--                    <h3>Third Slide</h3>-->
                        <!--                    <p>This is a description for the third slide.</p>-->
                        <!--                </div>-->
                        <!--            </div>-->
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </header>

        <?php include "footer.php" ?>
    <?php }else{
        echo "<SCRIPT type='text/javascript'>
        alert('Username/Password Error!!!');
        window.location.replace('index.php');</SCRIPT>";
        }
} ?>
