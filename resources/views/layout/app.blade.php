<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SRL - @yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css">

    <!-- Tailwind CSS -->
    @vite('resources/css/app.css')

    @yield('style')
    <!-- For including page-specific styles -->
</head>

<body class="bg-gray-100 text-gray-900">
    <div class="min-h-screen flex flex-col">
        <!-- Main Navigation -->
        @include('partials.header')

        <!-- Main Content -->
        <main class="flex-grow">
            <div class="w-full py-8 px-4">
                @yield('mainContent')
            </div>
        </main>

        <!-- Footer Section -->
        <!-- First Footer -->
        <footer class="bg-gray-300 shadow-md w-full border-t">
            <div class="max-w-screen-xl mx-auto py-6 px-4 sm:px-6 lg:px-8 flex flex-col sm:flex-row justify-between items-center">
                <div class="w-full sm:w-1/4 text-center sm:text-left mb-4 sm:mb-0">
                    <p class="text-sm text-gray-800 leading-relaxed">
                        A sound management team comprising professionals endowed with proven ability in IT management
                        focuses on appropriate human resources development and professionalism, placing SRL as a trusted
                        and result-oriented lead solution firm. <i class="fi fi-sr-target-audience text-blue-500 text-3xl"></i>

                    </p>
                </div>
                <div class="flex flex-col sm:flex-row items-center sm:space-x-6 text-gray-600 text-center sm:text-right w-full sm:w-auto">
                    <a href="/services" class="text-sm text-blue-500 hover:text-blue-700 transition">Services</a>
                    <a href="/about" class="text-sm text-blue-500 hover:text-blue-700 transition">About Us</a>
                    <a href="/contact" class="text-sm text-blue-500 hover:text-blue-700 transition">Contact</a>
                    <a href="/techStack" class="text-sm text-blue-500 hover:text-blue-700 transition">techStack</a>
                </div>
            </div>
        </footer>

        <!-- Second Footer -->
        <footer class="bg-white shadow-lg w-full border-t">
            <div class="max-w-screen-xl mx-auto py-4 px-4 sm:px-6 lg:px-8 flex flex-col sm:flex-row justify-between items-center">
                <span class="text-sm text-gray-600">&copy; 1999-2024 System Resources Ltd.</span>
                <span class="text-sm text-gray-600">
                    Maintained by <a href="https://srl.com.bd/" target="_blank" class="text-blue-500 hover:text-blue-700 transition">
                        System Resources Ltd
                    </a>
                </span>
            </div>
        </footer>

        <!-- Go to Top Button -->
        <button id="goToTop" class="fixed  bottom-4 right-4 bg-blue-600 text-white p-3 rounded-lg shadow-lg hover:bg-blue-700 transition-transform transform hover:scale-105">
            <i class="fas fa-chevron-up"></i>
        </button>
    </div>

    @yield('scripts')

    <!-- Go to Top Button Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const goToTopButton = document.getElementById('goToTop');
            
            // Show or hide the button based on scroll position
            window.addEventListener('scroll', function() {
                if (window.scrollY > 300) {
                    goToTopButton.classList.remove('opacity-0');
                    goToTopButton.classList.add('opacity-100');
                } else {
                    goToTopButton.classList.remove('opacity-100');
                    goToTopButton.classList.add('opacity-0');
                }
            });

            // Smooth scroll to top
            goToTopButton.addEventListener('click', function() {
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });
        });
    </script>
</body>

</html>



