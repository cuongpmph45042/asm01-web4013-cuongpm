@extends('auth.layout')

@section('title')
    Đăng nhập
@endsection
@section('content')
    <div class="row vh-100">
        <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
            <div class="d-table-cell align-middle">
                @if (session('message'))
                    <div class="alert alert-success mb-2">
                        <h3>{{ session('message') }}</h3>
                    </div>
                @endif

                <div class="text-center mt-4">
                    <h1 class="h2">Đăng nhập</h1>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="m-sm-4">
                            <form method="POST" action="{{ route('postSignIn') }}">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">User Name</label>
                                    <input class="form-control form-control-lg" type="text" name="username"
                                        placeholder="Enter your email" />
                                    @error('username')
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
                                    <small class="d-flex justify-content-between mt-2">
                                        <a href="#">Quên mật khẩu?</a>
                                        <a href="{{ route('signUp') }}">Chưa có tài khoản</a>
                                    </small>
                                </div>
                                <div>
                                    <label class="form-check">
                                        <input class="form-check-input" type="checkbox" value="remember-me"
                                            name="remember-me" checked>
                                        <span class="form-check-label">
                                            Remember me
                                        </span>
                                    </label>
                                </div>
                                <div class="text-center mt-3">
                                    <a href="{{ route('page.index') }}" class="btn btn-lg btn-secondary">Quay lại</a>
                                    <button type="submit" class="btn btn-lg btn-primary">Đăng nhập</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
