@extends('admin.layout')

@section('title')
    Propety
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
                <h3 class="text-center">Propety List</h3>
            </div>
            <div class="mt-3 text-end">
                <a href="{{ route('admin.property.create') }}" class="btn btn-success text-light me-3">Add new</a>
            </div>
            <table class="table my-0 table-striped mt-3">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th class="text-center">Image</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($propeties as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td style="width: 1px" class="text-nowrap">
                                <img src="{{ Storage::url($item->image) }}" width="100" alt="">
                            </td>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->category->name }}</td>
                            <td style="width:1px" class="text-nowrap">
                                <div class="d-flex">
                                    <a href="{{ route('admin.property.edit', $item->id) }}" class="btn btn-sm btn-primary me-1">Edit</a>
                                    <a href="{{ route('admin.property.detail', $item->id) }}"
                                        class="btn btn-sm btn-warning me-1">Detail</a>
                                    <form action="{{ route('admin.property.destroy', $item->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Bạn có chắc muốn xóa nó.')" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="mt-3">
                {{ $propeties->links() }}
            </div>
        </div>
    </div>
@endsection
