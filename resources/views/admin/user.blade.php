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
                            <h5 class="card-header">Registered Users</h5>
                            {{-- @if (session()->has('successmessage'))
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
                            @endif --}}
                            <div class="table-responsive text-nowrap">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Full Name</th>
                                            <th>Email</th>
                                            <th>Phone Number</th>
                                            <th>Address</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-border-bottom-0">
                                        @foreach ($users as $user)
                                            <tr>
                                                <td>{{ $user->id }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                                    <strong>{{ $user->email }}</strong>
                                                </td>
                                                <td><a href="mailto:{{ $user->email }}">{{ $user->email }}</a>
                                                </td>
                                                <td><a href="tel:+91{{ $user->phone_number }}">{{ $user->phone_number }}</a>
                                                </td>
                                                {{-- <td><span class="badge bg-label-primary me-1">Active</span></td> --}}
                                                {{-- <td>
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
                                                </td> --}}
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
