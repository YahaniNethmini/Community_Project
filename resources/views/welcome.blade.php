@extends('layouts.app')

@section('content')
    <section class="home-slider owl-carousel">
        <!-- Slide 1 - Electronics Theme -->
        <div class="slider-item"
             style="background: #301848; background: linear-gradient(135deg, #301848 0%, #1a0c2b 100%);
     min-height: 400px; width: 100vw; position: relative; color: #fff;">
            <div class="overlay"
                 style="position: absolute; top:0; left:0; right:0; bottom:0; background: rgba(0,0,0,0.5); z-index:1;"></div>
            <div class="container" style="position: relative; z-index:2;">
                <div class="row slider-text justify-content-center align-items-center">
                    <div class="col-md-8 col-sm-12 text-center">
                        <!-- Centered Image -->
                        <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop"
                             alt="Smartphone"
                             style="width: 240px; height: 240px; object-fit: cover; border-radius: 20px; margin-bottom: 18px; box-shadow: 0 4px 16px rgba(0,0,0,0.25); border: 3px solid #fff;">
                        <!-- Icon -->
                        <div style="font-size: 60px; margin-bottom: 20px;">
                            <i class="fas fa-tv"></i>
                        </div>
                        <span class="subheading" style="color:#9a1ea6; font-size: 50px; font-weight: bolder;">Welcome</span>
                        <h1 class="mb-4">Welcome to Desha E Mart</h1>
                        <p class="mb-4 mb-md-5">Your Trusted Partner for All Electronics!</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 2 - Repair Services Theme -->
        <div class="slider-item"
             style="background: #301848; background: linear-gradient(135deg, #301848 0%, #1a0c2b 100%);
     min-height: 400px; width: 100vw; position: relative; color: #fff;">
            <div class="overlay"
                 style="position: absolute; top:0; left:0; right:0; bottom:0; background: rgba(0,0,0,0.5); z-index:1;"></div>
            <div class="container" style="position: relative; z-index:2;">
                <div class="row slider-text justify-content-center align-items-center">
                    <div class="col-md-8 col-sm-12 text-center">
                        <!-- Centered Image -->
                        <img src="https://images.unsplash.com/photo-1517336714731-489689fd1ca8?auto=format&fit=crop"
                             alt="Smartphone"
                             style="width: 240px; height: 240px; object-fit: cover; border-radius: 20px; margin-bottom: 18px; box-shadow: 0 4px 16px rgba(0,0,0,0.25); border: 3px solid #fff;">
                        <!-- Icon -->
                        <div style="font-size: 60px; margin-bottom: 20px;">
                            <i class="fas fa-tools"></i>
                        </div>
                        <span class="subheading" style="color:#9a1ea6; font-size: 50px; font-weight: bolder;">Welcome</span>
                        <h1 class="mb-4">Expert Laptop & Phone Repair Services</h1>
                        <p class="mb-4 mb-md-5">Fast, Reliable, and Affordable!</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 3 - Smartphone Theme -->
        <div class="slider-item"
             style="background: #301848; background: linear-gradient(135deg, #301848 0%, #1a0c2b 100%);
     min-height: 400px; width: 100vw; position: relative; color: #fff;">
            <div class="overlay"
                 style="position: absolute; top:0; left:0; right:0; bottom:0; background: rgba(0,0,0,0.5); z-index:1;"></div>
            <div class="container" style="position: relative; z-index:2;">
                <div class="row slider-text justify-content-center align-items-center">
                    <div class="col-md-8 col-sm-12 text-center">
                        <!-- Centered Image -->
                        <img src="https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?auto=format&fit"
                             alt="Smartphone"
                             style="align-items: center; width: 240px; height: 240px; object-fit: cover; border-radius: 20px; margin-bottom: 18px; box-shadow: 0 4px 16px rgba(0,0,0,0.25); border: 3px solid #fff;">
                        <!-- Icon -->
                        <div style="font-size: 60px; margin-bottom: 20px;">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <span class="subheading" style="color:#9a1ea6; font-size: 50px; font-weight: bolder;">Welcome</span>
                        <h1 class="mb-4">Discover the Latest Smartphones at the Best Prices</h1>
                        <p class="mb-4 mb-md-5">Shop Now!</p>
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
{{--                        <div class="col-md-4 d-flex ftco-animate">--}}
{{--                            <div class="icon"><span class="icon-phone"></span></div>--}}
{{--                            <div class="text">--}}
{{--                                <h3 style="color: white;">077 777 777</h3>--}}
{{--                                <p style="color: white;">Description text Description text Description text</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <div class="col-md-6 d-flex ftco-animate">
                            <div class="icon"><span class="icon-my_location"></span></div>
                            <div class="text">
                                <h3 style="color: white;">Desh E-Mart</h3>
                                <p style="color: white;">Pabahinna, Balangoda</p>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex ftco-animate">
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

    <section class="ftco-about d-md-flex" style="overflow: hidden; position: relative;">
        <!-- Decorative/Background Side -->
        <div class="one-half img"
             style="background: linear-gradient(135deg, #301848 0%, #764ba2 100%),
                radial-gradient(circle at 20% 30%, rgba(255, 255, 255, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 70%, rgba(0, 0, 0, 0.1) 0%, transparent 50%),
                repeating-linear-gradient(45deg, transparent, transparent 3px, rgba(255, 255, 255, 0.02) 3px, rgba(255, 255, 255, 0.02) 6px);
                background-size: 100% 100%, 400px 400px, 300px 300px, 30px 30px;
                min-height: 500px;
                width: 100vw;
                position: relative;">

            <!-- CSS Generated Geometric Shapes -->
            <div style="position: absolute; top: 20%; left: 15%; width: 60px; height: 60px;
                    background: rgba(255, 255, 255, 0.1); border-radius: 50%;
                    box-shadow: 0 0 20px rgba(255, 255, 255, 0.2);"></div>
            <div style="position: absolute; top: 60%; right: 20%; width: 80px; height: 80px;
                    background: rgba(154, 30, 166, 0.2); transform: rotate(45deg);
                    box-shadow: 0 0 15px rgba(154, 30, 166, 0.3);"></div>
            <div style="position: absolute; bottom: 30%; left: 25%; width: 40px; height: 40px;
                    background: rgba(255, 255, 255, 0.15); border-radius: 50%;"></div>

            <!-- Interactive Floating Icons (Font Awesome) -->
            <a href="#" title="Our Products"
               style="position: absolute; top: 10%; right: 10%; z-index: 2; color: #fff; font-size: 2.5rem; background: rgba(48,24,72,0.7); border-radius: 50%; padding: 18px; transition: background 0.2s;">
                <i class="fas fa-box-open"></i>
            </a>
            <a href="#" title="Our Team"
               style="position: absolute; bottom: 10%; left: 10%; z-index: 2; color: #fff; font-size: 2.5rem; background: rgba(154,30,166,0.7); border-radius: 50%; padding: 18px; transition: background 0.2s;">
                <i class="fas fa-users"></i>
            </a>
            <a href="#" title="Contact Us"
               style="position: absolute; bottom: 20%; right: 15%; z-index: 2; color: #fff; font-size: 2.5rem; background: rgba(76,75,162,0.7); border-radius: 50%; padding: 18px; transition: background 0.2s;">
                <i class="fas fa-envelope"></i>
            </a>

            <!-- Company Image (Optional) -->
            <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=400&q=80"
                 alt="Our Team"
                 style="
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 250px; /* Increase this value for a larger image */
        height: 250px; /* Optional: set height for a perfect square */
        object-fit: cover;
        border-radius: 20px;
        box-shadow: 0 8px 24px rgba(0,0,0,0.3);
        border: 4px solid #fff;
        z-index: 3;
     ">

        </div>

        <!-- Content Side -->
        <div class="one-half ftco-animate" style="background: rgba(48,24,72,0.95); padding: 50px 30px;">
            <div class="overlap">
                <div class="heading-section ftco-animate">
                    <span class="subheading" style="color: #9a1ea6; font-size: 1.5rem;">Discover</span>
                    <h2 class="mb-4" style="color: #fff;">Our Story</h2>
                </div>
                <div>
                    <p style="color: #eee;">Desha E Mart began with a simple mission: to bring the best in electronics and customer service to our community. From humble beginnings, we've grown into a trusted hub for all your electronics needs—whether it's the latest gadgets, expert repairs, or friendly advice, our team is here for you.</p>
                    <ul style="color: #fff; margin-top: 25px; list-style: none; padding: 0;">
                        <li style="margin-bottom: 12px;">
                            <i class="fas fa-check-circle" style="color: #9a1ea6; margin-right: 8px;"></i>
                            Wide Range of Quality Products
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    {{--    Items--}}
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <span class="subheading">Discover</span>
                    <h2 style="color: white;" class="mb-4">Best Items Sellers</h2>
                    <p style="color: white;">We offer a wide range of high-quality electric items at affordable prices. From smartphones to accessories, find everything you need in one place!</p>
                </div>
            </div>
            <div class="row">

                @php
                    use Illuminate\Support\Facades\Storage;
                @endphp

                @foreach($items as $item)
                    <div class="col-md-3">
                        <div class="menu-entry">
                            <a href="" class="img" style="background-image: url({{ Storage::url($item->image) }});
                               background-size: cover;
                               background-position: center;
                               background-repeat: no-repeat;
                               image-rendering: crisp-edges;
                               image-rendering: -webkit-optimize-contrast;
                               min-height: 200px;
                               display: block;"></a>

                            <div class="text text-center pt-4">
                                <h3><a href="{{ route('items.single', $item->id) }}">{{ $item->name }}</a></h3>
                                <p style="color: white;">{{ $item->description }}</p>
                                <p class="price"><span>Rs. {{ $item->price }}</span></p>
                                <p><a href="{{ route('items.single', $item->id) }}" class="btn btn-primary btn-outline-primary">Show</a></p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    {{--    Services--}}
    <section class="ftco-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 pr-md-5">
                    <div class="heading-section text-md-right ftco-animate">
                        <span class="subheading">Discover</span>
                        <h2 style="color: white;" class="mb-4">Our Services</h2>
                        <p style="color: white;" class="mb-4">
                            We are committed to providing top-notch services to meet all your electronic needs.
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        @foreach($services as $service)
                            <div class="col-md-6">
                                <div class="menu-entry service-card">
                                    <a href="#" class="img" style="background-image: url({{ asset($service->image) }});
                                       background-size: cover;
                                       background-position: center;
                                       background-repeat: no-repeat;
                                       image-rendering: crisp-edges;
                                       image-rendering: -webkit-optimize-contrast;
                                       min-height: 150px;
                                       display: block;"></a>
                                    <div class="service-info">
                                        <h5>{{ $service->name }}</h5>
                                        <p>{{ $service->description }}</p>
{{--                                        <span class="service-price">From Rs.{{ $service->price }}</span>--}}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
