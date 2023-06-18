<?php
    require "connect.php";

    $id = $_GET['id'];
    $select = $connect -> query("SELECT * FROM products WHERE id = '$id'");
    $details = $select -> fetch_assoc();
    $prod_img = $details['img'];

    unlink("../image/".$prod_img);


    $delete = $connect -> query("DELETE FROM products WHERE id = '$id'");

    if($delete){
        header("location:../products.php");
    }
