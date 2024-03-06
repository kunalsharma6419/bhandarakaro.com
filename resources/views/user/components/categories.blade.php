<div class="swiper mySwiper">
    <div class="main-heading">Categories We Serve Bhandara</div>
    <div class="swiper-wrapper">
        @foreach ($categories as $category)
            <div class="swiper-slide">
                <div class="cat-item px-1 py-3">
                    <div class="category-lists d-block p-2">
                        <img src="{{ asset('/categoryImage/' . $category->category_image) }}" class="img-fluid mb-2" />
                        <h3>{{ $category->category_name }}</h3>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>
