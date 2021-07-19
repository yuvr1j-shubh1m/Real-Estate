<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="../home.html" class="brand-link">
    <img src="assets/dist/img/R1.png" alt="Admin" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Real Estate</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="assets/dist/img/U1.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Yuvraj</a>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item menu-open">
          <a href="dash.php" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>

        </li>
        <li class="nav-item">
          <a href="pages/widgets.html" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Widgets
              <span class="right badge badge-danger">New</span>
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-city"></i>
            <p>
              Properties
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="prop-details.php" class="nav-link">
                <i class="fas fa-edit nav-icon"></i>
                <p>Details</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="prop-img.php" class="nav-link">
                <i class="far fa-images nav-icon"></i>
                <p>Images</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="prop-view.php" class="nav-link">
                <i class="far fa-eye nav-icon"></i>
                <p>View</p>
              </a>
            </li>
          </ul>
        <li class="nav-header">Settings</li>
        <li class="nav-item">
          <a href="admin.php" class="nav-link">
            <i class="nav-icon far fa-user"></i>
            <p>
              Admin 
              
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="users.php" class="nav-link">
            <i class="nav-icon fa fa-users"></i>
            <p>
              Registered Users
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="agents.php" class="nav-link">
            <i class="nav-icon far fa-smile"></i>
            <p>
              Agents
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="message.php" class="nav-link">
            <i class="nav-icon far fa-envelope"></i>
            <p>
              Messages
            </p>
          </a>

        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-book"></i>
            <p>
              Pages
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">

            <li class="nav-item">
              <a href="pages/examples/contacts.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Contacts</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/examples/faq.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>FAQ</p>
              </a>
            </li>
          </ul>
        </li>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
