<?php
    require "connect.php";

    $name = $_POST['name'];
    $lname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $c_password = $_POST['confirmpassword'];

    if($password == $c_password){

        $password_hash = password_hash($password,PASSWORD_DEFAULT);
        $insert = $connect -> query("INSERT INTO `client`(`name`, `last_name`, `email`, `phone`, `password`) VALUES ('$name','$lname','$email','$phone','$password_hash')");

    }


    if($insert){
        header("location:../../index.php");
    }

    
    


