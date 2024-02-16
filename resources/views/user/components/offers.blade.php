<div class="bg-white">
    <div class="container">
        <div class="main-heading">Best offers for you</div>
        <div class="clearfix"></div>
        <div class="offer-slider">
            @foreach ($offers as $offer)
                <div class="cat-item px-1 py-3">
                    <a class="d-block text-center shadow-sm" href="#">
                        <img alt="#" src="{{ asset('/offerImage/' . $offer->offer_image) }}"
                            class="img-fluid rounded">
                    </a>
                </div>
            @endforeach
        </div>
    </div>
    <div class="container">
        <div class="main-heading">Inspriration for Your First Bhandara</div>
        <div class="clearfix"></div>
        <div class="cat-slider">
            <div class="cat-item px-1 py-3">
                <a class="bg-white rounded d-block p-2 text-center shadow-sm" href="#">
                    <img alt="#" src="{{ asset('BhandaraKaro/NewHome/public/img/category/vegpulao2.png') }}"
                        class="img-fluid mb-2">
                    <p class="cattxt">Veg Pulao</p>
                </a>
            </div>
            <div class="cat-item px-1 py-3">
                <a class="bg-white rounded d-block p-2 text-center shadow-sm" href="#">
                    <img alt="#" src="{{ asset('BhandaraKaro/NewHome/public/img/category/fullthali.png') }}"
                        class="img-fluid mb-2">
                    <p class="cattxt">Full Thali</p>
                </a>
            </div>
            <div class="cat-item px-1 py-3">
                <a class="bg-white rounded d-block p-2 text-center shadow-sm" href="#">
                    <img alt="#" src="{{ asset('BhandaraKaro/NewHome/public/img/category/sweet1.png') }}"
                        class="img-fluid mb-2">
                    <p class="cattxt">Sweets</p>
                </a>
            </div>
            <div class="cat-item px-1 py-3">
                <a class="bg-white rounded d-block p-2 text-center shadow-sm" href="#">
                    <img alt="#" src="{{ asset('BhandaraKaro/NewHome/public/img/category/dosa.png') }}"
                        class="img-fluid mb-2">
                    <p class="cattxt">Dosa</p>
                </a>
            </div>
            <div class="cat-item px-1 py-3">
                <a class="bg-white rounded d-block p-2 text-center shadow-sm" href="#">
                    <img alt="#" src="{{ asset('BhandaraKaro/NewHome/public/img/category/south1.png') }}"
                        class="img-fluid mb-2">
                    <p class="cattxt">Idli</p>
                </a>
            </div>
            <!-- <div class="cat-item px-1 py-3">
 <a class="bg-white rounded d-block p-2 text-center shadow-sm" href="#">
 <img alt="#" src="public/img/category/noodles.jpg" class="img-fluid mb-2">
 <p class="cattxt">Noodles</p>
 </a>
 </div> -->
            <div class="cat-item px-1 py-3">
                <a class="bg-white rounded d-block p-2 text-center shadow-sm" href="#">
                    <img alt="#" src="{{ asset('BhandaraKaro/NewHome/public/img/category/norththali.png') }}"
                        class="img-fluid mb-2">
                    <p class="cattxt">North Indian</p>
                </a>
            </div>

            <div class="cat-item px-1 py-3">
                <a class="bg-white rounded d-block p-2 text-center shadow-sm" href="#">
                    <img alt="#" src="{{ asset('BhandaraKaro/NewHome/public/img/category/pasta.png') }}"
                        class="img-fluid mb-2">
                    <p class="cattxt">Pasta</p>
                </a>
            </div>
            <div class="cat-item px-1 py-3">
                <a class="bg-white rounded d-block p-2 text-center shadow-sm" href="#">
                    <img alt="#" src="{{ asset('BhandaraKaro/NewHome/public/img/category/kulfi.png') }}"
                        class="img-fluid mb-2">
                    <p class="cattxt">Kulfi</p>
                </a>
            </div>
            <div class="cat-item px-1 py-3">
                <a class="bg-white rounded d-block p-2 text-center shadow-sm" href="#">
                    <img alt="#" src="{{ asset('BhandaraKaro/NewHome/public/img/category/pavbhaji.png') }}"
                        class="img-fluid mb-2">
                    <p class="cattxt">Pav Bhaji</p>
                </a>
            </div>
            <div class="cat-item px-1 py-3">
                <a class="bg-white rounded d-block p-2 text-center shadow-sm" href="#">
                    <img alt="#" src="{{ asset('BhandaraKaro/NewHome/public/img/category/poori1.png') }}"
                        class="img-fluid mb-2">
                    <p class="cattxt">Poori</p>
                </a>
            </div>
            <div class="cat-item px-1 py-3">
                <a class="bg-white rounded d-block p-2 text-center shadow-sm" href="#">
                    <img alt="#" src="{{ asset('BhandaraKaro/NewHome/public/img/category/veg.png') }}"
                        class="img-fluid mb-2">
                    <p class="cattxt">Pure Veg</p>
                </a>
            </div>
            <div class="cat-item px-1 py-3">
                <a class="bg-white rounded d-block p-2 text-center shadow-sm" href="#">
                    <img alt="#" src="{{ asset('BhandaraKaro/NewHome/public/img/category/vegroll.png') }}"
                        class="img-fluid mb-2">
                    <p class="cattxt">Veg Rolls</p>
                </a>
            </div>
            <div class="cat-item px-1 py-3">
                <a class="bg-white rounded d-block p-2 text-center shadow-sm" href="#">
                    <img alt="#" src="{{ asset('BhandaraKaro/NewHome/public/img/category/south2.png') }}"
                        class="img-fluid mb-2">
                    <p class="cattxt">South Indian</p>
                </a>
            </div>
            <div class="cat-item px-1 py-3">
                <a class="bg-white rounded d-block p-2 text-center shadow-sm" href="#">
                    <img alt="#" src="{{ asset('BhandaraKaro/NewHome/public/img/category/salad.jpg') }}"
                        class="img-fluid mb-2">
                    <p class="cattxt">Salad</p>
                </a>
            </div>
            <div class="cat-item px-1 py-3">
                <a class="bg-white rounded d-block p-2 text-center shadow-sm" href="#">
                    <img alt="#" src="{{ asset('BhandaraKaro/NewHome/public/img/category/paratha.jpg') }}"
                        class="img-fluid mb-2">
                    <p class="cattxt">Paratha</p>
                </a>
            </div>
            <div class="cat-item px-1 py-3">
                <a class="bg-white rounded d-block p-2 text-center shadow-sm" href="#">
                    <img alt="#"
                        src="{{ asset('BhandaraKaro/NewHome/public/img/category/chole-bature.jpg') }}"
                        class="img-fluid mb-2">
                    <p class="cattxt">Chole Bature</p>
                </a>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="pt-4 pb-2 title d-flex align-items-center">
            <h5 class="m-0">Bhandara Wala Menu Selects</h5>
            <a class="fw-bold ms-auto" href="{{ url('menu') }}">Explore Menu <i
                    class="feather-chevrons-right"></i></a>
        </div>
        <div class="row" id="products-row">
            <!-- products will be added here dynamically -->
            <div class="row mb-4">
                <!-- First Row -->
                @foreach ($foodproducts as $foodproduct)
                    <div class="col-lg-3 col-md-6">
                        <!-- Product 1 -->
                        <!-- Your product HTML structure goes here -->
                        <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                            <div class="list-card-image">
                                <div class="star position-absolute"><span class="badge text-bg-success"><i
                                            class="feather-star"></i>{{ $foodproduct->tags[1] }}</span></div>
                                <div class="favourite-heart text-danger position-absolute rounded-circle">
                                    {{-- <a
                                        href="#"><i class="feather-heart"></i></a> --}}
                                </div>
                                <div class="member-plan position-absolute"><span
                                        class="badge text-bg-dark">{{ $foodproduct->tags[0] }}</span>
                                </div>
                                <a href="{{ route('foodproductdetail', $foodproduct->id) }}"> <img alt="#"
                                        src="foodproductImage/{{ $foodproduct->image[0] }}"
                                        class="img-fluid item-img w-100"> </a>
                            </div>
                            <div class="p-3 position-relative">
                                <div class="list-card-body">
                                    <h6 class="mb-1"><a href="#" class="text-black">{{ $foodproduct->name }}
                                        </a>
                                    </h6>
                                    <h5 class="mb-1"><a href="#"
                                            class="text-black">₹{{ $foodproduct->price }}
                                        </a>
                                    </h5>
                                    <p class="text-gray mb-1 small">{{ $foodproduct->description }}</p>
                                    <p class="text-gray mb-1 rating"> </p>
                                    {{-- <ul class="rating-stars list-unstyled">
                                        <li> <i class="feather-star star_active"></i> <i
                                                class="feather-star star_active"></i>
                                            <i class="feather-star star_active"></i> <i
                                                class="feather-star star_active"></i>
                                            <i class="feather-star"></i>
                                        </li>
                                    </ul> --}}
                                    <p></p>
                                </div>
                                <div class="list-card-badge"> <a
                                        href="{{ route('foodproductdetail', $foodproduct->id) }}"><span
                                            class="btn btn-outline-primary">View More</span></a>
                                    <small>{{ $foodproduct->offer->offer_code }}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                {{-- <div class="col-lg-3 col-md-6">
                    <!-- Product 2 -->
                    <!-- Your product HTML structure goes here -->
                    <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                        <div class="list-card-image">
                            <div class="star position-absolute"><span class="badge text-bg-success"><i
                                        class="feather-star"></i> Pure Veg</span></div>
                            <div class="favourite-heart text-danger position-absolute rounded-circle"><a
                                    href="#"><i class="feather-heart"></i></a></div>
                            <div class="member-plan position-absolute"><span
                                    class="badge text-bg-dark">Promoted</span>
                            </div>
                            <a href="#"> <img alt="#"
                                    src="{{ asset('BhandaraKaro/images/menu/11.png') }}"
                                    class="img-fluid item-img w-100"> </a>
                        </div>
                        <div class="p-3 position-relative">
                            <div class="list-card-body">
                                <h6 class="mb-1"><a href="#" class="text-black">Product 1 </a>
                                </h6>
                                <p class="text-gray mb-1 small">Product Description</p>
                                <p class="text-gray mb-1 rating"> </p>
                                <ul class="rating-stars list-unstyled">
                                    <li> <i class="feather-star star_active"></i> <i
                                            class="feather-star star_active"></i>
                                        <i class="feather-star star_active"></i> <i
                                            class="feather-star star_active"></i>
                                        <i class="feather-star"></i>
                                    </li>
                                </ul>
                                <p></p>
                            </div>
                            <div class="list-card-badge"> <a href="/cart"><span class="btn btn-outline-primary">Add
                                        to Cart</span></a> <small>65%
                                    OSAHAN50</small> </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <!-- Product 3 -->
                    <!-- Your product HTML structure goes here -->
                    <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                        <div class="list-card-image">
                            <div class="star position-absolute"><span class="badge text-bg-success"><i
                                        class="feather-star"></i> Pure Veg</span></div>
                            <div class="favourite-heart text-danger position-absolute rounded-circle"><a
                                    href="#"><i class="feather-heart"></i></a></div>
                            <div class="member-plan position-absolute"><span
                                    class="badge text-bg-dark">Promoted</span>
                            </div>
                            <a href="#"> <img alt="#"
                                    src="{{ asset('BhandaraKaro/images/menu/13.png') }}"
                                    class="img-fluid item-img w-100"> </a>
                        </div>
                        <div class="p-3 position-relative">
                            <div class="list-card-body">
                                <h6 class="mb-1"><a href="#" class="text-black">Product 1 </a>
                                </h6>
                                <p class="text-gray mb-1 small">Product Description</p>
                                <p class="text-gray mb-1 rating"> </p>
                                <ul class="rating-stars list-unstyled">
                                    <li> <i class="feather-star star_active"></i> <i
                                            class="feather-star star_active"></i>
                                        <i class="feather-star star_active"></i> <i
                                            class="feather-star star_active"></i>
                                        <i class="feather-star"></i>
                                    </li>
                                </ul>
                                <p></p>
                            </div>
                            <div class="list-card-badge"> <a href="/cart"><span class="btn btn-outline-primary">Add
                                        to Cart</span></a> <small>65%
                                    OSAHAN50</small> </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <!-- Product 4 -->
                    <!-- Your product HTML structure goes here -->
                    <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                        <div class="list-card-image">
                            <div class="star position-absolute"><span class="badge text-bg-success"><i
                                        class="feather-star"></i>Pure Veg</span></div>
                            <div class="favourite-heart text-danger position-absolute rounded-circle"><a
                                    href="#"><i class="feather-heart"></i></a></div>
                            <div class="member-plan position-absolute"><span
                                    class="badge text-bg-dark">Promoted</span>
                            </div>
                            <a href="#"> <img alt="#"
                                    src="{{ asset('BhandaraKaro/images/menu/15.png') }}"
                                    class="img-fluid item-img w-100"> </a>
                        </div>
                        <div class="p-3 position-relative">
                            <div class="list-card-body">
                                <h6 class="mb-1"><a href="#" class="text-black">Product 1 </a>
                                </h6>
                                <p class="text-gray mb-1 small">Product Description</p>
                                <p class="text-gray mb-1 rating"> </p>
                                <ul class="rating-stars list-unstyled">
                                    <li> <i class="feather-star star_active"></i> <i
                                            class="feather-star star_active"></i>
                                        <i class="feather-star star_active"></i> <i
                                            class="feather-star star_active"></i>
                                        <i class="feather-star"></i>
                                    </li>
                                </ul>
                                <p></p>
                            </div>
                            <div class="list-card-badge"> <a href="/cart"><span class="btn btn-outline-primary">Add
                                        to Cart</span></a> <small>65%
                                    OSAHAN50</small> </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-4">
                <!-- Second Row -->
                <div class="col-lg-3 col-md-6">
                    <!-- Product 5 -->
                    <!-- Your product HTML structure goes here -->
                    <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                        <div class="list-card-image">
                            <div class="star position-absolute"><span class="badge text-bg-success"><i
                                        class="feather-star"></i> Pure Veg</span></div>
                            <div class="favourite-heart text-danger position-absolute rounded-circle"><a
                                    href="#"><i class="feather-heart"></i></a></div>
                            <div class="member-plan position-absolute"><span
                                    class="badge text-bg-dark">Promoted</span>
                            </div>
                            <a href="#"> <img alt="#"
                                    src="{{ asset('BhandaraKaro/images/menu/17.png') }}"
                                    class="img-fluid item-img w-100"> </a>
                        </div>
                        <div class="p-3 position-relative">
                            <div class="list-card-body">
                                <h6 class="mb-1"><a href="#" class="text-black">Product 1 </a>
                                </h6>
                                <p class="text-gray mb-1 small">Product Description</p>
                                <p class="text-gray mb-1 rating"> </p>
                                <ul class="rating-stars list-unstyled">
                                    <li> <i class="feather-star star_active"></i> <i
                                            class="feather-star star_active"></i>
                                        <i class="feather-star star_active"></i> <i
                                            class="feather-star star_active"></i>
                                        <i class="feather-star"></i>
                                    </li>
                                </ul>
                                <p></p>
                            </div>
                            <div class="list-card-badge"> <a href="/cart"><span class="btn btn-outline-primary">Add
                                        to Cart</span></a> <small>65%
                                    OSAHAN50</small> </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <!-- Product 6 -->
                    <!-- Your product HTML structure goes here -->
                    <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                        <div class="list-card-image">
                            <div class="star position-absolute"><span class="badge text-bg-success"><i
                                        class="feather-star"></i> Pure Veg</span></div>
                            <div class="favourite-heart text-danger position-absolute rounded-circle"><a
                                    href="#"><i class="feather-heart"></i></a></div>
                            <div class="member-plan position-absolute"><span
                                    class="badge text-bg-dark">Promoted</span>
                            </div>
                            <a href="#"> <img alt="#"
                                    src="{{ asset('BhandaraKaro/images/menu/19.png') }}"
                                    class="img-fluid item-img w-100"> </a>
                        </div>
                        <div class="p-3 position-relative">
                            <div class="list-card-body">
                                <h6 class="mb-1"><a href="#" class="text-black">Product 1 </a>
                                </h6>
                                <p class="text-gray mb-1 small">Product Description</p>
                                <p class="text-gray mb-1 rating"> </p>
                                <ul class="rating-stars list-unstyled">
                                    <li> <i class="feather-star star_active"></i> <i
                                            class="feather-star star_active"></i>
                                        <i class="feather-star star_active"></i> <i
                                            class="feather-star star_active"></i>
                                        <i class="feather-star"></i>
                                    </li>
                                </ul>
                                <p></p>
                            </div>
                            <div class="list-card-badge"> <a href="/cart"><span class="btn btn-outline-primary">Add
                                        to Cart</span></a> <small>65%
                                    OSAHAN50</small> </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <!-- Product 7 -->
                    <!-- Your product HTML structure goes here -->
                    <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                        <div class="list-card-image">
                            <div class="star position-absolute"><span class="badge text-bg-success"><i
                                        class="feather-star"></i> Pure Veg</span></div>
                            <div class="favourite-heart text-danger position-absolute rounded-circle"><a
                                    href="#"><i class="feather-heart"></i></a></div>
                            <div class="member-plan position-absolute"><span
                                    class="badge text-bg-dark">Promoted</span>
                            </div>
                            <a href="#"> <img alt="#"
                                    src="{{ asset('BhandaraKaro/images/menu/21.png') }}"
                                    class="img-fluid item-img w-100"> </a>
                        </div>
                        <div class="p-3 position-relative">
                            <div class="list-card-body">
                                <h6 class="mb-1"><a href="#" class="text-black">Product 1 </a>
                                </h6>
                                <p class="text-gray mb-1 small">Product Description</p>
                                <p class="text-gray mb-1 rating"> </p>
                                <ul class="rating-stars list-unstyled">
                                    <li> <i class="feather-star star_active"></i> <i
                                            class="feather-star star_active"></i>
                                        <i class="feather-star star_active"></i> <i
                                            class="feather-star star_active"></i>
                                        <i class="feather-star"></i>
                                    </li>
                                </ul>
                                <p></p>
                            </div>
                            <div class="list-card-badge"> <a href="/cart"><span class="btn btn-outline-primary">Add
                                        to Cart</span></a> <small>65%
                                    OSAHAN50</small> </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <!-- Product 8 -->
                    <!-- Your product HTML structure goes here -->
                    <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                        <div class="list-card-image">
                            <div class="star position-absolute"><span class="badge text-bg-success"><i
                                        class="feather-star"></i>Pure Veg</span></div>
                            <div class="favourite-heart text-danger position-absolute rounded-circle"><a
                                    href="#"><i class="feather-heart"></i></a></div>
                            <div class="member-plan position-absolute"><span
                                    class="badge text-bg-dark">Promoted</span>
                            </div>
                            <a href="#"> <img alt="#"
                                    src="{{ asset('BhandaraKaro/images/menu/23.png') }}"
                                    class="img-fluid item-img w-100"> </a>
                        </div>
                        <div class="p-3 position-relative">
                            <div class="list-card-body">
                                <h6 class="mb-1"><a href="#" class="text-black">Product 1 </a>
                                </h6>
                                <p class="text-gray mb-1 small">Product Description</p>
                                <p class="text-gray mb-1 rating"> </p>
                                <ul class="rating-stars list-unstyled">
                                    <li> <i class="feather-star star_active"></i> <i
                                            class="feather-star star_active"></i>
                                        <i class="feather-star star_active"></i> <i
                                            class="feather-star star_active"></i>
                                        <i class="feather-star"></i>
                                    </li>
                                </ul>
                                <p></p>
                            </div>
                            <div class="list-card-badge"> <a href="/cart"><span class="btn btn-outline-primary">Add
                                        to Cart</span></a> <small>65%
                                    OSAHAN50</small> </div>
                        </div>
                    </div>
                </div> --}}
            </div>

        </div>
    </div>
