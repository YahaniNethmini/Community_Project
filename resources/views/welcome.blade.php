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

    <div class="container d-flex justify-content-center text-center mt-5">
        <div class="container-wrap">
            <div class="wrap d-md-flex align-items-xl-end">
                <div class="info">
                    <div class="row no-gutters">
                        <div class="col-md-4 d-flex ftco-animate">
                            <div class="icon"><span class="icon-phone"></span></div>
                            <div class="text">
                                <h3 style="color: white;">077 777 777</h3>
                                <p style="color: white;">Description text Description text Description text</p>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex ftco-animate">
                            <div class="icon"><span class="icon-my_location"></span></div>
                            <div class="text">
                                <h3 style="color: white;">Desh E-Mart</h3>
                                <p style="color: white;">Pabahinna, Balangoda Description text</p>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex ftco-animate">
                            <div class="icon"><span class="icon-clock-o"></span></div>
                            <div class="text">
                                <h3 style="color: white;">Open Monday-Friday</h3>
                                <p style="color: white;">8:00am - 9:00pm</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
