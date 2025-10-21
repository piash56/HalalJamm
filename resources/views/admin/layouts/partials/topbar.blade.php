<header class="topbar d-flex">
     <!-- Sidebar Logo -->
     <div class="logo-box">
          <a href="{{ route('admin.dashboard') }}" class="logo-dark">
               <img src="/assets/images/logos/halalljamm.png" class="logo-sm" alt="logo sm">
               <img src="/assets/images/logos/halalljamm.png" class="logo-lg" alt="logo dark">
          </a>

          <a href="{{ route('admin.dashboard') }}" class="logo-light">
               <img src="/assets/images/logos/halalljamm.png" class="logo-sm" alt="logo sm">
               <img src="/assets/images/logos/halalljamm.png" class="logo-lg" alt="logo light">
          </a>
     </div>

     <div class="container">
          <div class="navbar-header">

               <!-- Menu Toggle Button (sm-hover) -->
               <button type="button" class="btn btn-link d-flex button-sm-hover button-toggle-menu" aria-label="Show Full Sidebar">
                    <i class="ri-menu-2-line button-sm-hover-icon text-white"></i>
               </button>

               <div class="d-flex align-items-center gap-2">
                    <!-- App Search-->
                    <form class="app-search d-none d-md-block me-auto">
                         <div class="position-relative">
                              <input type="search" class="form-control" placeholder="Start typing..." autocomplete="off" value="">
                              <i class="ri-search-line search-widget-icon"></i>
                         </div>
                    </form>
               </div>

               <div class="d-flex align-items-center gap-2 ms-auto">
                    <!-- Theme Color (Light/Dark) -->
                    <div class="topbar-item">
                         <button type="button" class="topbar-button" id="light-dark-mode">
                              <i class="ri-moon-line fs-20 align-middle light-mode"></i>
                              <i class="ri-sun-line fs-20 align-middle dark-mode"></i>
                         </button>
                    </div>

                    <!-- User -->
                    <div class="dropdown topbar-item">
                         <a type="button" class="topbar-button p-0" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <span class="d-flex align-items-center gap-2">
                                   <img class="rounded-circle" width="32" src="/images/users/avatar-1.jpg" alt="user-image">
                              </span>
                         </a>
                         <div class="dropdown-menu dropdown-menu-end">

                              <a class="dropdown-item" href="{{ route('admin.profile.index') }}">
                                   <i class="bx bx-user-circle fs-18 align-middle me-2"></i><span class="align-middle">My Account</span>
                              </a>
                              <div class="dropdown-divider my-1"></div>
                              <a class="dropdown-item" href="{{ route('admin.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                   <i class="bx bx-log-out fs-18 align-middle me-2"></i><span class="align-middle">Logout</span>
                              </a>
                              <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                                   @csrf
                              </form>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</header>