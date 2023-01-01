@extends('layouts.main')

@section('content')


  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12 col-md-12">
                <div class="p-5">
                  <div class="text-center align-items-center justify-content-center">
                    <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                  </div>
                  <form class="form-group user" action="{{ route('register') }}" method="post">
                    @csrf
                    <div class="form-group my-3">
                      <input type="text" class="form-control form-control-user @error('name') is-invalid @enderror" id="name" placeholder="Name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                      @error('name')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>
                    <div class="form-group my-3">
                      <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                      @error('email')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>
                    <div class="form-group row my-3">
                      <div class="col-md-6 mb-3 mb-sm-0">
                        <input type="password" class="form-control form-control-user @error('password') is-invalid @enderror" id="password" placeholder="Password" name="password" required autocomplete="current-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                      </div>
                      <div class="col-md-6">
                        <input type="password" class="form-control form-control-user" id="password-confirm" placeholder="Password" name="password_confirmation" required autocomplete="new-password">
                      </div>
                    </div>
                    <div class="col-md-12 d-flex justify-content-center">
                        <button class="btn btn-dark btn-user btn-block" type="submit">Sign Up</button>
                    </div>
                    <hr>
                  </form>
                  <div class="text-center">
                    <a class="small text-danger" href="{{ route('login') }}">Already have an account? Login!</a>
                  </div>
                  <hr>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
@endsection
