@extends('user.layouts.app')

@section('maincontent')
    @include('user.components.header')


    @include('user.components.osahan_home')



    <div class="clearfix"></div>


    <div class="osahan-home-page">
        @include('user.components.filtermodal')

        {{-- @include('user.components.offers') --}}

        <div class="offer-section py-4">
            <div class="container position-relative">
                <img alt="#" src="{{ asset('BhandaraKaro/images/om-1.png') }}" class="restaurant-pic"
                    style="background-color: #fff; ">
                <div class="pt-3 text-white">
                    <h2 class="font-weight-bold">Bhandara Karo Menu</h2>
                    <p class="text-white m-0">963 Madyson Drive Suite 679</p>
                    <div class="rating-wrap d-flex align-items-center mt-2">
                        <ul class="rating-stars list-unstyled">
                            <li>
                                <i class="feather-star text-warning"></i>
                                <i class="feather-star text-warning"></i>
                                <i class="feather-star text-warning"></i>
                                <i class="feather-star text-warning"></i>
                                <i class="feather-star"></i>
                            </li>
                        </ul>
                        <p class="label-rating text-white ml-2 small"> (245 Reviews)</p>
                    </div>
                </div>
                <div class="pb-4">
                    <div class="row">
                        <div class="col-6 col-md-2">
                            <p class="text-white-50 font-weight-bold m-0 small">Delivery</p>
                            <p class="text-white m-0">Free</p>
                        </div>
                        <div class="col-6 col-md-2">
                            <p class="text-white-50 font-weight-bold m-0 small">Open time</p>
                            <p class="text-white m-0">8:00 AM</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="p-3 bg-primary bg-primary mt-n3 rounded position-relative">
                <div class="d-flex align-items-center">
                    {{-- <div class="feather_icon">
                        <a href="#ratings-and-reviews" class="text-decoration-none text-dark"><i
                                class="p-2 bg-light rounded-circle font-weight-bold  feather-upload"></i></a>
                        <a href="#ratings-and-reviews" class="text-decoration-none text-dark mx-2"><i
                                class="p-2 bg-light rounded-circle font-weight-bold  feather-star"></i></a>
                        <a href="#ratings-and-reviews" class="text-decoration-none text-dark"><i
                                class="p-2 bg-light rounded-circle font-weight-bold feather-map-pin"></i></a>
                    </div>
                    <a href="contact-us.html" class="btn btn-sm btn-outline-light ml-auto">Contact</a> --}}
                </div>
            </div>
        </div>

        <br>
        <!-- Content section -->
        <div class="container">
            <div class="pt-4 pb-2 title d-flex align-items-center">
                <h5 class="m-0">Trending this week</h5>
                {{-- <a class="fw-bold ms-auto" href="#">View all <i class="feather-chevrons-right"></i></a> --}}
            </div>
            <div class="trending-slider">
                @foreach ($trendingfoods as $trendingfood)
                    <div class="osahan-slider-item">
                        <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                            <div class="list-card-image">
                                <div class="star position-absolute"><span class="badge text-bg-success"><i
                                            class="feather-star"></i>
                                        3.1 (300+)</span></div>
                                <div class="favourite-heart text-danger position-absolute rounded-circle">
                                    {{-- <a
                                        href="#"><i class="feather-heart"></i></a> --}}
                                </div>
                                <div class="member-plan position-absolute"><span
                                        class="badge text-bg-dark">{{ $trendingfood->tags[0] }}</span>
                                </div>
                                <a href="{{ route('foodproductdetail', $trendingfood->id) }}"> <img
                                        alt="{{ $trendingfood->name }} "
                                        src="foodproductImage/{{ $trendingfood->image[0] }}"
                                        class="img-fluid item-img w-100"> </a>
                            </div>
                            <div class="p-3 position-relative">
                                <div class="list-card-body">
                                    <h6 class="mb-1"><a href="{{ route('foodproductdetail', $trendingfood->id) }}"
                                            class="text-black">{{ $trendingfood->name }} </a>
                                    </h6>
                                    <p class="text-gray mb-3">{{ $trendingfood->category->category_name }} • Indian •
                                        {{ $trendingfood->tags[1] }}</p>
                                    <h6 class="text-gray mb-3 time"><span
                                            class="bg-light text-dark rounded-sm py-1 px-2"><i></i>
                                            ₹{{ $trendingfood->price }}</span> <span class="float-end text-black-50">
                                            {{ $trendingfood->ingredient }}</span></h6>
                                </div>
                                <div class="list-card-badge"> <span class="badge text-bg-danger">OFFER</span> <small> Use
                                        Coupon {{ $trendingfood->offer->offer_code }}</small> </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- <div class="osahan-slider-item">
                    <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                        <div class="list-card-image">
                            <div class="star position-absolute"><span class="badge text-bg-success"><i
                                        class="feather-star"></i>
                                    Pure Veg</span></div>
                            <div class="favourite-heart text-danger position-absolute rounded-circle"><a href="#"><i
                                        class="feather-heart"></i></a></div>
                            <div class="member-plan position-absolute"><span class="badge text-bg-dark">Promoted</span>
                            </div>
                            <a href="#"> <img alt="#" src="{{ asset('BhandaraKaro/images/menu/19.png') }}"
                                    class="img-fluid item-img w-100"> </a>
                        </div>
                        <div class="p-3 position-relative">
                            <div class="list-card-body">
                                <h6 class="mb-1"><a href="#" class="text-black">Thai Famous Cuisine</a> </h6>
                                <p class="text-gray mb-3">North Indian • Indian • Pure veg</p>
                                <p class="text-gray mb-3 time"><span class="bg-light text-dark rounded-sm py-1 px-2"><i
                                            class="feather-clock"></i> 30–35 min</span> <span
                                        class="float-end text-black-50">
                                        $250 FOR TWO</span></p>
                            </div>
                            <div class="list-card-badge"> <span class="badge text-bg-success">OFFER</span> <small>65%
                                    off</small> </div>
                        </div>
                    </div>
                </div>
                <div class="osahan-slider-item">
                    <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                        <div class="list-card-image">
                            <div class="star position-absolute"><span class="badge text-bg-success"><i
                                        class="feather-star"></i>
                                    Pure Veg</span></div>
                            <div class="favourite-heart text-danger position-absolute rounded-circle"><a href="#"><i
                                        class="feather-heart"></i></a></div>
                            <div class="member-plan position-absolute"><span class="badge text-bg-dark">Promoted</span>
                            </div>
                            <a href="#"> <img alt="#" src="{{ asset('BhandaraKaro/images/menu/29.png') }}"
                                    class="img-fluid item-img w-100"> </a>
                        </div>
                        <div class="p-3 position-relative">
                            <div class="list-card-body">
                                <h6 class="mb-1"><a href="#" class="text-black">The osahan Restaurant </a> </h6>
                                <p class="text-gray mb-3">North • Hamburgers • Pure veg</p>
                                <p class="text-gray mb-3 time"><span class="bg-light text-dark rounded-sm py-1 px-2"><i
                                            class="feather-clock"></i> 15–25 min</span> <span
                                        class="float-end text-black-50">
                                        $500 FOR TWO</span></p>
                            </div>
                            <div class="list-card-badge"> <span class="badge text-bg-danger">OFFER</span> <small>65%
                                    OSAHAN50</small> </div>
                        </div>
                    </div>
                </div>
                <div class="osahan-slider-item">
                    <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                        <div class="list-card-image">
                            <div class="star position-absolute"><span class="badge text-bg-success"><i
                                        class="feather-star"></i>
                                    Pure Veg</span></div>
                            <div class="favourite-heart text-danger position-absolute rounded-circle"><a href="#"><i
                                        class="feather-heart"></i></a></div>
                            <div class="member-plan position-absolute"><span class="badge text-bg-dark">Promoted</span>
                            </div>
                            <a href="#"> <img alt="#" src="{{ asset('BhandaraKaro/images/menu/6.png') }}"
                                    class="img-fluid item-img w-100"> </a>
                        </div>
                        <div class="p-3 position-relative">
                            <div class="list-card-body">
                                <h6 class="mb-1"><a href="#" class="text-black">Thai Famous Cuisine</a> </h6>
                                <p class="text-gray mb-3">North Indian • Indian • Pure veg</p>
                                <p class="text-gray mb-3 time"><span class="bg-light text-dark rounded-sm py-1 px-2"><i
                                            class="feather-clock"></i> 30–35 min</span> <span
                                        class="float-end text-black-50">
                                        $250 FOR TWO</span></p>
                            </div>
                            <div class="list-card-badge"> <span class="badge text-bg-success">OFFER</span> <small>65%
                                    off</small> </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>

        <div class="container mt-4">
            <div class="input-group mb-4">
                <form style="width: 95%;" action="{{ url()->current() }}" method="GET" class="d-flex">
                    <input type="text" class="form-control form-control-lg input_search border-right-0 flex-grow-1"
                        id="inlineFormInputGroup" name="search" placeholder="Bhandara Karo...">
                    <div class="input-group-prepend">
                        <button type="submit"
                            class="btn input-group-text bg-white border_search border-left-0 text-primary">
                            <i class="feather-search"></i>
                        </button>
                    </div>
                </form>
            </div>
            <div class="row" id="products-row">
                <!-- products will be added here dynamically -->
            </div>
        </div>
    </div>




    <div class="clearfix"></div>



    @include('user.components.osahanmenufooter')


    <div class="clearfix"></div>

    @include('user.components.footer')


    @include('user.components.scripts')
    {{-- <script>
        // Define an array of products
        const products = [{
                tag: "Pure Veg",
                name: "Product 1",
                description: "Some quick example text to build on the card title and make up the bulk of the card's content.",
                imageUrl: "{{ asset('BhandaraKaro/images/menu/1.png') }}",
            },
            {
                name: "Product 2",
                description: "Some quick example text to build on the card title and make up the bulk of the card's content.",
                imageUrl: "{{ asset('BhandaraKaro/images/menu/2.png') }}",
            },
            {
                name: "Product 3",
                description: "Some quick example text to build on the card title and make up the bulk of the card's content.",
                imageUrl: "{{ asset('BhandaraKaro/images/menu/3.png') }}",
            },
            {
                name: "Product 4",
                description: "Some quick example text to build on the card title and make up the bulk of the card's content.",
                imageUrl: "{{ asset('BhandaraKaro/images/menu/4.png') }}",
            },
            {
                name: "Product 5",
                description: "Some quick example text to build on the card title and make up the bulk of the card's content.",
                imageUrl: "{{ asset('BhandaraKaro/images/menu/5.png') }}",
            },
            {
                name: "Product 6",
                description: "Some quick example text to build on the card title and make up the bulk of the card's content.",
                imageUrl: "{{ asset('BhandaraKaro/images/menu/6.png') }}",
            },
            {
                name: "Product 7",
                description: "Some quick example text to build on the card title and make up the bulk of the card's content.",
                imageUrl: "{{ asset('BhandaraKaro/images/menu/7.png') }}",
            },
            {
                name: "Product 8",
                description: "Some quick example text to build on the card title and make up the bulk of the card's content.",
                imageUrl: "{{ asset('BhandaraKaro/images/menu/8.png') }}",
            },
            {
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
            {
                name: "Product 17",
                description: "Some quick example text to build on the card title and make up the bulk of the card's content.",
                imageUrl: "{{ asset('BhandaraKaro/images/menu/17.png') }}",
            },
            {
                name: "Product 18",
                description: "Some quick example text to build on the card title and make up the bulk of the card's content.",
                imageUrl: "{{ asset('BhandaraKaro/images/menu/18.png') }}",
            },
            {
                name: "Product 19",
                description: "Some quick example text to build on the card title and make up the bulk of the card's content.",
                imageUrl: "{{ asset('BhandaraKaro/images/menu/19.png') }}",
            },
            {
                name: "Product 20",
                description: "Some quick example text to build on the card title and make up the bulk of the card's content.",
                imageUrl: "{{ asset('BhandaraKaro/images/menu/20.png') }}",
            },
            {
                name: "Product 21",
                description: "Some quick example text to build on the card title and make up the bulk of the card's content.",
                imageUrl: "{{ asset('BhandaraKaro/images/menu/21.png') }}",
            },
            {
                name: "Product 22",
                description: "Some quick example text to build on the card title and make up the bulk of the card's content.",
                imageUrl: "{{ asset('BhandaraKaro/images/menu/22.png') }}",
            },
            {
                name: "Product 23",
                description: "Some quick example text to build on the card title and make up the bulk of the card's content.",
                imageUrl: "{{ asset('BhandaraKaro/images/menu/23.png') }}",
            },
            {
                name: "Product 24",
                description: "Some quick example text to build on the card title and make up the bulk of the card's content.",
                imageUrl: "{{ asset('BhandaraKaro/images/menu/24.png') }}",
            },
            {
                name: "Product 25",
                description: "Some quick example text to build on the card title and make up the bulk of the card's content.",
                imageUrl: "{{ asset('BhandaraKaro/images/menu/25.png') }}",
            },
            {
                name: "Product 26",
                description: "Some quick example text to build on the card title and make up the bulk of the card's content.",
                imageUrl: "{{ asset('BhandaraKaro/images/menu/26.png') }}",
            },
            {
                name: "Product 27",
                description: "Some quick example text to build on the card title and make up the bulk of the card's content.",
                imageUrl: "{{ asset('BhandaraKaro/images/menu/27.png') }}",
            },
            {
                name: "Product 28",
                description: "Some quick example text to build on the card title and make up the bulk of the card's content.",
                imageUrl: "{{ asset('BhandaraKaro/images/menu/28.png') }}",
            },
            {
                name: "Product 29",
                description: "Some quick example text to build on the card title and make up the bulk of the card's content.",
                imageUrl: "{{ asset('BhandaraKaro/images/menu/29.png') }}",
            },
            {
                name: "Product 30",
                description: "Some quick example text to build on the card title and make up the bulk of the card's content.",
                imageUrl: "{{ asset('BhandaraKaro/images/menu/30.png') }}",
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

        const addProductsToRow = () => {
            let columnCount = 4; // Default to 4 columns for web view

            if (window.innerWidth <= 992) {
                columnCount = 3; // 3 columns for tablet view
            }
            if (window.innerWidth <= 400) {
                columnCount = 2; // 2 columns for mobile view
            }

            const productsRow = document.getElementById("products-row");
            const rowDiv = document.createElement("div");
            rowDiv.classList.add("row", "mb-4"); // Adding mb-4 class for margin-bottom

            for (let i = count; i < count + columnCount && i < products.length; i++) {
                const product = products[i];
                const productHtml = `
          <div class="col-lg-${12 / columnCount} col-md-6">
            <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                    <div class="list-card-image">
                        <div class="star position-absolute"><span class="badge text-bg-success"><i
                                    class="feather-star"></i> Pure Veg</span></div>
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
                        <div class="list-card-badge"> <a href="/cart"><span class="btn btn-outline-primary">Add to Cart</span></a> <small>65%
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
                spacerDiv.classList.add("w-100");
                productsRow.appendChild(spacerDiv);
            }
            count += columnCount;
        };

        addProductsToRow();

        window.addEventListener("scroll", () => {
            const {
                scrollTop,
                scrollHeight,
                clientHeight
            } = document.documentElement;
            if (scrollTop + clientHeight >= scrollHeight - 5 && count < products.length) {
                addProductsToRow();
            }
        });

        window.addEventListener("resize", () => {
            count = 0;
            document.getElementById("products-row").innerHTML = "";
            addProductsToRow();
        });
    </script> --}}
    <script>
        const products = @json($foodproducts);

        let count = 0;

        const addProductsToRow = () => {
            const productsRow = document.getElementById("products-row");
            const rowDiv = document.createElement("div");
            rowDiv.classList.add("row", "mb-4");

            for (let i = count; i < count + 4 && i < products.length; i++) {
                const product = products[i];
                const productHtml = `
                    <div class="col-lg-3 col-md-6">
                        <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                            <div class="list-card-image">
                                <div class="star position-absolute"><span class="badge text-bg-success"><i
                                     class="feather-star"></i>${product.tags[1]}</span>
                                </div>
                                <div class="favourite-heart text-danger position-absolute rounded-circle">

                                        </div>
                                <div class="member-plan position-absolute"><span
                                        class="badge text-bg-dark">${product.tags[0]}</span>
                                </div>
                                <!-- Add your product image here -->
                                <a href="menu/${product.id}"><img alt="#" src="foodproductImage/${product.image[0]}" class="img-fluid item-img w-100"></a>
                            </div>
                            <div class="p-3 position-relative">
                                <div class="list-card-body">
                                    <h6 class="mb-1"><a href="menu/${product.id}" class="text-black">${product.name}</a></h6>
                                    <p class="text-gray mb-1 small">${product.description}</p>
                                    <h5 class="mb-1"><a href="#"
                                            class="text-black">₹${product.price}
                                        </a>
                                    </h5>
                                </div>
                                <div class="list-card-badge">
                                    <a href="menu/${product.id}"><span class="btn btn-outline-primary">View More</span></a>
                                    <small>${product.offer ? product.offer.offer_code : ''}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                `;
                productsRow.innerHTML += productHtml;
            }
            productsRow.appendChild(rowDiv);

            if (products.length - count > 4) {
                const spacerDiv = document.createElement("div");
                spacerDiv.classList.add("w-100");
                productsRow.appendChild(spacerDiv);
            }
            count += 4;
        };

        addProductsToRow();

        window.addEventListener("scroll", () => {
            const {
                scrollTop,
                scrollHeight,
                clientHeight
            } = document.documentElement;
            if (scrollTop + clientHeight >= scrollHeight - 5 && count < products.length) {
                addProductsToRow();
            }
        });

        window.addEventListener("resize", () => {
            count = 0;
            document.getElementById("products-row").innerHTML = "";
            addProductsToRow();
        });
    </script>
@endsection
