<header class="section-header">
    <section class="header-main shadow-sm bg-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-1">
                    <div class="mainlogo">
                        <a href="{{ url('/') }}" class="brand-wrap mb-0"> <img
                                src="{{ asset('BhandaraKaro/images/LOGO1.png') }}">
                        </a>
                    </div>
                </div>
                <div class="col-3 d-flex align-items-center m-none locbox">
                    <div class="dropdown me-3"> <a class="text-dark dropdown-toggle d-flex align-items-center py-3"
                            href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <div><i class="feather-map-pin me-2 bg-light rounded-pill p-2 icofont-size"></i></div>
                            <div id="selectedLocation">{{ $defaultLocation ?? 'Delhi NCR' }}</div>
                        </a>
                        <div class="dropdown-menu p-0 drop-loc">
                            <div class="osahan-country">
                                <div class="filter">
                                    <form id="locationSearchForm">
                                        @csrf
                                        <div class="form-group">
                                            <label for="location">Location:</label>
                                            <input type="text" class="form-control" id="location" name="location"
                                                placeholder="Type to search...">
                                        </div>
                                    </form>

                                    <div id="suggestionResults"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-8">
                    <div class="d-flex align-items-center justify-content-end pe-5"> <a href="{{ url('search') }}"
                            class="widget-header me-4 text-dark">
                            <div class="icon d-flex align-items-center"> <i class="feather-search h6 me-2 mb-0"></i>
                                <span>Search</span>
                            </div>
                        </a> <a href="{{ url('search-temple') }}"
                            class="widget-header me-4 text-white btn bg-primary m-none">
                            <div class="icon d-flex align-items-center"> <i class="feather-disc h6 me-2 mb-0"></i>
                                <span>Temples</span>
                            </div>
                        </a>



                        @if (Route::has('login'))
                            @auth
                                <div class="dropdown me-4 m-none">
                                    <a href="#" class="dropdown-toggle text-dark py-3 d-block" id="dropdownMenuButton"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img
                                            alt="#" src="../BhandaraKaro/images/LOGO1.png"
                                            class="img-fluid rounded-circle header-user me-2 header-user">{{ Auth::user()->name ?? '' }}</a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="{{ url('/redirect') }}">Dashboard</a>
                                        <a class="dropdown-item" href="{{ url('/user/profile') }}">My account</a>
                                        {{-- <a class="dropdown-item" href="#">Delivery support</a>
                                        <a class="dropdown-item" href="#">Contant us</a>
                                        <a class="dropdown-item" href="#">Term of use</a>
                                        <a class="dropdown-item" href="#">Privacy policy</a> --}}

                                        <div></div>
                                    </div>
                                </div>
                            @else
                                <a href="{{ route('user.login') }}" class="widget-header me-4 text-dark m-none ">
                                    <div class="icon d-flex align-items-center"> <i class="feather-user h6 me-2 mb-0"></i>
                                        <span>Sign in</span>
                                    </div>
                                </a>
                            @endauth
                        @endif


                        <!--            <a href="#" class="btn btn-outline-primary mx-2  ">{ { Auth::user()->name } }</a> -->


                        <a href="{{ url('cart') }}" class="widget-header me-4 text-dark">
                            <div class="icon d-flex align-items-center">
                                <i class="feather-shopping-cart h6 me-2 mb-0"></i>
                                <span>Cart</span>
                                <span id="cart-count-badge" class="badge bg-primary"></span>
                            </div>
                        </a>
                        <a class="toggle" href="#"> <span></span> </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</header>
