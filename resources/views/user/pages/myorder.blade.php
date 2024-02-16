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
                <div class="col-md-3 mb-3">
                    <ul class="nav nav-tabsa custom-tabsa border-0 flex-column bg-white rounded overflow-hidden shadow-sm p-2 c-t-order"
                        id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link border-0 text-dark py-3 active" id="completed-tab" data-toggle="tab"
                                href="#completed" role="tab" aria-controls="completed" aria-selected="true">
                                <i class="feather-check mr-2 text-success mb-0"></i> Completed</a>
                        </li>
                        <li class="nav-item border-top" role="presentation">
                            <a class="nav-link border-0 text-dark py-3" id="progress-tab" data-toggle="tab" href="#progress"
                                role="tab" aria-controls="progress" aria-selected="false">
                                <i class="feather-clock mr-2 text-warning mb-0"></i> On Progress</a>
                        </li>
                        <li class="nav-item border-top" role="presentation">
                            <a class="nav-link border-0 text-dark py-3" id="canceled-tab" data-toggle="tab" href="#canceled"
                                role="tab" aria-controls="canceled" aria-selected="false">
                                <i class="feather-x-circle mr-2 text-danger mb-0"></i> Canceled</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content col-md-9" id="myTabContent">
                    <div class="tab-pane fade show active" id="completed" role="tabpanel" aria-labelledby="completed-tab">
                        <div class="order-body">
                            <div class="pb-3">
                                <div class="p-3 rounded shadow-sm bg-white">
                                    <div class="d-flex border-bottom pb-3 align-items-center">
                                        <div class="text-muted mr-3">
                                            <img alt="#" src="{{ asset('BhandaraKaro/images/menu/27.png') }}"
                                                class="img-fluid order_img rounded">
                                        </div>
                                        <div class="flex-grow-1 pl-3">
                                            <p class="mb-0 font-weight-bold"><a href="restaurant.html"
                                                    class="text-dark">Conrad Chicago Restaurant</a></p>
                                            <p class="mb-0">Punjab, India</p>
                                            <p>ORDER #321DERS</p>
                                            <p class="mb-0 small"><a href="status_complete.html">View Details</a></p>
                                        </div>
                                        <div class="ml-auto text-right">
                                            <p class="bg-success text-white py-1 px-2 rounded small mb-1">Delivered</p>
                                            <p class="small font-weight-bold"><i class="feather-clock"></i> 06/04/2020</p>
                                        </div>
                                    </div>

                                    <div class="d-flex pt-3">
                                        <div class="flex-grow-1">
                                            <div class="small">
                                                <p class="text- font-weight-bold mb-0">Kesar Sweet x 1</p>
                                                <p class="text- font-weight-bold mb-0">Gulab Jamun x 4</p>
                                            </div>
                                        </div>
                                        <div class="text-muted ml-auto mr-3 small">
                                            <p class="m-0 font-weight-bold text-right">Total Payment</p>
                                            <p class="text-dark font-weight-bold">$12.74</p>
                                        </div>
                                        <div class="text-right">
                                            <a href="checkout.html" class="btn btn-primary px-3">Reorder</a>
                                            <a href="contact-us.html" class="btn btn-outline-primary px-3">Help</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="pb-3">
                                <div class="p-3 rounded shadow-sm bg-white">
                                    <div class="d-flex border-bottom pb-3 align-items-center">
                                        <div class="text-muted mr-3">
                                            <img alt="#" src="{{ asset('BhandaraKaro/images/menu/27.png') }}"
                                                class="img-fluid order_img rounded">
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0 font-weight-bold"><a href="restaurant.html"
                                                    class="text-dark">Conrad Chicago Restaurant</a></p>
                                            <p class="mb-0">Punjab, India</p>
                                            <p>ORDER #321DERS</p>
                                            <p class="mb-0 small"><a href="status_complete.html">View Details</a></p>
                                        </div>
                                        <div class="ml-auto text-right">
                                            <p class="bg-success text-white py-1 px-2 rounded small mb-1">Delivered</p>
                                            <p class="small font-weight-bold"><i class="feather-clock"></i> 06/04/2020</p>
                                        </div>
                                    </div>
                                    <div class="d-flex pt-3">
                                        <div class="flex-grow-1">
                                            <div class="small">
                                                <p class="text- font-weight-bold mb-0">Kesar Sweet x 1</p>
                                                <p class="text- font-weight-bold mb-0">Gulab Jamun x 4</p>
                                            </div>
                                        </div>
                                        <div class="text-muted ml-auto mr-3 small">
                                            <p class="m-0 font-weight-bold text-right">Total Payment</p>
                                            <p class="text-dark font-weight-bold">$12.74</p>
                                        </div>
                                        <div class="text-right">
                                            <a href="checkout.html" class="btn btn-primary px-3">Reorder</a>
                                            <a href="contact-us.html" class="btn btn-outline-primary px-3">Help</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="progress" role="tabpanel" aria-labelledby="progress-tab">
                        <div class="order-body">
                            <div class="pb-3">
                                <div class="p-3 rounded shadow-sm bg-white">
                                    <div class="d-flex border-bottom pb-3 align-items-center">
                                        <div class="text-muted mr-3">
                                            <img alt="#" src="{{ asset('BhandaraKaro/images/menu/27.png') }}"
                                                class="img-fluid order_img rounded">
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0 font-weight-bold"><a href="restaurant.html"
                                                    class="text-dark">Conrad Chicago Restaurant</a></p>
                                            <p class="mb-0">Punjab, India</p>
                                            <p>ORDER #321DERS</p>
                                            <p class="mb-0 small"><a href="status_complete.html">View Details</a></p>
                                        </div>
                                        <div class="ml-auto text-right">
                                            <p class="bg-success text-white py-1 px-2 rounded small mb-1">Delivered</p>
                                            <p class="small font-weight-bold"><i class="feather-clock"></i> 06/04/2020</p>
                                        </div>
                                    </div>
                                    <div class="d-flex pt-3">
                                        <div class="flex-grow-1">
                                            <div class="small">
                                                <p class="text- font-weight-bold mb-0">Kesar Sweet x 1</p>
                                                <p class="text- font-weight-bold mb-0">Gulab Jamun x 4</p>
                                            </div>
                                        </div>
                                        <div class="text-muted ml-auto mr-3 small">
                                            <p class="m-0 font-weight-bold text-right">Total Payment</p>
                                            <p class="text-dark font-weight-bold">$12.74</p>
                                        </div>
                                        <div class="text-right">
                                            <a href="checkout.html" class="btn btn-primary px-3">Reorder</a>
                                            <a href="contact-us.html" class="btn btn-outline-primary px-3">Help</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pb-3">
                                <div class="p-3 rounded shadow-sm bg-white">
                                    <div class="d-flex border-bottom pb-3 align-items-center">
                                        <div class="text-muted mr-3">
                                            <img alt="#" src="{{ asset('BhandaraKaro/images/menu/27.png') }}"
                                                class="img-fluid order_img rounded">
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0 font-weight-bold"><a href="restaurant.html"
                                                    class="text-dark">Conrad Chicago Restaurant</a></p>
                                            <p class="mb-0">Punjab, India</p>
                                            <p>ORDER #321DERS</p>
                                            <p class="mb-0 small"><a href="status_complete.html">View Details</a></p>
                                        </div>
                                        <div class="ml-auto text-right">
                                            <p class="bg-success text-white py-1 px-2 rounded small mb-1">Delivered</p>
                                            <p class="small font-weight-bold"><i class="feather-clock"></i> 06/04/2020</p>
                                        </div>
                                    </div>
                                    <div class="d-flex pt-3">
                                        <div class="flex-grow-1">
                                            <div class="small">
                                                <p class="text- font-weight-bold mb-0">Kesar Sweet x 1</p>
                                                <p class="text- font-weight-bold mb-0">Gulab Jamun x 4</p>
                                            </div>
                                        </div>
                                        <div class="text-muted ml-auto mr-3 small">
                                            <p class="m-0 font-weight-bold text-right">Total Payment</p>
                                            <p class="text-dark font-weight-bold">$12.74</p>
                                        </div>
                                        <div class="text-right">
                                            <a href="checkout.html" class="btn btn-primary px-3">Reorder</a>
                                            <a href="contact-us.html" class="btn btn-outline-primary px-3">Help</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pb-3">
                                <div class="p-3 rounded shadow-sm bg-white">
                                    <div class="d-flex border-bottom pb-3 align-items-center">
                                        <div class="text-muted mr-3">
                                            <img alt="#" src="{{ asset('BhandaraKaro/images/menu/27.png') }}"
                                                class="img-fluid order_img rounded">
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0 font-weight-bold"><a href="restaurant.html"
                                                    class="text-dark">Conrad Chicago Restaurant</a></p>
                                            <p class="mb-0">Punjab, India</p>
                                            <p>ORDER #321DERS</p>
                                            <p class="mb-0 small"><a href="status_complete.html">View Details</a></p>
                                        </div>
                                        <div class="ml-auto text-right">
                                            <p class="bg-success text-white py-1 px-2 rounded small mb-1">Delivered</p>
                                            <p class="small font-weight-bold"><i class="feather-clock"></i> 06/04/2020</p>
                                        </div>
                                    </div>
                                    <div class="d-flex pt-3">
                                        <div class="flex-grow-1">
                                            <div class="small">
                                                <p class="text- font-weight-bold mb-0">Kesar Sweet x 1</p>
                                                <p class="text- font-weight-bold mb-0">Gulab Jamun x 4</p>
                                            </div>
                                        </div>
                                        <div class="text-muted ml-auto mr-3 small">
                                            <p class="m-0 font-weight-bold text-right">Total Payment</p>
                                            <p class="text-dark font-weight-bold">$12.74</p>
                                        </div>
                                        <div class="text-right">
                                            <a href="checkout.html" class="btn btn-primary px-3">Reorder</a>
                                            <a href="contact-us.html" class="btn btn-outline-primary px-3">Help</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="canceled" role="tabpanel" aria-labelledby="canceled-tab">
                        <div class="order-body">
                            <div class="pb-3">
                                <div class="p-3 rounded shadow-sm bg-white">
                                    <div class="d-flex border-bottom pb-3 align-items-center">
                                        <div class="text-muted mr-3">
                                            <img alt="#" src="{{ asset('BhandaraKaro/images/menu/27.png') }}"
                                                class="img-fluid order_img rounded">
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0 font-weight-bold"><a href="restaurant.html"
                                                    class="text-dark">Conrad Chicago Restaurant</a></p>
                                            <p class="mb-0">Punjab, India</p>
                                            <p>ORDER #321DERS</p>
                                            <p class="mb-0 small"><a href="status_complete.html">View Details</a></p>
                                        </div>
                                        <div class="ml-auto text-right">
                                            <p class="bg-success text-white py-1 px-2 rounded small mb-1">Delivered</p>
                                            <p class="small font-weight-bold"><i class="feather-clock"></i> 06/04/2020</p>
                                        </div>
                                    </div>
                                    <div class="d-flex pt-3">
                                        <div class="flex-grow-1">
                                            <div class="small">
                                                <p class="text- font-weight-bold mb-0">Kesar Sweet x 1</p>
                                                <p class="text- font-weight-bold mb-0">Gulab Jamun x 4</p>
                                            </div>
                                        </div>
                                        <div class="text-muted ml-auto mr-3 small">
                                            <p class="m-0 font-weight-bold text-right">Total Payment</p>
                                            <p class="text-dark font-weight-bold">$12.74</p>
                                        </div>
                                        <div class="text-right">
                                            <a href="checkout.html" class="btn btn-primary px-3">Reorder</a>
                                            <a href="contact-us.html" class="btn btn-outline-primary px-3">Help</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pb-3">
                                <div class="p-3 rounded shadow-sm bg-white">
                                    <div class="d-flex border-bottom pb-3 align-items-center">
                                        <div class="text-muted mr-3">
                                            <img alt="#" src="{{ asset('BhandaraKaro/images/menu/27.png') }}"
                                                class="img-fluid order_img rounded">
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0 font-weight-bold"><a href="restaurant.html"
                                                    class="text-dark">Conrad Chicago Restaurant</a></p>
                                            <p class="mb-0">Punjab, India</p>
                                            <p>ORDER #321DERS</p>
                                            <p class="mb-0 small"><a href="status_complete.html">View Details</a></p>
                                        </div>
                                        <div class="ml-auto text-right">
                                            <p class="bg-success text-white py-1 px-2 rounded small mb-1">Delivered</p>
                                            <p class="small font-weight-bold"><i class="feather-clock"></i> 06/04/2020</p>
                                        </div>
                                    </div>
                                    <div class="d-flex pt-3">
                                        <div class="flex-grow-1">
                                            <div class="small">
                                                <p class="text- font-weight-bold mb-0">Kesar Sweet x 1</p>
                                                <p class="text- font-weight-bold mb-0">Gulab Jamun x 4</p>
                                            </div>
                                        </div>
                                        <div class="text-muted ml-auto mr-3 small">
                                            <p class="m-0 font-weight-bold text-right">Total Payment</p>
                                            <p class="text-dark font-weight-bold">$12.74</p>
                                        </div>
                                        <div class="text-right">
                                            <a href="checkout.html" class="btn btn-primary px-3">Reorder</a>
                                            <a href="contact-us.html" class="btn btn-outline-primary px-3">Help</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    @include('user.components.footer')


    @include('user.components.scripts')
@endsection
