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
                            <div class="row">
                                <div class="col-sm-6">
                                    <h5 class="card-header">Bhandara Food Products</h5>
                                </div>
                                <div class="col-sm-6">
                                    <button type="submit"
                                        onclick="window.location.href = '{{ route('superadmin.foodproducts.create') }}'"
                                        class="btn btn-primary" style="float: right; margin-top: 10px;">Add Bhandara
                                        Food</button>
                                </div>
                            </div>

                            <div class="row">
                                <form style="margin-top: 10px; margin-botton: 10px;" action="{{ url()->current() }}"
                                    method="GET" class="col-sm-6">
                                    <label for="entries">Show</label>
                                    <select name="entries" id="entries" onchange="this.form.submit()">
                                        <option value="10" {{ request('entries', 10) == 10 ? 'selected' : '' }}>10
                                        </option>
                                        <option value="25" {{ request('entries') == 25 ? 'selected' : '' }}>25
                                        </option>
                                        <option value="50" {{ request('entries') == 50 ? 'selected' : '' }}>50
                                        </option>
                                        <option value="100" {{ request('entries') == 100 ? 'selected' : '' }}>100
                                        </option>
                                    </select>
                                    <span>entries</span>
                                </form>
                                <!-- Add the search input field within the form -->
                                <form style="margin-top: 10px; float:right;" action="{{ url()->current() }}" method="GET"
                                    class="col-sm-6">
                                    <div class="row">
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="search"
                                                placeholder="Search Food" value="{{ $search }}">
                                        </div>
                                        <div class="col-sm-2">
                                            <button class="btn btn-primary" type="submit"><i
                                                    class="menu-icon tf-icons bx bx-search-alt"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
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
                                            <th>Sr NO.</th>
                                            <th>Food Image</th>
                                            <th>Name</th>
                                            {{-- <th>Description</th> --}}
                                            <th>category</th>
                                            {{-- <th>Ingredient</th> --}}
                                            <th>Is Deal</th>
                                            <th>Offer Code</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-border-bottom-0">
                                        @foreach ($foodproducts as $foodproduct)
                                            <tr>
                                                <td>{{ $foodproduct->id }}</td>
                                                <td> <img src="foodproductImage/{{ $foodproduct->image[1] }}"
                                                        alt="Avatar" style="width: 50px; height:50px;" /></td>
                                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                                    <strong>{{ $foodproduct->name }}</strong>
                                                </td>
                                                {{-- <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                                    <strong>{{ $foodproduct->description }}</strong>
                                                </td> --}}
                                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                                    <strong>{{ $foodproduct->category->category_name }}</strong>
                                                </td>
                                                {{-- <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                                    <strong>{{ $foodproduct->ingredient }}</strong>
                                                </td> --}}
                                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                                    <strong>{{ $foodproduct->is_deal }}</strong>
                                                </td>
                                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                                    <strong>{{ $foodproduct->offer->offer_code }}</strong>
                                                </td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                            data-bs-toggle="dropdown">
                                                            <i class="bx bx-dots-vertical-rounded"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item"
                                                                href="{{ route('superadmin.foodproducts.edit', $foodproduct->id) }}"><i
                                                                    class="bx bx-edit-alt me-1"></i> Edit</a>
                                                            <a class="dropdown-item"
                                                                onclick="return confirm('Are you Sure to delete this')"
                                                                href="{{ route('superadmin.foodproducts.destroy', $foodproduct->id) }}"><i
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

                        <div class="row">
                            <div class="section-header col-sm-6">
                                <p class="mb-0">Showing {{ $foodproducts->firstItem() }} to
                                    {{ $foodproducts->lastItem() }} of
                                    {{ $foodproducts->total() }} entries</p>
                            </div>
                            <div class="col-sm-6">
                                <div class="card-footer text-right">
                                    {{ $foodproducts->appends(request()->input())->links('pagination::bootstrap-4') }}
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