</div>
{{-- <script>
    // Define an array of products
    const products = [{
            name: "Product 9",
            description: "Some quick example text to build on the card title and make up the bulk of the card's content.",
            imageUrl: "{{ asset('BhandaraKaro/images/menu/9.png') }}",
        },
        {
            name: "Product 10",
            description: "Some quick example text to build on the card title and make up the bulk of the card's content.",
            imageUrl: "{{ asset('BhandaraKaro/images/menu/10.png') }}",
        },
        {
            name: "Product 11",
            description: "Some quick example text to build on the card title and make up the bulk of the card's content.",
            imageUrl: "{{ asset('BhandaraKaro/images/menu/11.png') }}",
        },
        {
            name: "Product 12",
            description: "Some quick example text to build on the card title and make up the bulk of the card's content.",
            imageUrl: "{{ asset('BhandaraKaro/images/menu/12.png') }}",
        },
        {
            name: "Product 13",
            description: "Some quick example text to build on the card title and make up the bulk of the card's content.",
            imageUrl: "{{ asset('BhandaraKaro/images/menu/13.png') }}",
        },
        {
            name: "Product 14",
            description: "Some quick example text to build on the card title and make up the bulk of the card's content.",
            imageUrl: "{{ asset('BhandaraKaro/images/menu/14.png') }}",
        },
        {
            name: "Product 15",
            description: "Some quick example text to build on the card title and make up the bulk of the card's content.",
            imageUrl: "{{ asset('BhandaraKaro/images/menu/15.png') }}",
        },
        {
            name: "Product 16",
            description: "Some quick example text to build on the card title and make up the bulk of the card's content.",
            imageUrl: "{{ asset('BhandaraKaro/images/menu/16.png') }}",
        },
    ];
    // for (let i = 1; i <= 500; i++) {
    //     products.push({
    //         name: `Product ${i + 9}`,
    //         description: "Some quick example text to build on the card title and make up the bulk of the card's content.",
    //         imageUrl: "{{ asset('BhandaraKaro/images/menu/1.png') }}",
    //     });
    // }
    let count = 0;
    let columnCount = 4; // Default to 4 columns for web view
    let rowCount = 2; // Display only 2 rows

    const addProductsToRow = () => {
        const columnCount = 4; // Default to 4 columns for web view
        const rowCount = 2; // Display only 2 rows

        if (window.innerWidth <= 992) {
            columnCount = 3; // 3 columns for tablet view
            rowCount = 2;
        }
        if (window.innerWidth <= 400) {
            columnCount = 2; // 2 columns for mobile view
            rowCount = 2;
        }

        const productsRow = document.getElementById("products-row");
        const rowDiv = document.createElement("div");
        rowDiv.classList.add("row", "mb-4"); // Adding mb-4 class for margin-bottom

        for (let i = count; i < count + columnCount * rowCount && i < products.length; i++) {
            const product = products[i];
            const productHtml = `
          <div class="col-lg-${12 / columnCount} col-md-6">
            <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                    <div class="list-card-image">
                        <div class="star position-absolute"><span class="badge text-bg-success"><i
                                    class="feather-star"></i> 3.1 (300+)</span></div>
                        <div class="favourite-heart text-danger position-absolute rounded-circle"><a href="#"><i
                                    class="feather-heart"></i></a></div>
                        <div class="member-plan position-absolute"><span class="badge text-bg-dark">Promoted</span>
                        </div>
                        <a href="#"> <img alt="#" src="${product.imageUrl}"
                                class="img-fluid item-img w-100"> </a>
                    </div>
                    <div class="p-3 position-relative">
                        <div class="list-card-body">
                            <h6 class="mb-1"><a href="#" class="text-black">${product.name} </a>
                            </h6>
                            <p class="text-gray mb-1 small">${product.description}</p>
                            <p class="text-gray mb-1 rating"> </p>
                            <ul class="rating-stars list-unstyled">
                                <li> <i class="feather-star star_active"></i> <i class="feather-star star_active"></i>
                                    <i class="feather-star star_active"></i> <i class="feather-star star_active"></i>
                                    <i class="feather-star"></i> </li>
                            </ul>
                            <p></p>
                        </div>
                        <div class="list-card-badge"> <span class="badge text-bg-danger"><a href="#" class="btn btn-primary">Add to Cart</a></span> <small>65%
                                OSAHAN50</small> </div>
                    </div>
                </div>
          </div>

        `;
            productsRow.innerHTML += productHtml;
        }

        productsRow.appendChild(rowDiv); // Append the row with margin-bottom to the main products container

        // Insert a spacer between rows
        if (products.length - count > columnCount) {
            const spacerDiv = document.createElement("div");
            spacerDiv.classList.add("w-100", "mb-4");
            productsRow.appendChild(spacerDiv);
        }
        count += columnCount * rowCount;
    };

    addProductsToRow();



    window.addEventListener("resize", () => {
        count = 0;
        document.getElementById("products-row").innerHTML = "";
        addProductsToRow();
    });
</script> --}}
