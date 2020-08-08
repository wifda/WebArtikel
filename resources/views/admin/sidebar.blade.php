<aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{asset('lte/dist/img/logo.png')}}" alt="Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">YourArticles!</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-2 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('lte/dist/img/avatar5.png')}}" class="rounded-circle" alt="User Image">
        </div>
        <div class="info" style="align:center">
          <p style="font-family:arial; color:#000000">Welcome {{ Auth::User()->name }}
          </p>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">          
            <li class="nav-item">         
              <a href="/dashboard" class="nav-link">
                <i class="nav-icon fa fa-book"></i>
                <p>Read Articles</p>
              </a>
            </li>
            <li class="nav-item">         
              <a href="/artikel/tambah" class="nav-link">
                <i class="nav-icon fa fa-pen"></i>
                <p>Write Articles</p>
              </a>
            </li>
            <li class="nav-item">         
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-star"></i>
                <p>Popular Events</p>
              </a>
            </li>
        </ul>
      
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>