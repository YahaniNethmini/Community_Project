@extends('layouts.app')

@section('content')
    <div class="container-fluid" style="padding: 60px 0; margin-top: 20px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <h1 style="color: white; font-size: 3rem; font-weight: bold; margin-bottom: 15px;">Our Services</h1>
                    <p style="color: rgba(255,255,255,0.9); font-size: 1.1rem;">Expert solutions for all your technology needs and requirements.</p>
                </div>
            </div>
        </div>
    </div>

    {{-- Services Grid --}}
    <section class="ftco-section">
        <div class="container">
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
{{--                                <a href="{{ route('service.single', $service->id) }}"--}}
{{--                                   class="service-btn"--}}
{{--                                   style="background: rgba(255,255,255,0.2); color: white; padding: 12px 30px; border-radius: 25px; text-decoration: none; font-weight: 600; transition: all 0.3s ease; border: 2px solid rgba(255,255,255,0.3); display: inline-block;">--}}
{{--                                    View Details--}}
{{--                                </a>--}}
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
