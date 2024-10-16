@extends('admin.layout')

@section('title')
    User
@endsection

@section('content')
    <div class="d-flex">
        <div class="card flex-fill">
            @if (session('message'))
                <div class="alert alert-success mb-2">
                    <h3>{{ session('message') }}</h3>
                </div>
            @endif
            <div class="card-header">
                <h3 class="text-center">User List</h3>
            </div>
            <table class="table my-0 table-striped mt-3 mb-3">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Avatar</th>
                        <th>Username</th>
                        <th>Fullname</th>
                        <th>Email</th>
                        <th>Roll</th>
                        <th>Active</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td style="width:1px" class="text-nowrap">
                                <img src="{{ Storage::url($item->avatar) }}" width="100" alt="">
                            </td>
                            <td>{{ $item->username }}</td>
                            <td>{{ $item->fullname }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->roll }}</td>
                            <td>
                                @if ($item->active == 1)
                                    <span class="text-success">Active</span>
                                @else
                                    <span class="text-danger">Deactive</span>
                                @endif
                            </td>
                            <td style="width: 1px" class="text-nowrap">
                                @if ($item->active == 1)
                                    <form action="{{ route('ban', $item->id) }}" method="post">
                                        @csrf
                                        @method('PATCH')
                                        <button onclick="return confirm('Bạn có muốn ban nó?')" type="submit" class="btn btn-sm btn-danger">Ban</button>
                                    </form>
                                @else
                                    <form action="{{ route('unban', $item->id) }}" method="post">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="btn btn-sm btn-success">Unban</button>
                                    </form>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
