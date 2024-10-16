@extends('auth.layout')

@section('title')
    Cập nhật tài khoản
@endsection
@section('content')
    <div class="row vh-100">
        <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
            <div class="d-table-cell align-middle">

                <div class="text-center mt-4">
                    <h1 class="h2">Cập nhật</h1>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="m-sm-4">
                            <form method="POST" enctype="multipart/form-data" action="{{ route('update', $user->id) }}">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    <label class="form-label">Full Name</label>
                                    <input class="form-control form-control-lg" type="text" name="fullname"
                                        placeholder="Enter your fullname"  value="{{ $user->fullname }}"/>
                                    @error('fullname')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input class="form-control form-control-lg" type="email" name="email"
                                        placeholder="Enter your email" value="{{ $user->email }}"/>
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Avatar</label>
                                    <input class="form-control form-control-lg" type="file" name="avatar">
                                    <div>
                                        <img src="{{ Storage::url($user->avatar) }}" width="100" alt="">
                                    </div>
                                    @error('avatar')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="text-center mt-3">
                                    <button type="submit" class="btn btn-lg btn-primary">Cập nhật</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
