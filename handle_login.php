<?php
session_start();
$errors = [];
if (empty($_REQUEST["email"])) $errors["login"]="empty field";
if (empty($_REQUEST["password"])) $errors["login"]="empty field";

if(empty($errors)){

    require_once("classes.php");
    $user = User::login($_REQUEST["email"],md5($_REQUEST["password"]));
    if (!empty($user)) {
        $_SESSION["user"]=serialize($user);
        if ($user->role == "subscriber") {
            header("location:Blog Home.php");

        }else if($user->role == "admin") {
            header("location:admin/dashboard.php");
        }
    }else{
        $_SESSION["no user"]="no user";
        header("location:login.php?msg=no user");
    }


}else{
    $_SESSION["errors"]=$errors;
    header("location:login.php?msg=empty field");
}
