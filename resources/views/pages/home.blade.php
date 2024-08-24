@extends('layout.app')

@section('title', 'Home')

@section('mainContent')
<!-- Hero Section -->
<section
    class="relative bg-gradient-to-r from-blue-500 to-indigo-600 h-screen flex items-center justify-center text-center text-white animate-heroBackground">
    <div class="absolute inset-0 bg-blue-900 opacity-50 animate-fadeIn"></div>
    <div class="relative z-10 px-4 md:px-8 lg:px-16">
        <!-- Animated Image -->
        <img src="/hero-img.png" alt="hero" class="h-64 w-auto mx-auto mb-8 animate-zoomIn">
        <h1 class="text-5xl md:text-6xl font-extrabold leading-tight mb-6 animate-slideInUp">We Offer Modern Solutions
            for Growing Your Business</h1>
        <p class="text-lg md:text-xl mb-8 animate-slideInUp">We are a team of talented IT Professionals making IT
            Solutions.</p>
        <a href="/services"
            class="px-6 py-3 bg-slate-700 text-white font-semibold rounded-lg shadow-lg hover:bg-slate-900 transition duration-300 mb-3 animate-slideInUp">Get
            Started</a>
    </div>
</section>

<!-- Who We Are Section -->
<section id="who-we-are" class="py-16 bg-gray-100">
    <div class="container mx-auto text-center px-4 md:px-8 lg:px-16">
        <h2 class="text-4xl font-bold text-gray-800 mb-6 opacity-0 translate-y-10">Who We Are</h2>
        <div class="flex flex-col md:flex-row items-center justify-center space-y-8 md:space-y-0 md:space-x-8">
            <div class="md:w-1/2 opacity-0 translate-x-10">
                <img src="/about.jpg" alt="about" class="rounded-lg shadow-lg">
            </div>
            <div class="md:w-1/2 text-left opacity-0 translate-x-10">
                <p class="text-lg text-gray-600 mb-8">
                    System Resources Limited (SRL) specializes in developing business application software, database
                    management, web-based applications, mobile apps, IT facilities management, IT communication and
                    network solutions, IT audit, and project management.
                </p>
                <a href="/about"
                    class="inline-block px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg shadow-lg hover:bg-blue-700 transition duration-300">
                    Read More
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Our Clients Section -->
<section class="py-16">
    <div class="container mx-auto text-center px-4">
        <h2 class="text-4xl font-bold text-gray-800 mb-6">Our Clients</h2>
        <p class="text-lg text-gray-600 mb-8">
            With expertise in Power sector utility billing, Human Resources Management, and Inventory Management, SRL
            delivers tailored software solutions to meet our clients' diverse needs.
        </p>
    </div>

    <!-- Swiper Slider -->
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="https://via.placeholder.com/200x200" alt="Client 1" class="w-full h-auto object-cover" />
            </div>
            <div class="swiper-slide">
                <img src="https://via.placeholder.com/200x200" alt="Client 2" class="w-full h-auto object-cover" />
            </div>
            <div class="swiper-slide">
                <img src="https://via.placeholder.com/200x200" alt="Client 3" class="w-full h-auto object-cover" />
            </div>
            <div class="swiper-slide">
                <img src="https://via.placeholder.com/200x200" alt="Client 3" class="w-full h-auto object-cover" />
            </div>
            <div class="swiper-slide">
                <img src="https://via.placeholder.com/200x200" alt="Client 3" class="w-full h-auto object-cover" />
            </div>
            <div class="swiper-slide">
                <img src="https://via.placeholder.com/200x200" alt="Client 3" class="w-full h-auto object-cover" />
            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Navigation -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>

<!-- Map Section -->
<section>
    <div id="map" class="w-full h-96 mb-8"></div>
</section>

<!-- Contact Section -->
<section class="bg-gray-50 py-16">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 px-4">
        <!-- Address -->
        <div class="bg-white p-8 rounded-lg shadow-lg">
            <h3 class="text-2xl font-semibold text-gray-800 mb-4">Address</h3>
            <p class="text-gray-700">4, Chamilibagh, Shantinagar<br>Dhaka - 1217, Bangladesh.</p>
        </div>

        <!-- Call Us -->
        <div class="bg-white p-8 rounded-lg shadow-lg">
            <h3 class="text-2xl font-semibold text-gray-800 mb-4">Call Us</h3>
            <p class="text-gray-700">+8802 4831 5559<br>+88 096 78 777 117</p>
        </div>

        <!-- Email Us -->
        <div class="bg-white p-8 rounded-lg shadow-lg">
            <h3 class="text-2xl font-semibold text-gray-800 mb-4">Email Us</h3>
            <p class="text-gray-700">info@srl.com.bd<br>srlspprt@yahoo.com</p>
        </div>

        <!-- Open Hours -->
        <div class="bg-white p-8 rounded-lg shadow-lg">
            <h3 class="text-2xl font-semibold text-gray-800 mb-4">Open Hours</h3>
            <p class="text-gray-700">Sunday - Thursday<br>9:00 AM - 06:00 PM</p>
        </div>

        <!-- Affiliation and Certification -->
        <div class="bg-white p-8 rounded-lg shadow-lg">
            <h3 class="text-2xl font-semibold text-gray-800 mb-4">Affiliation and Certification</h3>
            <p class="text-gray-700">Details about affiliations and certifications can be placed here.</p>
        </div>

        <!-- Newsletter -->
        <div class="bg-white p-8 rounded-lg shadow-lg col-span-1 md:col-span-2 lg:col-span-4">
            <h3 class="text-2xl font-semibold text-gray-800 mb-4">Our Newsletter</h3>
            <p class="text-gray-700 mb-4">Subscribe to our newsletter for the latest updates and news.</p>
            <form action="#" method="post" class="flex flex-col">
                <input type="email" name="email" placeholder="Enter your email"
                    class="px-4 py-2 border rounded-md w-full mb-4">
                <button type="submit"
                    class="w-full px-6 py-3 bg-blue-700 text-white font-semibold rounded-lg shadow-lg hover:bg-blue-800 transition duration-300">Subscribe</button>
            </form>
        </div>
    </div>
</section>
@endsection

@section('scripts')

<!-- Leaflet CSS & JS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

<!-- Swiper CSS & JS -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Initialize Leaflet Map
        var map = L.map('map').setView([23.726, 90.4251], 13); // Set your latitude and longitude here

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
        }).addTo(map);

        L.marker([23.726, 90.4251]).addTo(map) // Set your latitude and longitude here
            .bindPopup('We are here.')
            .openPopup();

        // Initialize Swiper Slider
        var swiper = new Swiper('.swiper-container', {
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    loop: true,
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: 3, // Set to a fixed number to control the number of visible slides
    coverflowEffect: {
        rotate: 50, // Decrease rotation for smaller effect
        stretch: 10, // Adjust to control spacing
        depth: 100, // Adjust depth for visual effect
        modifier: 1,
        slideShadows: true,
    },
});

    });
</script>

@endsection