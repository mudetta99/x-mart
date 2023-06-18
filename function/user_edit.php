<?php
    require "connect.php";
    $id = $_POST['id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $phone=$_POST['phone'];
    $gender=$_POST['gender'];
    $priv=$_POST['priv'];
    
    $update = $connect -> query("UPDATE `users` SET `name`='$name',`email`='$email',`password`='$password',`phone`='$phone',`gender`='$gender',`priv`='$priv' WHERE id = '$id'");

    if($update){
        header("location:../users.php");
    }