<section class="quick-area">
    <div class="container-fluid">
        <div class="row">


            <div class="col-lg-6">
                <!--Signup Message After Signup-->
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">Dashboard</div>
                                <div class="card-body">
                                    @if (session('message'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('message') }}
                                        </div>
                                    @endif
                                    You are logged in!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Signup Message After Signup-->
                <div class="quick-box-right">
                    <div class="all-category">
                        <h2>Locations for Your First Bhandara</h2>
                        <div class="catlist-box">
                            <div class="row">
                                @foreach ($locations as $location)
                                    <div class="col-lg-3 catcol">
                                        <div class="category-lists">
                                            <img src="{{ asset('/locationImage/' . $location->location_image) }}" />
                                            <h3>{{ $location->city }}</h3>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="quick-box">
                    <div class="quick-deliver">
                        <h2>Book Your<br><b>Bhandara</b> from <br>Anywhere to Everywhere</h2>
                        <p>No Matter Where You are, You Can Book Your Bhandara at your convenience.
                        </p>
                        <ul>
                            <li>
                                <img src="{{ asset('BhandaraKaro/images/city/image 9.png') }}" />
                                <h3>Tirupati</h3>
                            </li>
                            <li>
                                <img src="{{ asset('BhandaraKaro/images/city/image 10.png') }}" />
                                <h3>Badrinath</h3>
                            </li>
                            <li>
                                <img src="{{ asset('BhandaraKaro/images/city/image 11.png') }}" />
                                <h3>Amritsar</h3>
                            </li>
                        </ul>
                        <span>
                            <a href="{{ url('menu') }}">Book Now</a>
                            <a href="{{ route('user.register') }}">Register Now</a>
                        </span>
                    </div>
                    <div class="shop-category"><img
                            src="{{ asset('BhandaraKaro/images/Brahmins-1-600x460-removebg.png') }}" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
