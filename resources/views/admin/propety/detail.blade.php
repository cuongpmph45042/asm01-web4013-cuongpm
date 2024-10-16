@extends('admin.layout')

@section('title')
    Detail
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
                <h3 class="text-center">Property Detail</h3>
            </div>
            <table class="table my-0 table-bordered">
                <tr>
                    <div class="d-flex justify-content-center">
                        <img src="{{ Storage::url($property->image) }}" width="200" alt="">
                    </div>
                </tr>
                <tr>
                    <th>ID</th>
                    <td>{{ $property->id }}</td>
                </tr>
                <tr>
                    <th>Category</th>
                    <td>{{ $property->category->name }}</td>
                </tr>
                <tr>
                    <th>Title</th>
                    <td>{{ $property->title }}</td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td>{{ $property->address }}</td>
                </tr>
                <tr>
                    <th>Price</th>
                    <td>{{ number_format($property->price, 2, '.', ',') . '$' }}</td>
                </tr>
                <tr>
                    <th>Area</th>
                    <td>{{ $property->area }} m<sup>2</sup></td>
                </tr>
                <tr>
                    <th>Rooms</th>
                    <td>{{ $property->rooms }}</td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td>{{ $property->description }}</td>
                </tr>
            </table>
            <div class="mt-3 text-center mb-3">
                <a href="{{ route('admin.property.all') }}" class="btn btn-secondary">List</a>
            </div>
        </div>
    </div>
@endsection
