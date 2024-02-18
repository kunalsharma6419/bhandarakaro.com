<footer class="section-footer border-top bg-dark">
    <div class="container">
        <div class="footer-top padding-y py-5">
            <div class="row">

                <aside class="col-sm-3 col-md-3 text-white ftrcat">
                    <h6 class="title">Our Category</h6>
                    <ul class="list-unstyled hov_footer ftrlist">
                        @foreach ($categories as $category)
                            <li><a href="#" class="text-muted">{{ $category->category_name }}</a></li>
                        @endforeach
                    </ul>

                </aside>
                <aside class="col-sm-2 col-md-2 text-white ftrcat">
                    <h6 class="title">Quick Links</h6>
                    <ul class="list-unstyled hov_footer">
                        <li><a href="#" class="text-muted">Bhandara Services</a></li>
                        <li><a href="#" class="text-muted">Venue Options</a></li>
                        <li><a href="#" class="text-muted">Traditional Offerings</a></li>
                        <li><a href="#" class="text-muted">Cultural Accessories</a></li>
                        <li><a href="#" class="text-muted">Service Details</a></li>
                        <li><a href="#" class="text-muted">Booking Terms</a></li>
                        <li><a href="#" class="text-muted">Privacy & Guidelines</a></li>
                    </ul>

                </aside>
                <aside class="col-sm-2 col-md-2 text-white ftrcat">
                    <h6 class="title">Help</h6>
                    <ul class="list-unstyled hov_footer">
                        <li><a href="#" class="text-muted">Event Venue Information</a></li>
                        <li><a href="#" class="text-muted">Bhandara Arrangements FAQs</a></li>
                        <li><a href="#" class="text-muted">Get in Touch for Bookings</a></li>
                        <li><a href="#" class="text-muted">Request Specific Offerings</a></li>
                        <li><a href="#" class="text-muted">Refund & Cancellation Policy</a></li>
                        <li><a href="#" class="text-muted">Retailer Partnership Opportunities</a></li>
                    </ul>

                </aside>
                <aside class="col-sm-2 col-md-2 text-white ftrcat">
                    <h6 class="title">For Participants</h6>
                    <ul class="list-unstyled hov_footer">
                        <li><a href="#" class="text-muted">Participant Login</a></li>
                        <li><a href="#" class="text-muted">Participant Registration</a></li>
                        <li><a href="#" class="text-muted">Password Recovery</a></li>
                        <li><a href="#" class="text-muted">Profile Settings</a></li>
                    </ul>

                </aside>
                <aside class="col-sm-2 col-md-2 text-white ftrcat">
                    <h6 class="title">More Pages</h6>
                    <ul class="list-unstyled hov_footer">
                        <li><a href="#" class="text-muted">Bhandara Highlights</a></li>
                        <li><a href="#" class="text-muted">Top Picks</a></li>
                        <li><a href="#" class="text-muted">Venue Information</a></li>
                        <li><a href="#" class="text-muted">Preferred Choices</a></li>
                    </ul>

                </aside>
            </div>
        </div>
    </div>
    <div class="footer-copyright border-top py-3 bg-light">
        <div class="container d-flex align-items-center copyright">
            <p class="mb-0">© 2024 www.bhandarakaro.com All rights reserved.</p>
            <p class="text-muted mb-0 ms-auto d-flex align-items-center"> <a href="#" class="d-block"><img
                        alt="#" src="BhandaraKaro/NewHome/public/img/appstore.png" height="40"></a> <a
                    href="#" class="d-block ms-3"><img alt="#"
                        src="{{ asset('BhandaraKaro/NewHome/public/img/playmarket.png') }}" height="40"></a> </p>
        </div>
    </div>
</footer>
<nav id="main-nav">
    <ul class="second-nav">
        <li><a href="{{ url('/') }}"><i class="feather-home me-2"></i>Home</a></li>
        <li><a href="#"><i class="feather-list me-2"></i>About Us</a></li>
        {{-- <li><a href="#"><i class="feather-list me-2"></i>Bookings</a></li> --}}
        <li><a href="#"><i class="feather-list me-2"></i>Our Story</a></li>
        {{-- <li><a href="#"><i class="feather-list me-2"></i>Bhandaras</a></li> --}}
        <li><a href="https://api.whatsapp.com/send?phone=919650815489"><i class="feather-list me-2"></i>Contact Us</a>
        </li>
        {{-- <li><a href="{{ route('login') }}"><i class="feather-list me-2"></i>Bhandara Admin</a></li> --}}
    </ul>
    </ul>
    <ul class="bottom-nav">
        <li class="email"> <a class="text-danger" href="{{ url('/') }}">
                <p class="h5 m-0"><i class="feather-home text-danger"></i></p>
                Home
            </a> </li>
        <li class="github"> <a href="#">
                <p class="h5 m-0"><i class="feather-message-circle"></i></p>
                FAQ
            </a> </li>
        <li class="ko-fi"> <a href="https://api.whatsapp.com/send?phone=919650815489">
                <p class="h5 m-0"><i class="feather-phone"></i></p>
                Help
            </a> </li>
    </ul>
