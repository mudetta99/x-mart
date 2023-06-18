<?php
    require "connect.php";

    $prod = $_POST['x_prod'];
    $client = $_POST['x_client'];
    $count = $_POST['x_count'];

    // $select = $connect -> query("SELECT * FROM products prod_id= $prod AND client_id= $client");
    // echo "done";

    $select_ = $connect -> query ("SELECT * FROM `rate` WHERE client_id = '$client' AND product_id = '$prod'");
    $check = $select_ -> num_rows;
    
    if($check == 0){
        $insert = $connect -> query("INSERT INTO `rate` (`client_id`, `product_id`, `count`) VALUES ('$client','$prod','$count')");
    }else{
        $update_ = $connect -> query("UPDATE `rate` SET count = $count WHERE client_id = '$client' AND product_id ='$prod'");
    }



   

    $select = $connect -> query("SELECT * FROM `rate` WHERE product_id = '$prod'");
    $count_all = $select -> num_rows;

    $select_1 = $connect -> query("SELECT * FROM `rate` WHERE product_id = '$prod' AND count =1");
    $count_1 = $select_1 -> num_rows;

    $select_2 = $connect -> query("SELECT * FROM `rate` WHERE product_id = '$prod' AND count =2");
    $count_2 = $select_2 -> num_rows;

    $select_3 = $connect -> query("SELECT * FROM `rate` WHERE product_id = '$prod' AND count =3");
    $count_3 = $select_3 -> num_rows;

    $select_4 = $connect -> query("SELECT * FROM `rate` WHERE product_id = '$prod' AND count =4");
    $count_4 = $select_4 -> num_rows;

    $select_5 = $connect -> query("SELECT * FROM `rate` WHERE product_id = '$prod' AND count =5");
    $count_5 = $select_5 -> num_rows;

    $rate = ($count_1*1) + ($count_2*2) + ($count_3*3) + ($count_4*4) + ($count_5*5);

    $rate_prod = ceil($rate / $count_all);

    $select_products = $connect -> query("UPDATE `products` SET `rate`='$rate_prod' WHERE id = '$prod'");







   

