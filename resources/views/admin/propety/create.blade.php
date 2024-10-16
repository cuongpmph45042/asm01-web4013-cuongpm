@extends('admin.layout')

@section('title')
    Create new
@endsection

@section('content')
    <div class="card flex-fill">
        <div class="card-header">
            <h3 class="text-center">Add new property</h3>
        </div>
        <div class="d-flex justify-content-center">
            <form class="w-75 mb-2" action="{{ route('admin.property.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div>
                    <label for="" class="form-label">Title</label>
                    <input type="text" name="title" class="form-control">
                    @error('title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mt-3">
                    <label for="" class="form-label">Image</label>
                    <input type="file" name="image" class="form-control">
                    @error('image')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mt-3">
                    <label for="" class="form-label">Address</label>
                    <input type="text" name="address" class="form-control">
                    @error('address')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mt-3">
                    <label for="" class="form-label">Area</label>
                    <input type="number" step="0.1" name="area" class="form-control">
                    @error('area')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mt-3">
                    <label for="" class="form-label">Price</label>
                    <input type="number" step="0.1" name="price" class="form-control">
                    @error('price')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mt-3">
                    <label for="" class="form-label">Rooms</label>
                    <input type="number" name="rooms" class="form-control">
                    @error('rooms')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mt-3">
                    <label for="" class="form-label">Category</label>
                    <select class="form-select" name="category_id" id="">
                        @foreach ($categories as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mt-3">
                    <label for="" class="form-label">Description</label>
                    <textarea rows="3" name="description" class="form-control"></textarea>
                    @error('description')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mt-3">
                    <a href="{{ route('admin.property.all') }}" class="btn btn-secondary">List</a>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
@endsection
