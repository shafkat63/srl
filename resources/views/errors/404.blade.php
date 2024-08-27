@extends('layout.app')

@section('title', 'Page Not Found')

@section('mainContent')
<div class="min-h-screen flex flex-col items-center justify-center bg-gray-100 text-gray-800">
    <div class="text-center space-y-6">
        <h1 class="text-9xl font-extrabold text-blue-500">404</h1>
        <h2 class="text-4xl font-semibold text-gray-800">Oops! Page Not Found</h2>
        <img src="/svg/error.svg" alt="Error image" class="w-1/2 max-w-xs mx-auto">
        <p class="mt-4 text-lg text-gray-600">The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.</p>
        <a href="{{ url('/') }}" class="mt-6 inline-block bg-blue-500 text-white px-6 py-3 rounded-lg shadow-md hover:bg-blue-700 transition">Go Home</a>
    </div>
</div>
@endsection
