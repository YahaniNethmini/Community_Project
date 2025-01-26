@extends('layouts.app')

@section('content')
    <section class="home-slider owl-carousel">
        <div class="slider-item" style="background-image: url({{ asset('assets/images/bg_1.jpeg') }});">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                    <div class="col-md-8 col-sm-12 text-center ftco-animate">
                        <span class="subheading" style="color:#9a1ea6; font-size: 50px; font-weight: bolder;">Welcome</span>
                        <h1 class="mb-4">Your One-Stop IT Shop</h1>
                        <p class="mb-4 mb-md-5">Explore the latest gadgets, smartphones, and accessories for all your tech needs.</p><p>
                    </div>

                </div>
            </div>
        </div>

        <div class="slider-item" style="background-image: url({{ asset('assets/images/bg_2.jpeg') }});">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                    <div class="col-md-8 col-sm-12 text-center ftco-animate">
                        <span class="subheading" style="color:#9a1ea6; font-size: 50px; font-weight: bolder;">Welcome</span>
                        <h1 class="mb-4">Cutting-Edge Technology at Your Fingertips</h1>
                        <p class="mb-4 mb-md-5">Upgrade your lifestyle with the latest laptops, phones, and smart devices.</p><p>
                    </div>

                </div>
            </div>
        </div>

        <div class="slider-item" style="background-image: url({{ asset('assets/images/bg_3.jpeg') }});">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                    <div class="col-md-8 col-sm-12 text-center ftco-animate">
                        <span class="subheading" style="color:#9a1ea6; font-size: 50px; font-weight: bolder;">Welcome</span>
                        <h1 class="mb-4">Innovative Products for a Smarter Life</h1>
                        <p class="mb-4 mb-md-5">Discover premium electronics and accessories designed to enhance your experience.</p><p>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
