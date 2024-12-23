<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
      <div class="brand-logo d-flex align-items-center justify-content-between">
        <a href="./index.html" class="text-nowrap logo-img">
          <img src="../assets/images/logos/logo.svg" alt="" />
        </a>
        <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
          <i class="ti ti-x fs-8"></i>
        </div>
      </div>
      <!-- Sidebar navigation-->
      <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
        <ul id="sidebarnav">
          <li class="nav-small-cap">
            <iconify-icon icon="solar:menu-dots-linear" class="nav-small-cap-icon fs-4"></iconify-icon>
            <span class="hide-menu">Home</span>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link @yield('dash')" href="/dash" aria-expanded="false">
              <iconify-icon icon="solar:widget-add-line-duotone"></iconify-icon>
              <span class="hide-menu">Dashboard</span>
            </a>
          </li>
          <li>
            <span class="sidebar-divider lg"></span>
          </li>
          <li class="nav-small-cap">
            <iconify-icon icon="solar:menu-dots-linear" class="nav-small-cap-icon fs-4"></iconify-icon>
            <span class="hide-menu">UI COMPONENTS</span>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link @yield('karir')" href="/karir" aria-expanded="false">
              <iconify-icon icon="solar:layers-minimalistic-bold-duotone"></iconify-icon>
              <span class="hide-menu">Karir</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link @yield('users')" href="/users" aria-expanded="false">
              <iconify-icon icon="solar:danger-circle-line-duotone"></iconify-icon>
              <span class="hide-menu">Users</span>
            </a>
          </li>
          <li>
            <span class="sidebar-divider lg"></span>
          </li>
      </nav>
      <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
  </aside>