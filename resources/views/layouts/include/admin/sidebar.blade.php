<nav class="sidebar" id="sidebar">
    <ul class="nav">
      <li class="nav-item" {{ Request::is('admin/dashboard') ? 'active':''}}>
        <a class="nav-link" href="{{ url('admin/dashboard') }}">
          <i class="mdi mdi-home menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>  
      <li class="nav-item" {{ Request::is('admin/on-sale') ? 'active':''}}>
        <a class="nav-link" href="{{ url('admin/on-sale') }}">
          <i class="mdi mdi-sale menu-icon"></i>
          <span class="menu-title">On Sale</span>
        </a>
      </li>  
      <li class="nav-item" {{ Request::is('admin/category') ? 'active':''}}>
        <a class="nav-link" href="{{ url('admin/category') }}">
          <i class="mdi mdi-google-circles-communities menu-icon"></i>
          <span class="menu-title">Category</span>
        </a>
      </li>  
      <li class="nav-item" {{ Request::is('admin/colors') ? 'active':''}}>
        <a class="nav-link" href="{{ url('admin/colors') }}">
          <i class="mdi mdi-invert-colors menu-icon"></i>
          <span class="menu-title">Colors</span>
        </a>
      </li>   
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#ui-sliders" aria-expanded="false" aria-controls="ui-sliders">
          <i class="mdi mdi mdi-arrange-send-backward menu-icon"></i>
          <span class="menu-title">Sliders</span>
          <i class="menu-arrow"></i>
        </a>  
      <div class="collapse" id="ui-sliders">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{ url('admin/sliders') }}">Sliders</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ url('admin/banner-one') }}">Banner One</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ url('admin/banner-two') }}">Banner Two</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ url('admin/banner-three') }}">Banner Three</a></li>
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
      <li class="nav-item" {{ Request::is('admin/users') ? 'active':''}}>
        <a class="nav-link" href="{{ url('admin/users') }}">
          <i class="mdi mdi-account menu-icon"></i>
          <span class="menu-title">User</span>
        </a>
      </li>    
      <li class="nav-item" {{ Request::is('admin/tentang-kami') ? 'active':''}}>
        <a class="nav-link" href="{{ url('admin/tentang-kami') }}">
          <i class="mdi mdi-airballoon menu-icon"></i>
          <span class="menu-title">Tentang Kami</span>
        </a>
      </li>  
      <li class="nav-item" {{ Request::is('admin/pemesan') ? 'active':''}}>
        <a class="nav-link" href="{{ url('admin/pemesan') }}">
          <i class="mdi mdi-television-guide menu-icon"></i>
          <span class="menu-title">Pemesan</span>
        </a>
      </li>
      <li class="nav-item" {{ Request::is('admin/hubungi-kami') ? 'active':''}}>
        <a class="nav-link" href="{{ url('admin/hubungi-kami') }}">
          <i class="mdi mdi-message-reply-text menu-icon"></i>
          <span class="menu-title">Message</span>
        </a>
      </li>
    </ul>
  </nav>
