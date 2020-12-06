{{-- Sidebar --}}
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="{{ route('admin.dashboard') }}">Tropisi&middot;animal</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('admin.dashboard') }}">Ta</a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">Pages</li>
              <li class="nav-item dropdown {{ request()->is('admin/profile/profile') || request()->is('admin/profile/body') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-user"></i> <span>Profile Management</span></a>
                <ul class="dropdown-menu">
                  <li class="{{ request()->is('admin/profile/profile') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.profile.profile') }}">Profile Menu</a></li>
                  <li class="{{ request()->is('admin/profile/body') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.body.body') }}">Content Menu</a></li>
                </ul>
              </li>
              <li class="{{ request()->is('admin/news/news') ? 'active' : '' }}"><a href="{{ route('admin.news.news') }}" class="nav-link"><i class="fas fa-fire"></i> <span>News Management</span></a></li>

              <li class="{{ request()->is('admin/galery/galery') ? 'active' : '' }}"><a href="{{ route('admin.galery.galery') }}" class="nav-link"><i class="fas fa-columns"></i> <span>Management Gallery</span></a></li>

              <li class="{{ request()->is('admin/contact/contact') ? 'active' : '' }}"><a href="{{ route('admin.contact.contact') }}" class="nav-link"><i class="fas fa-map-marker-alt"></i> <span>Contact Management</span></a></li>
            </ul>
        </aside>
      </div>
