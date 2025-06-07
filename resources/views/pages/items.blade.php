@extends('layouts.app')

@section('content')
    <div class="container-fluid" style="padding: 60px 0; margin-top: 20px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <h1 style="color: white; font-size: 3rem; font-weight: bold; margin-bottom: 15px;">All Items</h1>
                    <p style="color: rgba(255,255,255,0.9); font-size: 1.1rem;">Discover our range of quality products and technology solutions</p>
                </div>
            </div>
        </div>
    </div>

    {{-- Items Grid --}}
    <section class="ftco-section">
        <div class="container">
{{--            <div class="row justify-content-center mb-5 pb-3">--}}
{{--                <div class="col-md-7 heading-section ftco-animate text-center">--}}
{{--                    <span class="subheading">Quality</span>--}}
{{--                    <h2 style="color: white;" class="mb-4">Our Product Collection</h2>--}}
{{--                    <p style="color: white;">Premium technology products and accessories to meet your needs.</p>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="row">
                @foreach($items as $item)
                    <div class="col-md-4 mb-4">
                        <div class="item-card" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 15px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.3); transition: all 0.3s ease; cursor: pointer; position: relative;">

                            <!-- Image Section -->
                            <div class="item-image-wrapper" style="position: relative; overflow: hidden; height: 200px;">
                                <img src="{{ Storage::url($item->image) }}"
                                     alt="{{ $item->name }}"
                                     style="width: 100%; height: 100%; object-fit: cover; transition: all 0.3s ease;">

                                <!-- Image Overlay -->
                                <div class="image-overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0,0,0,0.3); opacity: 0; transition: all 0.3s ease;"></div>


                            </div>

                            <!-- Content Section -->
                            <div class="item-content" style="padding: 25px; position: relative; z-index: 2;">
                                <h3 style="color: white; font-size: 1.4rem; margin-bottom: 15px; font-weight: bold; line-height: 1.3;">
                                    {{ $item->name }}
                                </h3>
                                <p style="color: rgba(255,255,255,0.9); font-size: 0.9rem; line-height: 1.5; margin-bottom: 20px; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden;">
                                    {{ $item->description }}
                                </p>

                                <!-- Price Section -->
                                <div class="price-section" style="margin-bottom: 25px;">
                                    <span style="color: #FFD700; font-size: 1.6rem; font-weight: bold;">
                                        Rs. {{ number_format($item->price) }}
                                    </span>
                                </div>

                                <!-- Action Buttons -->
                                <div class="action-buttons">
                                    <a href="{{ route('item.single', $item->id) }}"
                                       class="item-btn primary"
                                       style="background: rgba(255,255,255,0.2); color: white; padding: 12px 30px; border-radius: 25px; text-decoration: none; font-weight: 600; transition: all 0.3s ease; border: 2px solid rgba(255,255,255,0.3); display: inline-block; text-align: center;">
                                        View Details
                                    </a>
                                </div>
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
        .item-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 20px 40px rgba(0,0,0,0.4) !important;
        }

        .item-card:hover .hover-overlay {
            opacity: 1;
        }

        .item-card:hover .image-overlay {
            opacity: 1;
        }

        .item-card:hover img {
            transform: scale(1.1);
        }

        .item-card:hover .item-btn.primary {
            background: rgba(255,255,255,0.3) !important;
            border-color: rgba(255,255,255,0.6) !important;
            transform: scale(1.05);
        }

        .item-card:nth-child(3n+1) {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%) !important;
        }

        .item-card:nth-child(3n+2) {
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%) !important;
        }

        .item-card:nth-child(3n+3) {
            background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%) !important;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .item-card {
                margin-bottom: 20px;
            }
        }

        /* Animation for loading */
        .item-card {
            animation: fadeInUp 0.6s ease-out;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Stagger animation for multiple cards */
        .item-card:nth-child(1) { animation-delay: 0.1s; }
        .item-card:nth-child(2) { animation-delay: 0.2s; }
        .item-card:nth-child(3) { animation-delay: 0.3s; }
        .item-card:nth-child(4) { animation-delay: 0.4s; }
        .item-card:nth-child(5) { animation-delay: 0.5s; }
        .item-card:nth-child(6) { animation-delay: 0.6s; }
    </style>
@endsection
