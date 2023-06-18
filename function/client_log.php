<?php
    require "connect.php";

    session_start();
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $select = $connect -> query("SELECT * FROM client WHERE email = '$email'");
    $user = $select -> fetch_assoc();
    $pass_hash = $user['password'];
    $id = $user['id'];
    $count = $select -> num_rows;
    

    if($count > 0){
        if(password_verify($pass,$pass_hash)){
            $_SESSION['login_c'] = $id;
            header("location:../../index.php");

        }else{
            header("location:../../08-login.php?error=wrong password");
        }
    }else{
        header("location:../../08-login.php?error=wrong email");
    }