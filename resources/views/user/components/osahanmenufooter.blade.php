 <div class="osahan-menu-fotter fixed-bottom bg-white px-3 py-2 text-center d-none">
     <div class="row">
         <div class="col selected"> <a href="{{ url('/') }}" class="text-danger small fw-bold text-decoration-none">
                 <p class="h4 m-0"><i class="feather-home text-danger"></i></p>
                 Home
             </a> </div>
         <div class="col"> <a href="{{ url('/search-temples') }}" class="text-dark small fw-bold text-decoration-none">
                 <p class="h4 m-0"><i class="feather-map-pin"></i></p>
                 Temples
             </a> </div>
         <div class="col bg-white rounded-circle mt-n4 px-3 py-2">
             <div class="bg-danger rounded-circle mt-n0 shadow"> <a href="{{ url('menu') }}"
                     class="text-white small fw-bold text-decoration-none"><i class="feather-heart"></i>
                 </a> </div>
         </div>
         <div class="col"> <a href="{{ url('cart') }}" class="text-dark small fw-bold text-decoration-none">
                 <p class="h4 m-0"><i class="feather-shopping-cart"></i></p>
                 Cart
             </a> </div>
         <div class="col"> <a href="./LoginPage.html" class="text-dark small fw-bold text-decoration-none">
                 <p class="h4 m-0"><i class="feather-user"></i></p>
                 Profile
             </a> </div>
     </div>
 </div>