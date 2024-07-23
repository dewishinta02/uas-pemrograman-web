<aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link bg-pink">
      <img src="{{ asset('/AdminLTE/dist/img/shintaa.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Inventori</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            @php
                $imagePath = auth()->user()->path_image ? asset('storage/' . auth()->user()->path_image) : asset('images/default-profile.png');
            @endphp
            <img src="{{ $imagePath }}" class="img-circle elevation-2 rounded-circle" style="width: 35px; height: 35px;">
        </div>
        <div class="info">
            <a href="#" class="d-block">{{ auth()->user()->name }}</a>
        </div>
    </div>
    

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ route('dashboard') }}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

                    {{-- Menu Servis --}}
                    <li class="nav-item">
                      <a href="{{ route('customer.index') }}" class="nav-link">
                        <i class="nav-icon fas fas fa-users"></i>
                        <p>
                          Customer
                        </p>
                      </a>
                    </li>

                     {{-- Menu Servis --}}
                     <li class="nav-item">
                      <a href="{{ route('direktur.index') }}" class="nav-link">
                        <i class="nav-icon fas fas fa-user-tie"></i>
                        <p>
                          Direktur
                        </p>
                      </a>
                    </li>
                    
                    {{-- Menu Servis --}}
                    <li class="nav-item">
                      <a href="{{ route('admin.index') }}" class="nav-link">
                        <i class="nav-icon fas fas fa-user"></i>
                        <p>
                          Admin
                        </p>
                      </a>
                    </li>
                    {{-- Menu Servis --}}
                    <li class="nav-item">
                      <a href="{{ route('barang.index') }}" class="nav-link">
                        <i class="nav-icon fas fas fa-cart-plus"></i>
                        <p>
                          Barang
                        </p>
                      </a>
                    </li>
                  

          
              
 
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>