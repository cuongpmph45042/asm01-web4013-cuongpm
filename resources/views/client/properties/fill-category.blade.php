@extends('client.layout.layout')
@section('title')
    Lọc theo danh mục
@endsection
@include('client.partials.carousel')

@section('content')
    <div class="container mt-5">
        <div class="row">
            @foreach ($properties as $item)
                <div class="col-md-4">
                    <div class="property-item">
                        <a href="{{ route('page.detail', $item->id) }}" class="img">
                            <img src="{{ Storage::url($item->image) }}" width="100" alt="Image" class="img-fluid" />
                        </a>

                        <div class="property-content">
                            <div class="price mb-2"><span>${{ $item->price }}</span></div>
                            <div>
                                <span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
                                <span class="city d-block mb-3">{{ $item->address }}</span>

                                <div class="specs d-flex mb-4">
                                    <span class="d-block d-flex align-items-center me-3">
                                        <span class="icon-bed me-2"></span>
                                        <span class="caption">2 beds</span>
                                    </span>
                                    <span class="d-block d-flex align-items-center">
                                        <span class="icon-bath me-2"></span>
                                        <span class="caption">2 baths</span>
                                    </span>
                                </div>

                                <a href="{{ route('page.detail', $item->id) }}" class="btn btn-primary py-2 px-3">See
                                    details</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
