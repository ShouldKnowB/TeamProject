<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{url('admin/dashboard')}}">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <!-- Customers -->

          <li class="nav-item">
            <a class="nav-link"  href="{{url('admin/customer')}}">
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

          <!-- Categories -->
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#" aria-expanded="false" aria-controls="auth">
                <i class="mdi mdi-barcode menu-icon"></i>
              <span class="menu-title">Categories</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="categories">
              <ul class="nav flex-column ">
                <li class="nav-item"> <a class="nav-link" href="{{url('admin/category/create')}}">Add Category</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{url('admin/category')}}">View Category</a></li>
              </ul>
            </div>
          </li>

          <!-- Products -->
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="" aria-expanded="false" aria-controls="ui-basic">
                <i class="mdi mdi-store menu-icon"></i>
              <span class="menu-title">Products</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="products">
              <ul class="nav flex-column ">
                <li class="nav-item"> <a class="nav-link" href="{{url('admin/products/create')}}">Add Product</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{url('admin/products')}}">View Products</a></li>
              </ul>
            </div>
          </li>

          <!-- Flavours -->
          <li class="nav-item">
<<<<<<< HEAD
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="mdi mdi-store menu-icon"></i>
              <span class="menu-title">Flavours</span>
              <i class="menu-arrow"></i>
=======
            <a class="nav-link" href="">
                <i class="mdi mdi-emoticon-tongue menu-icon"></i>
            <span class="menu-title">Flavours</span>
>>>>>>> 236dd0396505708c597f948840d1a23b4795e1be
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column ">
                <li class="nav-item"> <a class="nav-link" href="{{url('admin/flavours/create')}}">Add Flavours</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{url('admin/flavours')}}">View Flavours</a></li>
              </ul>
            </div>
          </li>



      </nav>
