<div class="main-nav">
     <!-- Sidebar Logo -->
     <div class="logo-box">
          <a href="{{ route('admin.dashboard') }}" class="logo-dark">
               <img src="/images/logo-sm.png" class="logo-sm" alt="logo sm">
               <img src="/images/logo-dark.png" class="logo-lg" alt="logo dark">
          </a>

          <a href="{{ route('admin.dashboard') }}" class="logo-light">
               <img src="/images/logo-sm.png" class="logo-sm" alt="logo sm">
               <img src="/images/logo-white.png" class="logo-lg" alt="logo light">
          </a>
     </div>

     <div class="h-100" data-simplebar>

          <ul class="navbar-nav" id="navbar-nav">

               <!-- <li class="menu-title">Menu</li> -->

               <li class="menu-item pt-2">
                    <a class="menu-link" href="{{ route('admin.dashboard') }}">
                         <span class="nav-icon">
                              <i class="ri-dashboard-2-line"></i>
                         </span>
                         <span class="nav-text"> Dashboard </span>
                    </a>
               </li>

               <li class="menu-item">
                    <a class="menu-link" href="{{ route('admin.second', ['apps', 'orders']) }}">
                         <span class="nav-icon">
                              <i class="ri-shopping-cart-line"></i>
                         </span>
                         <span class="nav-text"> Orders </span>
                    </a>
               </li>

               <li class="menu-item">
                    <a class="menu-link" href="{{ route('admin.foods.index') }}">
                         <span class="nav-icon">
                              <i class="ri-restaurant-2-line"></i>
                         </span>
                         <span class="nav-text"> Foods </span>
                    </a>
               </li>

               <li class="menu-item">
                    <a class="menu-link" href="{{ route('admin.addons.index') }}">
                         <span class="nav-icon">
                              <i class="ri-add-box-line"></i>
                         </span>
                         <span class="nav-text"> Food Addons </span>
                    </a>
               </li>

               <li class="menu-item">
                    <a class="menu-link" href="{{ route('admin.categories.index') }}">
                         <span class="nav-icon">
                              <i class="ri-equalizer-2-line"></i>
                         </span>
                         <span class="nav-text"> Categories </span>
                    </a>
               </li>

               <li class="menu-item">
                    <a class="menu-link" href="{{ route('admin.second', ['apps', 'customers']) }}">
                         <span class="nav-icon">
                              <i class="ri-group-2-line"></i>
                         </span>
                         <span class="nav-text"> Customers </span>
                    </a>
               </li>

               <li class="menu-item">
                    <a class="menu-link" href="{{ route('admin.offers.index') }}">
                         <span class="nav-icon">
                              <i class="ri-discount-percent-line"></i>
                         </span>
                         <span class="nav-text"> Offers </span>
                    </a>
               </li>

               <li class="menu-item">
                    <a class="menu-link" href="{{ route('admin.second', ['apps', 'settings']) }}">
                         <span class="nav-icon">
                              <i class="ri-store-3-line"></i>
                         </span>
                         <span class="nav-text"> Store Settings </span>
                    </a>
               </li>
          </ul>
     </div>
</div>