<div class="section-header">
    <h1>Menu</h1>
        <div class="section-header-breadcrumb">
            {{-- Dashboard --}}
            @if (request()->is('admin/dashboard'))
                    <div class="breadcrumb-item text-primary">Dashboard</div>
            @endif
            {{-- Profile Menu --}}
            @if (request()->is('admin/profile/profile'))
                <div class="breadcrumb-item text-primary">Profile Management</div>
                <div class="breadcrumb-item text-primary">Profile Menu</div>
            @endif
            {{-- Profile Body --}}
            @if (request()->is('admin/profile/body'))
                <div class="breadcrumb-item text-primary">Profile Management</div>
                <div class="breadcrumb-item text-primary">Content Menu</div>
            @endif
            {{-- News --}}
            @if (request()->is('admin/news/news'))
                <div class="breadcrumb-item text-primary">News Management</div>
            @endif
            {{-- Gallery --}}
            @if (request()->is('admin/galery/galery'))
                <div class="breadcrumb-item text-primary">Management Gallery</div>
            @endif
            {{-- Contact --}}
            @if (request()->is('admin/contact/contact'))
                <div class="breadcrumb-item text-primary">Contact Management</div>
            @endif
        </div>
  </div>

