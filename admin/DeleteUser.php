<?php
session_start();
require_once("../classes.php");
$user = unserialize($_SESSION["user"]);
$user->delete_account($_REQUEST["user_id"]);
header("location:dashboard.php?msg=user deleted");