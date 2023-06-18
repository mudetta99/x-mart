    

<?php
    require "connect.php";

    $search = $_POST['x_search'];
    
    $select = $connect -> query("SELECT * FROM products WHERE name LIKE '$search%'");

    foreach($select as $row){
    
     echo "<li class='out-sear'><a href='05-single-product.php?id=".$row['id']."'>".$row['name']."</a></li>";
    }

    
?>