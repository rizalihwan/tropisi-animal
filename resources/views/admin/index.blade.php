@extends('layouts.admin.dashboard.app', ['title' => 'Dashboard'])
@section('content')
      <!-- Main Content -->
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="fas fa-users"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Admin</h4>
                  </div>
                  <div class="card-body">
                    {{ $admin }}
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                  <i class="fas fa-newspaper"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>News</h4>
                  </div>
                  <div class="card-body">
                    {{ $news }}
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                  <i class="fab fa-envira"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Content</h4>
                  </div>
                  <div class="card-body">
                    {{ $body }}
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                  <i class="fas fa-columns"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Gallery</h4>
                  </div>
                  <div class="card-body">
                    {{ $galery }}
                  </div>
                </div>
              </div>
            </div>
          </div>

@endsection
