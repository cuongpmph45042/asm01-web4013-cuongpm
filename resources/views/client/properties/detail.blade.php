@extends('client.layout.layout')
@section('title', 'Chi tiết')
@section('content')
    <div class="section">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-7">
                    <div class="img-property-slide-wrap">
                        <div class="img-property-slide">
                            <img src="{{ $property->image }}" alt="Image" class="img-fluid" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <h2 class="heading text-primary">5232 Ave. 21BC</h2>
                    <p class="meta">Địa chỉ: {{ $property->address }}, Việt Nam</p>
                    <div class="text">
                        <h4 class="text-danger">
                            {{ $property->price }}$
                        </h4>
                        <span>Danh mục: {{ $property->name }}</span> <br>                
                        <span>Diện tích: {{ $property->area }} m<sup>2</sup></span> <br>
                        <span>Số phòng: {{ $property->rooms }}</span>
                    </div>
                    <h6 class="mt-2">
                        {{ $property->title }}
                    </h6>
                    <p class="text-black-50">
                        {{ $property->description }}
                    </p>
                    <div class="d-block agent-box p-5">
                        <div class="img mb-4">
                            <img src="../assets/images/person_2-min.jpg" alt="Image" class="img-fluid" />
                        </div>
                        <div class="text">
                            <h3 class="mb-0">Alicia Huston</h3>
                            <div class="meta mb-3">Thông tin liên hệ</div>
                            <p>
                                Số điện thoại: 0986927182
                                Email: cuongmanh1024@gmail.com
                            </p>
                            <ul class="list-unstyled social dark-hover d-flex">
                                <li class="me-1">
                                    <a href="#"><span class="icon-instagram"></span></a>
                                </li>
                                <li class="me-1">
                                    <a href="#"><span class="icon-twitter"></span></a>
                                </li>
                                <li class="me-1">
                                    <a href="#"><span class="icon-facebook"></span></a>
                                </li>
                                <li class="me-1">
                                    <a href="#"><span class="icon-linkedin"></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
