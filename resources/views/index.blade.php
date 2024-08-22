<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin - @yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite('resources/css/app.css')

    @yield('style') <!-- For including page-specific styles -->
</head>
<body class="bg-gray-100 text-gray-900">
    <div class="min-h-screen flex flex-col">
        <!-- Main Navigation -->
        @include('partials.header')

        <!-- Main Content -->
        <div class="flex-grow">
            <div class="container mx-auto py-8">
                @yield('mainContent')
                <h1>fff</h1>
            </div>
        </div>
        <!-- End Main Content -->

        <!-- Footer -->
        <footer class="bg-white shadow-md">
            <div class="container mx-auto py-4 flex justify-between items-center">
                <span class="text-gray-600">&copy; System Resources Ltd. 2024</span>
                <span class="text-gray-600">
                    Maintained by <a href="https://srl.com.bd/" target="_blank" class="text-blue-500 hover:text-blue-700">System Resources Ltd</a>
                </span>
            </div>
        </footer>
    </div>

    @yield('scripts')
</body>
</html>
