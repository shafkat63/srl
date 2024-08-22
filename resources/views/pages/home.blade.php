@extends('layout.app')

@section('title', 'Home')

@section('mainContent')
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-r from-blue-500 to-indigo-600 h-screen flex items-center justify-center text-center text-white animate-heroBackground">
        <div class="absolute inset-0 bg-blue-900 opacity-50 animate-fadeIn"></div>
        <div class="relative z-10 px-4 md:px-8 lg:px-16">
            <!-- Animated Image -->
            <img src="/hero-img.png" alt="hero" class="h-64 w-auto mx-auto mb-8 animate-zoomIn">
            <h1 class="text-5xl md:text-6xl font-extrabold leading-tight mb-6 animate-slideInUp">We Offer Modern Solutions for Growing Your Business</h1>
            <p class="text-lg md:text-xl mb-8 animate-slideInUp">We are a team of talented IT Professionals making IT Solutions.</p>
            <a href="/services" class="px-6 py-3 bg-slate-700 text-white font-semibold rounded-lg shadow-lg hover:bg-slate-900 transition duration-300 mb-3 animate-slideInUp">Get Started</a>
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
                        System Resources Limited (SRL) specializes in developing business application software, database management, web-based applications, mobile apps, IT facilities management, IT communication and network solutions, IT audit, and project management.
                    </p>
                    <a href="/about" class="inline-block px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg shadow-lg hover:bg-blue-700 transition duration-300">
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
                With expertise in Power sector utility billing, Human Resources Management, and Inventory Management, SRL delivers tailored software solutions to meet our clients' diverse needs.
            </p>
        </div>
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
                    <input type="email" name="email" placeholder="Enter your email" class="px-4 py-2 border rounded-md w-full mb-4">
                    <button type="submit" class="w-full px-6 py-3 bg-blue-700 text-white font-semibold rounded-lg shadow-lg hover:bg-blue-800 transition duration-300">Subscribe</button>
                </form>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const sections = document.querySelectorAll('#who-we-are h2, #who-we-are .md\\:w-1\\/2');

        const options = {
            root: null, // viewport
            rootMargin: '0px',
            threshold: 0.1 // trigger when 10% of the element is visible
        };

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const target = entry.target;
                    if (target.tagName === 'H2') {
                        target.classList.add('fadeIn');
                    } else {
                        target.classList.add('slideInLeft'); // Apply different classes based on the target
                    }
                    observer.unobserve(target); // Stop observing after animation
                }
            });
        }, options);

        sections.forEach(section => {
            observer.observe(section);
        });
    });
</script>
@endsection
