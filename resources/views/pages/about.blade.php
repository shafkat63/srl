@extends('layout.app')

@section('title', 'About Us')

@section('mainContent')
<div class="container mx-auto py-12">
    <h1 class="text-4xl font-bold text-center mb-8">About Us</h1>
    
    <div class="flex flex-col md:flex-row items-center">
        <!-- About Image -->
        <div class="md:w-1/2 p-4">
            <img src="https://via.placeholder.com/500" alt="About Us Image" class="rounded-lg shadow-lg">
        </div>

        <!-- About Content -->
        <div class="md:w-1/2 p-4">
            <p class="text-lg text-gray-700 leading-relaxed">
                Welcome to our platform! We are dedicated to providing high-quality services and helping our clients achieve their goals. Our team is composed of experienced professionals who are passionate about what they do. We believe in continuous improvement and always strive to exceed expectations.
            </p>
            <p class="text-lg text-gray-700 leading-relaxed mt-4">
                Our mission is to deliver value and satisfaction to our clients by offering tailored solutions that fit their unique needs. We value integrity, innovation, and collaboration, and we work hard to maintain lasting relationships with all of our clients.
            </p>
        </div>
    </div>
</div>
@endsection
