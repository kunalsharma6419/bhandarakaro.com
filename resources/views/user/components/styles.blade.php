<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Bhandara Karo">
<meta name="author" content="Bhandara Karo">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="icon" type="image/png" href="{{ asset('BhandaraKaro/NewHome/public/img/fav.png') }}">
<title>BhandaraKaro</title>
<link href="{{ asset('BhandaraKaro/NewHome/public/vendor/slick/slick/slick.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('BhandaraKaro/NewHome/public/vendor/slick/slick/slick-theme.css') }}" rel="stylesheet"
    type="text/css">
<link href="{{ asset('BhandaraKaro/NewHome/public/vendor/icons/feather.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('BhandaraKaro/NewHome/public/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('BhandaraKaro/NewHome/public/css/style.css') }}" rel="stylesheet">
<link href="{{ asset('BhandaraKaro/NewHome/public/css/custom.css') }}" rel="stylesheet">
<link href="{{ asset('BhandaraKaro/NewHome/public/vendor/sidebar/demo.css') }}" rel="stylesheet">
<!-- Link Swiper's CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<style>
    .swiper {
    width: 85%;
    margin: auto;
    height: fit-content;
    background: transparent;
    position: relative;
    /* background-color: #F5F5F5; */
    }

    .swiper-slide {
    text-align: center;
    font-size: 18px;
    background: transparent;
    /* background-color: #F5F5F5; */
    display: flex;
    justify-content: center;
    align-items: center;
    width: 9rem;
    }

    .swiper-slide img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
    }

    .swiper-button-prev , .swiper-button-next{
        border: 1px solid rgb(102, 100, 100);
        position: absolute;
        padding: 1rem;
        border-radius: 2rem;
        background-color: white;
        color: #5c5858;
        height: 8px;
        width: 8px;
        font-size: 8px;
    }
    .swiper-button-prev{
        left: 90%;
        top: 3rem;
    }
    .swiper-button-next{
        left:95%;
        top:3rem;
    }
    .swiper-button-next:after,
    .swiper-button-prev:after {
    font-size: 15px;
    }
    @media screen and (max-width: 1024px) {
        .swiper {
            width: 95%;
        }
        .swiper-slide {
            width: 8rem;
        }
    }
    @media screen and (max-width: 850px) {
        .swiper {
            width: 95%;
        }
    }
    @media screen and (max-width: 770px) {
        .swiper-button-prev{
        left: 40%;
        top: 95%;
        transform: translate(50%, 0%)
        }
        .swiper-button-next{
            left:50%;
            top:95%;
            transform: translate(50%, 0%)
        }
    }

    @media screen and (max-width: 430px) {
        .swiper-button-prev{
        left: 35%;
        top: 95%;
        transform: translate(50%, 0%)
        }
        .swiper-button-next{
            left:45%;
            top:95%;
            transform: translate(50%, 0%)
        }
    }
</style>
