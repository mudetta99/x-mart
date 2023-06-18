<?php
    require "connect.php";
    
    $prod = $_POST['x_prod'];
    $client = $_POST['x_client'];
    // echo $prod.$client;
    $select = $connect -> query("SELECT * FROM cart WHERE prod_id= '$prod' AND client_id= '$client'");
    $count = $select -> num_rows;
    $details = $select -> fetch_assoc();
    $quan = $details['quan'];

    if($count > 0 && $quan > 1){
        $update = $connect -> query("UPDATE `cart` SET quan=quan-1 WHERE prod_id=$prod AND client_id=$client");
        header("location:../../06-shopping-cart.php");
    }else{
        $delete = $connect -> query("DELETE FROM cart WHERE prod_id=$prod AND client_id=$client");
        header("location:../../index.php");

    };

    $select_num = $connect -> query("SELECT * FROM cart WHERE client_id ='$client'");
    $count_num = $select_num -> num_rows;
    echo $count_num;