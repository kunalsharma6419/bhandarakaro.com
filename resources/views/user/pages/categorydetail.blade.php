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
    <div class="offer-section py-4 bg-transparent">
        <div class="container position-relative">
            <img alt="{{ $category->category_name }}" src="{{ asset('/categoryImage/' . $category->category_image) }}"
                class="restaurant-pic" style="width:144px; height:148px; ">
            <div class="pt-3 text-black">
                <h2 class="font-weight-bold">{{ $category->category_name }}</h2>
                <p class="text-black m-0">Explore top deals and offers exclusively for you!</p>
                <div class="rating-wrap d-flex align-items-center mt-2">
                    <ul class="rating-stars list-unstyled">
                        <li>
                            <i class="feather-star text-warning"></i>
                            <i class="feather-star text-warning"></i>
                            <i class="feather-star text-warning"></i>
                            <i class="feather-star text-warning"></i>
                            <i class="feather-star"></i>
                        </li>
                    </ul>
                    <p class="label-rating text-black ml-2 small"> (245 Reviews)</p>
                </div>
            </div>
            <div class="pb-4">
                <div class="row">
                    <div class="col-6 col-md-2">
                        <p class="text-black-50 font-weight-bold m-0 small">Booking</p>
                        <p class="text-black m-0">Free</p>
                    </div>
                    <div class="col-6 col-md-2">
                        <p class="text-black-50 font-weight-bold m-0 small">Open time</p>
                        <p class="text-black m-0">8:00 AM</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="p-3 bg-primary bg-primary mt-n3 rounded position-relative">
            <div class="d-flex align-items-center">
            </div>
        </div>
    </div>

    <div class="bg-white shadow-sm">
        <div class="container">
            <div class="bg-white">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="px-0 py-3 nav-link text-dark h6 border-0 mb-0 active" id="profile-tab" data-toggle="tab"
                            href="#profile" role="tab" aria-controls="profile" aria-selected="false">Offerings in
                            {{ $category->category_name }}</a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
    <div class="container">
        <div class="tab-pane fade show active py-4" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <h5 class="mb-3 mt-0">Available Offerings</h5>
            <div class="row">
                @foreach ($foodproducts as $foodproduct)
                    <div class="col-lg-3 col-md-6">
                        <!-- Product 8 -->
                        <!-- Your product HTML structure goes here -->
                        <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                            <div class="list-card-image">
                                <div class="star position-absolute"><span class="badge text-bg-success"><i
                                            class="feather-star"></i>{{ $foodproduct->tags[1] }}</span>
                                </div>
                                <div class="favourite-heart text-danger position-absolute rounded-circle">
                                    {{-- <a
                                                        href="#"><i class="feather-heart"></i></a> --}}
                                </div>
                                <div class="member-plan position-absolute"><span
                                        class="badge text-bg-dark">{{ $foodproduct->tags[0] }}</span>
                                </div>
                                <a href="{{ route('foodproductdetail', $foodproduct->id) }}"> <img alt="#"
                                        src="/foodproductImage/{{ $foodproduct->image[0] }}"
                                        class="img-fluid item-img w-100"> </a>
                            </div>
                            <div class="p-3 position-relative">
                                <div class="list-card-body">
                                    <h6 class="mb-1"><a href="{{ route('foodproductdetail', $foodproduct->id) }}"
                                            class="text-black">{{ $foodproduct->name }}</a>
                                    </h6>
                                    <p class="text-gray mb-1 small">{{ $foodproduct->description }}</p>
                                    <p class="text-gray mb-1 rating"> </p>
                                    <h5 class="mb-1"><a href="" class="text-black">₹{{ $foodproduct->price }}
                                        </a>
                                    </h5>
                                    <p></p>
                                </div>
                                <div class="list-card-badge"> <a
                                        href="{{ route('foodproductdetail', $foodproduct->id) }}"><span
                                            class="btn btn-outline-primary">View More</span></a>
                                    <small>{{ $foodproduct->offer->offer_discount_percent }}%
                                        {{ $foodproduct->offer->offer_code }}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    @include('user.components.footer')


    @include('user.components.scripts')
@endsection
