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
                        <div class="card-header">
                            <h4>My Bookings</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Tracking Number</th>
                                        <th>Total Price</th>
                                        <th>Status</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($bookings as $booking)
                                        <tr>
                                            <td>{{ $booking->tracking_no }}</td>
                                            <td>₹ {{ $booking->total_price }}</td>
                                            <td>{{ $booking->status == '0' ? 'pending' : 'completed' }}</td>
                                            <td class="text-center">
                                                <a href="{{ url('view-booking/' . $booking->tracking_no) }}"
                                                    class="btn btn-primary">View</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
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
