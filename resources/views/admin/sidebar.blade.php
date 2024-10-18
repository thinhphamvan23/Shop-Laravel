
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">Admin</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

 
  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{ route('admin') }}">
          <i class="bi bi-grid"></i>
          <span>Thống kê tổng quát</span>
        </a>
      </li>


      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Quản lý danh mục</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('category') }}">
              <i class="bi bi-circle"></i><span>Thêm danh mục</span>
            </a>
          </li>
          <li>
            <a href="{{ route('category_list') }}">
              <i class="bi bi-circle"></i><span>Danh sách danh mục</span>
            </a>
          </li>
    
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
            <i class="fab fa-product-hunt"></i><span>Quản lý sản phẩm</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('product') }}">
              <i class="bi bi-circle"></i><span>Thêm sản phẩm</span>
            </a>
          </li>
          <li>
            <a href="{{ route('product_list') }}">
              <i class="bi bi-circle"></i><span>Danh sách sản phẩm</span>
            </a>
          </li>
        </ul>
    </li>

          <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                <i class="fas fa-shopping-cart"></i><span>Quản lý đơn hàng</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
              <li>
                <a href="{{ route('cart_display') }}">
                  <i class="bi bi-circle"></i><span>Danh sách đơn hàng</span>
                </a>
              </li>
             
            </ul>
          </li>

          <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#" aria-expanded="false">
              <i class="bi bi-bar-chart"></i><span>Quản lý Banner</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="charts-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav" style="">
              <li>
                <a href="{{ route('banner') }}">
                  <i class="bi bi-circle"></i><span>Thêm banner</span>
                </a>
              </li>
              <li>
                <a href="{{ route('banner_list') }}">
                  <i class="bi bi-circle"></i><span>Danh sách banner</span>
                </a>
              </li>
             
            </ul>
          </li>
    
          <li class="nav-item">
            <a class="nav-link " href="{{ route('logout') }}">
              <i class="fas fa-sign-out-alt"></i>
              <span>Logout</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="{{ route('main') }}">
              <i class="fas fa-sign-out-alt"></i>
              <span>Trang bán hàng</span>
            </a>
          </li>
         

    </ul>

  </aside><!-- End Sidebar-->