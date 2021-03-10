<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
          M.F Dashboard
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="categories.php">
              <i class="material-icons">person</i>
              <p>Categories</p>
            </a>
          </li>
          <li class="nav-item dropdown">
                <a class="nav-link" href="posts.php" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">library_books</i>
                  <span class="notification">Posts</span>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-bottom" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="./posts.php">View all Posts</a>
                  <a class="dropdown-item" href="posts.php?source=add_post">Add Post</a>
                </div>
              </li>
          <li class="nav-item ">
            <a class="nav-link" href="./comments.php">
              <i class="material-icons">notifications</i>
              <p>Comments</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./includes/profile.php">
              <i class="material-icons">person</i>
              <p>profile</p>
            </a>
          </li>

          <li class="nav-item dropdown">
                <a class="nav-link" href="users.php" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">library_books</i>
                  <span class="notification">Users</span>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-bottom" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="./users.php">View all Users</a>
                  <a class="dropdown-item" href="users.php?source=add_user">Add User</a>
                </div>
              </li>
      
          <li class="nav-item ">
            <a class="nav-link" href="#">
              <i class="material-icons">location_ons</i>
              <p>Maps</p>
            </a>
          </li>

          

          <li class="nav-item ">
            <a class="nav-link" href="#">
              <i class="material-icons">notifications</i>
              <p>Notifications</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./rtl.html">
              <i class="material-icons">language</i>
              <p>RTL Support</p>
            </a>
          </li>
       
          
        </ul>
      </div>
    </div>