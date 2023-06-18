
  <div id="wrapper">

<!-- Sidebar -->
<ul class="sidebar navbar-nav">
  <li class="nav-item <?php if($page == "index"){echo "active";} ?>">
    <a class="nav-link" href="index.php">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span>
    </a>
  </li>

  <!-- <li class="nav-item <?php if($page == "Users"){echo "active";} ?>">
    <a class="nav-link" href="users.php">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Users</span>
    </a>
  </li> -->

       <li class="nav-item <?php if($page == "users"){echo "active";} ?>">
        <a class="nav-link" href="users.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Users</span>
        </a>
      </li>
  
      <li class="nav-item <?php if($page == "products"){echo "active";} ?>">
        <a class="nav-link" href="products.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Products</span>
        </a>
      </li>

      <li class="nav-item <?php if($page == "clients"){echo "active";} ?>">
        <a class="nav-link" href="client.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Clients</span>
        </a>
      </li>

      <li class="nav-item <?php if($page == "blog"){echo "active";} ?>">
        <a class="nav-link" href="report.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Report</span>
        </a>
      </li>

      <li class="nav-item <?php if($page == "report"){echo "active";} ?>">
        <a class="nav-link" href="blog.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Blog</span>
        </a>
      </li>


  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fas fa-fw fa-folder"></i>
      <span>Pages</span>
    </a>
    <div class="dropdown-menu" aria-labelledby="pagesDropdown">
      <h6 class="dropdown-header">Login Screens:</h6>
      <a class="dropdown-item" href="login.php">Login</a>
      <a class="dropdown-item" href="register.php">Register</a>
      <a class="dropdown-item" href="forgot-password.php">Forgot Password</a>
      <div class="dropdown-divider"></div>
      <h6 class="dropdown-header">Other Pages:</h6>
      <a class="dropdown-item" href="404.php">404 Page</a>
      <a class="dropdown-item" href="blank.php">Blank Page</a>
    </div>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="charts.php">
      <i class="fas fa-fw fa-chart-area"></i>
      <span>Charts</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="tables.php">
      <i class="fas fa-fw fa-table"></i>
      <span>Tables</span></a>
  </li>
</ul>