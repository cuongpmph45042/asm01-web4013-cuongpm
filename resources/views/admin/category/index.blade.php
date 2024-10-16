@extends('admin.layout')

@section('title')
    Danh mục
@endsection

@section('content')
    <div class="card flex-fill table-responsive">
        <div class="card-header">
            <h3 class="text-center">Category</h3>
        </div>
        <div class="mt-3 mb-3 text-end">
            <a href="{{ route('admin.category.create') }}" class="btn btn-primary me-2">Thêm mới</a>
        </div>
        <table class="table table-hover my-0 table-striped table-bordered">
            <thead  class="text-center">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody  class="text-center">
                @foreach ($categories as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td style="width:1px" class="text-nowrap">
                            <a href="{{ route('admin.category.edit', $item->id) }}" class="btn btn-sm btn-success">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
