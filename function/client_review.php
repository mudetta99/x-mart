<?php

    require "connect.php";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $review = $_POST['review'];

    // $insert = $connect -> query("INSERT INTO client_review ('name','email','review') VALUES ('$name','$email','$review')");

    $insert = $connect -> query("INSERT INTO `client_review`(`name`, `email`, `review`) VALUES ('$name','$email','$review')");
    if($insert){
        header("location:../../05-single-product.php");
    }
    