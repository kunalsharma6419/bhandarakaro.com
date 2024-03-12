@extends('user.layouts.app')
{{-- <script src="https://cdn.tailwindcss.com"></script> --}}

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
                <div class="container py-8">
                    <div class="row justify-content-between mb-6">
                        <div class="col-md-6">
                            <h1 class="text-2xl font-bold leading-tight text-gray-900">
                                {{ $foodproduct->name }}
                            </h1>
                            <p class="text-sm text-gray-500">
                                {{ $foodproduct->category->category_name }} · {{ $foodproduct->tags[1] }}
                            </p>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ asset('foodproductImage/' . $foodproduct->image[0]) }}"
                                alt="{{ $foodproduct->name }}" class="w-100 h-auto rounded-lg"
                                style="aspect-ratio: 500 / 300; object-fit: cover;" />

                        </div>
                        <div class="col-md-6">
                            <div class="col-md-6 text-right">
                                <div class="row mb-3">
                                    {{-- @php
                                        // Calculate the discounted price
                                        $discountedPrice = $foodproduct->price - ($foodproduct->price * $foodproduct->offer->offer_discount_percent) / 100;
                                    @endphp --}}
                                    <div class="col-md-6">
                                        {{-- <h5 class="discount">₹{{ number_format($discountedPrice, 2) }}</h5>
                                        <h6 class="price" style="text-decoration: line-through; color:red;">
                                            ₹{{ $foodproduct->price }}</h6> --}}
                                        <h5 class="price">Price : ₹ {{ $foodproduct->price }}</h5>
                                    </div>

                                    {{-- <span class="descount_perc">-{{ $foodproduct->offer->offer_discount_percent }}%</span> --}}
                                </div>

                                <div class="d-flex justify-content-between mb-3">
                                    <input type="hidden" id="csrf_token" name="csrf_token" value="{{ csrf_token() }}">
                                    <input type="hidden" value="{{ $foodproduct->id }}" class="prod_id">
                                    {{-- <button class="btn btn-primary" onclick="adjustQuantity('decrement')">-</button>
                                    <span class="text-md font-bold" id="quantity">1</span>
                                    <button class="btn btn-primary" onclick="adjustQuantity('increment')">+</button> --}}
                                    {{-- <span class="minus btn btn-primary">-</span>
                                    <input type="text" name="quantity" id="quantity_value"
                                        class="form-control qty-input text-center text-md font-bold" value="1">
                                    <span class="plus btn btn-primary" onclick="plus()">+</span> --}}
                                    <span class="minus btn btn-primary">-</span>
                                    <input type="text" name="quantity" id="quantity_value"
                                        class="form-control qty-input test text-center text-md font-bold" value="1">
                                    <span class="plus btn btn-primary">+</span>
                                </div>
                                {{-- <button class="btn btn-warning btn-lg btn-block" onclick="preOrder()">
                                    Pre-Order
                                </button> --}}
                                <span class="btn-lg addToCartBtn"> <a href="#"class="btn btn-outline-primary">Add
                                        to
                                        Cart</a></span>
                                {{-- <div class="btn btn-lg btn-outline-primary addToCartBtn"><a href="#">Add to cart</a>
                                </div> --}}
                            </div>
                            <div class="mt-4">
                                <h2 class="text-xl font-semibold">DETAILS ABOUT THIS MEAL</h2>
                                <p class="mt-2 text-gray-700">
                                    {{ $foodproduct->description }}
                                </p>
                                <div class="flex items-center mt-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6 text-green-500">
                                        <polyline points="20 6 9 17 4 12"></polyline>
                                    </svg>
                                    <span class="badge bg-success text-white">{{ $foodproduct->tags[1] }}</span>
                                </div>
                            </div>
                            <div class="mt-6">
                                <h3 class="text-lg font-semibold">INGREDIENTS</h3>
                                <p class="mt-2 text-gray-700">
                                    {{ $foodproduct->ingredient }}
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8">
                        <h3 class="text-xl font-semibold border-t border-b py-2">
                            YOU MIGHT ALSO LIKE
                        </h3>
                        <div class="mt-4">
                            {{-- <div class="rounded-lg border bg-light p-6">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex">
                                        <img src="https://via.placeholder.com/100x100" alt="Classic Tiramisu"
                                            class="w-24 h-24 rounded-lg mr-4"
                                            style="aspect-ratio: 100 / 100; object-fit: cover;" />
                                        <div>
                                            <h4 class="text-lg font-semibold">Classic Tiramisu</h4>
                                            <p class="text-sm text-gray-500">Veg · World Cuisine</p>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="text-xl font-bold text-gray-900">₹89</p>
                                        <button class="btn btn-primary mt-2" onclick="addToCart()">
                                            Add
                                        </button>
                                    </div>
                                </div>
                            </div> --}}
                            @foreach ($relatedItems as $relatedItem)
                                <div class="row" style="margin-bottom: 20px; border: 1px solid #000;">

                                    {{-- <div class="col-md-3">
                                        <div class="rounded-lg border bg-light p-6">
                                            <div class="d-flex justify-content-between">
                                                <div class="d-flex">
                                                    <img src="{{ asset('foodproductImage/' . $relatedItem->image[1]) }}"
                                                        alt="{{ $relatedItem->name }}" class="w-24 h-24 rounded-lg mr-4"
                                                        style="aspect-ratio: 100 / 100; object-fit: cover;" />
                                                    <div>
                                                        <h4 class="text-lg font-semibold">{{ $relatedItem->name }}</h4>
                                                        <p class="text-sm text-gray-500">
                                                            {{ $relatedItem->category->category_name }}</p>
                                                    </div>
                                                </div>
                                                <div>
                                                    <p class="text-xl font-bold text-gray-900">
                                                        ₹{{ number_format($relatedItem->price, 2) }}</p>
                                                    <a href="{{ route('foodproductdetail', $relatedItem->id) }}"
                                                        class="btn btn-primary mt-2">
                                                        View
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <!-- Left Column for Product Details -->
                                    <div class="col-md-8" style="padding: 30px;">
                                        <div class="media">
                                            <div class="mr-3 font-weight-bold text-success veg">.</div>
                                            <br>
                                            <div class="media-body">
                                                <h6 class="mb-1">{{ $relatedItem->name }}</h6>
                                                <span
                                                    class="badge bg-success text-white">{{ $relatedItem->tags[1] }}</span>
                                                <p class="text-muted mb-0">₹{{ number_format($relatedItem->price, 2) }}</p>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="text-right">
                                            {{-- <a href="{{ route('foodproductdetail', $relatedItem->id) }}"
                                                class="btn btn-outline-secondary btn-sm" data-toggle="modal"
                                                data-target="#extras">View</a> --}}
                                        </div>
                                    </div>
                                    <!-- Right Column for Image and Add Button -->
                                    <div class="col-md-4" style="padding: 30px;">
                                        <div class="d-flex flex-column justify-content-between h-100">
                                            <!-- Product Image -->
                                            <img src="{{ asset('foodproductImage/' . $relatedItem->image[1]) }}"
                                                class="align-self-center mb-3" alt="{{ $relatedItem->name }}"
                                                width="130" height="130">
                                            <!-- Add Button -->

                                            <a href="{{ route('foodproductdetail', $relatedItem->id) }}"
                                                class="btn btn-outline-secondary btn-sm" data-toggle="modal"
                                                data-target="#extras">View</a>

                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
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
            // $(document).ready(function() {
            //     $(document).ready(function() {
            //         initQuantity();
            //     });

            //     function initQuantity() {
            //         if ($('.plus').length && $('.minus').length) {
            //             var plus = $('.plus');
            //             var minus = $('.minus');
            //             var value = $('#quantity_value');

            //             plus.on('click', function() {
            //                 var x = parseInt(value.val());
            //                 value.val(x + 1);
            //             });

            //             minus.on('click', function() {
            //                 var x = parseInt(value.val());
            //                 if (x > 1) {
            //                     value.val(x - 1);
            //                 }
            //             });
            //         }
            //     }
            //     $('.addToCartBtn').click(function(e) {
            //         e.preventDefault();

            //         var product_id = $(this).closest('.product_data').find('.prod_id').val();
            //         var product_qty = $(this).closest('.product_data').find('.qty-input').val();

            //         $.ajaxSetup({
            //             headers: {
            //                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            //             }
            //         });

            //         $.ajax({
            //             method: "POST",
            //             url: "/add-to-cart",
            //             data: {
            //                 'product_id': product_id,
            //                 'product_qty': product_qty,
            //             },
            //             success: function(response) {
            //                 console.log(response); // Log the entire response to the console

            //                 if (response && response.status) {
            //                     swal(response.status, {
            //                         icon: "success",
            //                     });
            //                 } else {
            //                     alert("Response status is undefined or null");
            //                 }
            //             },
            //             error: function(xhr, status, error) {
            //                 console.error("Error in AJAX request:", error);
            //                 alert("Error in AJAX request. Check console for details.");
            //             }
            //         });
            //     });
            // });
            $(document).ready(function() {
                initQuantity();

                function initQuantity() {
                    $(".plus").on('click', function() {
                        var number = parseInt($(".test").val());
                        $(".test").attr('value', number + 1);
                    });

                    $(".minus").on('click', function() {
                        var number = parseInt($(".test").val());
                        if (number > 1) {
                            $(".test").attr('value', number - 1);
                        } else {
                            $(".test").val(1);
                        }
                    });

                }

                $('.addToCartBtn').click(function(e) {
                    e.preventDefault();

                    //var product_id = $(this).closest('.product_data').find('.prod_id').val();
                    //var product_qty = $(this).closest('.product_data').find('.qty-input').val();
                    var product_id = $('.prod_id').val();
                    var product_qty = $('.test').val();
                    var token = $('#csrf_token').val();
                    // alert(product_qty);
                    // $.ajaxSetup({
                    //     headers: {
                    //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    //     }
                    // });
                    $.ajax({
                        method: "POST",
                        url: "/add-to-cart",
                        data: {
                            'product_id': product_id,
                            'product_qty': product_qty,
                            '_token': token,
                        },
                        success: function(response) {
                            console.log("hrllo " + response);

                            if (response && response.status) {
                                window.location.reload();
                                swal(response.status, {
                                    icon: "success",
                                });
                            } else {
                                alert("Unexpected response format. Check console for details.");
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error("Error in AJAX request:", error);
                            console.log(xhr.responseText); // Log the detailed error response
                            alert("Error in AJAX request. Check console for details.");
                        },
                        complete: function(xhr, status) {
                            console.log(xhr);
                            console.log(status);
                        }
                    });
                });
            });
        </script>
    @endsection
