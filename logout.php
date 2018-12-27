<?php
/**
 * Created by PhpStorm.
 * User: saura
 * Date: 11/23/2018
 * Time: 2:59 PM
 */

session_start();
session_unset();
session_destroy();
header("location: index.php");
exit();
?>