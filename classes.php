<?php

abstract class User {
    public $id;
    public $name;
    public $email;
    public $phone;
    protected $password;
    public $created_at;
    public $updated_at;
    public static function login($email , $password){
        $qry = "SELECT * FROM USERS WHERE email = '$email' AND password = '$password' ";
        require_once('connect.php');
        $cn = mysqli_connect(DB_HOST,DB_USER_NAME,DB_USER_PASSWORD,DB_NAME);
        $rslt = mysqli_query($cn,$qry);
        if ($arr = mysqli_fetch_assoc($rslt) ) {
            var_dump($arr);
        }else {
            echo "no user";
        }
    }
}

class Admin extends User{
    public $role = "admin";

}
class  Subscriber extends User{
    public $role = "user";
    public static function register($name, $email , $phone , $password){
        $qry = "INSERT INTO USERS (name,email,phone,password)
        VALUES ('$name','$email','$phone','$password')";
        require_once('connect.php');
        $cn = mysqli_connect(DB_HOST,DB_USER_NAME,DB_USER_PASSWORD,DB_NAME);
        $rslt = mysqli_query($cn,$qry);
        mysqli_close($cn);
        return $rslt;
     }

}
