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
                        <!-- Hoverable Table rows -->
                        <div class="card">
                            <h5 class="card-header">Locations We Are Active Now</h5>
                            @if (session()->has('successmessage'))
                                <div class="alert alert-success">

                                    <button type="button" class="close" data-dismiss="alert">
                                        x
                                    </button>
                                    {{ session()->get('successmessage') }}
                                </div>
                            @endif
                            @if (session()->has('updatemessage'))
                                <div class="alert alert-success">

                                    <button type="button" class="close" data-dismiss="alert">
                                        x
                                    </button>
                                    {{ session()->get('updatemessage') }}
                                </div>
                            @endif
                            @if (session()->has('deletemessage'))
                                <div class="alert alert-danger">

                                    <button type="button" class="close" data-dismiss="alert">
                                        x
                                    </button>
                                    {{ session()->get('deletemessage') }}
                                </div>
                            @endif
                            <div class="table-responsive text-nowrap">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Location Image</th>
                                            <th>State</th>
                                            <th>City</th>
                                            <th>Pincode</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-border-bottom-0">
                                        @foreach ($locations as $location)
                                            <tr>
                                                <td>
                                                    <img src="locationImage/{{ $location->location_image }}" alt="Avatar"
                                                        class="rounded-circle" style="width: 50px; height:50px;" />
                                                </td>
                                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                                    <strong>{{ $location->state }}</strong>
                                                </td>
                                                <td>{{ $location->city }}</td>
                                                <td>{{ $location->l_pincode }}</td>
                                                {{-- <td><span class="badge bg-label-primary me-1">Active</span></td> --}}
                                                <td>
                                                    <div class="dropdown">
                                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                            data-bs-toggle="dropdown">
                                                            <i class="bx bx-dots-vertical-rounded"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item"
                                                                href="{{ route('superadmin.locations.edit', $location->id) }}"><i
                                                                    class="bx bx-edit-alt me-1"></i> Edit</a>
                                                            <a class="dropdown-item"
                                                                onclick="return confirm('Are you Sure to delete this')"
                                                                href="{{ route('superadmin.locations.destroy', $location->id) }}"><i
                                                                    class="bx bx-trash me-1"></i> Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--/ Hoverable Table rows -->
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
