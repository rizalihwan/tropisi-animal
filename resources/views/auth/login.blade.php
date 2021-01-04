@extends('layouts.admin.login.app', ['title' => 'Login'])
@section('content')

  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="card card-primary">
              <div class="card-header"><h3 style="color: hsl(233, 81%, 67%);">Login</h3></div>
              <div class="card-body">
                <form method="POST" action="{{ route('login') }}" autocomplete="off" class="needs-validation" novalidate="">
                    @csrf
                    <div class="form-group">
                        <label for="username">Username</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <i class="fas fa-user"></i>
                            </div>
                          </div>
                          <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" value="{{ old('username') }}" name="username" tabindex="1" required autofocus>
                          @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="control-label">Password</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <i class="fas fa-lock"></i>
                            </div>
                          </div>
                          <input id="password" type="password" class="form-control  @error('password') is-invalid @enderror" name="password" tabindex="2" required>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                        <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                        <label class="custom-control-label" for="remember-me">Remember Me</label>
                        </div>
                    </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                  </div>
                </form>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

@endsection
