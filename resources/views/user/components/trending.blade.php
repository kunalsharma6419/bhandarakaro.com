<div class="container">
    <div class="pt-4 pb-2 title d-flex align-items-center">
        <h5 class="m-0">Trending this week</h5>
        <a class="fw-bold ms-auto" href="url('menu')">View all <i class="feather-chevrons-right"></i></a>
    </div>
    <div class="trending-slider">
        @foreach ($trendingfoods as $trendingfood)
            <div class="osahan-slider-item">
                <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                    <div class="list-card-image">
                        <div class="star position-absolute"><span class="badge text-bg-success"><i
                                    class="feather-star"></i>
                                3.1 (300+)</span></div>
                        <div class="favourite-heart text-danger position-absolute rounded-circle">
                            {{-- <a href="#"><i
                                    class="feather-heart"></i></a> --}}
                        </div>
                        <div class="member-plan position-absolute"><span
                                class="badge text-bg-dark">{{ $trendingfood->tags[0] }}</span>
                        </div>
                        <a href="{{ route('foodproductdetail', $trendingfood->id) }}"> <img
                                alt="{{ $trendingfood->name }}" src="foodproductImage/{{ $trendingfood->image[0] }}"
                                class="img-fluid item-img w-100">
                        </a>
                    </div>
                    <div class="p-3 position-relative">
                        <div class="list-card-body">
                            <h6 class="mb-1"><a href="{{ route('foodproductdetail', $trendingfood->id) }}"
                                    class="text-black">{{ $trendingfood->name }} </a>
                            </h6>
                            <p class="text-gray mb-3">{{ $trendingfood->category->category_name }} • Indian •
                                {{ $trendingfood->tags[1] }}</p>
                            <h6 class="text-gray mb-3 time"><span
                                    class="bg-light text-dark rounded-sm py-1 px-2"><i></i>
                                    ₹{{ $trendingfood->price }}</span> <span class="float-end text-black-50">
                                    {{ $trendingfood->ingredient }}</span></h6>
                        </div>
                        <div class="list-card-badge"> <span class="badge text-bg-danger">OFFER</span> <small> Use
                                Coupon {{ $trendingfood->offer->offer_code }}</small> </div>
                    </div>
                </div>
            </div>
        @endforeach

        {{-- <div class="osahan-slider-item">
            <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                <div class="list-card-image">
                    <div class="star position-absolute"><span class="badge text-bg-success"><i class="feather-star"></i>
                            3.1 (300+)</span></div>
                    <div class="favourite-heart text-danger position-absolute rounded-circle"><a href="#"><i
                                class="feather-heart"></i></a></div>
                    <div class="member-plan position-absolute"><span class="badge text-bg-dark">Promoted</span>
                    </div>
                    <a href="#"> <img alt="#" src="{{ asset('BhandaraKaro/images/menu/4.png') }}"
                            class="img-fluid item-img w-100"> </a>
                </div>
                <div class="p-3 position-relative">
                    <div class="list-card-body">
                        <h6 class="mb-1"><a href="#" class="text-black">Thai Famous Cuisine</a> </h6>
                        <p class="text-gray mb-3">North Indian • Indian • Pure veg</p>
                        <p class="text-gray mb-3 time"><span class="bg-light text-dark rounded-sm py-1 px-2"><i
                                    class="feather-clock"></i> 30–35 min</span> <span class="float-end text-black-50">
                                $250 FOR TWO</span></p>
                    </div>
                    <div class="list-card-badge"> <span class="badge text-bg-success">OFFER</span> <small>65%
                            off</small> </div>
                </div>
            </div>
        </div>
        <div class="osahan-slider-item">
            <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                <div class="list-card-image">
                    <div class="star position-absolute"><span class="badge text-bg-success"><i class="feather-star"></i>
                            3.1 (300+)</span></div>
                    <div class="favourite-heart text-danger position-absolute rounded-circle"><a href="#"><i
                                class="feather-heart"></i></a></div>
                    <div class="member-plan position-absolute"><span class="badge text-bg-dark">Promoted</span>
                    </div>
                    <a href="#"> <img alt="#" src="{{ asset('BhandaraKaro/images/menu/6.png') }}"
                            class="img-fluid item-img w-100"> </a>
                </div>
                <div class="p-3 position-relative">
                    <div class="list-card-body">
                        <h6 class="mb-1"><a href="#" class="text-black">The osahan Restaurant </a> </h6>
                        <p class="text-gray mb-3">North • Hamburgers • Pure veg</p>
                        <p class="text-gray mb-3 time"><span class="bg-light text-dark rounded-sm py-1 px-2"><i
                                    class="feather-clock"></i> 15–25 min</span> <span class="float-end text-black-50">
                                $500 FOR TWO</span></p>
                    </div>
                    <div class="list-card-badge"> <span class="badge text-bg-danger">OFFER</span> <small>65%
                            OSAHAN50</small> </div>
                </div>
            </div>
        </div>
        <div class="osahan-slider-item">
            <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                <div class="list-card-image">
                    <div class="star position-absolute"><span class="badge text-bg-success"><i class="feather-star"></i>
                            3.1 (300+)</span></div>
                    <div class="favourite-heart text-danger position-absolute rounded-circle"><a href="#"><i
                                class="feather-heart"></i></a></div>
                    <div class="member-plan position-absolute"><span class="badge text-bg-dark">Promoted</span>
                    </div>
                    <a href="#"> <img alt="#" src="{{ asset('BhandaraKaro/images/menu/8.png') }}"
                            class="img-fluid item-img w-100"> </a>
                </div>
                <div class="p-3 position-relative">
                    <div class="list-card-body">
                        <h6 class="mb-1"><a href="#" class="text-black">Thai Famous Cuisine</a> </h6>
                        <p class="text-gray mb-3">North Indian • Indian • Pure veg</p>
                        <p class="text-gray mb-3 time"><span class="bg-light text-dark rounded-sm py-1 px-2"><i
                                    class="feather-clock"></i> 30–35 min</span> <span class="float-end text-black-50">
                                $250 FOR TWO</span></p>
                    </div>
                    <div class="list-card-badge"> <span class="badge text-bg-success">OFFER</span> <small>65%
                            off</small> </div>
                </div>
            </div>
        </div> --}}
    </div>
    <div class="py-3 title d-flex align-items-center">
        <h5 class="m-0">Most popular Temples</h5>
        <a class="fw-bold ms-auto" href="#">26 places <i class="feather-chevrons-right"></i></a>
    </div>
    <div class="most_popular">
        <div class="row">
            @foreach ($templeWithMaxReviews as $templeWithMaxReview)
                <div class="col-md-3 pb-3">
                    <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                        <div class="list-card-image">
                            <div class="star position-absolute"><span class="badge text-bg-success"><i
                                        class="feather-star"></i> {{ $templeWithMaxReview->rating }}
                                    ({{ $templeWithMaxReview->no_of_reviews }})
                                </span></div>
                            {{-- <div class="favourite-heart text-danger position-absolute rounded-circle"><a
                                    href="#"><i class="feather-heart"></i></a></div> --}}
                            <div class="member-plan position-absolute"><span
                                    class="badge text-bg-dark">{{ $templeWithMaxReview->type }}</span>
                            </div>
                            <a href="{{ $templeWithMaxReview->temple_location_link }}" target="_blank"> <img
                                    alt="{{ $templeWithMaxReview->temple_name }}"
                                    src=" {{ $templeWithMaxReview->temple_image_url }}"
                                    class="img-fluid item-img w-100" style="height: 180px;"> </a>
                        </div>
                        <div class="p-3 position-relative">
                            <div class="list-card-body">
                                <h6 class="mb-1"><a href="#"
                                        class="text-black">{{ $templeWithMaxReview->temple_name }} </a>
                                </h6>
                                <p class="text-gray mb-1 small">{{ $templeWithMaxReview->full_address_code }}</p>
                                <p class="text-gray mb-1 rating"> </p>

                                {{-- <ul class="rating-stars list-unstyled">
                                    <li> <i class="feather-star star_active"></i> <i
                                            class="feather-star star_active"></i>
                                        <i class="feather-star star_active"></i> <i
                                            class="feather-star star_active"></i>
                                        <i class="feather-star"></i>
                                    </li>
                                </ul> --}}
                                <p></p>
                            </div>
                            <div class="list-card-badge"> <span
                                    class="badge text-{{ $templeWithMaxReview->open_status === 'Open' ? 'bg-success' : 'bg-danger' }}">
                                    {{ $templeWithMaxReview->open_status }}
                                </span>
                                <small>{{ $templeWithMaxReview->timings }}</small>
                                <a href="{{ $templeWithMaxReview->temple_location_link }}" target="_blank"><span
                                        class="btn btn-outline-primary" style="margin-top: 4px;">Go to
                                        Temple</span></a>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach

            {{-- <div class="col-md-3 pb-3">
                <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                    <div class="list-card-image">
                        <div class="star position-absolute"><span class="badge text-bg-success"><i
                                    class="feather-star"></i> 3.1 (300+)</span></div>
                        <div class="favourite-heart text-danger position-absolute rounded-circle"><a href="#"><i
                                    class="feather-heart"></i></a></div>
                        <div class="member-plan position-absolute"><span class="badge text-bg-dark">Promoted</span>
                        </div>
                        <a href="#"> <img alt="#" src="{{ asset('BhandaraKaro/images/menu/12.png') }}"
                                class="img-fluid item-img w-100"> </a>
                    </div>
                    <div class="p-3 position-relative">
                        <div class="list-card-body">
                            <h6 class="mb-1"><a href="#" class="text-black">Thai Famous Indian
                                    Cuisine</a></h6>
                            <p class="text-gray mb-1 small">• Indian • Pure veg</p>
                            <p class="text-gray mb-1 rating"> </p>
                            <ul class="rating-stars list-unstyled">
                                <li> <i class="feather-star star_active"></i> <i class="feather-star star_active"></i>
                                    <i class="feather-star star_active"></i> <i class="feather-star star_active"></i>
                                    <i class="feather-star"></i>
                                </li>
                            </ul>
                            <p></p>
                        </div>
                        <div class="list-card-badge"> <span class="badge text-bg-success">OFFER</span> <small>65%
                                off</small> </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 pb-3">
                <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                    <div class="list-card-image">
                        <div class="star position-absolute"><span class="badge text-bg-success"><i
                                    class="feather-star"></i> 3.1 (300+)</span></div>
                        <div class="favourite-heart text-danger position-absolute rounded-circle"><a href="#"><i
                                    class="feather-heart"></i></a></div>
                        <div class="member-plan position-absolute"><span class="badge text-bg-dark">Promoted</span>
                        </div>
                        <a href="#"> <img alt="#" src="{{ asset('BhandaraKaro/images/menu/14.png') }}"
                                class="img-fluid item-img w-100"> </a>
                    </div>
                    <div class="p-3 position-relative">
                        <div class="list-card-body">
                            <h6 class="mb-1"><a href="#" class="text-black">The osahan Restaurant </a>
                            </h6>
                            <p class="text-gray mb-1 small">• Hamburgers • Pure veg</p>
                            <p class="text-gray mb-1 rating"> </p>
                            <ul class="rating-stars list-unstyled">
                                <li> <i class="feather-star star_active"></i> <i class="feather-star star_active"></i>
                                    <i class="feather-star star_active"></i> <i class="feather-star star_active"></i>
                                    <i class="feather-star"></i>
                                </li>
                            </ul>
                            <p></p>
                        </div>
                        <div class="list-card-badge"> <span class="badge text-bg-danger">OFFER</span> <small>65%
                                OSAHAN50</small> </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 pb-3">
                <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                    <div class="list-card-image">
                        <div class="star position-absolute"><span class="badge text-bg-success"><i
                                    class="feather-star"></i> 3.1 (300+)</span></div>
                        <div class="favourite-heart text-danger position-absolute rounded-circle"><a href="#"><i
                                    class="feather-heart"></i></a></div>
                        <div class="member-plan position-absolute"><span class="badge text-bg-dark">Promoted</span>
                        </div>
                        <a href="#"> <img alt="#" src="{{ asset('BhandaraKaro/images/menu/16.png') }}"
                                class="img-fluid item-img w-100"> </a>
                    </div>
                    <div class="p-3 position-relative">
                        <div class="list-card-body">
                            <h6 class="mb-1"><a href="#" class="text-black">Bite Me Now
                                    Sandwiches</a></h6>
                            <p class="text-gray mb-1 small">American • Pure veg</p>
                            <p class="text-gray mb-1 rating"> </p>
                            <ul class="rating-stars list-unstyled">
                                <li> <i class="feather-star star_active"></i> <i class="feather-star star_active"></i>
                                    <i class="feather-star star_active"></i> <i class="feather-star star_active"></i>
                                    <i class="feather-star"></i>
                                </li>
                            </ul>
                            <p></p>
                        </div>
                        <div class="list-card-badge"> <span class="badge text-bg-success">OFFER</span> <small>65%
                                off</small> </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 pb-3">
                <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                    <div class="list-card-image">
                        <div class="star position-absolute"><span class="badge text-bg-success"><i
                                    class="feather-star"></i> 3.1 (300+)</span></div>
                        <div class="favourite-heart text-danger position-absolute rounded-circle"><a href="#"><i
                                    class="feather-heart"></i></a></div>
                        <div class="member-plan position-absolute"><span class="badge text-bg-dark">Promoted</span>
                        </div>
                        <a href="#"> <img alt="#" src="{{ asset('BhandaraKaro/images/menu/18.png') }}"
                                class="img-fluid item-img w-100"> </a>
                    </div>
                    <div class="p-3 position-relative">
                        <div class="list-card-body">
                            <h6 class="mb-1"><a href="#" class="text-black">The osahan Restaurant </a>
                            </h6>
                            <p class="text-gray mb-1 small">• North • Hamburgers</p>
                            <p class="text-gray mb-1 rating"> </p>
                            <ul class="rating-stars list-unstyled">
                                <li> <i class="feather-star star_active"></i> <i class="feather-star star_active"></i>
                                    <i class="feather-star star_active"></i> <i class="feather-star star_active"></i>
                                    <i class="feather-star"></i>
                                </li>
                            </ul>
                            <p></p>
                        </div>
                        <div class="list-card-badge"> <span class="badge text-bg-danger">OFFER</span> <small>65%
                                OSAHAN50</small> </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 pb-3">
                <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                    <div class="list-card-image">
                        <div class="star position-absolute"><span class="badge text-bg-success"><i
                                    class="feather-star"></i> 3.1 (300+)</span></div>
                        <div class="favourite-heart text-danger position-absolute rounded-circle"><a href="#"><i
                                    class="feather-heart"></i></a></div>
                        <div class="member-plan position-absolute"><span class="badge text-bg-dark">Promoted</span>
                        </div>
                        <a href="#"> <img alt="#" src="{{ asset('BhandaraKaro/images/menu/20.png') }}"
                                class="img-fluid item-img w-100"> </a>
                    </div>
                    <div class="p-3 position-relative">
                        <div class="list-card-body">
                            <h6 class="mb-1"><a href="#" class="text-black">Thai Famous Indian
                                    Cuisine</a></h6>
                            <p class="text-gray mb-1 small">• Indian • Pure veg</p>
                            <p class="text-gray mb-1 rating"> </p>
                            <ul class="rating-stars list-unstyled">
                                <li> <i class="feather-star star_active"></i> <i class="feather-star star_active"></i>
                                    <i class="feather-star star_active"></i> <i class="feather-star star_active"></i>
                                    <i class="feather-star"></i>
                                </li>
                            </ul>
                            <p></p>
                        </div>
                        <div class="list-card-badge"> <span class="badge text-bg-success">OFFER</span> <small>65%
                                off</small> </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 pb-3">
                <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                    <div class="list-card-image">
                        <div class="star position-absolute"><span class="badge text-bg-success"><i
                                    class="feather-star"></i> 3.1 (300+)</span></div>
                        <div class="favourite-heart text-danger position-absolute rounded-circle"><a href="#"><i
                                    class="feather-heart"></i></a></div>
                        <div class="member-plan position-absolute"><span class="badge text-bg-dark">Promoted</span>
                        </div>
                        <a href="#"> <img alt="#" src="{{ asset('BhandaraKaro/images/menu/22.png') }}"
                                class="img-fluid item-img w-100"> </a>
                    </div>
                    <div class="p-3 position-relative">
                        <div class="list-card-body">
                            <h6 class="mb-1"><a href="#" class="text-black">The osahan Restaurant </a>
                            </h6>
                            <p class="text-gray mb-1 small">• Hamburgers • Pure veg</p>
                            <p class="text-gray mb-1 rating"> </p>
                            <ul class="rating-stars list-unstyled">
                                <li> <i class="feather-star star_active"></i> <i class="feather-star star_active"></i>
                                    <i class="feather-star star_active"></i> <i class="feather-star star_active"></i>
                                    <i class="feather-star"></i>
                                </li>
                            </ul>
                            <p></p>
                        </div>
                        <div class="list-card-badge"> <span class="badge text-bg-danger">OFFER</span> <small>65%
                                OSAHAN50</small> </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 pb-3">
                <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                    <div class="list-card-image">
                        <div class="star position-absolute"><span class="badge text-bg-success"><i
                                    class="feather-star"></i> 3.1 (300+)</span></div>
                        <div class="favourite-heart text-danger position-absolute rounded-circle"><a href="#"><i
                                    class="feather-heart"></i></a></div>
                        <div class="member-plan position-absolute"><span class="badge text-bg-dark">Promoted</span>
                        </div>
                        <a href="#"> <img alt="#" src="{{ asset('BhandaraKaro/images/menu/24.png') }}"
                                class="img-fluid item-img w-100"> </a>
                    </div>
                    <div class="p-3 position-relative">
                        <div class="list-card-body">
                            <h6 class="mb-1"><a href="#" class="text-black">Bite Me Now
                                    Sandwiches</a></h6>
                            <p class="text-gray mb-1 small">American • Pure veg</p>
                            <p class="text-gray mb-1 rating"> </p>
                            <ul class="rating-stars list-unstyled">
                                <li> <i class="feather-star star_active"></i> <i class="feather-star star_active"></i>
                                    <i class="feather-star star_active"></i> <i class="feather-star star_active"></i>
                                    <i class="feather-star"></i>
                                </li>
                            </ul>
                            <p></p>
                        </div>
                        <div class="list-card-badge"> <span class="badge text-bg-success">OFFER</span>
                            <small>65% off</small>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        </div>

    </div>
