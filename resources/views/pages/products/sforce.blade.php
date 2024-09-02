@extends('layout.app')
@section('title', 'sForce')

@section('mainContent')
<div class="bg-gray-100 py-12 px-6">
<div class="container mx-auto p-4 md:p-6 bg-white shadow-lg rounded-lg ">
    <h1 class="text-2xl md:text-3xl font-bold mb-4 text-center">sForce: Sales Order Management System</h1>

    <div class="mb-6">
        <p class="text-base md:text-lg text-gray-700 leading-relaxed">
            Welcome to <strong>sForce</strong>, a user-friendly interface designed to streamline your sales order collection process. sForce seamlessly integrates with mobile applications and server databases to ensure smooth information flow and effective sales management.
        </p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 md:gap-8">
        <div class="p-4 border rounded-lg bg-gray-50">
            <h2 class="text-lg md:text-xl font-semibold text-gray-800">Instant Sales Reports</h2>
            <p class="text-gray-600 mt-2 text-sm md:text-base">
                Generate real-time sales reports with just a few clicks. Management can monitor and perform various activities efficiently through our responsive web application.
            </p>
        </div>

        <div class="p-4 border rounded-lg bg-gray-50">
            <h2 class="text-lg md:text-xl font-semibold text-gray-800">Efficient Delivery Process</h2>
            <p class="text-gray-600 mt-2 text-sm md:text-base">
                Facilitate and manage the entire delivery process seamlessly. sForce supports the effective management of your entire sales channel, ensuring smooth operations.
            </p>
        </div>

        <div class="p-4 border rounded-lg bg-gray-50">
            <h2 class="text-lg md:text-xl font-semibold text-gray-800">Streamlined Sales Structure</h2>
            <p class="text-gray-600 mt-2 text-sm md:text-base">
                A well-defined sales structure helps streamline the chain of command, leading to more efficient decision-making and improved overall performance.
            </p>
        </div>
    </div>

    
</div>
</div>
@endsection
