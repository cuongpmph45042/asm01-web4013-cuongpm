@extends('auth.layout')

@section('title')
    Đăng ký
@endsection
@section('content')
    <div class="row vh-100">
        <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
            <div class="d-table-cell align-middle">

                <div class="text-center mt-4">
                    <h1 class="h2">Đăng ký</h1>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="m-sm-4">
                            <form method="POST" enctype="multipart/form-data" action="{{ route('postSignUp') }}">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">User Name</label>
                                    <input class="form-control form-control-lg" type="text" name="username"
                                        placeholder="Enter your username" />
                                    @error('username')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Full Name</label>
                                    <input class="form-control form-control-lg" type="text" name="fullname"
                                        placeholder="Enter your fullname" />
                                    @error('fullname')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input class="form-control form-control-lg" type="email" name="email"
                                        placeholder="Enter your email" />
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Avatar</label>
                                    <input class="form-control form-control-lg" type="file" name="avatar">
                                    @error('avatar')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Password</label>
                                    <input class="form-control form-control-lg" type="password" name="password"
                                        placeholder="Enter your password" />
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Confirm Password</label>
                                    <input class="form-control form-control-lg" type="password" name="confirm_password"
                                        placeholder="Enter confirm password" />
                                    @error('confirm_password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <small>
                                        <a href="{{ route('signIn') }}">Mày đã có tài khoản!</a>
                                    </small>
                                </div>
                                <div class="text-center mt-3">
                                    <button type="submit" class="btn btn-lg btn-primary">Đăng ký</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
