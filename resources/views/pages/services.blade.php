@extends('layouts.app')

@section('content')
    <section class="home-slider owl-carousel">
        <div class="slider-item" style="background-image: url({{ asset('assets/images/bg_1.jpeg') }});">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
                    <div class="col-md-8 col-sm-12 text-center ftco-animate">
                        <span class="subheading" style="color:#9a1ea6; font-size: 50px; font-weight: bolder;">Services</span>
                        <h1 class="mb-4">Professional IT Services</h1>
                        <p class="mb-4 mb-md-5">Expert solutions for all your technology needs and requirements.</p>
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
                                <p style="color: white;">Call us for service inquiries</p>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex ftco-animate">
                            <div class="icon"><span class="icon-my_location"></span></div>
                            <div class="text">
                                <h3 style="color: white;">Service Center</h3>
                                <p style="color: white;">Pabahinna, Balangoda</p>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex ftco-animate">
                            <div class="icon"><span class="icon-clock-o"></span></div>
                            <div class="text">
                                <h3 style="color: white;">Service Hours</h3>
                                <p style="color: white;">8:00am - 6:00pm</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-about d-md-flex">
        <div class="one-half img" style="background-image: url({{ asset('assets/images/about.jpeg') }});"></div>
        <div class="one-half ftco-animate">
            <div class="overlap">
                <div class="heading-section ftco-animate">
                    <span class="subheading">Professional</span>
                    <h2 class="mb-4">Our Services</h2>
                </div>
                <div>
                    <p style="color: white;">We provide comprehensive IT services including computer repair, software installation, network setup, and technical support. Our experienced technicians are dedicated to solving your technology challenges with professional expertise and reliable solutions.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Services Grid --}}
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <span class="subheading">Professional</span>
                    <h2 style="color: white;" class="mb-4">Our Service Offerings</h2>
                    <p style="color: white;">Comprehensive IT solutions tailored to meet your specific needs and requirements.</p>
                </div>
            </div>
            <div class="row">
                @foreach($services as $service)
                    <div class="col-md-4 mb-4">
                        <div class="service-card" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 15px; padding: 30px; text-align: center; box-shadow: 0 10px 30px rgba(0,0,0,0.3); transition: all 0.3s ease; cursor: pointer; position: relative; overflow: hidden;">

                            <!-- Animated Background Icon -->
                            <div class="service-icon" style="font-size: 60px; margin-bottom: 20px; opacity: 0.1; position: absolute; top: 20px; right: 20px;">
                                @switch(strtolower($service->name))
                                    @case('computer repair')
                                    @case('laptop repair')
                                        🔧
                                        @break
                                    @case('software installation')
                                    @case('software')
                                        💾
                                        @break
                                    @case('network setup')
                                    @case('networking')
                                        🌐
                                        @break
                                    @case('data recovery')
                                        💽
                                        @break
                                    @case('technical support')
                                    @case('support')
                                        🛠️
                                        @break
                                    @default
                                        💻
                                @endswitch
                            </div>

                            <!-- Service Icon (Visible) -->
                            <div class="service-main-icon" style="font-size: 50px; margin-bottom: 20px; position: relative; z-index: 2;">
                                @switch(strtolower($service->name))
                                    @case('computer repair')
                                    @case('laptop repair')
                                        🔧
                                        @break
                                    @case('software installation')
                                    @case('software')
                                        💾
                                        @break
                                    @case('network setup')
                                    @case('networking')
                                        🌐
                                        @break
                                    @case('data recovery')
                                        💽
                                        @break
                                    @case('technical support')
                                    @case('support')
                                        🛠️
                                        @break
                                    @default
                                        💻
                                @endswitch
                            </div>

                            <div class="service-content" style="position: relative; z-index: 2;">
                                <h3 style="color: white; font-size: 1.5rem; margin-bottom: 15px; font-weight: bold;">
                                    {{ $service->name }}
                                </h3>
                                <p style="color: rgba(255,255,255,0.9); font-size: 0.95rem; line-height: 1.6; margin-bottom: 20px;">
                                    {{ $service->description }}
                                </p>
                                <div class="price-section" style="margin-bottom: 25px;">
                                    <span style="color: #FFD700; font-size: 1.8rem; font-weight: bold;">
                                        Rs. {{ number_format($service->price) }}
                                    </span>
                                </div>
                                <a href="{{ route('service.single', $service->id) }}"
                                   class="service-btn"
                                   style="background: rgba(255,255,255,0.2); color: white; padding: 12px 30px; border-radius: 25px; text-decoration: none; font-weight: 600; transition: all 0.3s ease; border: 2px solid rgba(255,255,255,0.3); display: inline-block;">
                                    View Details
                                </a>
                            </div>

                            <!-- Hover Effect Overlay -->
                            <div class="hover-overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(255,255,255,0.1); opacity: 0; transition: all 0.3s ease; border-radius: 15px;"></div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Interactive CSS Styles -->
    <style>
        .service-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 20px 40px rgba(0,0,0,0.4) !important;
        }

        .service-card:hover .hover-overlay {
            opacity: 1;
        }

        .service-card:hover .service-btn {
            background: rgba(255,255,255,0.3) !important;
            border-color: rgba(255,255,255,0.6) !important;
            transform: scale(1.05);
        }

        .service-card:hover .service-main-icon {
            transform: scale(1.1) rotate(5deg);
            transition: all 0.3s ease;
        }

        .service-card:nth-child(3n+1) {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%) !important;
        }

        .service-card:nth-child(3n+2) {
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%) !important;
        }

        .service-card:nth-child(3n+3) {
            background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%) !important;
        }

        @media (max-width: 768px) {
            .service-card {
                margin-bottom: 20px;
            }
        }
    </style>
@endsection
