<?php
session_start();
require_once("../classes.php");
$user = unserialize($_SESSION["user"]);
$user->delete_posts($_REQUEST["post_id"]);
header("location:dashboard.php?msg=post deleted");