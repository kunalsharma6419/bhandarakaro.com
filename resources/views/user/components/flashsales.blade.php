<div class="bg-white">
    <div class="container">
        <div class="pt-4 pb-2 title d-flex align-items-center">
            <h5 class="m-0">Flash Sales</h5>
            <a class="fw-bold ms-auto" href="{{ url('menu') }}">View all <i class="feather-chevrons-right"></i></a>
        </div>
    </div>
    <!-- flash Sales -->
    <div class="flash_container_main container">
        <div class="shopping_item_container container">
            <div class="row">
                @foreach ($flashdeals as $flashdeal)
                    <div class="col-lg-3 shopping_item col-sm-6" style="margin-bottom: 40px;">
                        <div class="deal_container">
                            <p class="deal_container_heading">Deal of the Day</p>
                            <div class="deal_countdown_container">
                                <div class="deal_container_item">
                                    @php
                                        // Extract hours, minutes, and seconds from the deal_time
                                        [$hours, $minutes, $seconds] = explode(':', $flashdeal->deal_time);
                                    @endphp
                                    <div class="deal_container_item_hours_heading">
                                        <p>{{ $hours }}</p>
                                    </div>
                                    <div class="deal_container_item_min_heading">
                                        <p>hour</p>
                                    </div>
                                </div>
                                <div class="deal_container_item">
                                    <div class="deal_container_item_hours_heading">
                                        <p>{{ $minutes }}</p>
                                    </div>
                                    <div class="deal_container_item_min_heading">
                                        <p>min</p>
                                    </div>
                                </div>
                                <div class="deal_container_item">
                                    <div class="deal_container_item_hours_heading">
                                        <p>{{ $seconds }}</p>
                                    </div>
                                    <div class="deal_container_item_min_heading">
                                        <p>sec</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shopping_item_image">
                            <a href="{{ route('foodproductdetail', $flashdeal->foodProduct->id) }}"><img
                                    src="foodproductImage/{{ $flashdeal->foodProduct->image[0] }}" alt=""
                                    width="300" height="162" /></a>
                        </div>
                        <div class="shopping_item_detail">
                            <div class="shopping_item_name_des">
                                <div class="shopping_item_name">
                                    <p>{{ $flashdeal->foodProduct->name }}</p>
                                    @php
                                        // Calculate the discounted price
                                        $discountedPrice = $flashdeal->foodProduct->price - ($flashdeal->foodProduct->price * $flashdeal->foodProduct->offer->offer_discount_percent) / 100;
                                    @endphp
                                    <h5 class="discount">₹{{ number_format($discountedPrice, 2) }}</h5>
                                    <h6 class="price" style="text-decoration: line-through; color:red;">
                                        ₹{{ $flashdeal->foodProduct->price }}</h6>
                                    <span
                                        class="descount_perc">-{{ $flashdeal->foodProduct->offer->offer_discount_percent }}%</span>
                                </div>
                                <div class="shopping_item_des">
                                    <p>{{ $flashdeal->foodProduct->description }}</p>
                                </div>
                            </div>
                            <div class="shopping_item_name_des">
                                {{-- <div class="shopping_item_star">
                                    <span><img src="{{ asset('BhandaraKaro/images/star.png') }}"
                                            alt="" /></span><span><img
                                            src="{{ asset('BhandaraKaro/images/star.png') }}"
                                            alt="" /></span><span><img
                                            src="{{ asset('BhandaraKaro/images/star.png') }}"
                                            alt="" /></span><span><img
                                            src="{{ asset('BhandaraKaro/images/star.png') }}"
                                            alt="" /></span><span><img
                                            src="{{ asset('BhandaraKaro/images/star.png') }}" alt="" /></span>
                                </div> --}}
                                <div class="shopping_item_rate">
                                    <div class="list-card-badge"> <a
                                            href="{{ route('foodproductdetail', $flashdeal->foodProduct->id) }}"><span
                                                class="btn btn-outline-primary">View More</span></a> <small></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                {{-- <div class="col-lg-3 shopping_item col-sm-6">
                    <div class="deal_container">
                        <p class="deal_container_heading">Deal of the Day</p>
                        <div class="deal_countdown_container">
                            <div class="deal_container_item">
                                <div class="deal_container_item_hours_heading">
                                    <p>12</p>
                                </div>
                                <div class="deal_container_item_min_heading">
                                    <p>hour</p>
                                </div>
                            </div>
                            <div class="deal_container_item">
                                <div class="deal_container_item_hours_heading">
                                    <p>43</p>
                                </div>
                                <div class="deal_container_item_min_heading">
                                    <p>min</p>
                                </div>
                            </div>
                            <div class="deal_container_item">
                                <div class="deal_container_item_hours_heading">
                                    <p>12</p>
                                </div>
                                <div class="deal_container_item_min_heading">
                                    <p>sec</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="shopping_item_image">
                        <img src="{{ asset('BhandaraKaro/images/dishes/roti.png') }}" alt="" width="300"
                            height="162" />
                    </div>
                    <div class="shopping_item_detail">
                        <div class="shopping_item_name_des">
                            <div class="shopping_item_name">
                                <p>Roti</p>
                            </div>
                            <div class="shopping_item_des">
                                <p>Served IN Bhandara and Langar</p>
                            </div>
                        </div>
                        <div class="shopping_item_name_des">
                            <div class="shopping_item_star">
                                <span><img src="{{ asset('BhandaraKaro/images/star.png') }}"
                                        alt="" /></span><span><img
                                        src="{{ asset('BhandaraKaro/images/star.png') }}"
                                        alt="" /></span><span><img
                                        src="{{ asset('BhandaraKaro/images/star.png') }}"
                                        alt="" /></span><span><img
                                        src="{{ asset('BhandaraKaro/images/star.png') }}"
                                        alt="" /></span><span><img
                                        src="{{ asset('BhandaraKaro/images/star.png') }}" alt="" /></span>
                            </div>
                            <div class="shopping_item_rate">
                                <span class="price">$69.98</span>
                                <span class="discount">$123.99</span>
                                <span class="descount_perc">-40%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 shopping_item col-sm-6">
                    <div class="deal_container">
                        <p class="deal_container_heading">Deal of the Day</p>
                        <div class="deal_countdown_container">
                            <div class="deal_container_item">
                                <div class="deal_container_item_hours_heading">
                                    <p>12</p>
                                </div>
                                <div class="deal_container_item_min_heading">
                                    <p>hour</p>
                                </div>
                            </div>
                            <div class="deal_container_item">
                                <div class="deal_container_item_hours_heading">
                                    <p>43</p>
                                </div>
                                <div class="deal_container_item_min_heading">
                                    <p>min</p>
                                </div>
                            </div>
                            <div class="deal_container_item">
                                <div class="deal_container_item_hours_heading">
                                    <p>12</p>
                                </div>
                                <div class="deal_container_item_min_heading">
                                    <p>sec</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="shopping_item_image">
                        <img src="{{ asset('BhandaraKaro/images/dishes/thali.png') }}" alt="" width="300"
                            height="162" />
                    </div>
                    <div class="shopping_item_detail">
                        <div class="shopping_item_name_des">
                            <div class="shopping_item_name">
                                <p>Thali</p>
                            </div>
                            <div class="shopping_item_des">
                                <p>Served IN Bhandara and Langar</p>
                            </div>
                        </div>
                        <div class="shopping_item_name_des">
                            <div class="shopping_item_star">
                                <span><img src="{{ asset('BhandaraKaro/images/star.png') }}"
                                        alt="" /></span><span><img
                                        src="{{ asset('BhandaraKaro/images/star.png') }}"
                                        alt="" /></span><span><img
                                        src="{{ asset('BhandaraKaro/images/star.png') }}"
                                        alt="" /></span><span><img
                                        src="{{ asset('BhandaraKaro/images/star.png') }}"
                                        alt="" /></span><span><img
                                        src="{{ asset('BhandaraKaro/images/star.png') }}" alt="" /></span>
                            </div>
                            <div class="shopping_item_rate">
                                <span class="price">$69.98</span>
                                <span class="discount">$123.99</span>
                                <span class="descount_perc">-40%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 shopping_item col-sm-6">
                    <div class="deal_container">
                        <p class="deal_container_heading">Deal of the Day</p>
                        <div class="deal_countdown_container">
                            <div class="deal_container_item">
                                <div class="deal_container_item_hours_heading">
                                    <p>12</p>
                                </div>
                                <div class="deal_container_item_min_heading">
                                    <p>hour</p>
                                </div>
                            </div>
                            <div class="deal_container_item">
                                <div class="deal_container_item_hours_heading">
                                    <p>43</p>
                                </div>
                                <div class="deal_container_item_min_heading">
                                    <p>min</p>
                                </div>
                            </div>
                            <div class="deal_container_item">
                                <div class="deal_container_item_hours_heading">
                                    <p>12</p>
                                </div>
                                <div class="deal_container_item_min_heading">
                                    <p>sec</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="shopping_item_image">
                        <img src="{{ asset('BhandaraKaro/images/dishes/daal.webp') }}" alt="" width="300"
                            height="162" />
                    </div>
                    <div class="shopping_item_detail">
                        <div class="shopping_item_name_des">
                            <div class="shopping_item_name">
                                <p>Daal</p>
                            </div>
                            <div class="shopping_item_des">
                                <p>Served IN Bhandara and Langar</p>
                            </div>
                        </div>
                        <div class="shopping_item_name_des">
                            <div class="shopping_item_star">
                                <span><img src="{{ asset('BhandaraKaro/images/star.png') }}"
                                        alt="" /></span><span><img
                                        src="{{ asset('BhandaraKaro/images/star.png') }}"
                                        alt="" /></span><span><img
                                        src="{{ asset('BhandaraKaro/images/star.png') }}"
                                        alt="" /></span><span><img
                                        src="{{ asset('BhandaraKaro/images/star.png') }}"
                                        alt="" /></span><span><img
                                        src="{{ asset('BhandaraKaro/images/star.png') }}" alt="" /></span>
                            </div>
                            <div class="shopping_item_rate">
                                <span class="price">$69.98</span>
                                <span class="discount">$123.99</span>
                                <span class="descount_perc">-40%</span>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <!--  -->
</div>
