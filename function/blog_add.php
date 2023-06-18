<?php

    require "connect.php";

    $img = $_FILES['img']['name'];
    $title = $_POST['title']; 
    $publisher = $_POST['publisher'];
    $date = $_POST['date'];
    $description = $_POST['description'];
    $link = $_POST['link'];
    // $count_x = count($img);

    
if($_FILES['img']['error'] == 0){
    $extenstion = array('jpg','png','jfif');
    $ex_img = pathinfo($img,PATHINFO_EXTENSION);
    if(in_array($ex_img,$extenstion)){
        if($_FILES['img']['size'] < 1000000){
            $new = md5(uniqid()).".".$ex_img;
            move_uploaded_file($_FILES['img']['tmp_name'],"../image/".$new);

        }else{
            echo "Img Is Big Size";
        }
    }else{
        echo "Bad Format";
    }
}else{
    echo "Not Upload";
}


    $insert = $connect -> query("INSERT INTO `blog`(`img`,`title`, `publisher`, `date`,`description`,`link`) VALUES ('$new','$title','$publisher','$date','$description','$link')");
    
    if($insert){
        header("location:../blog.php");
    }