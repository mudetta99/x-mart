<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
    .welcme{
        margin: 0px 300px;
    }
    h3{
        text-align:center;

    }
    h1{
        color:red;
        text-align:center;
        text-transform: uppercase;
    }
    h1:hover{
        color:#FFC133;
        text-align:center;
        letter-spacing: 7px;
       
    }

    .weather{
        /* position: absolute; */
        float:right;
        margin-right:40px;
        width:25px;
    }
 

</style>
<div class="weather"></div>

<?php
    require "connect.php";
    $id = $_SESSION['login'];
    $select = $connect -> query("SELECT * FROM users WHERE id = '$id'");
    $user = $select -> fetch_assoc();
    $admin = $user['name'];
?>

    <?php
     echo "<div class='welcme'>
        <h3>WELCOME<h1>$admin</h1></h3>
        <br>

        </div>";

    ?>

    

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script>
    
    $(document).ready(function(){
        
        $(".weather").load("https://www.accuweather.com/en/eg/cairo/127164/current-weather/127164 .current-weather-info");
      

    })
</script>