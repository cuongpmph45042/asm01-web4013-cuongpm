@extends('admin.layout')

@section('title')
    Create new
@endsection

@section('content')
    <div class="card flex-fill">
        <div class="card-header">
            <h3 class="text-center">Update property</h3>
        </div>
        <div class="d-flex justify-content-center">
            <form class="w-75 mb-2" action="{{ route('admin.property.update', $property->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div>
                    <label for="" class="form-label">Title</label>
                    <input type="text" name="title" value="{{ $property->title }}" class="form-control">
                    @error('title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mt-3">
                    <label for="" class="form-label">Image</label>
                    <input type="file" name="image" class="form-control">
                    <div class="mt-1">
                        <img src="{{ Storage::url($property->image) }}" width="100" alt="">
                    </div>
                    @error('image')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mt-3">
                    <label for="" class="form-label">Address</label>
                    <input type="text" name="address" value="{{ $property->address }}" class="form-control">
                    @error('address')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mt-3">
                    <label for="" class="form-label">Area</label>
                    <input type="number" value="{{ $property->area }}" step="0.1" name="area" class="form-control">
                    @error('area')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mt-3">
                    <label for="" class="form-label">Price</label>
                    <input type="number" value="{{ $property->price }}" step="0.1" name="price" class="form-control">
                    @error('price')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mt-3">
                    <label for="" class="form-label">Rooms</label>
                    <input type="number" value="{{ $property->rooms }}" name="rooms" class="form-control">
                    @error('rooms')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mt-3">
                    <label for="" class="form-label">Category</label>
                    <select class="form-select" name="category_id" id="">
                        @foreach ($categories as $item)
                            <option value="{{ $item->id }}" 
                                @if ($item->id == $property->category_id)
                                    selected
                                @endif>{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mt-3">
                    <label for="" class="form-label">Description</label>
                    <textarea rows="3" name="description" class="form-control">{{ $property->description }}</textarea>
                    @error('description')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mt-3">
                    <a href="{{ route('admin.property.all') }}" class="btn btn-secondary">List</a>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
