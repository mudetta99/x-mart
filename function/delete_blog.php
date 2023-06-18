<?php
    require "connect.php";
    $id = $_GET['id'];

    $delete = $connect -> query("DELETE FROM blog WHERE id = '$id'");
    if($delete){
        header("location:../blog.php");
    }