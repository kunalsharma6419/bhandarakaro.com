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
    <div class="container position-relative">
        <div class="py-5 osahan-profile row">
            <div class="col-md-4 mb-3">
                <div class="bg-white rounded shadow-sm sticky_sidebar overflow-hidden">
                    <a href="profile.html" class="">
                        <div class="d-flex align-items-center p-3">
                            <div class="left mr-3">
                                <img alt="#" src="{{ asset('BhandaraKaro/NewHome/img/user1.jpg') }}"
                                    class="rounded-circle">
                            </div>
                            <div class="right">
                                <h6 class="mb-1 font-weight-bold">Gurdeep Singh <i
                                        class="feather-check-circle text-success"></i></h6>
                                <p class="text-muted m-0 small"><span class="__cf_email__"
                                        data-cfemail="137a727e7c60727b727d53747e727a7f3d707c7e">[email&#160;protected]</span>
                                </p>
                            </div>
                        </div>
                    </a>
                    <div class="osahan-credits d-flex align-items-center p-3 bg-light">
                        <p class="m-0">Accounts Credits</p>
                        <h5 class="m-0 ml-auto text-primary">$52.25</h5>
                    </div>

                    <div class="bg-white profile-details">
                        <a data-toggle="modal" data-target="#paycard"
                            class="d-flex w-100 align-items-center border-bottom p-3">
                            <div class="left mr-3">
                                <h6 class="font-weight-bold mb-1 text-dark">Payment Cards</h6>
                                <p class="small text-muted m-0">Add a credit or debit card</p>
                            </div>
                            <div class="right ml-auto">
                                <h6 class="font-weight-bold m-0"><i class="feather-chevron-right"></i></h6>
                            </div>
                        </a>
                        <a data-toggle="modal" data-target="#exampleModal"
                            class="d-flex w-100 align-items-center border-bottom p-3">
                            <div class="left mr-3">
                                <h6 class="font-weight-bold mb-1 text-dark">Address</h6>
                                <p class="small text-muted m-0">Add or remove a delivery address</p>
                            </div>
                            <div class="right ml-auto">
                                <h6 class="font-weight-bold m-0"><i class="feather-chevron-right"></i></h6>
                            </div>
                        </a>
                        <a class="d-flex align-items-center border-bottom p-3" data-toggle="modal"
                            data-target="#inviteModal">
                            <div class="left mr-3">
                                <h6 class="font-weight-bold mb-1">Refer Friends</h6>
                                <p class="small text-primary m-0">Get $10.00 FREE</p>
                            </div>
                            <div class="right ml-auto">
                                <h6 class="font-weight-bold m-0"><i class="feather-chevron-right"></i></h6>
                            </div>
                        </a>
                        <a href="faq.html" class="d-flex w-100 align-items-center border-bottom px-3 py-4">
                            <div class="left mr-3">
                                <h6 class="font-weight-bold m-0 text-dark"><i
                                        class="feather-truck bg-danger text-white p-2 rounded-circle mr-2"></i> Bhandara
                                    Support</h6>
                            </div>
                            <div class="right ml-auto">
                                <h6 class="font-weight-bold m-0"><i class="feather-chevron-right"></i></h6>
                            </div>
                        </a>
                        <a href="contact-us.html" class="d-flex w-100 align-items-center border-bottom px-3 py-4">
                            <div class="left mr-3">
                                <h6 class="font-weight-bold m-0 text-dark"><i
                                        class="feather-phone bg-primary text-white p-2 rounded-circle mr-2"></i> Contact
                                </h6>
                            </div>
                            <div class="right ml-auto">
                                <h6 class="font-weight-bold m-0"><i class="feather-chevron-right"></i></h6>
                            </div>
                        </a>
                        <a href="terms.html" class="d-flex w-100 align-items-center border-bottom px-3 py-4">
                            <div class="left mr-3">
                                <h6 class="font-weight-bold m-0 text-dark"><i
                                        class="feather-info bg-success text-white p-2 rounded-circle mr-2"></i> Term of use
                                </h6>
                            </div>
                            <div class="right ml-auto">
                                <h6 class="font-weight-bold m-0"><i class="feather-chevron-right"></i></h6>
                            </div>
                        </a>
                        <a href="privacy.html" class="d-flex w-100 align-items-center px-3 py-4">
                            <div class="left mr-3">
                                <h6 class="font-weight-bold m-0 text-dark"><i
                                        class="feather-lock bg-warning text-white p-2 rounded-circle mr-2"></i> Privacy
                                    policy</h6>
                            </div>
                            <div class="right ml-auto">
                                <h6 class="font-weight-bold m-0"><i class="feather-chevron-right"></i></h6>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-8 mb-3">
                <div class="rounded shadow-sm">
                    <div class="osahan-cart-item-profile bg-white rounded shadow-sm p-4">
                        <div class="flex-column">
                            <h6 class="font-weight-bold">Tell us about yourself</h6>
                            <p class="text-muted">Whether you have questions or you would just like to say hello, contact
                                us.</p>
                            <form>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1" class="small font-weight-bold">Your Name</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        placeholder="Gurdeep Osahan">
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="exampleFormControlInput2" class="small font-weight-bold">Email
                                        Address</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput2"
                                        placeholder="iamosahan@gmail.com">
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="exampleFormControlInput3" class="small font-weight-bold">Phone
                                        Number</label>
                                    <input type="number" class="form-control" id="exampleFormControlInput3"
                                        placeholder="1-800-643-4500">
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1" class="small font-weight-bold">HOW CAN WE
                                        HELP YOU?</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Hi there, I would like to ..."
                                        rows="3"></textarea>
                                </div>
                                <br>
                                <a class="btn btn-primary btn-block" href="#">SUBMIT</a>
                            </form>

                            <div class="mapouter pt-3">
                                <div class="gmap_canvas"><iframe width="100%" height="100%" id="gmap_canvas"
                                        src="https://maps.google.com/maps?q=dugri%20ludhiana&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"
                                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('user.components.footer')


    @include('user.components.scripts')
@endsection
