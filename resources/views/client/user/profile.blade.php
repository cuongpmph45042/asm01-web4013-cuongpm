@extends('client.layout.layout')

@section('title')
    Profile
@endsection

@section('content')
    <div style="height: 150px"></div>
    <div class="container">
        <div>
            <div class="mb-4 text-center">
                <img src="{{ Storage::url($user->avatar) }}" class="rounded-circle" width="300" alt="">
            </div>
            <div class="text-center">
                <div>
                    <span>
                        Fullname: {{ $user->fullname }}
                    </span>
                </div>
                <div>
                    <span>
                        Username: {{ $user->username }}
                    </span>
                </div>
                <div>
                    <span>
                        Email: {{ $user->email }}
                    </span>
                </div>
                <div>
                    <span>
                        Roll: {{ $user->roll }}
                    </span>
                </div>
                <div class="mt-3 mb-3">
                    <a href="{{ route('edit', Auth::user()->id) }}" class="btn btn-primary btn-sm">Sửa thông tin</a>
                </div>
            </div>
        </div>
    </div>
@endsection
