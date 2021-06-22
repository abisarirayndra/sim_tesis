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
                                    <h1 class="h4 text-gray-900 mt-4 mb-4">SIM Tesis Login</h1>
                                </div>
                                <form class="user" method="POST" action="{{ route('log') }}">
                                    @csrf
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user" name="email"
                                            placeholder="Email Address">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" name="password"
                                                 placeholder="Password">
                                    </div>
                                    <button class="btn btn-success btn-user btn-block" type="submit">Login</button>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <div class="small">Your account doesn't actived yet? <a class="text-primary" href="{{ route('register') }}">click here</a></div>
                                </div>
                                <div class="text-center">
                                    <div class="small">Forgot your password? <a class="text-primary" href="">click here</a></div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

@endsection
