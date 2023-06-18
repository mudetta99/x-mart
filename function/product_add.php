<?php

    require "connect.php";

    $name = $_POST['name'];
    $quan = $_POST['quan'];
    $price = $_POST['price'];
    $sale = $_POST['sale'];
    $seller = $_POST['seller'];
    $description = $_POST['Description'];
    $img = $_FILES['img']['name'];
    $count_x = count($img);
    $arr = [];
    $cat = $_POST['category'];
    $upcoming = $_POST['upcoming'];

    for($x=0;$x<$count_x;$x++){

        if($_FILES['img']['error'][$x] == 0){
            $extensions = array("png","jpg","jfif");
            $ex_img = pathinfo($_FILES['img']['name'][$x],PATHINFO_EXTENSION);
            if(in_array($ex_img,$extensions)){
                if($_FILES['img']['size'][$x] < 1000000){
                    $new = md5(uniqid()).".".$ex_img;
                    move_uploaded_file($_FILES['img']['tmp_name'][$x],"../image/".$new);
                    array_push($arr,$new);

                }else{
                    echo "image size is big";
                }
            }else{
                echo "bad format";
            }
        }else{
            echo "can't upload";
        }
        

    }
        $string = implode("/",$arr);
        $insert = $connect -> query("INSERT INTO `products`(`name`, `quan`, `price`, `sale`,`seller`,`description`,`img`,`cat_id`,`upcoming`) VALUES ('$name','$quan','$price','$sale','$seller','$description','$string','$cat','$upcoming')");
        if($insert){
            header("location:../products.php");
        }

    

