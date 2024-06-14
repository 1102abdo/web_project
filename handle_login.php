<?php
session_start();
$errors = [];
if (empty($_REQUEST["email"])) $errors["login"]="empty field";
if (empty($_REQUEST["password"])) $errors["login"]="empty field";

if(empty($errors)){
    require_once("classes.php");
    User::login($_REQUEST["email"],md5($_REQUEST["password"]));
}else{
    $_SESSION["errors"]=$errors;
    header("location:login.php?msg=empty field");
}
