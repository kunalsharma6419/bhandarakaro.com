@extends('user.layouts.app')
<style>
    .image-container {
        overflow: hidden;
        border-radius: 8px;
    }

    .image-container img {
        width: 100%;
        border-radius: 8px;
    }
</style>
@section('maincontent')
    @include('user.components.header')


    @include('user.components.osahan_home')



    <div class="clearfix"></div>

    <div class="osahan-home-page">
        @include('user.components.filtermodal')
        <!-- About Us Section -->
        <!-- Our Story Section -->
        <div class="container mt-4">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h2 class="text-center mb-4">Our Story</h2>
                    <p class="text-center lead">The Bhandarawala Legacy: From Humble Beginnings to Online Excellence</p>
                    <p>The fragrant aroma of spices mingling with the chanting of mantras, the joyful clatter of plates, the
                        warmth of community… these are the memories that fuel the fire of Bhandarawala. Our story isn't
                        just about a business; it's about carrying forward a torch of tradition, ignited two decades
                        ago.</p>
                    <p>It all began with a simple notion: to ensure everyone could experience the sacredness and joy of
                        Bhandara, regardless of their location or time constraints. Back then, organizing Bhandaras and
                        Ayojans meant months of planning, numerous vendors, and the ever-present risk of forgetting
                        something crucial. We, the founders of Bhandarawala, saw this struggle firsthand and yearned for
                        a better way.</p>
                    <p>With this burning desire, we embarked on our journey. Initially, we were just a small team, operating
                        in a single city, driven by a deep respect for tradition and a commitment to quality. We
                        meticulously sourced fresh ingredients, carefully curated menus, and ensured every Bhandara
                        reflected the unique needs and wishes of our clients.</p>

                    <!-- Image Section -->
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="image-container">
                                <img src="{{ asset('BhandaraKaro/images/temple.png') }}" alt="Image 1">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="image-container">
                                <img src="{{ asset('BhandaraKaro/images/B-Bhoj.jpeg') }}" alt="Image 2">
                            </div>
                        </div>
                    </div>

                    <p>Word of our dedication spread like wildfire. Soon, families across the city entrusted us with their
                        most cherished celebrations. Each satisfied customer, each heartfelt "thank you," fueled our
                        passion and inspired us to grow. We expanded our reach, added more cities to our map, and refined
                        our services based on valuable feedback.</p>
                    <p>But we knew we could do more. In today's fast-paced world, convenience is paramount. So, we took a
                        bold step: translating our 20 years of experience into the digital realm. Bhandarawala.co.in was
                        born, an online platform designed to seamlessly connect people with authentic Bhandara and Ayojan
                        experiences.</p>
                    <p>Today, Bhandarawala stands tall, not just as a service provider, but as a community builder. Our
                        platform caters to all corners of India, offering a diverse range of options for any occasion.
                        We've streamlined the booking process, ensuring transparency and ease of use, yet never
                        compromising on the meticulous attention to detail that has always been our hallmark.</p>
                    <p>But our story doesn't end here. We envision a future where Bhandarawala becomes synonymous with
                        effortless celebrations, where cultural heritage thrives in the digital age, and where families
                        come together, closer than ever, bound by the threads of tradition.</p>
                    <p>This is our story, an ongoing saga of tradition, innovation, and community. Join us on this journey,
                        and let's write the next chapter together.</p>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>



    {{-- <section class="process-area">
        <div class="theeka-process-desktop">
            <img src="BhandaraKaro/NewHome/public/img/desktop-banner.gif" />
        </div>


        <div class="theeka-process-mobile">
            <img src="BhandaraKaro/NewHome/public/img/mobile-banner.gif" />
        </div>
    </section> --}}

    <div class="container">
        <!-- welcome section -->

        {{-- <div class="most_sale">
            <div class="row mb-3">
                <div class="col-md-4 mb-3">
                    <div
                        class="d-flex align-items-center list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                        <div class="list-card-image">
                            <div class="star position-absolute"><span class="badge badge-success"><i class="feather-star"></i>
                                    3.1 (300+)</span></div>
                            <div class="favourite-heart text-danger position-absolute"><a href="#"><i
                                        class="feather-heart"></i></a></div>
                            <div class="member-plan position-absolute"><span class="badge badge-dark">Promoted</span></div>
                            <a href="restaurant.html">
                                <img alt="#" src="{{ asset('BhandaraKaro/images/cart/5.png') }}"
                                    class="img-fluid item-img w-100">
                            </a>
                        </div>
                        <div class="p-3 position-relative">
                            <div class="list-card-body">
                                <h6 class="mb-1"><a href="restaurant.html" class="text-black">The osahan Restaurant
                                    </a>
                                </h6>
                                <p class="text-gray mb-3">North • Hamburgers • Pure veg</p>
                                <p class="text-gray mb-3 time"><span
                                        class="bg-light text-dark rounded-sm pl-2 pb-1 pt-1 pr-2"><i
                                            class="feather-clock"></i>
                                        15–25 min</span> <span class="float-right text-black-50"> $500 FOR TWO</span></p>
                            </div>
                            <div class="list-card-badge">
                                <span class="badge badge-danger">OFFER</span> <small>65% OSAHAN50</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div
                        class="d-flex align-items-center list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                        <div class="list-card-image">
                            <div class="star position-absolute"><span class="badge badge-success"><i
                                        class="feather-star"></i>
                                    3.1 (300+)</span></div>
                            <div class="favourite-heart text-danger position-absolute"><a href="#"><i
                                        class="feather-heart"></i></a></div>
                            <div class="member-plan position-absolute"><span class="badge badge-dark">Promoted</span></div>
                            <a href="restaurant.html">
                                <img alt="#" src="{{ asset('BhandaraKaro/images/cart/10.png') }}"
                                    class="img-fluid item-img w-100">
                            </a>
                        </div>
                        <div class="p-3 position-relative">
                            <div class="list-card-body">
                                <h6 class="mb-1"><a href="restaurant.html" class="text-black">Thai Famous Cuisine</a></h6>
                                <p class="text-gray mb-3">North Indian • Indian • Pure veg</p>
                                <p class="text-gray mb-3 time"><span
                                        class="bg-light text-dark rounded-sm pl-2 pb-1 pt-1 pr-2"><i
                                            class="feather-clock"></i>
                                        30–35 min</span> <span class="float-right text-black-50"> $250 FOR TWO</span></p>
                            </div>
                            <div class="list-card-badge">
                                <span class="badge badge-success">OFFER</span> <small>65% off</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div
                        class="d-flex align-items-center list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                        <div class="list-card-image">
                            <div class="star position-absolute"><span class="badge badge-success"><i
                                        class="feather-star"></i>
                                    3.1 (300+)</span></div>
                            <div class="favourite-heart text-danger position-absolute"><a href="#"><i
                                        class="feather-heart"></i></a></div>
                            <div class="member-plan position-absolute"><span class="badge badge-dark">Promoted</span></div>
                            <a href="restaurant.html">
                                <img alt="#" src="{{ asset('BhandaraKaro/images/cart/15.png') }}"
                                    class="img-fluid item-img w-100">
                            </a>
                        </div>
                        <div class="p-3 position-relative">
                            <div class="list-card-body">
                                <h6 class="mb-1"><a href="restaurant.html" class="text-black">The osahan Restaurant
                                    </a>
                                </h6>
                                <p class="text-gray mb-3">North • Hamburgers • Pure veg</p>
                                <p class="text-gray mb-3 time"><span
                                        class="bg-light text-dark rounded-sm pl-2 pb-1 pt-1 pr-2"><i
                                            class="feather-clock"></i>
                                        15–25 min</span> <span class="float-right text-black-50"> $500 FOR TWO</span></p>
                            </div>
                            <div class="list-card-badge">
                                <span class="badge badge-danger">OFFER</span> <small>65% OSAHAN50</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
    </div>



    <div class="clearfix"></div>


    @include('user.components.osahanmenufooter')


    <div class="clearfix"></div>

    @include('user.components.footer')


    @include('user.components.scripts')
@endsection
