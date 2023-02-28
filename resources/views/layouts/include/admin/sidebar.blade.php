<nav class="sidebar" id="sidebar">
    <ul class="nav">
      <li class="nav-item" {{ Request::is('admin/dashboard') ? 'active':''}}>
        <a class="nav-link" href="{{ url('admin/dashboard') }}">
          <i class="mdi mdi-home menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>  
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#ui-category" aria-expanded="false" aria-controls="ui-category">
          <i class="mdi mdi-google-circles-communities menu-icon"></i>
          <span class="menu-title">Category</span>
          <i class="menu-arrow"></i>
        </a>  
      <div class="collapse" id="ui-category">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{ url('admin/category/create') }}">Add Category</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ url('admin/category') }}">View Category</a></li>
        </ul>
      </div>
      </li>  
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#ui-colors" aria-expanded="false" aria-controls="ui-colors">
          <i class="mdi mdi mdi-arrange-send-backward menu-icon"></i>
          <span class="menu-title">Colors</span>
          <i class="menu-arrow"></i>
        </a>  
      <div class="collapse" id="ui-colors">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{ url('admin/colors/create') }}">Add Colors</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ url('admin/colors') }}">View Colors</a></li>
        </ul>
      </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#ui-sliders" aria-expanded="false" aria-controls="ui-sliders">
          <i class="mdi mdi mdi-arrange-send-backward menu-icon"></i>
          <span class="menu-title">Sliders</span>
          <i class="menu-arrow"></i>
        </a>  
      <div class="collapse" id="ui-sliders">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{ url('admin/sliders/create') }}">Add Sliders</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ url('admin/sliders') }}">View Sliders</a></li>
        </ul>
      </div>
      </li>

      <li class="nav-item" {{ Request::is('admin/brands') ? 'active':''}}>
        <a class="nav-link" href="{{ url('admin/brands') }}">
          <i class="mdi mdi-assistant menu-icon"></i>
          <span class="menu-title">Brands</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#ui-product" aria-expanded="false" aria-controls="ui-product">
          <i class="mdi mdi-tshirt-crew menu-icon"></i>
          <span class="menu-title">Product</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-product">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ url('admin/products/create') }}">Tambah Product</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ url('admin/products') }}">View Product</a></li>
          </ul>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <i class="mdi mdi-account menu-icon"></i>
          <span class="menu-title">User</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ url('/admin/users/create') }}">Tambah User</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ url('/admin/users') }}">View User</a></li>
          </ul>
        </div>
      </li>

      <li class="nav-item" {{ Request::is('admin/pemesan') ? 'active':''}}>
        <a class="nav-link" href="{{ url('admin/pemesan') }}">
          <i class="mdi mdi-television-guide menu-icon"></i>
          <span class="menu-title">Pemesan</span>
        </a>
      </li>
    </ul>
  </nav>
