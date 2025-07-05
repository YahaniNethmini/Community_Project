@extends('layouts.app')

@section('content')
    <!-- Page Header -->
    <div class="container-fluid" style="padding: 60px 0; margin-top: 20px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <h1 style="color: white; font-size: 3rem; font-weight: bold; margin-bottom: 15px;">{{ $item->name }}</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        @if( Session::has( 'success' ))
            <div class="alert {{ Session::get('alert-class', 'alert-info') }}" style="border-radius: 10px; margin: 30px 0;">
                {{ Session::get( 'success' ) }}
            </div>
        @endif
    </div>

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <!-- Product Image Section -->
                <div class="col-lg-6 mb-5 ftco-animate">
                    <div class="product-image-wrapper"
                         style="position: relative; border-radius: 20px; overflow: hidden;
                box-shadow: 0 15px 35px rgba(0,0,0,0.3);
                background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                padding: 20px; display: flex; align-items: center; justify-content: center;">
                        <div class="image-container"
                             style="position: relative; border-radius: 15px; overflow: hidden;
                    background: white; width: 200px; height: 200px; display: flex; align-items: center; justify-content: center;">
                            <img src="{{ Storage::url($item->image) }}"
                                 alt="{{ $item->name }}"
                                 style="width: 100%; height: 100%; object-fit: cover;
                        border-radius: 15px; transition: all 0.3s ease; cursor: zoom-in;">
                        </div>
                        <!-- Image Overlay for Zoom Effect -->
                        <div class="image-overlay"
                             style="position: absolute; top: 20px; left: 20px; right: 20px; bottom: 20px;
                    background: rgba(0,0,0,0.1); opacity: 0; transition: all 0.3s ease;
                    border-radius: 15px; pointer-events: none;">
                        </div>
                    </div>
                </div>


                <!-- Product Details Section -->
                <div class="col-lg-6 product-details ftco-animate">
{{--                    <div class="details-card" style="background: linear-gradient(135deg, #ffffff 0%, #000000 100%); border-radius: 20px; padding: 40px; box-shadow: 0 15px 35px rgba(0,0,0,0.3); position: relative; overflow: hidden;">--}}

                        <!-- Background Pattern -->
                        <div class="bg-pattern" style="position: absolute; top: 0; right: 0; width: 100px; height: 100px; background: rgba(255,255,255,0.1); border-radius: 50%; transform: translate(30px, -30px);"></div>
                        <div class="bg-pattern" style="position: absolute; bottom: 0; left: 0; width: 80px; height: 80px; background: rgba(255,255,255,0.05); border-radius: 50%; transform: translate(-20px, 20px);"></div>

                        <div class="content" style="position: relative; z-index: 2;">
                            <!-- Product Title -->
{{--                            <h3 style="color: white; font-size: 2.2rem; font-weight: bold; margin-bottom: 25px; line-height: 1.3;">--}}
{{--                                {{ $item->name }}--}}
{{--                            </h3>--}}

                            <!-- Price Section -->
                            <div class="price-section" style="margin-bottom: 30px; padding: 20px; background: rgba(255,255,255,0.15); border-radius: 15px; backdrop-filter: blur(10px);">
                                <div class="price-label" style="color: rgba(255,255,255,0.8); font-size: 0.9rem; margin-bottom: 5px; text-transform: uppercase; letter-spacing: 1px;">
                                    Price
                                </div>
                                <div class="price-value" style="color: #FFD700; font-size: 2.5rem; font-weight: bold; text-shadow: 0 2px 4px rgba(0,0,0,0.3);">
                                    Rs. {{ number_format($item->price) }}
                                </div>
                            </div>

                            <!-- Description Section -->
                            <div class="description-section" style="margin-bottom: 35px;">
                                <h4 style="color: white; font-size: 1.3rem; margin-bottom: 15px; font-weight: 600;">
                                    Description
                                </h4>
                                <p style="color: rgba(255,255,255,0.95); font-size: 1rem; line-height: 1.7; margin-bottom: 0;">
                                    {{ $item->description }}
                                </p>
                            </div>

                            <!-- Action Buttons -->
                            <div class="action-buttons" style="display: flex; gap: 15px; flex-wrap: wrap;">
                                <a href="{{ route('items.all') }}"
                                   class="btn-secondary"
                                   style="background: rgba(0,0,0,0.2); color: white; padding: 15px 30px; border-radius: 30px; border: 2px solid rgba(0,0,0,0.3); font-weight: 600; font-size: 1rem; transition: all 0.3s ease; text-decoration: none; display: inline-block; text-align: center; flex: 1; min-width: 140px;">
                                    Back to Items
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Enhanced CSS Styles -->
    <style>
        /* Hover Effects */
        .product-image-wrapper:hover .image-overlay {
            opacity: 1;
        }

        .product-image-wrapper:hover img {
            transform: scale(1.05);
        }

        .btn-primary:hover {
            background: rgba(255,255,255,0.3) !important;
            border-color: rgba(255,255,255,0.6) !important;
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.3);
        }

        .btn-secondary:hover {
            background: rgba(0,0,0,0.3) !important;
            border-color: rgba(0,0,0,0.6) !important;
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.3);
        }

        .info-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.3) !important;
        }

        .details-card {
            animation: slideInRight 0.8s ease-out;
        }

        .product-image-wrapper {
            animation: slideInLeft 0.8s ease-out;
        }

        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .action-buttons {
                flex-direction: column;
            }

            .btn-primary, .btn-secondary {
                flex: none !important;
                width: 100%;
            }

            .details-card {
                padding: 25px;
            }

            .price-value {
                font-size: 2rem !important;
            }

            h3 {
                font-size: 1.8rem !important;
            }
        }
    </style>
@endsection
