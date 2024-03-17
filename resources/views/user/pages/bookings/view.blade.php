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
    <section class="py-4 osahan-main-body">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-3">
                    <div class="card">
                        <div class="card-header bg-primary">
                            <h4 class="text-white">Booking View</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label class="form-label font-weight-bold small">Full Name</label>
                                            <div class="border p-2">{{ $bookings->full_name }}</div>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label class="form-label font-weight-bold small">Email</label>
                                            <div class="border p-2">{{ $bookings->email }}</div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label class="form-label font-weight-bold small">Phone</label>
                                            <div class="border p-2">{{ $bookings->phone }}</div>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label class="form-label font-weight-bold small">User
                                                Address</label>
                                            <div class="border p-2">{{ $bookings->user_address }}</div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label class="form-label font-weight-bold small">Booking Temple
                                                Name</label>
                                            <div class="border p-2">{{ $bookings->booking_temple_name }}</div>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label class="form-label font-weight-bold small">Booking Temple
                                                Address</label>
                                            <div class="border p-2">{{ $bookings->booking_temple_address }}</div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label class="form-label font-weight-bold small">Country</label>
                                            <div class="border p-2">{{ $bookings->country }}</div>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label class="form-label font-weight-bold small">State</label>
                                            <div class="border p-2">{{ $bookings->state }}</div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label class="form-label font-weight-bold small">City</label>
                                            <div class="border p-2">{{ $bookings->city }}</div>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label class="form-label font-weight-bold small">Pincode</label>
                                            <div class="border p-2">{{ $bookings->pincode }}</div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label class="form-label font-weight-bold small">Booking
                                                Date</label>
                                            <div class="border p-2">
                                                {{ \Carbon\Carbon::parse($bookings->booking_date)->isoFormat('Do MMM YYYY') }}
                                            </div>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label class="form-label font-weight-bold small">Booking
                                                Time</label>
                                            <div class="border p-2">
                                                {{ \Carbon\Carbon::parse($bookings->booking_time)->format('h:i A') }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Quantity</th>
                                                <th>Price</th>
                                                <th>Image</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($bookings->bookingitems as $booking)
                                                <tr>
                                                    <td>{{ $booking->foodproducts->name }}</td>
                                                    <td>{{ $booking->qty }}</td>
                                                    <td>{{ $booking->price }}</td>
                                                    <td class="text-center">
                                                        <img src="{{ asset('foodproductImage/' . $booking->foodproducts->image[1]) }}"
                                                            class="align-self-center mb-3"
                                                            alt="{{ $booking->foodproducts->name }}" width="50"
                                                            height="50">
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <h4 align="right">Grand Total : ₹ {{ $bookings->total_price }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <h1 class="text-center">{{ Auth::user()->name ?? '' }}'s Bookings</h1> --}}

                </div>
            </div>
        </div>
    </section>



    @include('user.components.footer')


    @include('user.components.scripts')
@endsection
