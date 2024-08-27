@extends('layout.app')

@section('mainContent')
<div class="bg-gray-100 py-12 px-6">
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-blue-800 mb-4">Features and Benefits of VAT Management Software (VATFast)</h1>
        <p class="text-lg text-gray-700 leading-relaxed mb-4">
            VATFast is a web-based VAT solution developed by System Resources Ltd. (SRL). The software is developed in full compliance with the requirements of the National Board of Revenue (NBR) and is NBR-approved.
        </p>
        <p class="text-lg text-gray-700 leading-relaxed">
            VATFast is easy to configure, deploy, and operate. It is designed to allow clients to efficiently perform and record relevant transactions and activities related to Purchase, Raw Material Store, Work in Progress, Finished Goods Store, and Sales with minimal effort. It automatically generates all VAT reports in compliance with NBR requirements.
        </p>
    </div>

    <div class="mb-8">
        <h2 class="text-2xl font-semibold text-blue-700 mb-4">Key Features</h2>
        <ul class="space-y-4">
            <li class="flex items-start">
                <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                <span class="text-lg text-gray-700">Approved by NBR & completely compliant with NBR requirements.</span>
            </li>
            <li class="flex items-start">
                <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                <span class="text-lg text-gray-700">Web-based Software.</span>
            </li>
            <li class="flex items-start">
                <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                <span class="text-lg text-gray-700">Detailed Purchase & Sales Entry with just a few clicks.</span>
            </li>
            <li class="flex items-start">
                <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                <span class="text-lg text-gray-700">Comprehensive setup facility including vendor and customer profiles, item creation, etc., for the convenience of transaction recording.</span>
            </li>
            <li class="flex items-start">
                <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                <span class="text-lg text-gray-700">Advanced User Management with menu-based work distribution.</span>
            </li>
            <li class="flex items-start">
                <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                <span class="text-lg text-gray-700">Configure input-output Coefficient Declaration with details.</span>
            </li>
            <li class="flex items-start">
                <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                <span class="text-lg text-gray-700">After data entry, relevant reports are generated automatically.</span>
            </li>
            <li class="flex items-start">
                <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                <span class="text-lg text-gray-700">Production indent creation.</span>
            </li>
            <li class="flex items-start">
                <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                <span class="text-lg text-gray-700">Raw Material & Finished Goods inventory management, including multi-warehouse management system facility.</span>
            </li>
            <li class="flex items-start">
                <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                <span class="text-lg text-gray-700">Vendor/Customer Item Return and Payment Management.</span>
            </li>
            <li class="flex items-start">
                <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                <span class="text-lg text-gray-700">Generate all VAT reports with minimal user effort.</span>
            </li>
            <li class="flex items-start">
                <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                <span class="text-lg text-gray-700">HS Code availability and accurate monthly snapshots of all VAT records.</span>
            </li>
            <li class="flex items-start">
                <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                <span class="text-lg text-gray-700">Ability to track inventory movement and handle inter-company transfers.</span>
            </li>
            <li class="flex items-start">
                <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                <span class="text-lg text-gray-700">VAT deduction at sources.</span>
            </li>
        </ul>
    </div>

    <div>
        <h2 class="text-2xl font-semibold text-blue-700 mb-4">VAT Reports</h2>
        <ul class="list-disc list-inside text-lg text-gray-700">
            <li>Mushak 4.3 - Input-output Coefficient</li>
            <li>Mushak 6.1 - Purchase Register</li>
            <li>Mushak 6.2 - Goods/Service Sales</li>
            <li>Mushak 6.2.1 - Purchase & Sales Register for Trading & Service</li>
            <li>Mushak 6.3 - VAT Challan or Service Bill</li>
            <li>Mushak 6.4 - Issue Subcontract</li>
            <li>Mushak 6.5 - Stock Transfer</li>
            <li>Mushak 6.6 - VAT at source deduction certificate</li>
            <li>Mushak 6.7 - Credit Note</li>
            <li>Mushak 6.8 - Debit Note</li>
            <li>Mushak 6.10 - Purchase & Sales invoice more than Two Lac</li>
            <li>Mushak 9.1 - Return Submission</li>
        </ul>
    </div>
</div>
@endsection
