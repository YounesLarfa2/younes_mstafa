  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link {{($collapsed == 'dashboard' )? '' : 'collapsed'}}" href="{{route('admin.home')}}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#product" data-bs-toggle="collapse" href="">
          <i class="bi bi-gear"></i><span>Products</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="product" class="nav-content collapse {{($collapsed == 'display-products' || $collapsed =='create-product')? 'show' : ''}}" data-bs-parent="#product">
          <li>
            <a href="{{route('admin.products.index')}}" class="{{($collapsed == 'display-products')? 'active' : ''}}">
              <i class="bi bi-eye fs-5"></i><span>Display Products</span>
            </a>
          </li>
          <li>
            <a href="{{route('admin.products.create')}}" class="{{($collapsed =='create-product')? 'active' : ''}}">
              <i class="bi bi-gear fs-5"></i><span>Create Product</span>
            </a>
          </li>

        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-gear"></i><span>Categories</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse {{($collapsed == 'display-categories' || $collapsed =='create-category')? 'show' : ''}} " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('admin.categories.index')}}" class="{{($collapsed == 'display-categories')? 'active' : ''}}">
              <i class="bi bi-eye fs-5"></i><span>Display Categories</span>
            </a>
          </li>
          <li>
            <a href="{{route('admin.categories.create')}}" class="{{($collapsed == 'create-category')? 'active' : ''}}">
              <i class="bi bi-gear fs-5"></i><span>Create Category</span>
            </a>
          </li>

        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bag-fill"></i><span>Orders</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse {{($collapsed == 'display-orders')? 'show' : ''}}" data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('admin.orders.index')}}" class="{{($collapsed == 'display-orders')? 'active' : ''}}">
              <i class="bi bi-eye fs-5"></i><span>Display Orders</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-people"></i><span>Users</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse {{($collapsed == 'display-users' )? 'show' : ''}}" data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('admin.users.index')}}" class="{{($collapsed == 'display-users')? 'active' : ''}}">
              <i class="bi bi-emoji-smile fs-5"></i><span>All Users</span>
            </a>
          </li>

        </ul>
      </li><!-- End Charts Nav -->




      <li class="nav-item">
        <a class="nav-link  {{($collapsed == 'display-profile' )? '' : 'collapsed'}}" href="{{route('admin.users.profile')}}">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      

    </ul>

  </aside><!-- End Sidebar-->
