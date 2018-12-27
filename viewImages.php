<?php
/**
 * Created by PhpStorm.
 * User: saura
 * Date: 11/23/2018
 * Time: 10:53 AM
 */



session_start();
if (!isset($_SESSION['user'])) {
    echo "<SCRIPT type='text/javascript'>
                alert('Log In First');
                window.location.replace('index.php')
              </SCRIPT>";
    exit();
}

include "header.php";
if($_GET['delete']){
    $path = $_GET['delete'];
    unlink($path);
}
?>


<style>
    .image {
        width: 96px;
    }

    .full {
        /*height: 92vh;*/
    }
</style>
<div class="container full">
    <br>
    <br>
    <br>
    <h1> Delete Uploaded Images</h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover allDataTable">
            <thead>
            <tr>
                <th>S.N.</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $files = glob("assets/pic/*.*");
            for ($i = 1; $i <= count($files); $i++) {
                $img = $files[$i-1];
                echo "    
                <tr>
                    <td>$i</td>
                    <td>
                            <img class='image' src=$img alt='Picture'>
                    </td>
                    <td>
                        <div class='container'>
                            <div class='row'>
                                <a href='viewImages.php?delete=$img' class='btn btn-danger'>
                                    <span class='fa fa-trash' aria-hidden='true'></span>
                                    <span><strong>Delete Image</strong></span>
                                </a>
                            </div>
                        </div>
                    </td>

                </tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
</div>
<?php include "footer.php" ?>

<?php
function delete($path){
    unlink($path);
}
?>
