@extends('user.layouts.app')

@section('maincontent')
    @include('user.components.header')


    @include('user.components.osahan_home')



    <div class="clearfix"></div>


    <div class="osahan-home-page">
        @include('user.components.filtermodal')

    </div>

    <div class="osahan-popular">

        <div class="container">
            <div class="search py-5">
                {{-- <div class="input-group mb-4">
                    <input type="text" class="form-control form-control-lg input_search border-right-0"
                        id="inlineFormInputGroup" placeholder="Bhandara Karo...">
                    <div class="input-group-prepend">
                        <div class="btn input-group-text bg-white border_search border-left-0 text-primary"><i
                                class="feather-search"></i></div>
                    </div>

                </div> --}}
                <div class="input-group mb-4">
                    <form style="width: 95%;" action="{{ url()->current() }}" method="GET" class="d-flex">
                        <input type="text" class="form-control form-control-lg input_search border-right-0 flex-grow-1"
                            id="inlineFormInputGroup" name="search" placeholder="Search Temple">
                        <div class="input-group-prepend">
                            <button type="submit"
                                class="btn input-group-text bg-white border_search border-left-0 text-primary">
                                <i class="feather-search"></i>
                            </button>
                        </div>
                    </form>
                </div>

                <ul class="nav nav-tabs border-0" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active border-0 bg-light text-dark rounded" id="temple-tab" data-toggle="tab"
                            href="#home" role="tab" aria-controls="home" aria-selected="true"><i
                                class="feather-disc mr-2"></i>Temples (25)</a>
                    </li>
                    {{-- <li class="nav-item" role="presentation">
                        <a class="nav-link border-0 bg-light text-dark rounded ml-3" id="dishes-tab" data-toggle="tab"
                            href="#profile" role="tab" aria-controls="profile" aria-selected="false"><i
                                class="feather-home mr-2"></i>Temples (23)</a>
                    </li> --}}
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="temple-tab">

                        <div class="container mt-4 mb-4 p-0">

                            <div class="row">
                                @foreach ($temples as $temple)
                                    <div class="col-md-3 pb-3">
                                        <div
                                            class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                                            <div class="list-card-image">
                                                <div class="star position-absolute"><span class="badge text-bg-success"><i
                                                            class="feather-star"></i> {{ $temple->rating }}
                                                        ({{ $temple->no_of_reviews }})
                                                    </span></div>
                                                {{-- <div class="favourite-heart text-danger position-absolute rounded-circle"><a
                                    href="#"><i class="feather-heart"></i></a></div> --}}
                                                <div class="member-plan position-absolute"><span
                                                        class="badge text-bg-dark">{{ $temple->type }}</span>
                                                </div>
                                                <a href="{{ $temple->temple_location_link }}" target="_blank">
                                                    <img alt="{{ $temple->temple_name }}"
                                                        src=" {{ $temple->temple_image_url }}"
                                                        class="img-fluid item-img w-100" style="height: 180px;"> </a>
                                            </div>
                                            <div class="p-3 position-relative">
                                                <div class="list-card-body">
                                                    <h6 class="mb-1"><a href="#"
                                                            class="text-black">{{ $temple->temple_name }} </a>
                                                    </h6>
                                                    <p class="text-gray mb-1 small">
                                                        {{ $temple->full_address_code }}</p>
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
                                                        class="badge text-{{ $temple->open_status === 'Open' ? 'bg-success' : 'bg-danger' }}">
                                                        {{ $temple->open_status }}
                                                    </span>
                                                    <small>{{ $temple->timings }}</small>
                                                    <a href="{{ $temple->temple_location_link }}" target="_blank"><span
                                                            class="btn btn-outline-primary" style="margin-top: 4px;">Go to
                                                            Temple</span></a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                                {{-- <div class="col-lg-3 col-md-6">
                                    <!-- Product 8 -->
                                    <!-- Your product HTML structure goes here -->
                                    <div
                                        class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                                        <div class="list-card-image">
                                            <div class="star position-absolute"><span class="badge text-bg-success"><i
                                                        class="feather-star"></i>Pure Veg</span></div>
                                            <div class="favourite-heart text-danger position-absolute rounded-circle"><a
                                                    href="#"><i class="feather-heart"></i></a></div>
                                            <div class="member-plan position-absolute"><span
                                                    class="badge text-bg-dark">Promoted</span>
                                            </div>
                                            <a href="#"> <img alt="#"
                                                    src="{{ asset('BhandaraKaro/images/menu/12.png') }}"
                                                    class="img-fluid item-img w-100"> </a>
                                        </div>
                                        <div class="p-3 position-relative">
                                            <div class="list-card-body">
                                                <h6 class="mb-1"><a href="#" class="text-black">Product 1 </a>
                                                </h6>
                                                <p class="text-gray mb-1 small">Product Description</p>
                                                <p class="text-gray mb-1 rating"> </p>
                                                <ul class="rating-stars list-unstyled">
                                                    <li> <i class="feather-star star_active"></i> <i
                                                            class="feather-star star_active"></i>
                                                        <i class="feather-star star_active"></i> <i
                                                            class="feather-star star_active"></i>
                                                        <i class="feather-star"></i>
                                                    </li>
                                                </ul>
                                                <p></p>
                                            </div>
                                            <div class="list-card-badge"> <a href="/cart"><span
                                                        class="btn btn-outline-primary">Add to Cart</span></a> <small>65%
                                                    OSAHAN50</small> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <!-- Product 8 -->
                                    <!-- Your product HTML structure goes here -->
                                    <div
                                        class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                                        <div class="list-card-image">
                                            <div class="star position-absolute"><span class="badge text-bg-success"><i
                                                        class="feather-star"></i>Pure Veg</span></div>
                                            <div class="favourite-heart text-danger position-absolute rounded-circle"><a
                                                    href="#"><i class="feather-heart"></i></a></div>
                                            <div class="member-plan position-absolute"><span
                                                    class="badge text-bg-dark">Promoted</span>
                                            </div>
                                            <a href="#"> <img alt="#"
                                                    src="{{ asset('BhandaraKaro/images/menu/18.png') }}"
                                                    class="img-fluid item-img w-100"> </a>
                                        </div>
                                        <div class="p-3 position-relative">
                                            <div class="list-card-body">
                                                <h6 class="mb-1"><a href="#" class="text-black">Product 1 </a>
                                                </h6>
                                                <p class="text-gray mb-1 small">Product Description</p>
                                                <p class="text-gray mb-1 rating"> </p>
                                                <ul class="rating-stars list-unstyled">
                                                    <li> <i class="feather-star star_active"></i> <i
                                                            class="feather-star star_active"></i>
                                                        <i class="feather-star star_active"></i> <i
                                                            class="feather-star star_active"></i>
                                                        <i class="feather-star"></i>
                                                    </li>
                                                </ul>
                                                <p></p>
                                            </div>
                                            <div class="list-card-badge"> <a href="/cart"><span
                                                        class="btn btn-outline-primary">Add to Cart</span></a> <small>65%
                                                    OSAHAN50</small> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <!-- Product 8 -->
                                    <!-- Your product HTML structure goes here -->
                                    <div
                                        class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                                        <div class="list-card-image">
                                            <div class="star position-absolute"><span class="badge text-bg-success"><i
                                                        class="feather-star"></i>Pure Veg</span></div>
                                            <div class="favourite-heart text-danger position-absolute rounded-circle"><a
                                                    href="#"><i class="feather-heart"></i></a></div>
                                            <div class="member-plan position-absolute"><span
                                                    class="badge text-bg-dark">Promoted</span>
                                            </div>
                                            <a href="#"> <img alt="#"
                                                    src="{{ asset('BhandaraKaro/images/menu/24.png') }}"
                                                    class="img-fluid item-img w-100"> </a>
                                        </div>
                                        <div class="p-3 position-relative">
                                            <div class="list-card-body">
                                                <h6 class="mb-1"><a href="#" class="text-black">Product 1 </a>
                                                </h6>
                                                <p class="text-gray mb-1 small">Product Description</p>
                                                <p class="text-gray mb-1 rating"> </p>
                                                <ul class="rating-stars list-unstyled">
                                                    <li> <i class="feather-star star_active"></i> <i
                                                            class="feather-star star_active"></i>
                                                        <i class="feather-star star_active"></i> <i
                                                            class="feather-star star_active"></i>
                                                        <i class="feather-star"></i>
                                                    </li>
                                                </ul>
                                                <p></p>
                                            </div>
                                            <div class="list-card-badge"> <a href="/cart"><span
                                                        class="btn btn-outline-primary">Add to Cart</span></a> <small>65%
                                                    OSAHAN50</small> </div>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="dishes-tab">

                        <div class="row d-flex align-items-center justify-content-center py-5">
                            <div class="col-md-4 py-5">
                                <div class="text-center py-5">
                                    <p class="h4 mb-4"><i class="feather-search bg-primary text-white rounded p-2"></i>
                                    </p>
                                    <p class="font-weight-bold text-dark h5">Nothing found</p>
                                    <p>we could not find anything that would match your search request, please try again.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        @include('user.components.osahanmenufooter')


        <div class="clearfix"></div>


        @include('user.components.footer')


        @include('user.components.scripts')
    @endsection
