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
                                        data-cfemail="e8818985879b89808986a88f85898184c68b8785">[email&#160;protected]</span>
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
                <div class="osahan-cart-item-profile">
                    <div class="box bg-white mb-3 shadow-sm rounded">
                        <div class="p-3 d-flex align-items-center">
                            <i class="feather-message-circle display-4"></i>
                            <div class="ml-3">
                                <h6 class="text-dark mb-2 mt-0">Help Forum</h6>
                                <p class="mb-0 text-muted">Find the answer to any question, from the basics ...
                                </p>
                            </div>
                        </div>
                        <div class="overflow-hidden border-top d-flex align-items-center p-3">
                            <a class="font-weight-bold d-block" href="#"> Bhandara Karo Help Forum. </a>
                            <i class="feather-arrow-right-circle ml-auto text-primary"></i>
                        </div>
                    </div>
                    <div class="box bg-white mb-3 shadow-sm rounded">
                        <div class="p-3 d-flex align-items-center">
                            <i class="feather-lock display-4"></i>
                            <div class="ml-3">
                                <h6 class="text-dark mb-2 mt-0">Safety Center</h6>
                                <p class="mb-0 text-muted">Want to learn more about setting up and managing ...
                                </p>
                            </div>
                        </div>
                        <div class="overflow-hidden border-top d-flex align-items-center p-3">
                            <a class="font-weight-bold d-block" href="#"> Bhandara Karo Safety Center. </a>
                            <i class="feather-arrow-right-circle ml-auto text-primary"></i>
                        </div>
                    </div>
                    <div id="basics">

                        <div class="mb-2 mt-3">
                            <h5 class="font-weight-semi-bold mb-0">Basics</h5>
                        </div>


                        <div id="basicsAccordion">

                            <div class="box border-bottom bg-white mb-2 rounded shadow-sm overflow-hidden">
                                <div id="basicsHeadingOne">
                                    <h5 class="mb-0">
                                        <button
                                            class="shadow-none btn btn-block d-flex justify-content-between card-btn p-3 collapsed"
                                            data-toggle="collapse" data-target="#basicsCollapseOne" aria-expanded="false"
                                            aria-controls="basicsCollapseOne">
                                            Do you have any built-in caching?
                                            <span class="card-btn-arrow">
                                                <span class="feather-chevron-down"></span>
                                            </span>
                                        </button>
                                    </h5>
                                </div>
                                <div id="basicsCollapseOne" class="collapse show" aria-labelledby="basicsHeadingOne"
                                    data-parent="#basicsAccordion" style="">
                                    <div class="card-body border-top p-3 text-muted">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid ...
                                    </div>
                                </div>
                            </div>
                            <div class="box border-bottom bg-white mb-2 rounded shadow-sm overflow-hidden">
                                <div id="basicsHeadingTwo">
                                    <h5 class="mb-0">
                                        <button
                                            class="shadow-none btn btn-block d-flex justify-content-between card-btn p-3 collapsed"
                                            data-toggle="collapse" data-target="#basicsCollapseTwo" aria-expanded="false"
                                            aria-controls="basicsCollapseTwo">
                                            Can I add/upgrade my plan at any time?
                                            <span class="card-btn-arrow">
                                                <span class="feather-chevron-down"></span>
                                            </span>
                                        </button>
                                    </h5>
                                </div>
                                <div id="basicsCollapseTwo" class="collapse" aria-labelledby="basicsHeadingTwo"
                                    data-parent="#basicsAccordion" style="">
                                    <div class="card-body border-top p-3 text-muted">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid ...
                                    </div>
                                </div>
                            </div>
                            <div class="box border-bottom bg-white mb-2 rounded shadow-sm overflow-hidden">
                                <div id="basicsHeadingThree">
                                    <h5 class="mb-0">
                                        <button
                                            class="shadow-none btn btn-block d-flex justify-content-between card-btn p-3 collapsed"
                                            data-toggle="collapse" data-target="#basicsCollapseThree"
                                            aria-expanded="false" aria-controls="basicsCollapseThree">
                                            What access comes with hosting plan?
                                            <span class="card-btn-arrow">
                                                <span class="feather-chevron-down"></span>
                                            </span>
                                        </button>
                                    </h5>
                                </div>
                                <div id="basicsCollapseThree" class="collapse" aria-labelledby="basicsHeadingThree"
                                    data-parent="#basicsAccordion" style="">
                                    <div class="card-body border-top p-3 text-muted">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid ...
                                    </div>
                                </div>
                            </div>
                            <div class="box border-bottom bg-white mb-2 rounded shadow-sm overflow-hidden">
                                <div id="basicsHeadingFour">
                                    <h5 class="mb-0">
                                        <button
                                            class="shadow-none btn btn-block d-flex justify-content-between card-btn collapsed p-3"
                                            data-toggle="collapse" data-target="#basicsCollapseFour"
                                            aria-expanded="false" aria-controls="basicsCollapseFour">
                                            How do I change my password?
                                            <span class="card-btn-arrow">
                                                <span class="feather-chevron-down"></span>
                                            </span>
                                        </button>
                                    </h5>
                                </div>
                                <div id="basicsCollapseFour" class="collapse" aria-labelledby="basicsHeadingFour"
                                    data-parent="#basicsAccordion">
                                    <div class="card-body border-top p-3 text-muted">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid ...
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div id="account">

                        <div class="mb-2 mt-3">
                            <h5 class="font-weight-semi-bold mb-0">Account</h5>
                        </div>


                        <div id="accountAccordion">

                            <div class="box border-bottom bg-white mb-2 rounded shadow-sm overflow-hidden">
                                <div id="accountHeadingOne">
                                    <h5 class="mb-0">
                                        <button
                                            class="shadow-none btn btn-block d-flex justify-content-between card-btn p-3"
                                            data-toggle="collapse" data-target="#accountCollapseOne"
                                            aria-expanded="false" aria-controls="accountCollapseOne">
                                            How do I change my password?
                                            <span class="card-btn-arrow">
                                                <span class="feather-chevron-down"></span>
                                            </span>
                                        </button>
                                    </h5>
                                </div>
                                <div id="accountCollapseOne" class="collapse show" aria-labelledby="accountHeadingOne"
                                    data-parent="#accountAccordion">
                                    <div class="card-body border-top p-3 text-muted">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid ...
                                    </div>
                                </div>
                            </div>


                            <div class="box border-bottom bg-white mb-2 rounded shadow-sm overflow-hidden">
                                <div id="accountHeadingTwo">
                                    <h5 class="mb-0">
                                        <button
                                            class="shadow-none btn btn-block d-flex justify-content-between card-btn collapsed p-3"
                                            data-toggle="collapse" data-target="#accountCollapseTwo"
                                            aria-expanded="false" aria-controls="accountCollapseTwo">
                                            How do I delete my account?
                                            <span class="card-btn-arrow">
                                                <span class="feather-chevron-down"></span>
                                            </span>
                                        </button>
                                    </h5>
                                </div>
                                <div id="accountCollapseTwo" class="collapse" aria-labelledby="accountHeadingTwo"
                                    data-parent="#accountAccordion">
                                    <div class="card-body border-top p-3 text-muted">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid ...
                                    </div>
                                </div>
                            </div>


                            <div class="box border-bottom bg-white mb-2 rounded shadow-sm overflow-hidden">
                                <div id="accountHeadingThree">
                                    <h5 class="mb-0">
                                        <button
                                            class="shadow-none btn btn-block d-flex justify-content-between card-btn collapsed p-3"
                                            data-toggle="collapse" data-target="#accountCollapseThree"
                                            aria-expanded="false" aria-controls="accountCollapseThree">
                                            How do I change my account settings?
                                            <span class="card-btn-arrow">
                                                <span class="feather-chevron-down"></span>
                                            </span>
                                        </button>
                                    </h5>
                                </div>
                                <div id="accountCollapseThree" class="collapse" aria-labelledby="accountHeadingThree"
                                    data-parent="#accountAccordion">
                                    <div class="card-body border-top p-3 text-muted">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid ...
                                    </div>
                                </div>
                            </div>


                            <div class="box border-bottom bg-white mb-2 rounded shadow-sm overflow-hidden">
                                <div id="accountHeadingFour">
                                    <h5 class="mb-0">
                                        <button
                                            class="shadow-none btn btn-block d-flex justify-content-between card-btn collapsed p-3"
                                            data-toggle="collapse" data-target="#accountCollapseFour"
                                            aria-expanded="false" aria-controls="accountCollapseFour">
                                            I forgot my password. How do I reset it?
                                            <span class="card-btn-arrow">
                                                <span class="feather-chevron-down"></span>
                                            </span>
                                        </button>
                                    </h5>
                                </div>
                                <div id="accountCollapseFour" class="collapse" aria-labelledby="accountHeadingFour"
                                    data-parent="#accountAccordion">
                                    <div class="card-body border-top p-3 text-muted">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid ...
                                    </div>
                                </div>
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
