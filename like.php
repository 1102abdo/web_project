<?php
session_start();
require_once("classes.php");
$user = unserialize($_SESSION["user"]);
// if (!empty( $user->id)&&) {

    # code...
// }
$user->likes($_REQUEST["post_id"],$user->id);
// header("location:Blog  Home.php");