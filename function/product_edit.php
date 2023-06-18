<?php

    require "connect.php";

    $id = $_POST['id'];
    $name = $_POST['name'];
    $quan = $_POST['quan'];
    $price = $_POST['price'];
    $sale = $_POST['sale'];
    $seller = $_POST['seller'];
    $description = $_POST['description'];
    $img = $_FILES['img']['name'];
    $count_x = count($img);
    $arr = [];
    $cat = $_POST['category'];
   
    
        if(empty($img[0])){
            $update = $connect -> query("UPDATE products SET name='$name',quan='$quan',price='$price',sale='$sale',seller='$seller',description='$description', cat_id='$cat' WHERE id='$id'");
            header("location:../products.php");
        }else{
            $select = $connect -> query("SELECT * FROM products WHERE id ='$id'");
            $prod = $select -> fetch_assoc();
            $old_img = $prod['img'];
            $arr_old = explode("/",$old_img);
            for($i=0;$i<count($arr_old);$i++){
                unlink("../image/".$arr_old[$i]);
            }            
        

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
    $update = $connect -> query("UPDATE products SET name='$name',quan='$quan',price='$price',sale='$sale',
    seller='$seller',description='$description', img='$string', cat_id='$cat' WHERE id = '$id'");

    if($update){
        header("location:../products.php");
    }


}
