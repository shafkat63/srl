@extends('layout.app')

@section('title', 'Page Not Found')

@section('mainContent')
<div class="min-h-screen flex flex-col items-center justify-center bg-gray-100 text-gray-800">
    <div class="text-center">
        <h1 class="text-9xl font-bold text-blue-500">404</h1>
        <h2 class="text-3xl font-semibold mt-4">Oops! Page Not Found</h2>
        <p class="mt-2 text-gray-600">The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.</p>
        <a href="{{ url('/') }}" class="mt-6 inline-block bg-blue-500 text-white px-6 py-3 rounded-lg shadow-md hover:bg-blue-700 transition">Go Home</a>
    </div>
</div>
@endsection
