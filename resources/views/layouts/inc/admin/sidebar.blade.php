<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.html">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <!-- Customers -->

          <li class="nav-item">
            <a class="nav-link"  href="#ui-basic">
                <i class="mdi mdi-account-multiple menu-icon"></i>
              <span class="menu-title">Customers</span>
            </a>
          </li>

          <!-- Orders -->
          <li class="nav-item">
            <a class="nav-link" href="#ui-basic">
                <i class="mdi mdi-credit-card-multiple menu-icon"></i>
              <span class="menu-title">Orders</span>
            </a>
          </li>

          <!-- Products -->
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="mdi mdi-store menu-icon"></i>
              <span class="menu-title">Products</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{url('admin/products/create')}}">Add Product</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{url('admin/products')}}">View Products</a></li>
              </ul>
            </div>
          </li>



      </nav>
