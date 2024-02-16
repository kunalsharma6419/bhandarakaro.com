<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Bhandara Karo">
    <meta name="author" content="Bhandara Karo">
    <link rel="icon" type="image/png" href="BhandaraKaro/NewHome/public/img/fav.png">
    <title>BhandaraKaro</title>
    <link href="BhandaraKaro/NewHome/public/vendor/slick/slick/slick.css" rel="stylesheet" type="text/css">
    <link href="BhandaraKaro/NewHome/public/vendor/slick/slick/slick-theme.css" rel="stylesheet" type="text/css">
    <link href="BhandaraKaro/NewHome/public/vendor/icons/feather.css" rel="stylesheet" type="text/css">
    <link href="BhandaraKaro/NewHome/public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="BhandaraKaro/NewHome/public/css/style.css" rel="stylesheet">
    <link href="BhandaraKaro/NewHome/public/css/custom.css" rel="stylesheet">
    <link href="BhandaraKaro/NewHome/public/vendor/sidebar/demo.css" rel="stylesheet">
</head>

<body class="fixed-bottom-bar">
    <header class="section-header">
        <section class="header-main shadow-sm bg-white">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-1">
                        <div class="mainlogo">
                            <a href="{{ url('/') }}" class="brand-wrap mb-0"> <img
                                    src="BhandaraKaro/images/LOGO1.png">
                            </a>
                        </div>
                    </div>
                    <div class="col-3 d-flex align-items-center m-none locbox">
                        <div class="dropdown me-3"> <a class="text-dark dropdown-toggle d-flex align-items-center py-3"
                                href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <div><i class="feather-map-pin me-2 bg-light rounded-pill p-2 icofont-size"></i></div>
                                <div>Delhi NCR </div>
                            </a>
                            <div class="dropdown-menu p-0 drop-loc">
                                <div class="osahan-country">
                                    <div class="filter">
                                        <div class="border-bottom locationdp">
                                            <div class="form-check form-check-reverse m-0">
                                                <input type="radio" id="customRadio1" name="location"
                                                    class="form-check-input" checked>
                                                <label class="form-check-label text-start w-100"
                                                    for="customRadio1">Delhi NCR</label>
                                            </div>
                                        </div>
                                        <div class="border-bottom locationdp">
                                            <div class="form-check form-check-reverse m-0">
                                                <input type="radio" id="customRadio1" name="location"
                                                    class="form-check-input">
                                                <label class="form-check-label text-start w-100"
                                                    for="customRadio1">mumbai</label>
                                            </div>
                                        </div>
                                        <div class="border-bottom locationdp">
                                            <div class="form-check form-check-reverse m-0">
                                                <input type="radio" id="customRadio1" name="location"
                                                    class="form-check-input">
                                                <label class="form-check-label text-start w-100"
                                                    for="customRadio1">Bengaluru</label>
                                            </div>
                                        </div>
                                        <div class="border-bottom locationdp">
                                            <div class="form-check form-check-reverse m-0">
                                                <input type="radio" id="customRadio2" name="location"
                                                    class="form-check-input">
                                                <label class="form-check-label text-start w-100"
                                                    for="customRadio2">Hyderabad</label>
                                            </div>
                                        </div>
                                        <div class="border-bottom locationdp">
                                            <div class="form-check form-check-reverse m-0">
                                                <input type="radio" id="customRadio3" name="location"
                                                    class="form-check-input">
                                                <label class="form-check-label text-start w-100"
                                                    for="customRadio3">Ahmedabad</label>
                                            </div>
                                        </div>
                                        <div class="border-bottom locationdp">
                                            <div class="form-check form-check-reverse m-0">
                                                <input type="radio" id="customRadio4" name="location"
                                                    class="form-check-input">
                                                <label class="form-check-label text-start w-100"
                                                    for="customRadio4">Chennai</label>
                                            </div>
                                        </div>
                                        <div class="border-bottom locationdp">
                                            <div class="form-check form-check-reverse m-0">
                                                <input type="radio" id="customRadio5" name="location"
                                                    class="form-check-input">
                                                <label class="form-check-label text-start w-100"
                                                    for="customRadio5">Kolkata</label>
                                            </div>
                                        </div>
                                        <div class="border-bottom locationdp">
                                            <div class="form-check form-check-reverse m-0">
                                                <input type="radio" id="customRadio6" name="location"
                                                    class="form-check-input">
                                                <label class="form-check-label text-start w-100"
                                                    for="customRadio6">Kochi</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="d-flex align-items-center justify-content-end pe-5"> <a href="#"
                                class="widget-header me-4 text-dark">
                                <div class="icon d-flex align-items-center"> <i
                                        class="feather-search h6 me-2 mb-0"></i> <span>Search</span> </div>
                            </a> <a href="#" class="widget-header me-4 text-white btn bg-primary m-none">
                                <div class="icon d-flex align-items-center"> <i class="feather-disc h6 me-2 mb-0"></i>
                                    <span>Offers</span>
                                </div>
                            </a>

                            <a href="{{ route('user.login') }}" class="widget-header me-4 text-dark m-none ">
                                <div class="icon d-flex align-items-center"> <i class="feather-user h6 me-2 mb-0"></i>
                                    <span>Sign in</span>
                                </div>
                            </a>


                            <!--            <a href="#" class="btn btn-outline-primary mx-2  ">{ { Auth::user()->name } }</a> -->

                            <div class="dropdown me-4 m-none">
                                <a href="#" class="dropdown-toggle text-dark py-3 d-block"
                                    id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false"> <img alt="#" src="../BhandaraKaro/images/LOGO1.png"
                                        class="img-fluid rounded-circle header-user me-2 header-user">BhandaraKaro</a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">My account</a>
                                    <a class="dropdown-item" href="#">Delivery support</a>
                                    <a class="dropdown-item" href="#">Contant us</a>
                                    <a class="dropdown-item" href="#">Term of use</a>
                                    <a class="dropdown-item" href="#">Privacy policy</a>

                                    <div></div>
                                </div>
                            </div>
                            <a href="#" class="widget-header me-4 text-dark">
                                <div class="icon d-flex align-items-center"> <i
                                        class="feather-shopping-cart h6 me-2 mb-0"></i> <span>Cart</span> </div>
                            </a> <a class="toggle" href="#"> <span></span> </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </header>


    <div class="osahan-home-page">
        <div class="bg-primary p-3 d-none srcdone">
            <div class="text-black">
                <div class="title d-flex align-items-center">
                    <a class="toggle" href="https://bhandarakaro.com/"> <span></span> </a>
                    <h4 class="fw-bold m-0 ps-5 moblogo"><a href="https://bhandarakaro.com/"><img
                                src="../BhandaraKaro/images/LOGO1.png" /></a></h4>
                    <a class="text-black fw-bold ms-auto" data-bs-toggle="modal" data-bs-target="#exampleModal"
                        href="https://bhandarakaro.com/"><i class="feather-filter"></i></a>
                </div>
            </div>
            <div class="input-group rounded shadow-sm mt-3 bdrsrch"> <span
                    class="input-group-text bg-transparent border-0 rounded-0"><i class="feather-search"></i></span>
                <input type="text" class="form-control bg-transparent border-0 rounded-0 px-0 shadow-none"
                    placeholder="Enter Your Location" aria-label="Enter Your Location">
            </div>
        </div>
    </div>



    <div class="clearfix"></div>

    <div class="osahan-home-page">
        <div class="bg-primary p-3 d-none">
            <div class="text-white">
                <div class="title d-flex align-items-center"> <a class="toggle" href="#"> <span></span> </a>
                    <h4 class="fw-bold m-0 ps-5">Browse</h4>
                    <a class="text-white fw-bold ms-auto" data-bs-toggle="modal" data-bs-target="#exampleModal"
                        href="#">Filter</a>
                </div>
            </div>
            <div class="input-group bg-white rounded shadow-sm mt-3 ftrtop"> <span
                    class="input-group-text bg-transparent border-0 rounded-0"><i class="feather-search"></i></span>
                <input type="text" class="form-control bg-transparent border-0 rounded-0 px-0 shadow-none"
                    placeholder="Enter Your Location" aria-label="Enter Your Location">
            </div>
        </div>





        <section class="quick-area">
            <div class="container-fluid">
                <div class="row">


                    <div class="col-lg-6">
                        <!--Signup Message After Signup-->
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <div class="card">
                                        <div class="card-header">Dashboard</div>
                                        <div class="card-body">
                                            @if (session('message'))
                                                <div class="alert alert-success" role="alert">
                                                    {{ session('message') }}
                                                </div>
                                            @endif
                                            You are logged in!
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Signup Message After Signup-->
                        <div class="quick-box-right">
                            <div class="all-category">
                                <h2>Locations for Your First Bhandara</h2>
                                <div class="catlist-box">
                                    <div class="row">
                                        <div class="col-lg-3 catcol">
                                            <div class="category-lists">
                                                <img src="../BhandaraKaro/images/city/image 1.png" />
                                                <h3>Delhi</h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 catcol">
                                            <div class="category-lists">
                                                <img src="../BhandaraKaro/images/city/image 2.png" />
                                                <h3>Vrindawan</h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 catcol">
                                            <div class="category-lists">
                                                <img src="../BhandaraKaro/images/city/image 3.png" />
                                                <h3>Noida</h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 catcol">
                                            <div class="category-lists">
                                                <img src="../BhandaraKaro/images/city/image 4.png" />
                                                <h3>Kedarnath</h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 catcol">
                                            <div class="category-lists">
                                                <img src="../BhandaraKaro/images/city/image 5.png" />
                                                <h3>Ayodhya</h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 catcol">
                                            <div class="category-lists">
                                                <img src="../BhandaraKaro/images/city/image 6.png" />
                                                <h3>Haridwar</h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 catcol">
                                            <div class="category-lists">
                                                <img src="../BhandaraKaro/images/city/image 7.png" />
                                                <h3>Jammu</h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 catcol">
                                            <div class="category-lists">
                                                <img src="../BhandaraKaro/images/city/image 8.png" />
                                                <h3>Rajasthan</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="quick-box">
                            <div class="quick-deliver">
                                <h2>Book Your<br><b>Bhandara</b> from <br>Anywhere to Everywhere</h2>
                                <p>No Matter Where You are Who you are You Can Book Your Bhandara at your convenience.
                                </p>
                                <ul>
                                    <li>
                                        <img src="../BhandaraKaro/images/city/image 9.png" />
                                        <h3>Tirupati</h3>
                                    </li>
                                    <li>
                                        <img src="../BhandaraKaro/images/city/image 10.png" />
                                        <h3>Badrinath</h3>
                                    </li>
                                    <li>
                                        <img src="../BhandaraKaro/images/city/image 11.png" />
                                        <h3>Amritsar</h3>
                                    </li>
                                </ul>
                                <span>
                                    <a href="#">Book Now</a>
                                    <a href="https://bhandarakaro.com/register">Register Now</a>
                                </span>
                            </div>
                            <div class="shop-category"><img
                                    src="../BhandaraKaro/images/Brahmins-1-600x460-removebg.png" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>




        <div class="container">
            <div class="main-heading">Categories We Serve Bhandara</div>
            <div class="clearfix"></div>
            <div class="cat-slider">

                <div class="cat-item px-1 py-3">
                    <div class="category-lists d-block p-2">
                        <img src="../BhandaraKaro/images/cat/maindish.webp" class="img-fluid mb-2" />
                        <h3>Main Dishes</h3>
                    </div>
                </div>
                <div class="cat-item px-1 py-3">
                    <div class="category-lists d-block p-2">
                        <img src="../BhandaraKaro/images/cat/northIndian.webp" class="img-fluid mb-2" />
                        <h3>North Indian</h3>
                    </div>
                </div>
                <div class="cat-item px-1 py-3">
                    <div class="category-lists d-block p-2">
                        <img src="../BhandaraKaro/images/cat/sweets.webp" class="img-fluid mb-2" />
                        <h3>Sweets</h3>
                    </div>
                </div>
                <div class="cat-item px-1 py-3">
                    <div class="category-lists d-block p-2">
                        <img src="../BhandaraKaro/images/cat/snacks.webp" class="img-fluid mb-2" />
                        <h3>Snacks</h3>
                    </div>
                </div>
                <div class="cat-item px-1 py-3">
                    <div class="category-lists d-block p-2">
                        <img src="../BhandaraKaro/images/cat/beverages.webp" class="img-fluid mb-2" />
                        <h3>Beverages</h3>
                    </div>
                </div>
                <div class="cat-item px-1 py-3">
                    <div class="category-lists d-block p-2">
                        <img src="../BhandaraKaro/images/cat/desserts.webp" class="img-fluid mb-2" />
                        <h3>Desserts</h3>
                    </div>
                </div>
                <div class="cat-item px-1 py-3">
                    <div class="category-lists d-block p-2">
                        <img src="../BhandaraKaro/images/cat/southindian.webp" class="img-fluid mb-2" />
                        <h3>South Indian</h3>
                    </div>
                </div>
                <div class="cat-item px-1 py-3">
                    <div class="category-lists d-block p-2">
                        <img src="../BhandaraKaro/images/cat/dal.webp" class="img-fluid mb-2" />
                        <h3>Special Items</h3>
                    </div>
                </div>
                <div class="cat-item px-1 py-3">
                    <div class="category-lists d-block p-2">
                        <img src="../BhandaraKaro/images/cat/navratri.webp" class="img-fluid mb-2" />
                        <h3>Occasion Special</h3>
                    </div>
                </div>
                <div class="cat-item px-1 py-3">
                    <div class="category-lists d-block p-2">
                        <img src="../BhandaraKaro/images/cat/customise.jpeg" class="img-fluid mb-2" />
                        <h3>Customise Bhoj</h3>
                    </div>
                </div>
                <div class="cat-item px-1 py-3">
                    <div class="category-lists d-block p-2">
                        <img src="../BhandaraKaro/images/cat/salad.jpeg" class="img-fluid mb-2" />
                        <h3>Addon Items</h3>
                    </div>
                </div>

            </div>
        </div>

        <div class="bg-white">
            <div class="container">
                <div class="main-heading">Best offers for you</div>
                <div class="clearfix"></div>
                <div class="offer-slider">
                    <div class="cat-item px-1 py-3">
                        <a class="d-block text-center shadow-sm" href="#">
                            <img alt="#" src="../BhandaraKaro/images/1.png" class="img-fluid rounded">
                        </a>
                    </div>
                    <div class="cat-item px-1 py-3">
                        <a class="d-block text-center shadow-sm" href="#">
                            <img alt="#" src="../BhandaraKaro/images/2.png" class="img-fluid rounded">
                        </a>
                    </div>
                    <div class="cat-item px-1 py-3">
                        <a class="d-block text-center shadow-sm" href="#">
                            <img alt="#" src="../BhandaraKaro/images/3.png" class="img-fluid rounded">
                        </a>
                    </div>
                    <div class="cat-item px-1 py-3">
                        <a class="d-block text-center shadow-sm" href="#">
                            <img alt="#" src="../BhandaraKaro/images/4.png" class="img-fluid rounded">
                        </a>
                    </div>
                    <div class="cat-item px-1 py-3">
                        <a class="d-block text-center shadow-sm" href="#">
                            <img alt="#" src="../BhandaraKaro/images/5.png" class="img-fluid rounded">
                        </a>
                    </div>
                    <div class="cat-item px-1 py-3">
                        <a class="d-block text-center shadow-sm" href="#">
                            <img alt="#" src="../BhandaraKaro/images/6.png" class="img-fluid rounded">
                        </a>
                    </div>
                    <div class="cat-item px-1 py-3">
                        <a class="d-block text-center shadow-sm" href="#">
                            <img alt="#" src="../BhandaraKaro/images/4.png" class="img-fluid rounded">
                        </a>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="main-heading">Inspriration for Your First Bhandara</div>
                <div class="clearfix"></div>
                <div class="cat-slider">
                    <div class="cat-item px-1 py-3">
                        <a class="bg-white rounded d-block p-2 text-center shadow-sm" href="#">
                            <img alt="#" src="BhandaraKaro/NewHome/public/img/category/vegpulao2.png"
                                class="img-fluid mb-2">
                            <p class="cattxt">Veg Pulao</p>
                        </a>
                    </div>
                    <div class="cat-item px-1 py-3">
                        <a class="bg-white rounded d-block p-2 text-center shadow-sm" href="#">
                            <img alt="#" src="BhandaraKaro/NewHome/public/img/category/fullthali.png"
                                class="img-fluid mb-2">
                            <p class="cattxt">Full Thali</p>
                        </a>
                    </div>
                    <div class="cat-item px-1 py-3">
                        <a class="bg-white rounded d-block p-2 text-center shadow-sm" href="#">
                            <img alt="#" src="BhandaraKaro/NewHome/public/img/category/sweet1.png"
                                class="img-fluid mb-2">
                            <p class="cattxt">Sweets</p>
                        </a>
                    </div>
                    <div class="cat-item px-1 py-3">
                        <a class="bg-white rounded d-block p-2 text-center shadow-sm" href="#">
                            <img alt="#" src="BhandaraKaro/NewHome/public/img/category/dosa.png"
                                class="img-fluid mb-2">
                            <p class="cattxt">Dosa</p>
                        </a>
                    </div>
                    <div class="cat-item px-1 py-3">
                        <a class="bg-white rounded d-block p-2 text-center shadow-sm" href="#">
                            <img alt="#" src="BhandaraKaro/NewHome/public/img/category/south1.png"
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
                            <img alt="#" src="BhandaraKaro/NewHome/public/img/category/norththali.png"
                                class="img-fluid mb-2">
                            <p class="cattxt">North Indian</p>
                        </a>
                    </div>

                    <div class="cat-item px-1 py-3">
                        <a class="bg-white rounded d-block p-2 text-center shadow-sm" href="#">
                            <img alt="#" src="BhandaraKaro/NewHome/public/img/category/pasta.png"
                                class="img-fluid mb-2">
                            <p class="cattxt">Pasta</p>
                        </a>
                    </div>
                    <div class="cat-item px-1 py-3">
                        <a class="bg-white rounded d-block p-2 text-center shadow-sm" href="#">
                            <img alt="#" src="BhandaraKaro/NewHome/public/img/category/kulfi.png"
                                class="img-fluid mb-2">
                            <p class="cattxt">Kulfi</p>
                        </a>
                    </div>
                    <div class="cat-item px-1 py-3">
                        <a class="bg-white rounded d-block p-2 text-center shadow-sm" href="#">
                            <img alt="#" src="BhandaraKaro/NewHome/public/img/category/pavbhaji.png"
                                class="img-fluid mb-2">
                            <p class="cattxt">Pav Bhaji</p>
                        </a>
                    </div>
                    <div class="cat-item px-1 py-3">
                        <a class="bg-white rounded d-block p-2 text-center shadow-sm" href="#">
                            <img alt="#" src="BhandaraKaro/NewHome/public/img/category/poori1.png"
                                class="img-fluid mb-2">
                            <p class="cattxt">Poori</p>
                        </a>
                    </div>
                    <div class="cat-item px-1 py-3">
                        <a class="bg-white rounded d-block p-2 text-center shadow-sm" href="#">
                            <img alt="#" src="BhandaraKaro/NewHome/public/img/category/veg.png"
                                class="img-fluid mb-2">
                            <p class="cattxt">Pure Veg</p>
                        </a>
                    </div>
                    <div class="cat-item px-1 py-3">
                        <a class="bg-white rounded d-block p-2 text-center shadow-sm" href="#">
                            <img alt="#" src="BhandaraKaro/NewHome/public/img/category/vegroll.png"
                                class="img-fluid mb-2">
                            <p class="cattxt">Veg Rolls</p>
                        </a>
                    </div>
                    <div class="cat-item px-1 py-3">
                        <a class="bg-white rounded d-block p-2 text-center shadow-sm" href="#">
                            <img alt="#" src="BhandaraKaro/NewHome/public/img/category/south2.png"
                                class="img-fluid mb-2">
                            <p class="cattxt">South Indian</p>
                        </a>
                    </div>
                    <div class="cat-item px-1 py-3">
                        <a class="bg-white rounded d-block p-2 text-center shadow-sm" href="#">
                            <img alt="#" src="BhandaraKaro/NewHome/public/img/category/salad.jpg"
                                class="img-fluid mb-2">
                            <p class="cattxt">Salad</p>
                        </a>
                    </div>
                    <div class="cat-item px-1 py-3">
                        <a class="bg-white rounded d-block p-2 text-center shadow-sm" href="#">
                            <img alt="#" src="BhandaraKaro/NewHome/public/img/category/paratha.jpg"
                                class="img-fluid mb-2">
                            <p class="cattxt">Paratha</p>
                        </a>
                    </div>
                    <div class="cat-item px-1 py-3">
                        <a class="bg-white rounded d-block p-2 text-center shadow-sm" href="#">
                            <img alt="#" src="BhandaraKaro/NewHome/public/img/category/chole-bature.jpg"
                                class="img-fluid mb-2">
                            <p class="cattxt">Chole Bature</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>



        <section class="other-dises">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-12 foodslider">
                        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner" style="border-radius: 30px;">
                                <div class="carousel-item">
                                    <img src="../BhandaraKaro/images/1.png" class="d-block w-100">
                                </div>
                                <div class="carousel-item active">
                                    <img src="../BhandaraKaro/images/3.png" class="d-block w-100">
                                </div>
                                <div class="carousel-item">
                                    <img src="../BhandaraKaro/images/5.png" class="d-block w-100">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-12">
                        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                            <div class="carousel-inner" style="border-radius: 30px;">
                                <div class="carousel-item" data-bs-interval="10000">
                                    <img src="../BhandaraKaro/images/2.png" class="d-block w-100">
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="../BhandaraKaro/images/4.png" class="d-block w-100">
                                </div>
                                <div class="carousel-item active">
                                    <img src="../BhandaraKaro/images/6.png" class="d-block w-100">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleDark" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="bg-white">
            <div class="container">
                <div class="pt-4 pb-2 title d-flex align-items-center">
                    <h5 class="m-0">Flash Sales</h5>
                    <a class="fw-bold ms-auto" href="#">View all <i class="feather-chevrons-right"></i></a>
                </div>
            </div>
            <!-- flash Sales -->
            <div class="flash_container_main container">
                <div class="shopping_item_container container">
                    <div class="row">
                        <div class="col-lg-3 shopping_item col-sm-6" style="margin-bottom: 40px;">
                            <div class="deal_container">
                                <p class="deal_container_heading">Deal of the Day</p>
                                <div class="deal_countdown_container">
                                    <div class="deal_container_item">
                                        <div class="deal_container_item_hours_heading">
                                            <p>12</p>
                                        </div>
                                        <div class="deal_container_item_min_heading">
                                            <p>hour</p>
                                        </div>
                                    </div>
                                    <div class="deal_container_item">
                                        <div class="deal_container_item_hours_heading">
                                            <p>43</p>
                                        </div>
                                        <div class="deal_container_item_min_heading">
                                            <p>min</p>
                                        </div>
                                    </div>
                                    <div class="deal_container_item">
                                        <div class="deal_container_item_hours_heading">
                                            <p>12</p>
                                        </div>
                                        <div class="deal_container_item_min_heading">
                                            <p>sec</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="shopping_item_image">
                                <img src="../BhandaraKaro/images/dishes/poori.webp" alt="" width="300"
                                    height="162" />
                            </div>
                            <div class="shopping_item_detail">
                                <div class="shopping_item_name_des">
                                    <div class="shopping_item_name">
                                        <p>Poori Sabji</p>
                                    </div>
                                    <div class="shopping_item_des">
                                        <p>Served IN Bhandara and Langar</p>
                                    </div>
                                </div>
                                <div class="shopping_item_name_des">
                                    <div class="shopping_item_star">
                                        <span><img src="./BhandaraKaro/images/star.png"
                                                alt="" /></span><span><img
                                                src="./BhandaraKaro/images/star.png"
                                                alt="" /></span><span><img
                                                src="./BhandaraKaro/images/star.png"
                                                alt="" /></span><span><img
                                                src="./BhandaraKaro/images/star.png"
                                                alt="" /></span><span><img
                                                src="./BhandaraKaro/images/star.png" alt="" /></span>
                                    </div>
                                    <div class="shopping_item_rate">
                                        <span class="price">$69.98</span>
                                        <span class="discount">$123.99</span>
                                        <span class="descount_perc">-40%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 shopping_item col-sm-6">
                            <div class="deal_container">
                                <p class="deal_container_heading">Deal of the Day</p>
                                <div class="deal_countdown_container">
                                    <div class="deal_container_item">
                                        <div class="deal_container_item_hours_heading">
                                            <p>12</p>
                                        </div>
                                        <div class="deal_container_item_min_heading">
                                            <p>hour</p>
                                        </div>
                                    </div>
                                    <div class="deal_container_item">
                                        <div class="deal_container_item_hours_heading">
                                            <p>43</p>
                                        </div>
                                        <div class="deal_container_item_min_heading">
                                            <p>min</p>
                                        </div>
                                    </div>
                                    <div class="deal_container_item">
                                        <div class="deal_container_item_hours_heading">
                                            <p>12</p>
                                        </div>
                                        <div class="deal_container_item_min_heading">
                                            <p>sec</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="shopping_item_image">
                                <img src="../BhandaraKaro/images/dishes/roti.png" alt="" width="300"
                                    height="162" />
                            </div>
                            <div class="shopping_item_detail">
                                <div class="shopping_item_name_des">
                                    <div class="shopping_item_name">
                                        <p>Roti</p>
                                    </div>
                                    <div class="shopping_item_des">
                                        <p>Served IN Bhandara and Langar</p>
                                    </div>
                                </div>
                                <div class="shopping_item_name_des">
                                    <div class="shopping_item_star">
                                        <span><img src="./BhandaraKaro/images/star.png"
                                                alt="" /></span><span><img
                                                src="./BhandaraKaro/images/star.png"
                                                alt="" /></span><span><img
                                                src="./BhandaraKaro/images/star.png"
                                                alt="" /></span><span><img
                                                src="./BhandaraKaro/images/star.png"
                                                alt="" /></span><span><img
                                                src="./BhandaraKaro/images/star.png" alt="" /></span>
                                    </div>
                                    <div class="shopping_item_rate">
                                        <span class="price">$69.98</span>
                                        <span class="discount">$123.99</span>
                                        <span class="descount_perc">-40%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 shopping_item col-sm-6">
                            <div class="deal_container">
                                <p class="deal_container_heading">Deal of the Day</p>
                                <div class="deal_countdown_container">
                                    <div class="deal_container_item">
                                        <div class="deal_container_item_hours_heading">
                                            <p>12</p>
                                        </div>
                                        <div class="deal_container_item_min_heading">
                                            <p>hour</p>
                                        </div>
                                    </div>
                                    <div class="deal_container_item">
                                        <div class="deal_container_item_hours_heading">
                                            <p>43</p>
                                        </div>
                                        <div class="deal_container_item_min_heading">
                                            <p>min</p>
                                        </div>
                                    </div>
                                    <div class="deal_container_item">
                                        <div class="deal_container_item_hours_heading">
                                            <p>12</p>
                                        </div>
                                        <div class="deal_container_item_min_heading">
                                            <p>sec</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="shopping_item_image">
                                <img src="../BhandaraKaro/images/dishes/thali.png" alt="" width="300"
                                    height="162" />
                            </div>
                            <div class="shopping_item_detail">
                                <div class="shopping_item_name_des">
                                    <div class="shopping_item_name">
                                        <p>Thali</p>
                                    </div>
                                    <div class="shopping_item_des">
                                        <p>Served IN Bhandara and Langar</p>
                                    </div>
                                </div>
                                <div class="shopping_item_name_des">
                                    <div class="shopping_item_star">
                                        <span><img src="./BhandaraKaro/images/star.png"
                                                alt="" /></span><span><img
                                                src="./BhandaraKaro/images/star.png"
                                                alt="" /></span><span><img
                                                src="./BhandaraKaro/images/star.png"
                                                alt="" /></span><span><img
                                                src="./BhandaraKaro/images/star.png"
                                                alt="" /></span><span><img
                                                src="./BhandaraKaro/images/star.png" alt="" /></span>
                                    </div>
                                    <div class="shopping_item_rate">
                                        <span class="price">$69.98</span>
                                        <span class="discount">$123.99</span>
                                        <span class="descount_perc">-40%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 shopping_item col-sm-6">
                            <div class="deal_container">
                                <p class="deal_container_heading">Deal of the Day</p>
                                <div class="deal_countdown_container">
                                    <div class="deal_container_item">
                                        <div class="deal_container_item_hours_heading">
                                            <p>12</p>
                                        </div>
                                        <div class="deal_container_item_min_heading">
                                            <p>hour</p>
                                        </div>
                                    </div>
                                    <div class="deal_container_item">
                                        <div class="deal_container_item_hours_heading">
                                            <p>43</p>
                                        </div>
                                        <div class="deal_container_item_min_heading">
                                            <p>min</p>
                                        </div>
                                    </div>
                                    <div class="deal_container_item">
                                        <div class="deal_container_item_hours_heading">
                                            <p>12</p>
                                        </div>
                                        <div class="deal_container_item_min_heading">
                                            <p>sec</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="shopping_item_image">
                                <img src="../BhandaraKaro/images/dishes/daal.webp" alt="" width="300"
                                    height="162" />
                            </div>
                            <div class="shopping_item_detail">
                                <div class="shopping_item_name_des">
                                    <div class="shopping_item_name">
                                        <p>Daal</p>
                                    </div>
                                    <div class="shopping_item_des">
                                        <p>Served IN Bhandara and Langar</p>
                                    </div>
                                </div>
                                <div class="shopping_item_name_des">
                                    <div class="shopping_item_star">
                                        <span><img src="./BhandaraKaro/images/star.png"
                                                alt="" /></span><span><img
                                                src="./BhandaraKaro/images/star.png"
                                                alt="" /></span><span><img
                                                src="./BhandaraKaro/images/star.png"
                                                alt="" /></span><span><img
                                                src="./BhandaraKaro/images/star.png"
                                                alt="" /></span><span><img
                                                src="./BhandaraKaro/images/star.png" alt="" /></span>
                                    </div>
                                    <div class="shopping_item_rate">
                                        <span class="price">$69.98</span>
                                        <span class="discount">$123.99</span>
                                        <span class="descount_perc">-40%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--  -->
        </div>

    </div>
    </div>


    <div class="container">
        <div class="pt-4 pb-2 title d-flex align-items-center">
            <h5 class="m-0">Trending this week</h5>
            <a class="fw-bold ms-auto" href="#">View all <i class="feather-chevrons-right"></i></a>
        </div>
        <div class="trending-slider">
            <div class="osahan-slider-item">
                <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                    <div class="list-card-image">
                        <div class="star position-absolute"><span class="badge text-bg-success"><i
                                    class="feather-star"></i> 3.1 (300+)</span></div>
                        <div class="favourite-heart text-danger position-absolute rounded-circle"><a href="#"><i
                                    class="feather-heart"></i></a></div>
                        <div class="member-plan position-absolute"><span class="badge text-bg-dark">Promoted</span>
                        </div>
                        <a href="#"> <img alt="#" src="BhandaraKaro/NewHome/public/img/trending1.png"
                                class="img-fluid item-img w-100"> </a>
                    </div>
                    <div class="p-3 position-relative">
                        <div class="list-card-body">
                            <h6 class="mb-1"><a href="#" class="text-black">Famous Dave's Bar-B-Que </a>
                            </h6>
                            <p class="text-gray mb-3">Vegetarian • Indian • Pure veg</p>
                            <p class="text-gray mb-3 time"><span class="bg-light text-dark rounded-sm py-1 px-2"><i
                                        class="feather-clock"></i> 15–30 min</span> <span
                                    class="float-end text-black-50"> $350 FOR TWO</span></p>
                        </div>
                        <div class="list-card-badge"> <span class="badge text-bg-danger">OFFER</span> <small> Use
                                Coupon OSAHAN50</small> </div>
                    </div>
                </div>
            </div>
            <div class="osahan-slider-item">
                <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                    <div class="list-card-image">
                        <div class="star position-absolute"><span class="badge text-bg-success"><i
                                    class="feather-star"></i> 3.1 (300+)</span></div>
                        <div class="favourite-heart text-danger position-absolute rounded-circle"><a href="#"><i
                                    class="feather-heart"></i></a></div>
                        <div class="member-plan position-absolute"><span class="badge text-bg-dark">Promoted</span>
                        </div>
                        <a href="#"> <img alt="#" src="BhandaraKaro/NewHome/public/img/trending2.png"
                                class="img-fluid item-img w-100"> </a>
                    </div>
                    <div class="p-3 position-relative">
                        <div class="list-card-body">
                            <h6 class="mb-1"><a href="#" class="text-black">Thai Famous Cuisine</a> </h6>
                            <p class="text-gray mb-3">North Indian • Indian • Pure veg</p>
                            <p class="text-gray mb-3 time"><span class="bg-light text-dark rounded-sm py-1 px-2"><i
                                        class="feather-clock"></i> 30–35 min</span> <span
                                    class="float-end text-black-50"> $250 FOR TWO</span></p>
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
                                    class="feather-star"></i> 3.1 (300+)</span></div>
                        <div class="favourite-heart text-danger position-absolute rounded-circle"><a href="#"><i
                                    class="feather-heart"></i></a></div>
                        <div class="member-plan position-absolute"><span class="badge text-bg-dark">Promoted</span>
                        </div>
                        <a href="#"> <img alt="#" src="BhandaraKaro/NewHome/public/img/trending3.png"
                                class="img-fluid item-img w-100"> </a>
                    </div>
                    <div class="p-3 position-relative">
                        <div class="list-card-body">
                            <h6 class="mb-1"><a href="#" class="text-black">The osahan Restaurant </a> </h6>
                            <p class="text-gray mb-3">North • Hamburgers • Pure veg</p>
                            <p class="text-gray mb-3 time"><span class="bg-light text-dark rounded-sm py-1 px-2"><i
                                        class="feather-clock"></i> 15–25 min</span> <span
                                    class="float-end text-black-50"> $500 FOR TWO</span></p>
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
                                    class="feather-star"></i> 3.1 (300+)</span></div>
                        <div class="favourite-heart text-danger position-absolute rounded-circle"><a href="#"><i
                                    class="feather-heart"></i></a></div>
                        <div class="member-plan position-absolute"><span class="badge text-bg-dark">Promoted</span>
                        </div>
                        <a href="#"> <img alt="#" src="BhandaraKaro/NewHome/public/img/trending2.png"
                                class="img-fluid item-img w-100"> </a>
                    </div>
                    <div class="p-3 position-relative">
                        <div class="list-card-body">
                            <h6 class="mb-1"><a href="#" class="text-black">Thai Famous Cuisine</a> </h6>
                            <p class="text-gray mb-3">North Indian • Indian • Pure veg</p>
                            <p class="text-gray mb-3 time"><span class="bg-light text-dark rounded-sm py-1 px-2"><i
                                        class="feather-clock"></i> 30–35 min</span> <span
                                    class="float-end text-black-50"> $250 FOR TWO</span></p>
                        </div>
                        <div class="list-card-badge"> <span class="badge text-bg-success">OFFER</span> <small>65%
                                off</small> </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-3 title d-flex align-items-center">
            <h5 class="m-0">Most popular</h5>
            <a class="fw-bold ms-auto" href="#">26 places <i class="feather-chevrons-right"></i></a>
        </div>
        <div class="most_popular">
            <div class="row">
                <div class="col-md-3 pb-3">
                    <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                        <div class="list-card-image">
                            <div class="star position-absolute"><span class="badge text-bg-success"><i
                                        class="feather-star"></i> 3.1 (300+)</span></div>
                            <div class="favourite-heart text-danger position-absolute rounded-circle"><a
                                    href="#"><i class="feather-heart"></i></a></div>
                            <div class="member-plan position-absolute"><span
                                    class="badge text-bg-dark">Promoted</span></div>
                            <a href="#"> <img alt="#" src="BhandaraKaro/NewHome/public/img/popular1.png"
                                    class="img-fluid item-img w-100"> </a>
                        </div>
                        <div class="p-3 position-relative">
                            <div class="list-card-body">
                                <h6 class="mb-1"><a href="#" class="text-black">The osahan Restaurant </a>
                                </h6>
                                <p class="text-gray mb-1 small">• North • Hamburgers</p>
                                <p class="text-gray mb-1 rating"> </p>
                                <ul class="rating-stars list-unstyled">
                                    <li> <i class="feather-star star_active"></i> <i
                                            class="feather-star star_active"></i> <i
                                            class="feather-star star_active"></i> <i
                                            class="feather-star star_active"></i> <i class="feather-star"></i> </li>
                                </ul>
                                <p></p>
                            </div>
                            <div class="list-card-badge"> <span class="badge text-bg-danger">OFFER</span> <small>65%
                                    OSAHAN50</small> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 pb-3">
                    <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                        <div class="list-card-image">
                            <div class="star position-absolute"><span class="badge text-bg-success"><i
                                        class="feather-star"></i> 3.1 (300+)</span></div>
                            <div class="favourite-heart text-danger position-absolute rounded-circle"><a
                                    href="#"><i class="feather-heart"></i></a></div>
                            <div class="member-plan position-absolute"><span
                                    class="badge text-bg-dark">Promoted</span></div>
                            <a href="#"> <img alt="#" src="BhandaraKaro/NewHome/public/img/popular2.png"
                                    class="img-fluid item-img w-100"> </a>
                        </div>
                        <div class="p-3 position-relative">
                            <div class="list-card-body">
                                <h6 class="mb-1"><a href="#" class="text-black">Thai Famous Indian
                                        Cuisine</a></h6>
                                <p class="text-gray mb-1 small">• Indian • Pure veg</p>
                                <p class="text-gray mb-1 rating"> </p>
                                <ul class="rating-stars list-unstyled">
                                    <li> <i class="feather-star star_active"></i> <i
                                            class="feather-star star_active"></i> <i
                                            class="feather-star star_active"></i> <i
                                            class="feather-star star_active"></i> <i class="feather-star"></i> </li>
                                </ul>
                                <p></p>
                            </div>
                            <div class="list-card-badge"> <span class="badge text-bg-success">OFFER</span> <small>65%
                                    off</small> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 pb-3">
                    <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                        <div class="list-card-image">
                            <div class="star position-absolute"><span class="badge text-bg-success"><i
                                        class="feather-star"></i> 3.1 (300+)</span></div>
                            <div class="favourite-heart text-danger position-absolute rounded-circle"><a
                                    href="#"><i class="feather-heart"></i></a></div>
                            <div class="member-plan position-absolute"><span
                                    class="badge text-bg-dark">Promoted</span></div>
                            <a href="#"> <img alt="#" src="BhandaraKaro/NewHome/public/img/popular3.png"
                                    class="img-fluid item-img w-100"> </a>
                        </div>
                        <div class="p-3 position-relative">
                            <div class="list-card-body">
                                <h6 class="mb-1"><a href="#" class="text-black">The osahan Restaurant </a>
                                </h6>
                                <p class="text-gray mb-1 small">• Hamburgers • Pure veg</p>
                                <p class="text-gray mb-1 rating"> </p>
                                <ul class="rating-stars list-unstyled">
                                    <li> <i class="feather-star star_active"></i> <i
                                            class="feather-star star_active"></i> <i
                                            class="feather-star star_active"></i> <i
                                            class="feather-star star_active"></i> <i class="feather-star"></i> </li>
                                </ul>
                                <p></p>
                            </div>
                            <div class="list-card-badge"> <span class="badge text-bg-danger">OFFER</span> <small>65%
                                    OSAHAN50</small> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 pb-3">
                    <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                        <div class="list-card-image">
                            <div class="star position-absolute"><span class="badge text-bg-success"><i
                                        class="feather-star"></i> 3.1 (300+)</span></div>
                            <div class="favourite-heart text-danger position-absolute rounded-circle"><a
                                    href="#"><i class="feather-heart"></i></a></div>
                            <div class="member-plan position-absolute"><span
                                    class="badge text-bg-dark">Promoted</span></div>
                            <a href="#"> <img alt="#" src="BhandaraKaro/NewHome/public/img/popular4.png"
                                    class="img-fluid item-img w-100"> </a>
                        </div>
                        <div class="p-3 position-relative">
                            <div class="list-card-body">
                                <h6 class="mb-1"><a href="#" class="text-black">Bite Me Now
                                        Sandwiches</a></h6>
                                <p class="text-gray mb-1 small">American • Pure veg</p>
                                <p class="text-gray mb-1 rating"> </p>
                                <ul class="rating-stars list-unstyled">
                                    <li> <i class="feather-star star_active"></i> <i
                                            class="feather-star star_active"></i> <i
                                            class="feather-star star_active"></i> <i
                                            class="feather-star star_active"></i> <i class="feather-star"></i> </li>
                                </ul>
                                <p></p>
                            </div>
                            <div class="list-card-badge"> <span class="badge text-bg-success">OFFER</span> <small>65%
                                    off</small> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 pb-3">
                    <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                        <div class="list-card-image">
                            <div class="star position-absolute"><span class="badge text-bg-success"><i
                                        class="feather-star"></i> 3.1 (300+)</span></div>
                            <div class="favourite-heart text-danger position-absolute rounded-circle"><a
                                    href="#"><i class="feather-heart"></i></a></div>
                            <div class="member-plan position-absolute"><span
                                    class="badge text-bg-dark">Promoted</span></div>
                            <a href="#"> <img alt="#" src="BhandaraKaro/NewHome/public/img/popular5.png"
                                    class="img-fluid item-img w-100"> </a>
                        </div>
                        <div class="p-3 position-relative">
                            <div class="list-card-body">
                                <h6 class="mb-1"><a href="#" class="text-black">The osahan Restaurant </a>
                                </h6>
                                <p class="text-gray mb-1 small">• North • Hamburgers</p>
                                <p class="text-gray mb-1 rating"> </p>
                                <ul class="rating-stars list-unstyled">
                                    <li> <i class="feather-star star_active"></i> <i
                                            class="feather-star star_active"></i> <i
                                            class="feather-star star_active"></i> <i
                                            class="feather-star star_active"></i> <i class="feather-star"></i> </li>
                                </ul>
                                <p></p>
                            </div>
                            <div class="list-card-badge"> <span class="badge text-bg-danger">OFFER</span> <small>65%
                                    OSAHAN50</small> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 pb-3">
                    <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                        <div class="list-card-image">
                            <div class="star position-absolute"><span class="badge text-bg-success"><i
                                        class="feather-star"></i> 3.1 (300+)</span></div>
                            <div class="favourite-heart text-danger position-absolute rounded-circle"><a
                                    href="#"><i class="feather-heart"></i></a></div>
                            <div class="member-plan position-absolute"><span
                                    class="badge text-bg-dark">Promoted</span></div>
                            <a href="#"> <img alt="#" src="BhandaraKaro/NewHome/public/img/popular6.png"
                                    class="img-fluid item-img w-100"> </a>
                        </div>
                        <div class="p-3 position-relative">
                            <div class="list-card-body">
                                <h6 class="mb-1"><a href="#" class="text-black">Thai Famous Indian
                                        Cuisine</a></h6>
                                <p class="text-gray mb-1 small">• Indian • Pure veg</p>
                                <p class="text-gray mb-1 rating"> </p>
                                <ul class="rating-stars list-unstyled">
                                    <li> <i class="feather-star star_active"></i> <i
                                            class="feather-star star_active"></i> <i
                                            class="feather-star star_active"></i> <i
                                            class="feather-star star_active"></i> <i class="feather-star"></i> </li>
                                </ul>
                                <p></p>
                            </div>
                            <div class="list-card-badge"> <span class="badge text-bg-success">OFFER</span> <small>65%
                                    off</small> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 pb-3">
                    <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                        <div class="list-card-image">
                            <div class="star position-absolute"><span class="badge text-bg-success"><i
                                        class="feather-star"></i> 3.1 (300+)</span></div>
                            <div class="favourite-heart text-danger position-absolute rounded-circle"><a
                                    href="#"><i class="feather-heart"></i></a></div>
                            <div class="member-plan position-absolute"><span
                                    class="badge text-bg-dark">Promoted</span></div>
                            <a href="#"> <img alt="#"
                                    src="BhandaraKaro/NewHome/public/img/popular7.png"
                                    class="img-fluid item-img w-100"> </a>
                        </div>
                        <div class="p-3 position-relative">
                            <div class="list-card-body">
                                <h6 class="mb-1"><a href="#" class="text-black">The osahan Restaurant </a>
                                </h6>
                                <p class="text-gray mb-1 small">• Hamburgers • Pure veg</p>
                                <p class="text-gray mb-1 rating"> </p>
                                <ul class="rating-stars list-unstyled">
                                    <li> <i class="feather-star star_active"></i> <i
                                            class="feather-star star_active"></i> <i
                                            class="feather-star star_active"></i> <i
                                            class="feather-star star_active"></i> <i class="feather-star"></i> </li>
                                </ul>
                                <p></p>
                            </div>
                            <div class="list-card-badge"> <span class="badge text-bg-danger">OFFER</span> <small>65%
                                    OSAHAN50</small> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 pb-3">
                    <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                        <div class="list-card-image">
                            <div class="star position-absolute"><span class="badge text-bg-success"><i
                                        class="feather-star"></i> 3.1 (300+)</span></div>
                            <div class="favourite-heart text-danger position-absolute rounded-circle"><a
                                    href="#"><i class="feather-heart"></i></a></div>
                            <div class="member-plan position-absolute"><span
                                    class="badge text-bg-dark">Promoted</span></div>
                            <a href="#"> <img alt="#"
                                    src="BhandaraKaro/NewHome/public/img/popular8.png"
                                    class="img-fluid item-img w-100"> </a>
                        </div>
                        <div class="p-3 position-relative">
                            <div class="list-card-body">
                                <h6 class="mb-1"><a href="#" class="text-black">Bite Me Now
                                        Sandwiches</a></h6>
                                <p class="text-gray mb-1 small">American • Pure veg</p>
                                <p class="text-gray mb-1 rating"> </p>
                                <ul class="rating-stars list-unstyled">
                                    <li> <i class="feather-star star_active"></i> <i
                                            class="feather-star star_active"></i> <i
                                            class="feather-star star_active"></i> <i
                                            class="feather-star star_active"></i> <i class="feather-star"></i> </li>
                                </ul>
                                <p></p>
                            </div>
                            <div class="list-card-badge"> <span class="badge text-bg-success">OFFER</span>
                                <small>65% off</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>


    <section id="Delivery" style="padding: 0 !important;">
        <div class="subscribe-area">
            <div class="container">
                <div class="row">
                    <div class="section-title">
                        <h2>Bhandara Booking Available</h2>
                        <p>We are here 24*7 for handling Your Booked Bhandara</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="widget subscribe">
                            <center>
                                <a href="https://api.whatsapp.com/send?phone=9891007806" class="call">
                                    <button type="submit" class="search-submit default-btn">BOOK ORDER</button>
                                </a>
                            </center>
                            <div id="validator-newsletter" class="form-result"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="how-area">
        <div class="container">
            <div class="row">
                <h2>How BhandaraKaro Works</h2>
                <div class="clearfix"></div>

                <div class="col-lg-4">
                    <div class="how-box">
                        <img src="public/img/location.png" />
                        <h2>Share Your Venue Details</h2>
                        <p>Provide your venue information, and we'll display available services and offerings specific
                            to your Bhandara location.</p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="how-box">
                        <img src="public/img/select.png" />
                        <h2>Choose Your Offerings</h2>
                        <p>Select your desired services and items, compare options, and customize your Bhandara
                            offerings from various vendors.</p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="how-box">
                        <img src="public/img/delivery.png" />
                        <h2>Confirm and Schedule</h2>
                        <p>BhandaraKaro ensures prompt delivery of your bookings or allows you to schedule your Bhandara
                            event according to your preferred date and time.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="find-area">
        <div class="container">
            <div class="row">


                <div class="col-lg-5">
                    <div class="find-box">
                        <h2>Bhandara Karo - 24X7 Online Booking for Bhandara Specials.</h2>
                        <p>Are you looking for Bhanadara Specials bookings like poori, sabji, Snacks and Sarbats
                            Bhanadars to be Booked at your convenience. "Bhandara Karo - "Book Your Bhandara from
                            Anywhere to Everywhere"<br><br>

                            If you're planning a Bhandara event and need arrangements for the essentials, we've got you
                            covered. With our quick on-demand service, get everything you need for your Bhandara in 60
                            minutes or less. Contact us for further details and to receive a customized quote for your
                            Bhandara booking.</p>
                    </div>
                </div>

                <div class="col-lg-2 btpack">
                    <div class="find-box">
                        <img src="../BhandaraKaro/images/mandalas-logo.png" />
                        <br>
                        <img src="../BhandaraKaro/images/om.png" />
                        <br>
                        <img src="../BhandaraKaro/images/mandalas-logo.png" />
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="find-box">
                        <h2>Find The Religious Temples Near You</h2>
                        <p>Explore Temples in your neighborhood to book online your favorite poori, bhandaras, langars
                            and more.</p>
                        <!-- <img src="public/img/find-pic.png" /> -->
                        <img src="../BhandaraKaro/images/temple1.png" />
                        <div class="find-url"><a href="#">Find Temples</a></div>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <section class="process-area">
        <div class="theeka-process-desktop">
            <img src="BhandaraKaro/NewHome/public/img/desktop-banner.gif" />
        </div>


        <div class="theeka-process-mobile">
            <img src="BhandaraKaro/NewHome/public/img/mobile-banner.gif" />
        </div>
    </section>


    <div class="clearfix"></div>


    <div class="osahan-menu-fotter fixed-bottom bg-white px-3 py-2 text-center d-none">
        <div class="row">
            <div class="col selected"> <a href="index.html"
                    class="text-danger small fw-bold text-decoration-none">
                    <p class="h4 m-0"><i class="feather-home text-danger"></i></p>
                    Home
                </a> </div>
            <div class="col"> <a href="#" class="text-dark small fw-bold text-decoration-none">
                    <p class="h4 m-0"><i class="feather-map-pin"></i></p>
                    Trending
                </a> </div>
            <div class="col bg-white rounded-circle mt-n4 px-3 py-2">
                <div class="bg-danger rounded-circle mt-n0 shadow"> <a href="#"
                        class="text-white small fw-bold text-decoration-none"> <i class="feather-shopping-cart"></i>
                    </a> </div>
            </div>
            <div class="col"> <a href="#" class="text-dark small fw-bold text-decoration-none">
                    <p class="h4 m-0"><i class="feather-heart"></i></p>
                    Favorites
                </a> </div>
            <div class="col"> <a href="./LoginPage.html" class="text-dark small fw-bold text-decoration-none">
                    <p class="h4 m-0"><i class="feather-user"></i></p>
                    Profile
                </a> </div>
        </div>
    </div>


    <div class="clearfix"></div>




    <footer class="section-footer border-top bg-dark">
        <div class="container">
            <div class="footer-top padding-y py-5">
                <div class="row">

                    <aside class="col-sm-3 col-md-3 text-white ftrcat">
                        <h6 class="title">Our Category</h6>
                        <ul class="list-unstyled hov_footer ftrlist">
                            <li><a href="#" class="text-muted">Prasad</a></li>
                            <li><a href="#" class="text-muted">Fruits</a></li>
                            <li><a href="#" class="text-muted">Sweets</a></li>
                            <li><a href="#" class="text-muted">Rice Dishes</a></li>
                            <li><a href="#" class="text-muted">Pulses and Curry</a></li>
                            <li><a href="#" class="text-muted">Traditional Desserts</a></li>
                            <li><a href="#" class="text-muted">Chapati</a></li>
                            <li><a href="#" class="text-muted">Sambar</a></li>
                            <li><a href="#" class="text-muted">Nuts and Dry Fruits</a></li>
                            <li><a href="#" class="text-muted">North Indian Cuisine</a></li>
                            <li><a href="#" class="text-muted">Stuffed Parathas</a></li>
                            <li><a href="#" class="text-muted">Pulav</a></li>
                            <li><a href="#" class="text-muted">Savory Pastries</a></li>
                            <li><a href="#" class="text-muted">Mixed Vegetables</a></li>
                            <li><a href="#" class="text-muted">Breads and Bhaji</a></li>
                            <li><a href="#" class="text-muted">Appetizers</a></li>
                            <li><a href="#" class="text-muted">Wraps</a></li>
                            <li><a href="#" class="text-muted">Fresh Greens</a></li>
                            <li><a href="#" class="text-muted">South Indian Cuisine</a></li>
                        </ul>

                    </aside>
                    <aside class="col-sm-2 col-md-2 text-white ftrcat">
                        <h6 class="title">Quick Links</h6>
                        <ul class="list-unstyled hov_footer">
                            <li><a href="#" class="text-muted">Bhandara Services</a></li>
                            <li><a href="#" class="text-muted">Venue Options</a></li>
                            <li><a href="#" class="text-muted">Traditional Offerings</a></li>
                            <li><a href="#" class="text-muted">Cultural Accessories</a></li>
                            <li><a href="#" class="text-muted">Service Details</a></li>
                            <li><a href="#" class="text-muted">Booking Terms</a></li>
                            <li><a href="#" class="text-muted">Privacy & Guidelines</a></li>
                        </ul>

                    </aside>
                    <aside class="col-sm-2 col-md-2 text-white ftrcat">
                        <h6 class="title">Help</h6>
                        <ul class="list-unstyled hov_footer">
                            <li><a href="#" class="text-muted">Event Venue Information</a></li>
                            <li><a href="#" class="text-muted">Bhandara Arrangements FAQs</a></li>
                            <li><a href="#" class="text-muted">Get in Touch for Bookings</a></li>
                            <li><a href="#" class="text-muted">Request Specific Offerings</a></li>
                            <li><a href="#" class="text-muted">Refund & Cancellation Policy</a></li>
                            <li><a href="#" class="text-muted">Retailer Partnership Opportunities</a></li>
                        </ul>

                    </aside>
                    <aside class="col-sm-2 col-md-2 text-white ftrcat">
                        <h6 class="title">For Participants</h6>
                        <ul class="list-unstyled hov_footer">
                            <li><a href="#" class="text-muted">Participant Login</a></li>
                            <li><a href="#" class="text-muted">Participant Registration</a></li>
                            <li><a href="#" class="text-muted">Password Recovery</a></li>
                            <li><a href="#" class="text-muted">Profile Settings</a></li>
                        </ul>

                    </aside>
                    <aside class="col-sm-2 col-md-2 text-white ftrcat">
                        <h6 class="title">More Pages</h6>
                        <ul class="list-unstyled hov_footer">
                            <li><a href="#" class="text-muted">Bhandara Highlights</a></li>
                            <li><a href="#" class="text-muted">Top Picks</a></li>
                            <li><a href="#" class="text-muted">Venue Information</a></li>
                            <li><a href="#" class="text-muted">Preferred Choices</a></li>
                        </ul>

                    </aside>
                </div>
            </div>
        </div>
        <div class="footer-copyright border-top py-3 bg-light">
            <div class="container d-flex align-items-center copyright">
                <p class="mb-0">© 2022 www.bhandarakaro.com All rights reserved.</p>
                <p class="text-muted mb-0 ms-auto d-flex align-items-center"> <a href="#"
                        class="d-block"><img alt="#" src="BhandaraKaro/NewHome/public/img/appstore.png"
                            height="40"></a> <a href="#" class="d-block ms-3"><img alt="#"
                            src="BhandaraKaro/NewHome/public/img/playmarket.png" height="40"></a> </p>
            </div>
        </div>
    </footer>
    <nav id="main-nav">
        <ul class="second-nav">
            <li><a href="https://bhandarakaro.com/"><i class="feather-home me-2"></i>Home</a></li>
            <li><a href="#"><i class="feather-list me-2"></i>About Us</a></li>
            <li><a href="#"><i class="feather-list me-2"></i>Bookings</a></li>
            <li><a href="#"><i class="feather-list me-2"></i>Our Story</a></li>
            <li><a href="#"><i class="feather-list me-2"></i>Bhandaras</a></li>
            <li><a href="#"><i class="feather-list me-2"></i>Contact Us</a></li>
        </ul>
        </ul>
        <ul class="bottom-nav">
            <li class="email"> <a class="text-danger" href="https://bhandarakaro.com/">
                    <p class="h5 m-0"><i class="feather-home text-danger"></i></p>
                    Home
                </a> </li>
            <li class="github"> <a href="#">
                    <p class="h5 m-0"><i class="feather-message-circle"></i></p>
                    FAQ
                </a> </li>
            <li class="ko-fi"> <a href="#">
                    <p class="h5 m-0"><i class="feather-phone"></i></p>
                    Help
                </a> </li>
        </ul>
    </nav>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Filter</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body p-0">
                    <div class="osahan-filter">
                        <div class="filter">
                            <div class="p-3 bg-light border-bottom">
                                <h6 class="m-0">SORT BY</h6>
                            </div>
                            <div class="border-bottom p-3">
                                <div class="form-check form-check-reverse m-0">
                                    <input class="form-check-input" type="radio" name="exampleRadios"
                                        id="customRadios1" value="option1" checked>
                                    <label class="form-check-label text-start w-100" for="customRadios1"> Top Rated
                                    </label>
                                </div>
                            </div>
                            <div class="border-bottom p-3">
                                <div class="form-check form-check-reverse m-0">
                                    <input class="form-check-input" type="radio" name="exampleRadios"
                                        id="customRadios2" value="option2">
                                    <label class="form-check-label text-start w-100" for="customRadios2"> Nearest Me
                                    </label>
                                </div>
                            </div>
                            <div class="border-bottom p-3">
                                <div class="form-check form-check-reverse m-0">
                                    <input class="form-check-input" type="radio" name="exampleRadios"
                                        id="customRadios3" value="option3">
                                    <label class="form-check-label text-start w-100" for="customRadios3"> Cost High
                                        to Low </label>
                                </div>
                            </div>
                            <div class="border-bottom p-3">
                                <div class="form-check form-check-reverse m-0">
                                    <input class="form-check-input" type="radio" name="exampleRadios"
                                        id="customRadios4" value="option4">
                                    <label class="form-check-label text-start w-100" for="customRadios4"> Cost Low
                                        to High </label>
                                </div>
                            </div>
                            <div class="border-bottom p-3">
                                <div class="form-check form-check-reverse m-0">
                                    <input class="form-check-input" type="radio" name="exampleRadios"
                                        id="customRadios5" value="option5">
                                    <label class="form-check-label text-start w-100" for="customRadios5"> Most
                                        Popular </label>
                                </div>
                            </div>
                            <div class="p-3 bg-light border-bottom">
                                <h6 class="m-0">FILTER</h6>
                            </div>
                            <div class="border-bottom p-3">
                                <div class="form-check form-check-reverse m-0">
                                    <input class="form-check-input" type="checkbox" value id="defaultCheck1"
                                        checked>
                                    <label class="form-check-label text-start w-100" for="defaultCheck1"> Open Now
                                    </label>
                                </div>
                            </div>
                            <div class="border-bottom p-3">
                                <div class="form-check form-check-reverse m-0">
                                    <input class="form-check-input" type="checkbox" value id="defaultCheck2">
                                    <label class="form-check-label text-start w-100" for="defaultCheck2"> Credit
                                        Cards </label>
                                </div>
                            </div>
                            <div class="border-bottom p-3">
                                <div class="form-check form-check-reverse m-0">
                                    <input class="form-check-input" type="checkbox" value id="defaultCheck3">
                                    <label class="form-check-label text-start w-100" for="defaultCheck3">
                                        Bhandaras
                                        Served </label>
                                </div>
                            </div>
                            <div class="p-3 bg-light border-bottom">
                                <h6 class="m-0">ADDITIONAL FILTERS</h6>
                            </div>
                            <div class="px-3 pt-3">
                                <input type="range" class="form-range" min="0" max="5"
                                    step="0.5">
                                <div class="row mb-3">
                                    <div class="col-6">
                                        <label>Min</label>
                                        <input class="form-control" placeholder="$0" type="number">
                                    </div>
                                    <div class="col-6 text-end">
                                        <label>Max</label>
                                        <input class="form-control" placeholder="$1,0000" type="number">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer p-0 border-0">
                    <div class="col-6 m-0 p-0">
                        <button type="button" class="btn border-top btn-lg w-100"
                            data-bs-dismiss="modal">Close</button>
                    </div>
                    <div class="col-6 m-0 p-0">
                        <button type="button" class="btn btn-primary btn-lg w-100">Apply</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="whatsappchat">
        <a href="https://api.whatsapp.com/send?phone=918297325811" target="_blank">
            <img src="BhandaraKaro/NewHome/public/img/whatsapp.png">
        </a>
    </div>


    <script type="text/javascript" src="BhandaraKaro/NewHome/public/vendor/jquery/jquery.min.js"></script>

    <script type="text/javascript" src="BhandaraKaro/NewHome/public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="BhandaraKaro/NewHome/public/vendor/slick/slick/slick.min.js"></script>
    <script type="text/javascript" src="BhandaraKaro/NewHome/public/vendor/sidebar/hc-offcanvas-nav.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jquery.ui/1.10.4/jquery-ui.min.js"></script>
    <script type="text/javascript" src="BhandaraKaro/NewHome/public/js/osahan.js"></script>
    <script src="BhandaraKaro/NewHome/public/main/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"></script>
    <script src="https://static.cloudflareinsights.com/beacon.min.js"></script>
</body>

</html>
