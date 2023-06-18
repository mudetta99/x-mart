<?php
  $page = "index";
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
          <li class="breadcrumb-item active">Overview</li>
        </ol>

        <!-- Icon Cards-->
        
      <!-- /.container-fluid -->

      <?php
        include "function/welcome.php";
      ?>

<?php
    include "design/footer.php";

?>