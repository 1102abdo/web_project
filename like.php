<?php
session_start();
require_once("classes.php");
$user = unserialize($_SESSION["user"]);

$user->likes($post_id,$user_id);