@extends('layout.app')
@section('title', 'IVVR')

@section('mainContent')
<div class="bg-gray-100 py-12 px-6">
    <div class="container mx-auto p-4 md:p-6 bg-white shadow-lg rounded-lg py-12 px-6">
        <h1 class="text-2xl md:text-3xl font-bold mb-4 text-center">Web-Based Store Management</h1>

        <div class="mb-6">
            <p class="text-base md:text-lg text-gray-700 leading-relaxed">
                The Web-Based Store Management system is designed and developed to provide clients with the ability to
                perform and record relevant transactions related to Purchase, Receive & Inspection, Requisition,
                Allocation, and Issue items with accuracy and minimal effort. Users can generate all reports timely to
                efficiently manage the store management system of any organization.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 md:gap-8">
            <div class="p-4 border rounded-lg bg-gray-50">
                <h2 class="text-lg md:text-xl font-semibold text-gray-800">Item Codification</h2>
                <p class="text-gray-600 mt-2 text-sm md:text-base">
                    Our system provides comprehensive support for item codification, allowing for systematic creation,
                    organization, and management of item codes.
                </p>
            </div>

            <div class="p-4 border rounded-lg bg-gray-50">
                <h2 class="text-lg md:text-xl font-semibold text-gray-800">Fixed Asset Management</h2>
                <p class="text-gray-600 mt-2 text-sm md:text-base">
                    The system offers comprehensive support for Fixed Asset Management, enabling efficient tracking,
                    management, and reporting of assets throughout their lifecycle.
                </p>
            </div>
        </div>
        
    </div>
</div>
@endsection