@extends('layouts.app')

@section('content')
    <section class="home-slider owl-carousel">

        <div class="slider-item" style="background-image: url({{asset('assets/images/bg_3.jpeg')}});">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center">

                    <div class="col-md-7 col-sm-12 text-center ftco-animate">
                        <h1 class="mb-3 mt-5 bread">All Items</h1>
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

    <div class="container">
        <div class="row">
            @foreach($items as $item)
                <div class="col-md-4 mb-4">
                    <div class="card" style="background-color: #000000">
                        <img src="{{ Storage::url($item->image) }}" class="card-img-top" alt="{{ $item->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->name }}</h5>
                            <p class="card-text">{{ $item->description }}</p>
                            <p class="card-text"><strong>Rs. {{ $item->price }}</strong></p>
                            <a href="{{ route('item.single', $item->id) }}" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
