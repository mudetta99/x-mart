<?php


    require "connect.php";

    $id = $_POST['id'];
    $img = $_FILES['img']['name'];
    $title = $_POST['title']; 
    $publisher = $_POST['publisher'];
    $date = $_POST['date'];
    $description = $_POST['description'];
    $count_x = count($img);
    
   
        if(empty($img[0])){
            $update = $connect -> query("UPDATE `blog` SET `title`='$title',`publisher`='$publisher',`date`='$date',`description`='$description' WHERE id = '$id'");
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
    $update = $connect -> query("UPDATE `blog` SET `img`='$new ,`title`='$title',`publisher`='$publisher',`date`='$date',`description`='$description' WHERE id = '$id'");

    if($update){
        header("location:../blog.php");
    }


}
