@extends('layouts.app')

@section('content')
    <section class="home-slider owl-carousel">

        <div class="slider-item" style="background-image: url({{asset('assets/images/bg_3.jpeg')}});">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center">

                    <div class="col-md-7 col-sm-12 text-center ftco-animate">
                        <h1 class="mb-3 mt-5 bread">Product Detail</h1>
                        {{--                        <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Product Detail</span></p>--}}
                    </div>

                </div>
            </div>
        </div>
    </section>

    <div class="container">
        @if( Session::has( 'success' ))
            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">
                {{ Session::get( 'success' ) }}
            </p>
        @endif
    </div>

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5 ftco-animate">
                    <div class="text-center">
                        <a href="" class="img d-inline-block" style="background-image: url({{ Storage::url($item->image) }});">
                            <img src="{{ Storage::url($item->image) }}" class="img-fluid w-75" alt="{{ $item->name }}">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 product-details pl-md-5 ftco-animate">
                    <h3 style="color: white;">{{ $item->name }}</h3>
                    <p class="price"><span>Rs. {{ $item->price }}</span></p>
                    <p style="color: white;">
                        {{ $item->description }}
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
