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
                        <h1 class="mb-4">Innovative items for a Smarter Life</h1>
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

    <section class="ftco-about d-md-flex">
        <div class="one-half img" style="background-image: url({{ asset('assets/images/about.jpeg') }});"></div>
        <div class="one-half ftco-animate">
            <div class="overlap">
                <div class="heading-section ftco-animate ">
                    <span class="subheading">Discover</span>
                    <h2 class="mb-4">Our Story</h2>
                </div>
                <div>
                    <p style="color: white;">On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
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
                    <h2 style="color: white;" class="mb-4">Best Electric Items Sellers</h2>
                    <p style="color: white;">This is description of the topic...................</p>
                </div>
            </div>
            <div class="row">

                @php
                    use Illuminate\Support\Facades\Storage;
                @endphp

                @foreach($items as $item)
                    <div class="col-md-3">
                        <div class="menu-entry">
                            <a href="" class="img" style="background-image: url({{ Storage::url($item->image) }});"></a>

                            <div class="text text-center pt-4">
                                <h3><a href="{{ route('item.single', $item->id) }}">{{ $item->name }}</a></h3>
                                <p style="color: white;">{{ $item->description }}</p>
                                <p class="price"><span>Rs. {{ $item->price }}</span></p>
                                <p><a href="{{ route('item.single', $item->id) }}" class="btn btn-primary btn-outline-primary">Show</a></p>
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
                            Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        @foreach($services as $service)
                            <div class="col-md-6">
                                <div class="menu-entry service-card">
                                    <a href="#" class="img" style="background-image: url({{ asset($service->image ?? 'assets/images/bg_3.jpeg') }});"></a>
                                    <div class="service-info">
                                        <h5>{{ $service->name }}</h5>
                                        <p>{{ $service->description }}</p>
                                        <span class="service-price">${{ $service->price }}</span>
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
