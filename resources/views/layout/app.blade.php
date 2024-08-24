<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin - @yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap">

    @vite('resources/css/app.css')


    @yield('style') <!-- For including page-specific styles -->
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
        <footer class="bg-white shadow-md w-full">
            <div class="w-full py-4 px-4 flex justify-between items-center">
                {{-- <span>Copyright © 1999-2024 System Resources Ltd.</span> --}}
                <span class="text-gray-600">&copy; Copyright © 1999-2024 System Resources Ltd.</span>
                <span class="text-gray-600">
                    Maintained by <a href="https://srl.com.bd/" target="_blank" class="text-blue-500 hover:text-blue-700">System Resources Ltd</a>
                </span>
            </div>
        </footer>
    </div>

    @yield('scripts')
</body>
</html>
