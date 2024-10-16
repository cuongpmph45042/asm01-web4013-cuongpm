@extends('admin.layout')

@section('title')
    Create 
@endsection

@section('content')
    <div class="card flex-fill">
        <div class="card-header">
            <h3 class="text-center">Update category</h3>
        </div>
        <div class="d-flex justify-content-center">
            <form class="w-75 mb-2" action="{{ route('admin.category.update', $category->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method("PUT")
                <div>
                    <label for="" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $category->name }}">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mt-3">
                    <a href="{{ route('admin.category.all') }}" class="btn btn-secondary">List</a>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection