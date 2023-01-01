@extends('layouts.main')

@section('content')

<div class="container-fluid justify-content-center">

    <div class="container">
      <div class="row justify-content-center">

        <div class="col-lg-12 col-md-4">

          <div class="card o-hidden border-0 shadow-lg my-5 col-md-6">
            <div class="card-body p-0">
              <!-- Nested Row within Card Body -->
              <div class="row justify-content-center align-items-center">
                <div class="col-lg-12">
                  <div class="p-5">
                    <div class="text-center align-items-center">
                      <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                    </div>
                    <form class="form-group user" action="{{ route('login') }}" method="post">
                      @csrf
                      <div class="form-group my-3">
                        <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter Email Address..." value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                      </div>
                      <div class="form-group my-3">
                        <input type="password" class="form-control form-control-user @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password" required autocomplete="current-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                      </div>
                      <div class="col-md-12 d-flex justify-content-center">
                        <button class="btn btn-dark btn-user btn-block" type="submit">Sign In</button>
                      </div>
                    </form>
                    <hr>
                    <div class="text-center">
                      <a class="small text-danger" href="{{ route('register') }}">Create an Account!</a>
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
    <!-- Outer Row -->

  </div>
@endsection
