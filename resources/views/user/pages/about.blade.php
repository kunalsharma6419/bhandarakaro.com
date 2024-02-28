@extends('user.layouts.app')
<style>
    .image-container {
        overflow: hidden;
        border-radius: 8px;
    }

    .image-container img {
        width: 100%;
        border-radius: 8px;
    }
</style>
@section('maincontent')
    @include('user.components.header')


    @include('user.components.osahan_home')



    <div class="clearfix"></div>

    <div class="osahan-home-page">
        @include('user.components.filtermodal')
        <!-- About Us Section -->
        <div class="container mt-4">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h2 class="text-center mb-4">About Us</h2>
                    <div class="container mt-5">
                        <h1 class="display-4 text-center">Welcome to "VYY1421 Shree Annakoot Sitaram Private Limited"</h1>
                        <h3>Presents:
                            <ul>
                                <li><a href="https://bhandarawala.co.in" target="_blank">Bhandarawala.co.in</a></li>
                                <li><a href="https://bhandarakaro.com" target="_blank">Bhandarakaro.com</a></li>
                                <li><a href="https://bhandarakaroin" target="_blank">Bhandarakaro.in</a></li>
                            </ul>
                        </h3>
                        <p class="lead">Your premier destination for all your event planning and catering needs!</p>

                        <p>We are thrilled to be your go-to platform for seamless, stress-free event arrangements that turn
                            your visions into memorable experiences.</p>

                        <p>At VYY1421 Shree Annakoot Sitaram Private Limited, we understand the importance of every
                            celebration, whether it's a wedding, a bhandara, or any other special event. Our mission is to
                            connect clients with top-tier vendors and service providers to ensure that every occasion is
                            executed flawlessly, leaving lasting impressions on you and your guests.</p>

                        <h2 class="mt-4">Our Vision</h2>
                        <p>Our vision is simple: to revolutionize the event planning industry by providing a convenient,
                            efficient, and reliable platform for both clients and vendors. We strive to be the bridge that
                            connects individuals with the best resources, creating unforgettable moments that exceed
                            expectations.</p>

                        <h2 class="mt-4">What Sets Us Apart</h2>
                        <ul>
                            <li><strong>Customer-Centric Approach:</strong> Your satisfaction is our top priority. We
                                prioritize your needs and preferences, offering personalized solutions that reflect your
                                unique style and requirements.</li>
                            <li><strong>Extensive Vendor Network:</strong> We have curated a diverse network of trusted
                                vendors, ranging from catering services and decorators to entertainers and photographers.
                            </li>
                            <li><strong>Seamless Booking Process:</strong> Our user-friendly platform simplifies the booking
                                process, allowing you to browse, select, and secure services with ease.</li>
                            <li><strong>Commitment to Excellence:</strong> We are dedicated to upholding the highest
                                standards of professionalism, integrity, and quality in everything we do.</li>
                        </ul>

                        <h2 class="mt-4">Get in Touch</h2>
                        <p>Ready to plan your next event with confidence? Connect with us today and let us bring your vision
                            to life! Whether you're hosting an intimate gathering or a grand celebration, we have the
                            expertise and resources to make it extraordinary.</p>

                        <p>Thank you for choosing VYY1421 Shree Annakoot Sitaram Private Limited. We look forward to being a
                            part of your special moments!</p>

                        <h2 class="mt-4">Contact Us</h2>
                        <p><strong>Registered office:</strong> H No. D-138, 2nd Floor, Sector 15A, Ajronda, Escortsnagar
                            Faridabad, Haryana -121007</p>
                        <p><strong>Email Id:</strong> <a
                                href="mailto:rawatpriyankamalik1401@gmail.com">rawatpriyankamalik1401@gmail.com</a></p>
                        <p><strong>Contact No.:</strong><a href="telto:+91-9650815489">+91-9650815489</a> </p>
                    </div>
                    <p class="text-center lead">Bringing Tradition Online, Saving You Time and Money</p>
                    <p>For over 20 years, Bhandarawala has proudly provided traditional Bhandara services throughout
                        India. Now, we're taking our commitment to convenience and quality a step further by launching
                        our online platform, Bhandarawala.co.in.</p>
                    <p>We understand that time is precious, and navigating various vendors for traditional ceremonies
                        can be overwhelming. That's why we created a one-stop solution for all your Bhandara and Ayojan
                        needs. Through our user-friendly website, you can now book and manage your entire event from
                        the comfort of your home.</p>

                    <!-- Why Choose Us Section -->
                    <h3 class="text-center mt-4 mb-3">Why Choose Bhandarawala.co.in?</h3>
                    <ul>
                        <li><strong>Convenience:</strong> Book Bhandara and Ayojan services for temples, ceremonies,
                            pujas, hawans, donations, marriages, birthdays, and more– all with a few clicks.</li>
                        <li><strong>Expertise:</strong> We leverage our 20+ years of experience to ensure an authentic
                            and high-quality service that upholds traditional values.</li>
                        <li><strong>Nationwide Reach:</strong> No matter where you are in India, we can help you fulfill
                            your religious and celebratory needs.</li>
                        <li><strong>Transparency:</strong> Our platform provides clear pricing and detailed information
                            about our services, ensuring you make informed decisions.</li>
                        <li><strong>Time-Saving:</strong> Skip the hassle of coordinating with multiple vendors. We handle
                            everything, so you can focus on what matters most– your event.</li>
                    </ul>

                    <!-- More Than Just Services Section -->
                    <h3 class="text-center mt-4 mb-3">More Than Just Services</h3>
                    <p>Bhandarawala.co.in is not just a booking platform; it's a community. We believe in sharing
                        knowledge and connecting people with their cultural heritage. On our website, you'll find insightful
                        articles, helpful tips, and inspiring stories related to Bhandara and Ayojan traditions.</p>

                    <!-- Join the Celebration Section -->
                    <h3 class="text-center mt-4 mb-3">Join the Celebration</h3>
                    <p>Visit Bhandarawala.co.in today and discover how we can make your next event exceptional. Let us
                        handle the logistics while you create lasting memories with your loved ones. Together, let's keep
                        the spirit of tradition alive, one celebration at a time.</p>

                    <!-- Placeholder Images -->
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="image-container">
                                <img src="{{ asset('BhandaraKaro/images/B-Bhoj.jpeg') }}" alt="Image 1">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="image-container">
                                <img src="{{ asset('BhandaraKaro/images/temple.jpg') }}" alt="Image 2">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

    <div class="container">

    </div>
    </div>



    <div class="clearfix"></div>


    @include('user.components.osahanmenufooter')


    <div class="clearfix"></div>

    @include('user.components.footer')


    @include('user.components.scripts')
@endsection
