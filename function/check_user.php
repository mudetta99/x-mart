<?php
    session_start();
    require "connect.php";
    $email = $_POST['email'];
    $password = $_POST['password'];
    $select = $connect -> query ("SELECT * FROM users WHERE email = '$email'");
    $user = $select -> fetch_assoc();
    $pass_hash = $user['password'];
    $id = $user['id'];
    $priv = $user['priv'];
    $count = $select -> num_rows;


    if($count > 0){
        if(password_verify($password,$pass_hash)){
            $_SESSION['login'] = $id;
            $_SESSION['priv'] = $priv;
            header("location:../index.php");
        }else{
            header("location:../login.php?error=wrong password");
        }
    }
    else{
        header("location:../login.php?error= wrong email");
    }



