<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item sidebar-category">
        <p>Navigation</p>
        <span></span>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.html">
          <i class="mdi mdi-view-quilt menu-icon"></i>
          <span class="menu-title">Dashboard</span>
          <div class="badge badge-info badge-pill">2</div>
        </a>
      </li>
      <li class="nav-item sidebar-category">
        <p>Components</p>
        <span></span>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <i class="mdi mdi-palette menu-icon"></i>
          <span class="menu-title">Categories</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('categories.index') }}">List Category</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('categories.create') }}">Add Category</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <i class="mdi mdi-palette menu-icon"></i>
          <span class="menu-title">Products</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('products.index') }}">List Products</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('products.create') }}">Add Product</a></li>
          </ul>
        </div>
      </li>
      
    </ul>
  </nav>