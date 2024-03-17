@extends('user.layouts.app')

@section('maincontent')
    @include('user.components.header')


    @include('user.components.osahan_home')



    <div class="clearfix"></div>


    <div class="osahan-home-page">
        @include('user.components.filtermodal')

        {{-- @include('user.components.offers') --}}
        <div class="offer-section py-4">
            <div class="container position-relative">
                <img alt="#" src="{{ asset('BhandaraKaro/images/om-new.png') }}" class="restaurant-pic"
                    style="background-color: #fff; border-radius: 50%;">
                <div class="pt-3 text-white">
                    <h2 class="font-weight-bold">{{ Auth::user()->name ?? '' }} 's Cart</h2>
                    <p class="text-white m-0">{{ old('address', Auth::user()->address) }} </p>
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
                        <p class="label-rating text-white ml-2 small"> ({{ old('email', Auth::user()->email) }})</p>
                    </div>
                </div>
                <div class="pb-4">
                    {{-- <div class="row">
                        <div class="col-6 col-md-2">
                            <p class="text-white-50 font-weight-bold m-0 small">Delivery</p>
                            <p class="text-white m-0">Free</p>
                        </div>
                        <div class="col-6 col-md-2">
                            <p class="text-white-50 font-weight-bold m-0 small">Open time</p>
                            <p class="text-white m-0">8:00 AM</p>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
        <div class="container">
            <div class="p-3 bg-primary bg-primary mt-n3 rounded position-relative">
                {{-- <div class="d-flex align-items-center">
                    <div class="feather_icon">
                        <a href="#ratings-and-reviews" class="text-decoration-none text-dark"><i
                                class="p-2 bg-light rounded-circle font-weight-bold  feather-upload"></i></a>
                        <a href="#ratings-and-reviews" class="text-decoration-none text-dark mx-2"><i
                                class="p-2 bg-light rounded-circle font-weight-bold  feather-star"></i></a>
                        <a href="#ratings-and-reviews" class="text-decoration-none text-dark"><i
                                class="p-2 bg-light rounded-circle font-weight-bold feather-map-pin"></i></a>
                    </div>
                    <a href="contact-us.html" class="btn btn-sm btn-outline-light ml-auto">Contact</a>
                </div> --}}
            </div>
        </div>
    </div>




    <div class="clearfix"></div>
    <div class="container position-relative">
        <div class="row">
            <div class="col-md-8 pt-3">
                <div class="shadow-sm rounded bg-white mb-3 overflow-hidden">
                    <div class="d-flex item-aligns-center">
                        <p class="font-weight-bold h6 p-3 border-bottom mb-0 w-100">Cart Items</p>
                        <button class="btn btn-primary d-md-none ml-auto menu-dropdown" type="button"
                            data-bs-toggle="collapse" data-bs-target="#menuContent" aria-expanded="false"
                            aria-controls="menuContent" style="background-color: #00000000">
                            <img src="{{ asset('BhandaraKaro/images/chevron-down.svg') }}"
                                class="p-2 bg-light rounded-circle font-weight-bold toggle-icon">
                        </button>
                    </div>
                    <div class="collapse d-md-block" id="menuContent">
                        <div class="row m-0 d-none d-md-flex">
                            {{-- <h6 class="p-3 m-0 bg-light w-100">Quick Bites <small class="text-black-50">3 ITEMS</small></h6> --}}
                            @if ($cartitems->count() > 0)
                                <div class="col-md-12 px-0 border-top">
                                    <div class="">
                                        @php
                                            $total = 0;
                                            $platformFeeTotal = 0;
                                            $gstFeeTotal = 0;
                                        @endphp
                                        {{-- @php $totaldiscounted = 0; @endphp --}}
                                        @foreach ($cartitems as $item)
                                            <div class="p-3 border-bottom gold-members">
                                                <div class="row">
                                                    <!-- Left Column for Product Details -->
                                                    <div class="col-md-8">
                                                        <div class="media">
                                                            <div class="mr-3 font-weight-bold text-success veg">.</div>
                                                            <br>
                                                            <div class="media-body">
                                                                <h6 class="mb-1">{{ $item->products->name }}</h6>
                                                                {{-- @php
                                // Calculate the discounted price
                                $discountedPrice = $item->products->price - ($item->products->price * $item->products->offer->offer_discount_percent) / 100;
                            @endphp --}}
                                                                <p class="text-muted mb-0">
                                                                    ₹ {{ $item->products->price }}</p>
                                                                {{-- <p class="text-muted mb-0">
                                ₹ {{ number_format($discountedPrice, 2) }}</p> --}}
                                                            </div>
                                                        </div>
                                                        <br>
                                                        {{-- <div class="text-right">
                        <a href="#" class="btn btn-outline-secondary btn-sm"
                            data-toggle="modal" data-target="#extras">ADD</a>
                    </div> --}}
                                                        <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                                            <input type="hidden" id="csrf_token" name="csrf_token"
                                                                value="{{ csrf_token() }}">
                                                            <input type="hidden" class="prod_id"
                                                                value="{{ $item->prod_id }}">
                                                            <span class="btn btn-link px-2 changeQuantity minus"><i
                                                                    class="feather-minus btn btn-outline-secondary"
                                                                    style="color: #000;"
                                                                    onclick="decreasequantity('{{ $item->prod_id }}')"></i></span>
                                                            <input type="text" name="quantity" id="quantity_value"
                                                                class="form-control qty-input test text-center"
                                                                style="width: 60px;" value="{{ $item->prod_qty }}">
                                                            <span class="btn btn-link px-2 changeQuantity plus"><i
                                                                    class="feather-plus btn btn-outline-secondary"
                                                                    style="color: #000;"
                                                                    onclick="increasequantity('{{ $item->prod_id }}')"></i></span>
                                                        </div>
                                                    </div>
                                                    <!-- Right Column for Image and Add Button -->
                                                    <div class="col-md-4">
                                                        <div class="d-flex flex-column justify-content-between h-100">
                                                            <!-- Product Image -->
                                                            <img src="{{ asset('foodproductImage/' . $item->products->image[1]) }}"
                                                                class="align-self-center mb-3"
                                                                alt="{{ $item->products->name }}" width="130"
                                                                height="130">
                                                            <button class="btn btn-danger delete-cart-item"
                                                                style="border-radius: 12px;" type="button"
                                                                onclick="deletecartitem('{{ $item->prod_id }}', '{{ $item->products->name }}')"><i
                                                                    class="feather-trash-2" aria-hidden="true"></i>Remove
                                                                Food</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @php
                                                $productTotal = $item->products->price * $item->prod_qty;
                                                $platformFee = ($productTotal * 2) / 100;
                                                $total += $productTotal;
                                                $platformFeeTotal += $platformFee;
                                                $gstFee = ($platformFeeTotal * 18) / 100;
                                                $gstFeeTotal += $gstFee;
                                            @endphp
                                            {{-- @php $totaldiscounted += $discountedPrice * $item->prod_qty ; @endphp --}}
                                        @endforeach
                                        {{--  --}}
                                    </div>
                                    {{-- <div class="your-total-section">
                                        <p>Total: ₹ {{ number_format($total + $platformFeeTotal, 2) }}</p>
                                        <p>Platform Fee (2%): ₹ {{ number_format($platformFeeTotal, 2) }}</p>
                                    </div> --}}

                                </div>
                            @else
                                @php
                                    $total = 0;
                                    $platformFeeTotal = 0;
                                    $gstFeeTotal = 0;
                                @endphp
                                {{-- @php $totaldiscounted = 0; @endphp --}}
                                <div class="col-md-12 px-0 border-top">
                                    <div class="">
                                        <h6 class="p-3 m-0 bg-light w-100">Your Cart Is Empty<small
                                                class="text-black-50"></small></h6>
                                        <a class="btn btn-success btn-block btn-lg" href="{{ url('search') }}">Continue
                                            Adding
                                            Bhandara
                                            <i class="feather-arrow-right"></i></a>
                                    </div>
                                </div>
                            @endif
                        </div>


                        {{--  --}}
                    </div>
                </div>
                <div class="mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h6>Total Price : ₹ {{ number_format($total, 2) }}</h6>
                            <h6>Platform Fee (2%): ₹ {{ number_format($platformFeeTotal, 2) }}</h6>
                            <h6>GST Fee (18%): ₹ {{ number_format($gstFeeTotal, 2) }}</h6>
                            <h6>Grand Total: ₹ {{ number_format($total + $platformFeeTotal + $gstFeeTotal, 2) }}</h6>
                        </div>
                    </div>
                    <div id="ratings-and-reviews"
                        class="bg-white shadow-sm rounded p-3 mb-3 clearfix restaurant-detailed-star-rating">
                        <h6 class="mb-0">Rate our application on</h6>
                        <div class="text-center text-md-start">
                            <p class="text-muted mb-0 mt-2 mt-md-0">
                                <a href="#" class="d-inline-block"><img alt="#"
                                        src="BhandaraKaro/NewHome/public/img/appstore.png" height="40"></a>
                                <a href="#" class="d-inline-block ms-3"><img alt="#"
                                        src="{{ asset('BhandaraKaro/NewHome/public/img/playmarket.png') }}"
                                        height="40"></a>
                            </p>
                        </div>
                        {{-- <div class="star-rating mt-3">
                            <!-- Your star rating content here -->
                            <div class="d-inline-block h6 m-0"><i class="feather-star text-warning"></i>
                                <i class="feather-star text-warning"></i>
                                <i class="feather-star text-warning"></i>
                                <i class="feather-star text-warning"></i>
                                <i class="feather-star"></i>
                            </div>
                            <b class="text-black ml-2">334</b>
                        </div> --}}
                    </div>



                </div>
            </div>
            <div class="col-md-4 pt-3">
                <div class="osahan-cart-item rounded rounded shadow-sm overflow-hidden bg-white sticky_sidebar">
                    <div class="d-flex border-bottom osahan-cart-item-profile bg-white p-3">
                        <img alt="osahan" src="{{ asset('BhandaraKaro/images/LOGO1.png') }}" class="mr-3 img-fluid"
                            style="width: 93px; height: 50px;">
                        <div class="d-flex flex-column">
                            <h6 class="mb-1 font-weight-bold">Bhandara Wala - Booking Details</h6>
                            <p class="mb-0 small text-muted"><i class="feather-map-pin"></i> Booking Details For Your
                                Upcoming Bhandara</p>
                        </div>
                    </div>
                    @if ($cartitems->count() > 0)
                        <div class="bg-white border-bottom py-2">
                            @foreach ($cartitems as $item)
                                <div
                                    class="gold-members d-flex align-items-center justify-content-between px-3 py-2 border-bottom">
                                    <div class="media align-items-center">
                                        <div class="mr-2 text-danger">&middot;</div>
                                        <div class="media-body">
                                            <p class="m-0">{{ $item->products->name }}</p>
                                            {{-- @php
                                                // Calculate the discounted price
                                                $discountedPrice = $item->products->price - ($item->products->price * $item->products->offer->offer_discount_percent) / 100;
                                            @endphp --}}
                                            <p class="text-gray mb-0 float-right ml-2 text-muted small">Price :
                                                ₹ {{ $item->products->price }}</p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="count-number float-right"><button type="button"
                                                class="btn-sm left dec btn btn-outline-secondary"> Qty :</span>
                                        </button><input class="count-number-input" type="text" readonly=""
                                            value="{{ $item->prod_qty }}" style="width: 82px;">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        {{-- <div class="bg-white p-3 py-3 border-bottom clearfix">
                        <div class="input-group-sm mb-2 input-group">
                            <input placeholder="Enter promo code" type="text" class="form-control">
                            <div class="input-group-append"><button type="button" class="btn btn-primary"><i
                                        class="feather-percent"></i> APPLY</button></div>
                        </div>
                        <div class="mb-0 input-group">
                            <div class="input-group-prepend"><span class="input-group-text"><i
                                        class="feather-message-square"></i></span></div>
                            <textarea placeholder="Any suggestions? We will pass it on..." aria-label="With textarea" class="form-control"></textarea>
                        </div>
                    </div> --}}
                        <div class="bg-white p-3 clearfix border-bottom">
                            <p class="mb-1">Item Total: <span class="float-right text-dark">₹{{ $total }}</span>
                            <p class="mb-1">
                                Platform Fee (2%): ₹ {{ number_format($platformFeeTotal, 2) }}
                            </p>
                            <p class="mb-1">
                                GST Fee (18%): ₹ {{ number_format($gstFeeTotal, 2) }}
                            </p>
                            {{-- <p class="mb-1">Platform Fee<span class="text-info ml-1"><i
                                    class="feather-info"></i></span><span class="float-right text-dark">$10</span></p> --}}
                            {{-- @php
                                // Calculate the discounted price
                                $totaldiscountedPrice = $total - $totaldiscounted;
                            @endphp --}}
                            {{-- <p class="mb-1 text-success">Total Discount: <span
                                    class="float-right text-success">₹{{ number_format($totaldiscountedPrice, 2) }}</span>
                            </p> --}}
                            <hr>
                            <h6 class="font-weight-bold mb-0">TO PAY <span class="float-right">₹
                                    {{ number_format($total + $platformFeeTotal + $gstFeeTotal, 2) }}</span></h6>
                        </div>
                        <div class="p-3">
                            <a class="btn btn-success btn-block btn-lg" href="{{ url('checkout') }}">Proceed to
                                Checkout<i class="feather-arrow-right"></i></a>
                        </div>
                    @else
                        @php
                            $total = 0;
                            $platformFeeTotal = 0;
                            $gstFeeTotal = 0;
                        @endphp
                        {{-- @php $totaldiscounted = 0; @endphp --}}
                        <div class="col-md-12 px-0 border-top">
                            <div class="">
                                <h6 class="p-3 m-0 bg-light w-100">No Bhandara Items In Cart<small
                                        class="text-black-50"></small></h6>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    @include('user.components.osahanmenufooter')


    <div class="clearfix"></div>

    @include('user.components.footer')


    @include('user.components.scripts')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        function decreasequantity(prod_id) {
            //alert(prod_id);
            var token = $('#csrf_token').val();
            $.ajax({
                type: "post",
                url: "update-cart",
                data: {
                    'prod_id': prod_id,
                    '_token': token,
                    'minus': 'yes',
                },
                success: function(response) {
                    window.location.reload();
                    swal(response.status, {
                        icon: "success",
                    });
                }
            });
        }

        function increasequantity(prod_id) {
            //alert(prod_id);
            var token = $('#csrf_token').val();
            $.ajax({
                type: "post",
                url: "update-cart",
                data: {
                    'prod_id': prod_id,
                    '_token': token,
                    'plus': 'no',
                },
                success: function(response) {
                    window.location.reload();
                    swal(response.status, {
                        icon: "success",
                    });
                }
            });
        }

        function deletecartitem(prod_id, prod_name) {
            // alert(prod_id);
            var token = $('#csrf_token').val();
            swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this" + " " + prod_name,
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        $.ajax({
                            type: "post",
                            url: "delete-cart-item",
                            data: {
                                'prod_id': prod_id,
                                '_token': token,
                            },
                            success: function(response) {
                                window.location.reload();
                                swal(response.status, {
                                    icon: "error",
                                });
                            }
                        });
                    } else {
                        swal("Your" + " " + prod_name + " " + "is safe!");
                    }
                });
        }
    </script>
@endsection
