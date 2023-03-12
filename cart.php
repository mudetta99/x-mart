<?php
    require "connect.php";
    
    $prod = $_POST['x_prod'];
    $client = $_POST['x_client'];

    $select_c = $connect -> query("SELECT * FROM client WHERE id = '$client'");
    $row_c = $select_c -> fetch_assoc();
    $name_c = $row_c['name']." ".$row_c['last_name'];

    $select_p = $connect -> query("SELECT * FROM products WHERE id = '$prod'");
    $row_p = $select_p -> fetch_assoc();
    $name_p = $row_p['name'];
    $quan = 1;

    // $report = echo "Customer $name_c has bought $name_p in quantity  pieces ";
    $report = "(".$quan.") :بكمية (".$name_p.") :بشراء (".$name_c.") :لقد قام العميل";
    


    $select = $connect -> query("SELECT * FROM cart WHERE prod_id = '$prod' AND client_id = '$client'");
    $count = $select -> num_rows;
    $select_q = $select -> fetch_assoc();
    $quan_c = $select_q['quan'] + 1;
    $report_n = "(".$quan_c.") :بكمية (".$name_p.") :بشراء (".$name_c.") :لقد قام العميل";


    if($count > 0){
        $update = $connect -> query("UPDATE `cart` SET quan = '$quan_c' WHERE prod_id = '$prod' AND client_id = '$client'");
        $update_r = $connect -> query("UPDATE `report` SET `report`='$report_n' WHERE id_c = '$client' AND id_p = '$prod'");
    }else{
        $insert=$connect -> query("INSERT INTO `cart`( `prod_id`,`client_id`, `quan`) VALUES ('$prod','$client',1)");
        $insert_r = $connect -> query("INSERT INTO `report`(`id_c`, `id_p`, `report`) VALUES ('$client','$prod','$report')");
    };

    $select_num = $connect -> query("SELECT * FROM cart WHERE client_id ='$client'");
    $count_num = $select_num -> num_rows;
    echo $count_num;

