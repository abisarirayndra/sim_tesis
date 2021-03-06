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
                                    <h1 class="h4 text-gray-900 mt-4 mb-4">Registrasi Pra Tesis</h1>
                                </div>
                                <form class="user" method="POST" action="{{ route('reg') }}">
                                    @csrf
                                    <div class="form-group">
                                        <select name="role_id" class="form-control">
                                            <option value="1" selected>Mahasiswa</option>
                                            <option value="2">Dosen</option>
                                            <option value="3">Admin S2</option>
                                            <option value="4">Kalab</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="username" placeholder="Username">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email"
                                            placeholder="Email Address">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="password"
                                                 placeholder="Password">
                                    </div>
                                    <button class="btn btn-success btn-user btn-block" type="submit">Activate</button>
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