</nav>
{{-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Filter</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body p-0">
                <div class="osahan-filter">
                    <div class="filter">
                        <div class="p-3 bg-light border-bottom">
                            <h6 class="m-0">SORT BY</h6>
                        </div>
                        <div class="border-bottom p-3">
                            <div class="form-check form-check-reverse m-0">
                                <input class="form-check-input" type="radio" name="exampleRadios"
                                    id="customRadios1" value="option1" checked>
                                <label class="form-check-label text-start w-100" for="customRadios1"> Top Rated
                                </label>
                            </div>
                        </div>
                        <div class="border-bottom p-3">
                            <div class="form-check form-check-reverse m-0">
                                <input class="form-check-input" type="radio" name="exampleRadios"
                                    id="customRadios2" value="option2">
                                <label class="form-check-label text-start w-100" for="customRadios2"> Nearest Me
                                </label>
                            </div>
                        </div>
                        <div class="border-bottom p-3">
                            <div class="form-check form-check-reverse m-0">
                                <input class="form-check-input" type="radio" name="exampleRadios"
                                    id="customRadios3" value="option3">
                                <label class="form-check-label text-start w-100" for="customRadios3"> Cost High
                                    to Low </label>
                            </div>
                        </div>
                        <div class="border-bottom p-3">
                            <div class="form-check form-check-reverse m-0">
                                <input class="form-check-input" type="radio" name="exampleRadios"
                                    id="customRadios4" value="option4">
                                <label class="form-check-label text-start w-100" for="customRadios4"> Cost Low
                                    to High </label>
                            </div>
                        </div>
                        <div class="border-bottom p-3">
                            <div class="form-check form-check-reverse m-0">
                                <input class="form-check-input" type="radio" name="exampleRadios"
                                    id="customRadios5" value="option5">
                                <label class="form-check-label text-start w-100" for="customRadios5"> Most
                                    Popular </label>
                            </div>
                        </div>
                        <div class="p-3 bg-light border-bottom">
                            <h6 class="m-0">FILTER</h6>
                        </div>
                        <div class="border-bottom p-3">
                            <div class="form-check form-check-reverse m-0">
                                <input class="form-check-input" type="checkbox" value id="defaultCheck1" checked>
                                <label class="form-check-label text-start w-100" for="defaultCheck1"> Open Now
                                </label>
                            </div>
                        </div>
                        <div class="border-bottom p-3">
                            <div class="form-check form-check-reverse m-0">
                                <input class="form-check-input" type="checkbox" value id="defaultCheck2">
                                <label class="form-check-label text-start w-100" for="defaultCheck2"> Credit
                                    Cards </label>
                            </div>
                        </div>
                        <div class="border-bottom p-3">
                            <div class="form-check form-check-reverse m-0">
                                <input class="form-check-input" type="checkbox" value id="defaultCheck3">
                                <label class="form-check-label text-start w-100" for="defaultCheck3">
                                    Bhandaras
                                    Served </label>
                            </div>
                        </div>
                        <div class="p-3 bg-light border-bottom">
                            <h6 class="m-0">ADDITIONAL FILTERS</h6>
                        </div>
                        <div class="px-3 pt-3">
                            <input type="range" class="form-range" min="0" max="5" step="0.5">
                            <div class="row mb-3">
                                <div class="col-6">
                                    <label>Min</label>
                                    <input class="form-control" placeholder="$0" type="number">
                                </div>
                                <div class="col-6 text-end">
                                    <label>Max</label>
                                    <input class="form-control" placeholder="$1,0000" type="number">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer p-0 border-0">
                <div class="col-6 m-0 p-0">
                    <button type="button" class="btn border-top btn-lg w-100" data-bs-dismiss="modal">Close</button>
                </div>
                <div class="col-6 m-0 p-0">
                    <button type="button" class="btn btn-primary btn-lg w-100">Apply</button>
                </div>
            </div>
        </div>
    </div>
</div> --}}


<div class="whatsappchat">
    <a href="https://api.whatsapp.com/send?phone=919650815489" target="_blank">
        <img src="{{ asset('BhandaraKaro/NewHome/public/img/whatsapp.png') }}">
    </a>
</div>
