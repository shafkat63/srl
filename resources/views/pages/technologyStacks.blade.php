@extends('layout.app')

@section('title', 'Tech Stack')

@section('mainContent')

<div class="container mx-auto py-12 px-4">
    <h1 class="text-5xl font-extrabold text-center mb-12 text-gray-900">Our Tech Stack</h1>
    <p class="text-lg text-gray-700 text-center mb-12">
        We leverage a wide range of technologies to deliver high-quality solutions.
    </p>

    <!-- Tech Stack Section -->
    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-8">
        <!-- Tech Item 1 -->
        <div class="flex flex-col items-center text-center bg-white p-6 rounded-lg shadow-lg border border-gray-200">
            <i class="fas fa-code text-4xl text-blue-500 mb-4"></i>
            <h2 class="text-xl font-semibold text-gray-800 mb-2">HTML</h2>
            <p class="text-gray-600">HyperText Markup Language</p>
        </div>

        <!-- Tech Item 2 -->
        <div class="flex flex-col items-center text-center bg-white p-6 rounded-lg shadow-lg border border-gray-200">
            <i class="fa-brands fa-css3-alt text-4xl text-blue-500 mb-4"></i>
            <h2 class="text-xl font-semibold text-gray-800 mb-2">CSS</h2>
            <p class="text-gray-600">Cascading Style Sheets</p>
        </div>

        <!-- Tech Item 3 -->
        <div class="flex flex-col items-center text-center bg-white p-6 rounded-lg shadow-lg border border-gray-200">
            <i class="fa-brands fa-js text-4xl text-yellow-500 mb-4"></i>
            <h2 class="text-xl font-semibold text-gray-800 mb-2">JavaScript</h2>
            <p class="text-gray-600">Programming Language</p>
        </div>

        <!-- Tech Item 4 -->
        <div class="flex flex-col items-center text-center bg-white p-6 rounded-lg shadow-lg border border-gray-200">
            <i class="fab fa-laravel text-4xl text-red-500 mb-4"></i>
            <h2 class="text-xl font-semibold text-gray-800 mb-2">Laravel</h2>
            <p class="text-gray-600">PHP Framework</p>
        </div>

        <!-- Tech Item 5 -->
        <div class="flex flex-col items-center text-center bg-white p-6 rounded-lg shadow-lg border border-gray-200">
            <i class="fab fa-php text-4xl text-blue-700 mb-4"></i>
            <h2 class="text-xl font-semibold text-gray-800 mb-2">PHP</h2>
            <p class="text-gray-600">Server-Side Scripting Language</p>
        </div>

        <!-- Tech Item 6 -->
        <div class="flex flex-col items-center text-center bg-white p-6 rounded-lg shadow-lg border border-gray-200">
            <i class="fab fa-angular text-4xl text-red-600 mb-4"></i>
            <h2 class="text-xl font-semibold text-gray-800 mb-2">Angular</h2>
            <p class="text-gray-600">JavaScript Framework</p>
        </div>

        <!-- Tech Item 7 -->
        <div class="flex flex-col items-center text-center bg-white p-6 rounded-lg shadow-lg border border-gray-200">
            <i class="fas fa-database text-4xl text-blue-800 mb-4"></i>
            <h2 class="text-xl font-semibold text-gray-800 mb-2">MySQL</h2>
            <p class="text-gray-600">Database Management System</p>
        </div>

        <!-- Tech Item 8 -->
        <div class="flex flex-col items-center text-center bg-white p-6 rounded-lg shadow-lg border border-gray-200">
            <i class="fab fa-node text-4xl text-green-600 mb-4"></i>
            <h2 class="text-xl font-semibold text-gray-800 mb-2">Node.js</h2>
            <p class="text-gray-600">JavaScript Runtime</p>
        </div>

        <!-- Tech Item 9 -->
        <div class="flex flex-col items-center text-center bg-white p-6 rounded-lg shadow-lg border border-gray-200">
            <i class="fas fa-cogs text-4xl text-green-500 mb-4"></i>
            <h2 class="text-xl font-semibold text-gray-800 mb-2">.NET</h2>
            <p class="text-gray-600">Framework for Windows</p>
        </div>

        <!-- Tech Item 10 -->
        <div class="flex flex-col items-center text-center bg-white p-6 rounded-lg shadow-lg border border-gray-200">
            <i class="fas fa-server text-4xl text-gray-700 mb-4"></i>
            <h2 class="text-xl font-semibold text-gray-800 mb-2">Apache</h2>
            <p class="text-gray-600">Web Server</p>
        </div>

        <!-- Tech Item 11 -->
        <div class="flex flex-col items-center text-center bg-white p-6 rounded-lg shadow-lg border border-gray-200">
            <i class="fab fa-linux text-4xl text-black mb-4"></i>
            <h2 class="text-xl font-semibold text-gray-800 mb-2">Linux</h2>
            <p class="text-gray-600">Operating System</p>
        </div>

        <!-- Tech Item 12 -->
        <div class="flex flex-col items-center text-center bg-white p-6 rounded-lg shadow-lg border border-gray-200">
            <i class="fab fa-windows text-4xl text-blue-600 mb-4"></i>
            <h2 class="text-xl font-semibold text-gray-800 mb-2">Windows Server</h2>
            <p class="text-gray-600">Server Operating System</p>
        </div>

        <!-- Tech Item 13 -->
        <div class="flex flex-col items-center text-center bg-white p-6 rounded-lg shadow-lg border border-gray-200">
            <i class="fab fa-android text-4xl text-green-700 mb-4"></i>
            <h2 class="text-xl font-semibold text-gray-800 mb-2">Android</h2>
            <p class="text-gray-600">Mobile Operating System</p>
        </div>

        <!-- Tech Item 14 -->
        <div class="flex flex-col items-center text-center bg-white p-6 rounded-lg shadow-lg border border-gray-200">
            <i class="fa-brands fa-flutter text-4xl text-blue-400 mb-4"></i>
            <h2 class="text-xl font-semibold text-gray-800 mb-2">Flutter</h2>
            <p class="text-gray-600">UI Toolkit for Mobile</p>
        </div>

        <!-- Tech Item 15 -->
        <div class="flex flex-col items-center text-center bg-white p-6 rounded-lg shadow-lg border border-gray-200">
            <i class="fab fa-docker text-4xl text-blue-500 mb-4"></i>
            <h2 class="text-xl font-semibold text-gray-800 mb-2">Docker</h2>
            <p class="text-gray-600">Containerization Platform</p>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<!-- Font Awesome -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
@endsection
