@extends('layout.app')
@section('title', 'mBill')

@section('mainContent')
<div class="bg-gray-100 py-12 px-6">


    <div class="container mx-auto p-4 md:p-6 bg-white shadow-lg rounded-lg">
        <h1 class="text-2xl md:text-3xl font-bold mb-4 text-center">mBill: Efficient Survey Information Management</h1>

        <div class="mb-6">
            <p class="text-base md:text-lg text-gray-700 leading-relaxed">
                <strong>mBill</strong> is designed to collect field-level information through user-friendly mobile apps
                integrated with server applications. It ensures accurate and timely collection of meter reading
                information and various survey data. With minimal effort, users can generate all reports needed to
                efficiently manage survey information.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 md:gap-8">
            <div class="p-4 border rounded-lg bg-gray-50">
                <h2 class="text-lg md:text-xl font-semibold text-gray-800">Centralized Operation Support</h2>
                <p class="text-gray-600 mt-2 text-sm md:text-base">
                    mBill provides centralized support for day-to-day operations, simplifying the management and
                    operation of the software, ensuring that all processes are streamlined and efficient.
                </p>
            </div>

            <div class="p-4 border rounded-lg bg-gray-50">
                <h2 class="text-lg md:text-xl font-semibold text-gray-800">Simplified Payment Process</h2>
                <p class="text-gray-600 mt-2 text-sm md:text-base">
                    mBill simplifies the payment process by offering facilities to customers for secure transactions
                    through banking channels, making it easier for users to manage payments seamlessly.
                </p>
            </div>
        </div>


    </div>
</div>
@endsection