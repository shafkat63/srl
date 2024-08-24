@extends('layout.app')

@section('title', 'Our Services')

@section('mainContent')

<div class="container mx-auto py-12 px-4">
    <h1 class="text-5xl font-extrabold text-center mb-12 text-gray-900">Our Services</h1>
    <p class="text-lg text-gray-700 text-center mb-12">
        SRL’s primary objective is to provide value to its customers by delivering appropriate solutions that meet their specific needs.
    </p>
    
    <!-- Services Section -->
    <div class="relative">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
            <!-- Service Card 1 -->
            <div id="service-1" class="bg-white p-6 rounded-lg shadow-lg border border-gray-200 transition-transform duration-500 transform hover:scale-150 hover:shadow-2xl hover:relative hover:z-10 flex flex-col items-center text-center">
                <div class="w-16 h-16 bg-blue-200 text-blue-600 flex items-center justify-center rounded-full mb-4">
                    <i class="fas fa-cogs fa-2x"></i>
                </div>
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Software Development</h2>
                <p class="text-gray-600 mb-4">
                    SRL has a large number of analysts, solution architects, coders, testers, data conversion experts, quality assurance experts, trainers, implementers, and project managers who are eligible to provide you with the best-customized software development solution...
                </p>
                <a href="#" class="text-blue-600 hover:underline">Read More</a>
            </div>
            
            <!-- Service Card 2 -->
            <div id="service-2" class="bg-white p-6 rounded-lg shadow-lg border border-gray-200 transition-transform duration-500 transform hover:scale-150 hover:shadow-2xl hover:relative hover:z-10 flex flex-col items-center text-center">
                <div class="w-16 h-16 bg-green-200 text-green-600 flex items-center justify-center rounded-full mb-4">
                    <i class="fas fa-mobile-alt fa-2x"></i>
                </div>
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Mobile Application Development</h2>
                <p class="text-gray-600 mb-4">
                    In recent years mobile apps have become the most popular platform which runs on Mobile. The demand for mobile apps is increasing day by day. We have a great team to provide you consultancy and develop mobile apps for software and e-commerce.
                </p>
                <a href="#" class="text-blue-600 hover:underline">Read More</a>
            </div>
            
            <!-- Service Card 3 -->
            <div id="service-3" class="bg-white p-6 rounded-lg shadow-lg border border-gray-200 transition-transform duration-500 transform hover:scale-150 hover:shadow-2xl hover:relative hover:z-10 flex flex-col items-center text-center">
                <div class="w-16 h-16 bg-orange-200 text-orange-600 flex items-center justify-center rounded-full mb-4">
                    <i class="fas fa-store fa-2x"></i>
                </div>
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">eCommerce</h2>
                <p class="text-gray-600 mb-4">
                    We, at System Resources Ltd. (SRL) can develop SEO-friendly and secured eCommerce sites using strong frameworks of PHP, such as CodeIgniter, Laravel, Yii Framework, ASP .NET, C#, etc. SRL is one of the top eCommerce developer companies in Bangladesh.
                </p>
                <a href="#" class="text-blue-600 hover:underline">Read More</a>
            </div>
            
            <!-- Service Card 4 -->
            <div id="service-4" class="bg-white p-6 rounded-lg shadow-lg border border-gray-200 transition-transform duration-500 transform hover:scale-150 hover:shadow-2xl hover:relative hover:z-10 flex flex-col items-center text-center">
                <div class="w-16 h-16 bg-purple-200 text-purple-600 flex items-center justify-center rounded-full mb-4">
                    <i class="fas fa-tools fa-2x"></i>
                </div>
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Software Maintenance and Support</h2>
                <p class="text-gray-600 mb-4">
                    Experience and professionalism of the core team have positioned System Resources Ltd. as a trusted and result-oriented service provider to its clients.
                </p>
                <a href="#" class="text-blue-600 hover:underline">Read More</a>
            </div>
            
            <!-- Service Card 5 -->
            <div id="service-5" class="bg-white p-6 rounded-lg shadow-lg border border-gray-200 transition-transform duration-500 transform hover:scale-150 hover:shadow-2xl hover:relative hover:z-10 flex flex-col items-center text-center">
                <div class="w-16 h-16 bg-red-200 text-red-600 flex items-center justify-center rounded-full mb-4">
                    <i class="fas fa-chalkboard-teacher fa-2x"></i>
                </div>
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Training at Different Levels</h2>
                <p class="text-gray-600 mb-4">
                    For smooth implementation and continuity of IT products, SRL performs appropriate assessments on IT training needs for the human resources of user organizations and provides need-based IT training to different levels of users.
                </p>
                <a href="#" class="text-blue-600 hover:underline">Read More</a>
            </div>
            
            <!-- Service Card 6 -->
            <div id="service-6" class="bg-white p-6 rounded-lg shadow-lg border border-gray-200 transition-transform duration-500 transform hover:scale-150 hover:shadow-2xl hover:relative hover:z-10 flex flex-col items-center text-center">
                <div class="w-16 h-16 bg-teal-200 text-teal-600 flex items-center justify-center rounded-full mb-4">
                    <i class="fas fa-desktop fa-2x"></i>
                </div>
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Hardware Maintenance and Support</h2>
                <p class="text-gray-600 mb-4">
                    For smooth implementation and continuity of IT products, hardware maintenance and support are essential. We provide hardware maintenance and support for our valuable clients.
                </p>
                <a href="#" class="text-blue-600 hover:underline">Read More</a>
            </div>
            
            <!-- Service Card 7 -->
            <div id="service-7" class="bg-white p-6 rounded-lg shadow-lg border border-gray-200 transition-transform duration-500 transform hover:scale-150 hover:shadow-2xl hover:relative hover:z-10 flex flex-col items-center text-center">
                <div class="w-16 h-16 bg-indigo-200 text-indigo-600 flex items-center justify-center rounded-full mb-4">
                    <i class="fas fa-network-wired fa-2x"></i>
                </div>
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Networking</h2>
                <p class="text-gray-600 mb-4">
                    Network infrastructure is at the center of business innovation. Users require fast, reliable, and secure network infrastructure to collaborate, build, and grow. We provide networking solutions to meet these needs.
                </p>
                <a href="#" class="text-blue-600 hover:underline">Read More</a>
            </div>
            
            <!-- Service Card 8 -->
            <div id="service-8" class="bg-white p-6 rounded-lg shadow-lg border border-gray-200 transition-transform duration-500 transform hover:scale-150 hover:shadow-2xl hover:relative hover:z-10 flex flex-col items-center text-center">
                <div class="w-16 h-16 bg-yellow-200 text-yellow-600 flex items-center justify-center rounded-full mb-4">
                    <i class="fas fa-laptop-code fa-2x"></i>
                </div>
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Website Design and Development</h2>
                <p class="text-gray-600 mb-4">
                    Yes, your website has to woo and charm. It’s got to be authentic to your brand and attractive to your audience. It’s got to be intuitive, mobile-ready, responsive, content-rich, SEO friendly, etc. Our collaborative approach fosters creative thinking that delivers results.
                </p>
                <a href="#" class="text-blue-600 hover:underline">Read More</a>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<!-- GSAP -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/gsap.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // GSAP animations for the Services page
        gsap.from("#service-1", { duration: 1, opacity: 0, y: 50, ease: "power2.out", delay: 0.2 });
        gsap.from("#service-2", { duration: 1, opacity: 0, y: 50, ease: "power2.out", delay: 0.4 });
        gsap.from("#service-3", { duration: 1, opacity: 0, y: 50, ease: "power2.out", delay: 0.6 });
        gsap.from("#service-4", { duration: 1, opacity: 0, y: 50, ease: "power2.out", delay: 0.8 });
        gsap.from("#service-5", { duration: 1, opacity: 0, y: 50, ease: "power2.out", delay: 1 });
        gsap.from("#service-6", { duration: 1, opacity: 0, y: 50, ease: "power2.out", delay: 1.2 });
        gsap.from("#service-7", { duration: 1, opacity: 0, y: 50, ease: "power2.out", delay: 1.4 });
        gsap.from("#service-8", { duration: 1, opacity: 0, y: 50, ease: "power2.out", delay: 1.6 });
    });
</script>
@endsection
//