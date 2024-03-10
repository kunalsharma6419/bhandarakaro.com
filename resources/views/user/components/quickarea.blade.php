<section class="quick-area">
    <div class="container-fluid">
        <div class="row">


            <div class="col-lg-6">
                <!--Signup Message After Signup-->
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            @if (session('message'))
                                <script>
                                    // Display SweetAlert when a user logs in
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Logged In!',
                                        html: '<div class="card"><div class="card-header">Dashboard</div><div class="card-body">You are logged in as {{ Auth::user()->name }}</div></div>',
                                        confirmButtonText: 'OK'
                                    });
                                </script>
                            @endif
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
                                        <a href="{{ route('locations.show', $location->id) }}">
                                            <div class="category-lists">
                                                <img src="{{ asset('/locationImage/' . $location->location_image) }}" />
                                                <h3>{{ $location->city }}</h3>
                                            </div>
                                        </a>
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
                                <img src="{{ asset('BhandaraKaro/images/city/haridwar.png') }}" />
                                <h3>Haridwar</h3>
                            </li>
                            <li>
                                <img src="{{ asset('BhandaraKaro/images/city/ayodhya.png') }}" />
                                <h3>Ayodhya</h3>
                            </li>
                            <li>
                                <img src="{{ asset('BhandaraKaro/images/city/nou devi.png') }}" />
                                <h3>Nau Devi</h3>
                            </li>
                        </ul>
                        <span>
                            <a href="{{ url('menu') }}">Book Now</a>
                            {{-- <a href="{{ route('user.register') }}">Register Now</a> --}}
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
