@extends('user.layouts.app')

@section('maincontent')
    @include('user.components.header')


    @include('user.components.osahan_home')



    <div class="clearfix"></div>


    <div class="osahan-home-page">
        @include('user.components.filtermodal')
        <div class="offer-section py-4">
            <div class="container position-relative">
                <img alt="#" src="{{ asset('BhandaraKaro/images/om-new.png') }}" class="restaurant-pic"
                    style="background-color: #fff; border-radius: 50%;">
                <div class="pt-3 text-white">
                    <h2 class="font-weight-bold">{{ Auth::user()->name ?? '' }} 's Checkout</h2>
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
                {{-- <div class="pb-4">
                    <div class="row">
                        <div class="col-6 col-md-2">
                            <p class="text-white-50 font-weight-bold m-0 small">Delivery</p>
                            <p class="text-white m-0">Free</p>
                        </div>
                        <div class="col-6 col-md-2">
                            <p class="text-white-50 font-weight-bold m-0 small">Open time</p>
                            <p class="text-white m-0">8:00 AM</p>
                        </div>
                    </div>
                </div> --}}
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

    @include('user.components.osahanmenufooter')


    <div class="clearfix"></div>
    <div class="osahan-checkout">

        <div class="container position-relative">
            <div class="py-5 row">
                <form action="{{ url('place-order') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-8 mb-3">
                            <div>
                                <div class="accordion mb-3 rounded shadow-sm bg-white overflow-hidden"
                                    id="accordionExample">
                                    <div class="osahan-card bg-white border-bottom overflow-hidden">
                                        <div class="osahan-card-header" id="headingOne">
                                            <h2 class="mb-0">
                                                <button class="d-flex p-3 align-items-center btn btn-link w-100"
                                                    type="button" data-toggle="collapse" data-target="#collapseOne"
                                                    aria-expanded="true" aria-controls="collapseOne">
                                                    <i class="feather-credit-card mr-3"></i> Final Checkout Details
                                                    <i class="feather-chevron-down ml-auto"></i>
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                            data-parent="#accordionExample">
                                            <div class="osahan-card-body border-top p-3">
                                                <h6 class="m-0">Add Your Details for Checkout</h6>
                                                <p class="small">BOOK YOUR <span
                                                        class="osahan-card ml-2 font-weight-bold">(
                                                        Bhandara From Anywhere to Everywhere )</span></p>

                                                <div class="row">
                                                    <div class="col-md-6 form-group">
                                                        <label class="form-label font-weight-bold small">Full Name</label>
                                                        <input placeholder="Full Name" type="text" class="form-control"
                                                            name="full_name" value="{{ Auth::user()->name }}" required>
                                                    </div>
                                                    <div class="col-md-6 form-group">
                                                        <label class="form-label font-weight-bold small">Email</label>
                                                        <input placeholder="Email" type="email" class="form-control"
                                                            name="email" value="{{ Auth::user()->email }}" required>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6 form-group">
                                                        <label class="form-label font-weight-bold small">Phone</label>
                                                        <input placeholder="Phone" type="text" class="form-control"
                                                            name="phone" value="{{ Auth::user()->phone_number }}"
                                                            required>
                                                    </div>
                                                    <div class="col-md-6 form-group">
                                                        <label class="form-label font-weight-bold small">User
                                                            Address</label>
                                                        <input placeholder="User Address" type="text"
                                                            class="form-control" name="user_address"
                                                            value="{{ Auth::user()->address }}" required>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6 form-group">
                                                        <label class="form-label font-weight-bold small">Booking Temple
                                                            Name</label>
                                                        <input placeholder="Booking Temple Name" type="text"
                                                            class="form-control" name="booking_temple_name" required>
                                                    </div>
                                                    <div class="col-md-6 form-group">
                                                        <label class="form-label font-weight-bold small">Booking Temple
                                                            Address</label>
                                                        <input placeholder="Booking Temple Address" type="text"
                                                            class="form-control" name="booking_temple_address" required>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6 form-group">
                                                        <label class="form-label font-weight-bold small">Country</label>
                                                        <input placeholder="Country" type="text" class="form-control"
                                                            name="country" required>
                                                    </div>
                                                    <div class="col-md-6 form-group">
                                                        <label class="form-label font-weight-bold small">State</label>
                                                        <input placeholder="State" type="text" class="form-control"
                                                            name="state" required>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6 form-group">
                                                        <label class="form-label font-weight-bold small">City</label>
                                                        <input placeholder="City" type="text" class="form-control"
                                                            name="city" required>
                                                    </div>
                                                    <div class="col-md-6 form-group">
                                                        <label class="form-label font-weight-bold small">Pincode</label>
                                                        <input placeholder="Pincode" type="text" class="form-control"
                                                            name="pincode" required>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6 form-group">
                                                        <label class="form-label font-weight-bold small">Booking
                                                            Date</label>
                                                        <input placeholder="Booking Date" type="date"
                                                            class="form-control" name="booking_date" required>
                                                    </div>
                                                    <div class="col-md-6 form-group">
                                                        <label class="form-label font-weight-bold small">Booking
                                                            Time</label>
                                                        <input placeholder="Booking Time" type="time"
                                                            class="form-control" name="booking_time">
                                                    </div>
                                                </div>

                                                {{-- <button type="button" class="btn btn-primary"
                                                onclick="submitBooking()">Submit Booking</button> --}}


                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="osahan-card bg-white border-bottom overflow-hidden">
                                <div class="osahan-card-header" id="headingTwo">
                                    <h2 class="mb-0">
                                        <button class="d-flex p-3 align-items-center btn btn-link w-100" type="button"
                                            data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            <i class="feather-globe mr-3"></i> Net Banking
                                            <i class="feather-chevron-down ml-auto"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#accordionExample">
                                    <div class="osahan-card-body border-top p-3">
                                        <form>
                                            <div class="btn-group btn-group-toggle w-100" data-toggle="buttons">
                                                <label class="btn btn-outline-secondary active">
                                                    <input type="radio" name="options" id="option1" checked> HDFC
                                                </label>
                                                <label class="btn btn-outline-secondary">
                                                    <input type="radio" name="options" id="option2"> ICICI
                                                </label>
                                                <label class="btn btn-outline-secondary">
                                                    <input type="radio" name="options" id="option3"> AXIS
                                                </label>
                                            </div>
                                            <hr>
                                            <div class="form-row">
                                                <div class="col-md-12 form-group mb-0">
                                                    <label class="form-label small font-weight-bold">Select
                                                        Bank</label><br>
                                                    <select class="custom-select form-control">
                                                        <option>Bank</option>
                                                        <option>KOTAK</option>
                                                        <option>SBI</option>
                                                        <option>UCO</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="osahan-card bg-white overflow-hidden">
                                <div class="osahan-card-header" id="headingThree">
                                    <h2 class="mb-0">
                                        <button class="d-flex p-3 align-items-center btn btn-link w-100" type="button"
                                            data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            <i class="feather-dollar-sign mr-3"></i> Cash on Delivery
                                            <i class="feather-chevron-down ml-auto"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                    data-parent="#accordionExample">
                                    <div class="card-body border-top">
                                        <h6 class="mb-3 mt-0 mb-3 font-weight-bold">Cash</h6>
                                        <p class="m-0">Please keep exact change handy to help us serve you better</p>
                                    </div>
                                </div>
                            </div> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 pt-3">
                            <div
                                class="osahan-cart-item rounded rounded shadow-sm overflow-hidden bg-white sticky_sidebar">
                                <div class="d-flex border-bottom osahan-cart-item-profile bg-white p-3">
                                    <img alt="osahan" src="{{ asset('BhandaraKaro/images/LOGO1.png') }}"
                                        class="mr-3 img-fluid" style="width: 93px; height: 50px;">
                                    <div class="d-flex flex-column">
                                        <h6 class="mb-1 font-weight-bold">Bhandara Wala- Booking Details</h6>
                                        <p class="mb-0 small text-muted"><i class="feather-map-pin"></i>Booking Details
                                            For Your Upcoming Bhandara</p>
                                    </div>
                                </div>
                                @if ($cartitems->count() > 0)
                                    @php
                                        $total = 0;
                                        $platformFeeTotal = 0;
                                        $gstFeeTotal = 0;
                                    @endphp
                                    {{-- @php $totaldiscounted = 0; @endphp --}}
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
                                                    </button><input class="count-number-input" type="text"
                                                        readonly="" value="{{ $item->prod_qty }}"
                                                        style="width: 82px;">
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
                                        <p class="mb-1">Item Total: <span
                                                class="float-right text-dark">₹{{ $total }}</span>
                                        </p>
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
                                                {{ number_format($total + $platformFeeTotal + $gstFeeTotal, 2) }}</span>
                                        </h6>
                                    </div>
                                    <div class="p-3">
                                        <script>
                                            document.forms['redirectForm'].submit();
                                        </script>
                                        @php
                                            $payment_url =
                                                'https://test.ccavenue.com/transaction/transaction.do?command=initiateTransaction';
                                        @endphp
                                        <form name="redirectForm" method="post" action="{{ $payment_url }}">
                                            @csrf
                                            {{-- <input type="hidden" name="user_id" value="{{ Auth::id() }}"> --}}
                                            @foreach ($parameters as $key => $value)
                                                <input type="hidden" name="{{ $key }}"
                                                    value="{{ $value }}">
                                            @endforeach
                                        </form>
                                        <button class="btn btn-success btn-block btn-lg" type="submit">Confirm
                                            Booking<i class="feather-arrow-right"></i></button>
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
                </form>
            </div>
        </div>
    </div>
    </div>

    @include('user.components.footer')


    @include('user.components.scripts')
@endsection
