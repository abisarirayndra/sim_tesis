@extends('auth.layout.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-7 col-md-7">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <img src="{{asset('template')}}/img/undraw_profile.svg" alt="User Icon" width="80">
                                    <h1 class="h4 text-gray-900 mt-4 mb-4">Reset Password</h1>
                                </div>
                                <form class="user" method="POST" action="{{ route('upreset') }}">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" name="username" placeholder="Username">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user" name="email"
                                            placeholder="Email Address">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" name="password"
                                                 placeholder="New Password">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user"
                                                 placeholder="Enter Again Your New Password">
                                    </div>
                                    <div class="text-center">
                                        <a href="{{ route('login') }}" class="btn btn-danger btn-user">Cancel</a>
                                        <button class="btn btn-success btn-user" type="submit">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

@endsection
