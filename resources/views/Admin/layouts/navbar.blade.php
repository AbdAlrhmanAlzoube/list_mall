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
          <a class="nav-link" data-toggle="collapse" href="#ui-categories" aria-expanded="false" aria-controls="ui-categories">
              <i class="mdi mdi-palette menu-icon"></i>
              <span class="menu-title">Categories</span>
              <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="ui-categories">
              <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{ route('categories.index') }}">List Category</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{ route('categories.create') }}">Add Category</a></li>
              </ul>
          </div>
      </li>
      <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#ui-products" aria-expanded="false" aria-controls="ui-products">
              <i class="mdi mdi-palette menu-icon"></i>
              <span class="menu-title">Products</span>
              <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="ui-products">
              <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{ route('products.index') }}">List Products</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{ route('products.create') }}">Add Product</a></li>
              </ul>
          </div>
      </li>
      <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#ui-employees" aria-expanded="false" aria-controls="ui-employees">
              <i class="mdi mdi-account menu-icon"></i>
              <span class="menu-title">Employees</span>
              <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="ui-employees">
              <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('employees.index') }}">List Employees</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('employees.create') }}">Add Employee</a>
                  </li>
              </ul>
          </div>
      </li>
      <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#ui-orders" aria-expanded="false" aria-controls="ui-orders">
              <i class="mdi mdi-account menu-icon"></i>
              <span class="menu-title">Orders</span>
              <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="ui-orders">
              <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('orders.index') }}">List Orders</a>
                  </li>
              </ul>
          </div>
      </li>
  </ul>
</nav>
