@extends('user.layouts.app')

@section('maincontent')
    @include('user.components.header')


    @include('user.components.osahan_home')



    <div class="clearfix"></div>


    <div class="osahan-home-page">
        @include('user.components.filtermodal')

    </div>

    @include('user.components.osahanmenufooter')


    <div class="clearfix"></div>
    <div class="offer-section">
        <div class="container">
            <div class="py-5 d-flex align-items-center">
                <div>
                    <h2 class="text-white">Offers for you</h2>
                    <p class="h6 text-white">Explore top deals and offers exclusively for you!</p>
                </div>
                <div class="ml-auto"><img alt="#" src="{{ asset('BhandaraKaro/NewHome/img/offers.png') }}"
                        class="img-fluid offers_img"></div>
            </div>
        </div>
    </div>

    <div class="bg-white shadow-sm">
        <div class="container">
            <div class="bg-white">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="px-0 py-3 nav-link text-dark h6 border-0 mb-0 active" id="profile-tab" data-toggle="tab"
                            href="#profile" role="tab" aria-controls="profile" aria-selected="false">Payment
                            offers/Coupons</a>
                    </li>
                    <li class="nav-item bottom-tab" role="presentation">
                        <a class="px-0 py-3 nav-link text-dark h6 border-0 mb-0 ml-3" id="home-tab" data-toggle="tab"
                            href="#home" role="tab" aria-controls="home" aria-selected="true">Restaurant offers</a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
    <div class="container">
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade py-4" id="home" role="tabpanel" aria-labelledby="home-tab">
                <h5 class="mb-1">All offers (163)</h5>
                <p>All offers and deals, from restaurants near you</p>
                <div class="row">
                    <div class="col-md-3 pb-3">
                        <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                            <div class="list-card-image">
                                <div class="star position-absolute"><span class="badge badge-success"><i
                                            class="feather-star"></i> 3.1 (300+)</span></div>
                                <div class="favourite-heart text-danger position-absolute"><a href="#"><i
                                            class="feather-heart"></i></a></div>
                                <div class="member-plan position-absolute"><span class="badge badge-dark">Promoted</span>
                                </div>
                                <a href="restaurant.html">
                                    <img alt="#" src="img/popular1.png" class="img-fluid item-img w-100">
                                </a>
                            </div>
                            <div class="p-3 position-relative">
                                <div class="list-card-body">
                                    <h6 class="mb-1"><a href="restaurant.html" class="text-black">The osahan Restaurant
                                        </a>
                                    </h6>
                                    <p class="text-gray mb-1 small">• North • Hamburgers</p>
                                    <p class="text-gray mb-1 rating">
                                    <ul class="rating-stars list-unstyled">
                                        <li>
                                            <i class="feather-star star_active"></i>
                                            <i class="feather-star star_active"></i>
                                            <i class="feather-star star_active"></i>
                                            <i class="feather-star star_active"></i>
                                            <i class="feather-star"></i>
                                        </li>
                                    </ul>
                                    </p>
                                </div>
                                <div class="list-card-badge">
                                    <span class="badge badge-danger">OFFER</span> <small>65% OSAHAN50</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 pb-3">
                        <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                            <div class="list-card-image">
                                <div class="star position-absolute"><span class="badge badge-success"><i
                                            class="feather-star"></i> 3.1 (300+)</span></div>
                                <div class="favourite-heart text-danger position-absolute"><a href="#"><i
                                            class="feather-heart"></i></a></div>
                                <div class="member-plan position-absolute"><span class="badge badge-dark">Promoted</span>
                                </div>
                                <a href="restaurant.html">
                                    <img alt="#" src="img/popular2.png" class="img-fluid item-img w-100">
                                </a>
                            </div>
                            <div class="p-3 position-relative">
                                <div class="list-card-body">
                                    <h6 class="mb-1"><a href="restaurant.html" class="text-black">Thai Famous Indian
                                            Cuisine</a></h6>
                                    <p class="text-gray mb-1 small">• Indian • Pure veg</p>
                                    <p class="text-gray mb-1 rating">
                                    <ul class="rating-stars list-unstyled">
                                        <li>
                                            <i class="feather-star star_active"></i>
                                            <i class="feather-star star_active"></i>
                                            <i class="feather-star star_active"></i>
                                            <i class="feather-star star_active"></i>
                                            <i class="feather-star"></i>
                                        </li>
                                    </ul>
                                    </p>
                                </div>
                                <div class="list-card-badge">
                                    <span class="badge badge-success">OFFER</span> <small>65% off</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 pb-3">
                        <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                            <div class="list-card-image">
                                <div class="star position-absolute"><span class="badge badge-success"><i
                                            class="feather-star"></i> 3.1 (300+)</span></div>
                                <div class="favourite-heart text-danger position-absolute"><a href="#"><i
                                            class="feather-heart"></i></a></div>
                                <div class="member-plan position-absolute"><span class="badge badge-dark">Promoted</span>
                                </div>
                                <a href="restaurant.html">
                                    <img alt="#" src="img/popular3.png" class="img-fluid item-img w-100">
                                </a>
                            </div>
                            <div class="p-3 position-relative">
                                <div class="list-card-body">
                                    <h6 class="mb-1"><a href="restaurant.html" class="text-black">The osahan Restaurant
                                        </a>
                                    </h6>
                                    <p class="text-gray mb-1 small">• Hamburgers • Pure veg</p>
                                    <p class="text-gray mb-1 rating">
                                    <ul class="rating-stars list-unstyled">
                                        <li>
                                            <i class="feather-star star_active"></i>
                                            <i class="feather-star star_active"></i>
                                            <i class="feather-star star_active"></i>
                                            <i class="feather-star star_active"></i>
                                            <i class="feather-star"></i>
                                        </li>
                                    </ul>
                                    </p>
                                </div>
                                <div class="list-card-badge">
                                    <span class="badge badge-danger">OFFER</span> <small>65% OSAHAN50</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 pb-3">
                        <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                            <div class="list-card-image">
                                <div class="star position-absolute"><span class="badge badge-success"><i
                                            class="feather-star"></i> 3.1 (300+)</span></div>
                                <div class="favourite-heart text-danger position-absolute"><a href="#"><i
                                            class="feather-heart"></i></a></div>
                                <div class="member-plan position-absolute"><span class="badge badge-dark">Promoted</span>
                                </div>
                                <a href="restaurant.html">
                                    <img alt="#" src="img/popular4.png" class="img-fluid item-img w-100">
                                </a>
                            </div>
                            <div class="p-3 position-relative">
                                <div class="list-card-body">
                                    <h6 class="mb-1"><a href="restaurant.html" class="text-black">Bite Me Now
                                            Sandwiches</a></h6>
                                    <p class="text-gray mb-1 small">American • Pure veg</p>
                                    <p class="text-gray mb-1 rating">
                                    <ul class="rating-stars list-unstyled">
                                        <li>
                                            <i class="feather-star star_active"></i>
                                            <i class="feather-star star_active"></i>
                                            <i class="feather-star star_active"></i>
                                            <i class="feather-star star_active"></i>
                                            <i class="feather-star"></i>
                                        </li>
                                    </ul>
                                    </p>
                                </div>
                                <div class="list-card-badge">
                                    <span class="badge badge-success">OFFER</span> <small>65% off</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 pb-3">
                        <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                            <div class="list-card-image">
                                <div class="star position-absolute"><span class="badge badge-success"><i
                                            class="feather-star"></i> 3.1 (300+)</span></div>
                                <div class="favourite-heart text-danger position-absolute"><a href="#"><i
                                            class="feather-heart"></i></a></div>
                                <div class="member-plan position-absolute"><span class="badge badge-dark">Promoted</span>
                                </div>
                                <a href="restaurant.html">
                                    <img alt="#" src="img/popular5.png" class="img-fluid item-img w-100">
                                </a>
                            </div>
                            <div class="p-3 position-relative">
                                <div class="list-card-body">
                                    <h6 class="mb-1"><a href="restaurant.html" class="text-black">The osahan Restaurant
                                        </a>
                                    </h6>
                                    <p class="text-gray mb-1 small">• North • Hamburgers</p>
                                    <p class="text-gray mb-1 rating">
                                    <ul class="rating-stars list-unstyled">
                                        <li>
                                            <i class="feather-star star_active"></i>
                                            <i class="feather-star star_active"></i>
                                            <i class="feather-star star_active"></i>
                                            <i class="feather-star star_active"></i>
                                            <i class="feather-star"></i>
                                        </li>
                                    </ul>
                                    </p>
                                </div>
                                <div class="list-card-badge">
                                    <span class="badge badge-danger">OFFER</span> <small>65% OSAHAN50</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 pb-3">
                        <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                            <div class="list-card-image">
                                <div class="star position-absolute"><span class="badge badge-success"><i
                                            class="feather-star"></i> 3.1 (300+)</span></div>
                                <div class="favourite-heart text-danger position-absolute"><a href="#"><i
                                            class="feather-heart"></i></a></div>
                                <div class="member-plan position-absolute"><span class="badge badge-dark">Promoted</span>
                                </div>
                                <a href="restaurant.html">
                                    <img alt="#" src="img/popular6.png" class="img-fluid item-img w-100">
                                </a>
                            </div>
                            <div class="p-3 position-relative">
                                <div class="list-card-body">
                                    <h6 class="mb-1"><a href="restaurant.html" class="text-black">Thai Famous Indian
                                            Cuisine</a></h6>
                                    <p class="text-gray mb-1 small">• Indian • Pure veg</p>
                                    <p class="text-gray mb-1 rating">
                                    <ul class="rating-stars list-unstyled">
                                        <li>
                                            <i class="feather-star star_active"></i>
                                            <i class="feather-star star_active"></i>
                                            <i class="feather-star star_active"></i>
                                            <i class="feather-star star_active"></i>
                                            <i class="feather-star"></i>
                                        </li>
                                    </ul>
                                    </p>
                                </div>
                                <div class="list-card-badge">
                                    <span class="badge badge-success">OFFER</span> <small>65% off</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 pb-3">
                        <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                            <div class="list-card-image">
                                <div class="star position-absolute"><span class="badge badge-success"><i
                                            class="feather-star"></i> 3.1 (300+)</span></div>
                                <div class="favourite-heart text-danger position-absolute"><a href="#"><i
                                            class="feather-heart"></i></a></div>
                                <div class="member-plan position-absolute"><span class="badge badge-dark">Promoted</span>
                                </div>
                                <a href="restaurant.html">
                                    <img alt="#" src="img/popular7.png" class="img-fluid item-img w-100">
                                </a>
                            </div>
                            <div class="p-3 position-relative">
                                <div class="list-card-body">
                                    <h6 class="mb-1"><a href="restaurant.html" class="text-black">The osahan Restaurant
                                        </a>
                                    </h6>
                                    <p class="text-gray mb-1 small">• Hamburgers • Pure veg</p>
                                    <p class="text-gray mb-1 rating">
                                    <ul class="rating-stars list-unstyled">
                                        <li>
                                            <i class="feather-star star_active"></i>
                                            <i class="feather-star star_active"></i>
                                            <i class="feather-star star_active"></i>
                                            <i class="feather-star star_active"></i>
                                            <i class="feather-star"></i>
                                        </li>
                                    </ul>
                                    </p>
                                </div>
                                <div class="list-card-badge">
                                    <span class="badge badge-danger">OFFER</span> <small>65% OSAHAN50</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 pb-3">
                        <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                            <div class="list-card-image">
                                <div class="star position-absolute"><span class="badge badge-success"><i
                                            class="feather-star"></i> 3.1 (300+)</span></div>
                                <div class="favourite-heart text-danger position-absolute"><a href="#"><i
                                            class="feather-heart"></i></a></div>
                                <div class="member-plan position-absolute"><span class="badge badge-dark">Promoted</span>
                                </div>
                                <a href="restaurant.html">
                                    <img alt="#" src="img/popular8.png" class="img-fluid item-img w-100">
                                </a>
                            </div>
                            <div class="p-3 position-relative">
                                <div class="list-card-body">
                                    <h6 class="mb-1"><a href="restaurant.html" class="text-black">Bite Me Now
                                            Sandwiches</a></h6>
                                    <p class="text-gray mb-1 small">American • Pure veg</p>
                                    <p class="text-gray mb-1 rating">
                                    <ul class="rating-stars list-unstyled">
                                        <li>
                                            <i class="feather-star star_active"></i>
                                            <i class="feather-star star_active"></i>
                                            <i class="feather-star star_active"></i>
                                            <i class="feather-star star_active"></i>
                                            <i class="feather-star"></i>
                                        </li>
                                    </ul>
                                    </p>
                                </div>
                                <div class="list-card-badge">
                                    <span class="badge badge-success">OFFER</span> <small>65% off</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 pb-3">
                        <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                            <div class="list-card-image">
                                <div class="star position-absolute"><span class="badge badge-success"><i
                                            class="feather-star"></i> 3.1 (300+)</span></div>
                                <div class="favourite-heart text-danger position-absolute"><a href="#"><i
                                            class="feather-heart"></i></a></div>
                                <div class="member-plan position-absolute"><span class="badge badge-dark">Promoted</span>
                                </div>
                                <a href="restaurant.html">
                                    <img alt="#" src="img/popular5.png" class="img-fluid item-img w-100">
                                </a>
                            </div>
                            <div class="p-3 position-relative">
                                <div class="list-card-body">
                                    <h6 class="mb-1"><a href="restaurant.html" class="text-black">The osahan Restaurant
                                        </a>
                                    </h6>
                                    <p class="text-gray mb-1 small">• North • Hamburgers</p>
                                    <p class="text-gray mb-1 rating">
                                    <ul class="rating-stars list-unstyled">
                                        <li>
                                            <i class="feather-star star_active"></i>
                                            <i class="feather-star star_active"></i>
                                            <i class="feather-star star_active"></i>
                                            <i class="feather-star star_active"></i>
                                            <i class="feather-star"></i>
                                        </li>
                                    </ul>
                                    </p>
                                </div>
                                <div class="list-card-badge">
                                    <span class="badge badge-danger">OFFER</span> <small>65% OSAHAN50</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 pb-3">
                        <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                            <div class="list-card-image">
                                <div class="star position-absolute"><span class="badge badge-success"><i
                                            class="feather-star"></i> 3.1 (300+)</span></div>
                                <div class="favourite-heart text-danger position-absolute"><a href="#"><i
                                            class="feather-heart"></i></a></div>
                                <div class="member-plan position-absolute"><span class="badge badge-dark">Promoted</span>
                                </div>
                                <a href="restaurant.html">
                                    <img alt="#" src="img/popular2.png" class="img-fluid item-img w-100">
                                </a>
                            </div>
                            <div class="p-3 position-relative">
                                <div class="list-card-body">
                                    <h6 class="mb-1"><a href="restaurant.html" class="text-black">Thai Famous Indian
                                            Cuisine</a></h6>
                                    <p class="text-gray mb-1 small">• Indian • Pure veg</p>
                                    <p class="text-gray mb-1 rating">
                                    <ul class="rating-stars list-unstyled">
                                        <li>
                                            <i class="feather-star star_active"></i>
                                            <i class="feather-star star_active"></i>
                                            <i class="feather-star star_active"></i>
                                            <i class="feather-star star_active"></i>
                                            <i class="feather-star"></i>
                                        </li>
                                    </ul>
                                    </p>
                                </div>
                                <div class="list-card-badge">
                                    <span class="badge badge-success">OFFER</span> <small>65% off</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade show active py-4" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <h5 class="mb-3 mt-0">Available Coupons</h5>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <div class="bg-white shadow-sm rounded p-4">
                            <p class="h6 mb-3"><span class="feather-home text-primary"></span><span
                                    class="ml-3">SBI75</span></p>
                            <p class="font-weight-bold mb-2">Get 15% discount using SBI Credit Cards</p>
                            <p class="mb-4">Use code SBI75 and get 15% discount up to Rs.75 on orders above Rs.400</p>
                            <p><a href="#" class="text-primary">+ MORE</a></p>
                            <a href="#" class="btn btn-outline-primary">COPY CODE</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="bg-white shadow-sm rounded p-4">
                            <p class="h6 mb-3"><span class="feather-home text-primary"></span><span
                                    class="ml-3">PAYZAPP100</span></p>
                            <p class="font-weight-bold mb-2">Get 15% discount using HDFC PayZapp Card</p>
                            <p class="mb-4">Use code PAYZAPP100 & get 15% discount up to Rs.100 on orders above Rs.250
                            </p>
                            <p><a href="#" class="text-primary">+ MORE</a></p>
                            <a href="#" class="btn btn-outline-primary">COPY CODE</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="bg-white shadow-sm rounded p-4">
                            <p class="h6 mb-3"><span class="feather-home text-primary"></span><span
                                    class="ml-3">LP75</span></p>
                            <p class="font-weight-bold mb-2">Get flat cashback of Rs.75 using LazyPay</p>
                            <p class="mb-4">Use code LP75 & get flat cashback of Rs.75 on orders above Rs.250 on first
                                LazyPay</p>
                            <p><a href="#" class="text-primary">+ MORE</a></p>
                            <a href="#" class="btn btn-outline-primary">COPY CODE</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <div class="bg-white shadow-sm rounded p-4">
                            <p class="h6 mb-3"><span class="feather-home text-primary"></span><span
                                    class="ml-3">RUPAYFEST</span></p>
                            <p class="font-weight-bold mb-2">Get 30% discount using RuPay Cards</p>
                            <p class="mb-4">Use code RUPAYFEST and get 30% discount up to Rs.100 on orders above Rs.199
                            </p>
                            <p><a href="#" class="text-primary">+ MORE</a></p>
                            <a href="#" class="btn btn-outline-primary">COPY CODE</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="bg-white shadow-sm rounded p-4">
                            <p class="h6 mb-3"><span class="feather-home text-primary"></span><span
                                    class="ml-3">FCH50</span></p>
                            <p class="font-weight-bold mb-2">Get 20% cashback using Freecharge</p>
                            <p class="mb-4">Use code FCH50 and get 20% cashback up to Rs.50 on transaction using
                                Freecharge.</p>
                            <p><a href="#" class="text-primary">+ MORE</a></p>
                            <a href="#" class="btn btn-outline-primary">COPY CODE</a>
                        </div>
                    </div>
                </div>
                <h5 class="mb-3 mt-2">Bank Offers</h5>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <div class="bg-white shadow-sm rounded p-4 d-flex">
                            <div><img alt="#" src="{{ asset('BhandaraKaro/NewHome/img/axis.png') }}"
                                    class="img-fluid"></div>
                            <div class="ml-4">
                                <p class="mb-1 font-weight-bold">Get 4% cashback with Flipkart Axis Bank Credit Card</p>
                                <p class="text-muted">Get 4% cashback on orders using Flipkart Axis Bank Credit Cards</p>
                                <p class="mb-0"><a href="#" class="text-primary">+ MORE</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="bg-white shadow-sm rounded p-4 d-flex">
                            <div><img alt="#" src="{{ asset('BhandaraKaro/NewHome/img/axis.png') }}"
                                    class="img-fluid"></div>
                            <div class="ml-4">
                                <p class="mb-1 font-weight-bold">Get 4% cashback using Axis Bank Ace Credit Cards</p>
                                <p class="text-muted">Get 4% cashback on orders using Axis Bank Ace Credit Cards</p>
                                <p class="mb-0"><a href="#" class="text-primary">+ MORE</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('user.components.footer')


    @include('user.components.scripts')
@endsection
