@extends('layout.app')

@section('title', 'Our Services')

@section('mainContent')
    <div class="container mx-auto py-12">
        <h1 class="text-4xl font-bold text-gray-800 mb-6">Our Services</h1>

        <p class="text-lg text-gray-700 leading-relaxed mb-4">
            We offer a wide range of services designed to meet the unique needs of our clients. Our team of experienced professionals is dedicated to delivering exceptional results and ensuring customer satisfaction.
        </p>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Service 1 -->
            <div class="bg-white shadow-md rounded-lg p-6">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Service One</h2>
                <p class="text-gray-700 mb-4">
                    Description of Service One. This service is designed to help you achieve your goals with tailored solutions and expert guidance.
                </p>
                <a href="#" class="text-blue-500 hover:text-blue-700">Learn More</a>
            </div>

            <!-- Service 2 -->
            <div class="bg-white shadow-md rounded-lg p-6">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Service Two</h2>
                <p class="text-gray-700 mb-4">
                    Description of Service Two. Our team is ready to assist you with comprehensive strategies and innovative approaches.
                </p>
                <a href="#" class="text-blue-500 hover:text-blue-700">Learn More</a>
            </div>

            <!-- Service 3 -->
            <div class="bg-white shadow-md rounded-lg p-6">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Service Three</h2>
                <p class="text-gray-700 mb-4">
                    Description of Service Three. We provide cutting-edge solutions to help you stay ahead in your industry.
                </p>
                <a href="#" class="text-blue-500 hover:text-blue-700">Learn More</a>
            </div>

            <!-- Add more services as needed -->
        </div>
    </div>
@endsection
