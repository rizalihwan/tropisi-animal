{{-- Navbar --}}
<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
    <form class="form-inline mr-auto">
      <ul class="navbar-nav mr-3">
        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
        <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
      </ul>
    </form>
    <ul class="navbar-nav navbar-right">
      <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
        <img alt="image" src="{{ asset('assets/back/img/avatar/avatar-1.png') }}" class="rounded-circle mr-1">
        <div class="d-sm-none d-lg-inline-block">Administrator</div></a>
        <div class="dropdown-menu dropdown-menu-right">
          <div class="dropdown-divider"></div>
          <button data-toggle="modal" data-target="#logoutModal" class="dropdown-item text-danger">
            <i class="fas fa-sign-out-alt"></i><span> Logout</span>
          </button>
        </div>
      </li>
    </ul>
  </nav>
  {{-- modal logout --}}
  <div class="modal fade" tabindex="-1" role="dialog" id="logoutModal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Message Information</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Are you sure you want to exit the application? if yes click "Logout".</p>
        </div>
        <div class="modal-footer bg-whitesmoke br">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
          <a href="{{ route('logout') }}" onclick="event.preventDefault();
          document.getElementById('logout-form').submit();" class="btn btn-danger">Logout</a>
        </div>
      </div>
    </div>
  </div>
  <form id="logout-form" action="{{ route('logout') }}" method="POST">
    @csrf
</form>
