@extends('layout')
@section('content')
<section class="vh-100_del" style="padding-top:100px;">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-12 col-xl-11">
          <div class="card text-black" style="border-radius: 25px;">
            <div class="card-body p-md-5">
              <div class="row justify-content-center">
                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                  <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">My Profile</p>
                  @if (Session::has('success'))
                        <div class="alert alert-success">{{ Session::get('success') }}</div>
                  @endif
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">

                        <label class="form-label" for="name">Name : {{ $user->name }}</label>
                      </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                      <label class="form-label" for="name">Email : {{ $user->email }}</label>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                        <a href="{{ url('edit-profile') }}" class="btn btn-success" >Edit Profile</a>&nbsp;
                        <a href="{{ url('change-password') }}" class="btn btn-success" >Change Password</a>
                    </div>
              </div>

                </div>
                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                  {{-- <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                    class="img-fluid" alt="Sample image"> --}}

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


@endsection
