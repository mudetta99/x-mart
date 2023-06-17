<?php
    $page = "users";
    include "design/header.php";
    include "design/sidebar.php";
?>

    
<div id="content-wrapper">
<div class="container-fluid">
  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Users</li>
  </ol>
</div>

<?php
    if(!isset($_GET['do'])){
        include "include/view_users.php";
    }elseif($_GET['do'] == "add"){
        include "include/add_user.php";
    }elseif($_GET['do'] == "edit"){
      include "include/edit_user.php";
    }
?>
</div>

<?php
    include "design/footer.php";
?>