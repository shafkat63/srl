<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SRL - @yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    @vite('resources/css/app.css')


    @yield('style')
    <!-- For including page-specific styles -->
</head>

<body class="bg-gray-100 text-gray-900">
    <div class="min-h-screen flex flex-col">
        <!-- Main Navigation -->
        @include('partials.header')

        <!-- Main Content -->
        <div class="flex-grow">
            <div class="w-full py-8 px-4">
                @yield('mainContent')
            </div>
        </div>
        <!-- End Main Content -->

        <!-- Footer -->
        <!-- First Footer -->
<footer class="bg-gray-300 shadow-md w-full border-t">
    <div class="max-w-screen-xl mx-auto py-6 px-4 sm:px-6 lg:px-8 flex flex-col sm:flex-row justify-between items-center">
        <div class="w-full sm:w-1/4 text-center sm:text-left mb-4 sm:mb-0">
            <p class="text-sm text-gray-800 leading-relaxed">
                A sound management team comprising professionals endowed with proven ability in IT management focuses on
                appropriate human resources development and professionalism, placing SRL as a trusted and result-oriented
                lead solution firm.
            </p>
        </div>
        <div class="flex flex-col sm:flex-row items-center sm:space-x-6 text-gray-600 text-center sm:text-right w-full sm:w-auto">
            <a href="/services" class="text-sm text-blue-500 hover:text-blue-700 transition">Services</a>
            <a href="/about" class="text-sm text-blue-500 hover:text-blue-700 transition">About Us</a>
            <a href="/contact" class="text-sm text-blue-500 hover:text-blue-700 transition">Contact</a>
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

        
        
    </div>

    @yield('scripts')
</body>

</html>