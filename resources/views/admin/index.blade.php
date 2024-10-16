@extends('admin.layout')

@section('title')
    Trang quản trị
@endsection

@section('content')
    <h1 class="h3 mb-3 text-center">Dashboard</h1>
    <div class="mt-3">
        <div class="d-flex row justify-content-between">
            <div class="col-md-5 bg-white shadow rounded">
                <h5 class="text-center">Thống kê danh mục</h5>
                <table class="table mt-3">
                    <thead class="text-center">
                        <th>Stt</th>
                        <th>Tên danh mục</th>
                        <th>Tổng sản phẩm</th>
                    </thead>
                    <tbody class="text-center">
                        @foreach ($propertiesByCate as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->properties_count }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-md-5 bg-white shadow rounded">
                <h5  class="text-center">Top sản phẩm view cao</h5>
                <table class="table mt-3">
                    <thead class="text-center">
                        <th>ID</th>
                        <th>Ảnh</th>
                        <th>Địa chỉ</th>
                        <th>Lượt xem</th>
                    </thead>
                    <tbody class="text-center">
                        @foreach ($propertiesByView as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>
                                    <img src="{{ Storage::url($item->image) }}" width="50" alt="">
                                </td>
                                <td>{{ $item->address }}</td>
                                <td>{{ $item->views }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
@endsection
