@extends('admin.layouts.app')
<style>
    .tag-container {
        display: flex;
        flex-wrap: wrap;
    }

    .tag {
        background-color: #e0e0e0;
        padding: 5px;
        margin: 5px;
        border-radius: 5px;
        display: flex;
        align-items: center;
    }

    .tag span {
        margin-right: 5px;
        cursor: pointer;
    }
</style>
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
                                    <h5 class="card-header">Update Bhandara Food Item</h5>
                                    <div class="card-body">
                                        <form action="{{ route('superadmin.foodproducts.update', $foodProduct->id) }}"
                                            method="post" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label" for="basic-default-name">Food
                                                    Name</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="name"
                                                        id="basic-default-name" placeholder="Enter Food Name"
                                                        value="{{ old('name', $foodProduct->name) }}" />
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label" for="basic-default-name">Food
                                                    Price</label>
                                                <div class="col-sm-10">
                                                    <input type="number" class="form-control" name="price"
                                                        id="basic-default-name" placeholder="Enter Food Price"
                                                        value="{{ old('price', $foodProduct->price) }}" />
                                                </div>
                                            </div>
                                            <!-- Display existing images -->
                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label">Existing Food Thumbnails</label>
                                                <div class="col-sm-10">
                                                    @foreach ($foodProduct->image as $image)
                                                        <img src="{{ asset('foodproductImage/' . $image) }}"
                                                            alt="Food Image" class="img-thumbnail mr-2"
                                                            style="width: 200px; height:150px;">
                                                    @endforeach
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label" for="basic-default-message">Upload
                                                    Food Thumbnails</label>
                                                <div class="col-sm-10">
                                                    <input type="file" class="form-control" name="images[]"
                                                        id="basic-default-company" placeholder="Select Food Thumbnails"
                                                        multiple />
                                                </div>
                                                {{-- <div id="imagePreviewContainer"></div> --}}

                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label" for="basic-default-name">Food
                                                    Description</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" name="description" id="basic-default-name" placeholder="Enter Food description"
                                                        rows="4">{{ old('description', $foodProduct->description) }}</textarea>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label" for="basic-default-name">Select Food
                                                    Category</label>
                                                <div class="col-sm-10">
                                                    <select name="category_id" class="form-select">
                                                        <!-- Populate categories dropdown options from your database -->
                                                        @foreach ($categories as $category)
                                                            <option value="{{ $category->id }}"
                                                                {{ old('category_id', $foodProduct->category_id) == $category->id ? 'selected' : '' }}>
                                                                {{ $category->category_name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label" for="basic-default-name">Food
                                                    Ingredients</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" name="ingredient" id="basic-default-name" placeholder="Enter Food ingredient"
                                                        rows="4">{{ old('ingredient', $foodProduct->ingredient) }}</textarea>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label" for="basic-default-name">Food
                                                    Tags</label>
                                                <div class="col-sm-10">
                                                    @php
                                                        $tags = old('tags', $foodProduct->tags ?? []);
                                                    @endphp
                                                    @foreach ($tags as $tag)
                                                        <div class="tag">
                                                            <span>{{ $tag }}</span>
                                                            <span onclick="removeTag(this)">✖</span>
                                                        </div>
                                                    @endforeach
                                                    <input type="text" id="tagsInput" onkeydown="handleKeyDown(event)"
                                                        class="form-control" name="tags[]" placeholder="Enter Food Tags" />
                                                    <div class="tag-container" id="tagContainer"></div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label" for="basic-default-name">Is
                                                    Deals Enabled?</label>
                                                <div class="col-sm-10">
                                                    <select name="is_deal" class="form-select">
                                                        <option value="0"
                                                            {{ old('is_deal', $foodProduct->is_deal) == 0 ? 'selected' : '' }}>
                                                            No</option>
                                                        <option value="1"
                                                            {{ old('is_deal', $foodProduct->is_deal) == 1 ? 'selected' : '' }}>
                                                            Yes</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label" for="basic-default-name">Select Food
                                                    Offer</label>
                                                <div class="col-sm-10">
                                                    <select name="offer_id" class="form-select">
                                                        <!-- Populate categories dropdown options from your database -->
                                                        @foreach ($offers as $offer)
                                                            <option value="{{ $offer->id }}"
                                                                {{ old('offer_id', $foodProduct->offer_id) == $offer->id ? 'selected' : '' }}>
                                                                Code : {{ $offer->offer_code }}
                                                                ({{ $offer->offer_discount_percent }}% Discount)
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row justify-content-end">
                                                <div class="col-sm-10">
                                                    <button type="submit" class="btn btn-primary">Update Bhandara
                                                        Food</button>
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

    <script>
        function handleKeyDown(event) {
            if (event.key === 'Enter' || event.key === ',') {
                event.preventDefault();
                addTag();
            }
        }

        function addTag() {
            const tagsInput = document.getElementById('tagsInput');
            const tagContainer = document.getElementById('tagContainer');
            const inputValue = tagsInput.value.trim();

            if (inputValue !== '') {
                const tagElement = document.createElement('div');
                tagElement.className = 'tag';

                const tagText = document.createElement('span');
                tagText.textContent = inputValue;

                const closeButton = document.createElement('span');
                closeButton.textContent = '✖';
                closeButton.addEventListener('click', () => removeTag(tagElement));

                tagElement.appendChild(tagText);
                tagElement.appendChild(closeButton);

                tagContainer.appendChild(tagElement);
                tagsInput.value = '';

                updateTags();
            }
        }

        function removeTag(tagElement) {
            const tagContainer = document.getElementById('tagContainer');
            tagContainer.removeChild(tagElement);

            updateTags();
        }

        function updateTags() {
            const tagContainer = document.getElementById('tagContainer');
            const tags = Array.from(tagContainer.children).map(tagElement => tagElement.firstChild.textContent);
            const tagsInput = document.getElementById('tagsInput');

            tagsInput.value = tags.join(',');
        }
    </script>
@endsection
