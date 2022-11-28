<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ url('admin/dashboard') }}">
                <i class="mdi mdi-home menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <!-- Customers -->

        <li class="nav-item">
            <a class="nav-link" href="{{ url('admin/customer') }}">
                <i class="mdi mdi-account-multiple menu-icon"></i>
                <span class="menu-title">Customers</span>
            </a>
        </li>

        <!-- Customer Queries -->
        <li class="nav-item">
            <a class="nav-link" href="{{url('admin/queries')}}">
                <i class="mdi mdi-account menu-icon"></i>
                <span class="menu-title">Customer Queries</span>
            </a>
        </li>

        <!-- Orders -->
        <li class="nav-item">
            <a class="nav-link" href="{{url('admin/orders')}}">
                <i class="mdi mdi-credit-card-multiple menu-icon"></i>
                <span class="menu-title">Orders</span>
            </a>
        </li>


        <!-- Categories -->
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#categories" aria-expanded="false"
                aria-controls="categories">
                <i class="mdi mdi-barcode menu-icon"></i>
                <span class="menu-title">Categories</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="categories">
                <ul class="nav flex-column ">
                    <li class="nav-item"> <a class="nav-link" href="{{ url('admin/category/create') }}">Add Category</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="{{ url('admin/category') }}">View Category</a></li>
                </ul>
            </div>
        </li>


        <!-- Products -->
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#products" aria-expanded="false"
                aria-controls="products">
                <i class="mdi mdi-store menu-icon"></i>
                <span class="menu-title">Products</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="products">
                <ul class="nav flex-column ">
                    <li class="nav-item"> <a class="nav-link" href="{{ url('admin/products/create') }}">Add Product</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="{{ url('admin/products') }}">View Products</a></li>
                </ul>
            </div>
        </li>

</nav>



<!-- /***************************************************************************************
*   Title: <Laravel 9 Ecommerce - Part 11: Product read, edit update and delete with images in laravel>
*   Author: <Funda of Web IT>
*   Date: <16 June 2022>
*   Code version: <1.73.1>
*   Availability: <YouTube>
    Type:<Computer Program>
    Web Address: <https://www.youtube.com/watch?v=PhDkujgfa4Y&list=PLRheCL1cXHruG6bV4tAIF4AhkUMaABf3F&index=12>
*
***************************************************************************************/ -->
<!-- /***************************************************************************************
*   Title: <Laravel 9 Ecom - Part 10: Add Product w/ multiple Images using relationship & validation in laravel>
*   Author: <Funda of Web IT>
*   Date: <10 June 2022>
*   Code version: <1.73.1>
*   Availability: <YouTube>
    Type:<Computer Program>
    Web Address: <https://www.youtube.com/watch?v=9roKu4-uPxA&list=PLnpvTT4vbVmsEBPxoJIccMoDsMcors8gG&index=12>
*
***************************************************************************************/ -->
