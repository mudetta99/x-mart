<?php
    require "connect.php";

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $priv = $_POST['priv'];

    $password_hash = password_hash($password,PASSWORD_DEFAULT);

    $insert = $connect -> query("INSERT INTO `users`(`name`,`email`,`password`,`phone`,`gender`,`priv`) VALUES('$name','$email','$password_hash','$phone','$gender','$priv')");

    if($insert){
        header("location:../users.php");
    }