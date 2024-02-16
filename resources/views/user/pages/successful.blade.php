@extends('user.layouts.app')

@section('maincontent')
    @include('user.components.header')


    @include('user.components.osahan_home')



    <div class="clearfix"></div>


    <div class="osahan-home-page">
        @include('user.components.filtermodal')

    </div>

    <div class="py-5 osahan-coming-soon d-flex justify-content-center align-items-center">
        <div class="col-md-6">
            <div class="text-center pb-3">
                <h1 class="font-weight-bold">Bhandara Karo, Your Booking has been successful</h1>
                <p>Check your order status in <a href="my_order.html"
                        class="font-weight-bold text-decoration-none text-primary">My Orders</a> about next steps
                    information.</p>
            </div>

            <div class="bg-white rounded text-center p-4 shadow-sm">
                <h1 class="display-1 mb-4">🎉</h1>
                <h6 class="font-weight-bold mb-2">Preparing your order</h6>
                <p class="small text-muted">Your order will be prepared and will come soon</p>
                <a href="status_onprocess.html" class="btn rounded btn-primary btn-lg btn-block">Track My Order</a>
            </div>
        </div>
    </div>

    @include('user.components.osahanmenufooter')


    <div class="clearfix"></div>


    @include('user.components.footer')


    @include('user.components.scripts')
@endsection
