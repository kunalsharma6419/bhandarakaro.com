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
        <div class="container mt-4">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h2 class="text-center mb-4">About Us</h2>
                    <p class="text-center lead">Bringing Tradition Online, Saving You Time and Money</p>
                    <p>For over 20 years, Bhandarawala has proudly provided traditional Bhandara services throughout
                        India. Now, we're taking our commitment to convenience and quality a step further by launching
                        our online platform, Bhandarawala.co.in.</p>
                    <p>We understand that time is precious, and navigating various vendors for traditional ceremonies
                        can be overwhelming. That's why we created a one-stop solution for all your Bhandara and Ayojan
                        needs. Through our user-friendly website, you can now book and manage your entire event from
                        the comfort of your home.</p>

                    <!-- Why Choose Us Section -->
                    <h3 class="text-center mt-4 mb-3">Why Choose Bhandarawala.co.in?</h3>
                    <ul>
                        <li><strong>Convenience:</strong> Book Bhandara and Ayojan services for temples, ceremonies,
                            pujas, hawans, donations, marriages, birthdays, and more– all with a few clicks.</li>
                        <li><strong>Expertise:</strong> We leverage our 20+ years of experience to ensure an authentic
                            and high-quality service that upholds traditional values.</li>
                        <li><strong>Nationwide Reach:</strong> No matter where you are in India, we can help you fulfill
                            your religious and celebratory needs.</li>
                        <li><strong>Transparency:</strong> Our platform provides clear pricing and detailed information
                            about our services, ensuring you make informed decisions.</li>
                        <li><strong>Time-Saving:</strong> Skip the hassle of coordinating with multiple vendors. We handle
                            everything, so you can focus on what matters most– your event.</li>
                    </ul>

                    <!-- More Than Just Services Section -->
                    <h3 class="text-center mt-4 mb-3">More Than Just Services</h3>
                    <p>Bhandarawala.co.in is not just a booking platform; it's a community. We believe in sharing
                        knowledge and connecting people with their cultural heritage. On our website, you'll find insightful
                        articles, helpful tips, and inspiring stories related to Bhandara and Ayojan traditions.</p>

                    <!-- Join the Celebration Section -->
                    <h3 class="text-center mt-4 mb-3">Join the Celebration</h3>
                    <p>Visit Bhandarawala.co.in today and discover how we can make your next event exceptional. Let us
                        handle the logistics while you create lasting memories with your loved ones. Together, let's keep
                        the spirit of tradition alive, one celebration at a time.</p>

                    <!-- Placeholder Images -->
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="image-container">
                                <img src="{{ asset('BhandaraKaro/images/B-Bhoj.jpeg') }}" alt="Image 1">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="image-container">
                                <img src="{{ asset('BhandaraKaro/images/temple.jpg') }}" alt="Image 2">
                            </div>
                        </div>
                    </div>
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
