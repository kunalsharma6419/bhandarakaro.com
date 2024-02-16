@extends('admin.layouts.app')

@section('admincontent')
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            @include('admin.components.menu')
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                @include('admin.components.navbar')

                <!-- / Navbar -->


                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row">
                            <div class="col-12">

                                <div class="card">
                                    <h5 class="card-header">Update Bhandara Serving Location </h5>
                                    <div class="card-body">
                                        <form action="{{ route('superadmin.locations.update', $location->id) }}"
                                            method="post" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label"
                                                    for="basic-default-name">State</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="state"
                                                        id="basic-default-name" value="{{ $location->state }}" />
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label"
                                                    for="basic-default-company">City</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="city"
                                                        id="basic-default-company" value="{{ $location->city }}" />
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label"
                                                    for="basic-default-company">Pincode</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="l_pincode"
                                                        id="basic-default-company" value="{{ $location->l_pincode }}" />
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label" for="basic-default-message">
                                                    Old Location Thumbnail</label>
                                                <div class="col-sm-10">
                                                    <img src="locationImage/{{ $location->location_image }}" alt="Avatar"
                                                        class="rounded-circle" style="width: 150px; height:150px;" />
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label" for="basic-default-message">Upload
                                                    Location Thumbnail</label>
                                                <div class="col-sm-10">
                                                    <input type="file" class="form-control" name="file"
                                                        id="basic-default-company"
                                                        placeholder="Select Location Thumbnail" />
                                                </div>
                                            </div>

                                            <div class="row justify-content-end">
                                                <div class="col-sm-10">
                                                    <button type="submit" class="btn btn-primary">Update Location</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer -->
                @include('admin.components.footer')
                <!-- / Footer -->

                <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    {{-- <div class="buy-now">
        <a href="https://themeselection.com/products/sneat-bootstrap-html-admin-template/" target="_blank"
            class="btn btn-danger btn-buy-now">Upgrade to Pro</a>
    </div> --}}

    <!-- Core JS -->
    @include('admin.components.scripts')
@endsection
