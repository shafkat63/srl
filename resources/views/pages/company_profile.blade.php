@extends('layout.app')

@section('title', 'Company Profile')

@section('mainContent')
<div class="container mx-auto py-12 px-4">
    <h1 class="text-5xl font-extrabold text-center mb-12 text-gray-900">Company Profile</h1>
    
    <!-- Company Information -->
    <div class="bg-white p-8 rounded-lg shadow-lg mb-12 border border-gray-200">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Left Column -->
            <div class="space-y-6">
                <div class="flex items-start space-x-6"> <!-- Increased space between icon and text -->
                    <svg class="w-8 h-8 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 2m-3-2h-1a4 4 0 00-4 4v2a4 4 0 004 4h1a4 4 0 004-4v-2a4 4 0 00-4-4h-1z" />
                    </svg>
                    <div>
                        <h2 class="text-2xl font-semibold text-gray-800">Legal Status</h2>
                        <p class="text-lg text-gray-600">Private Limited Company</p>
                    </div>
                </div>

                <div class="flex items-start space-x-6"> <!-- Increased space between icon and text -->
                    <svg class="w-8 h-8 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v12a2 2 0 002 2h12a2 2 0 002-2V3m-4 2v2a2 2 0 01-2 2h-4a2 2 0 01-2-2V5m0 0H3m4 0h12M4 17h12a2 2 0 002-2V8" />
                    </svg>
                    <div>
                        <h2 class="text-2xl font-semibold text-gray-800">Year of Establishment</h2>
                        <p class="text-lg text-gray-600">2001</p>
                    </div>
                </div>

                <div class="flex items-start space-x-6"> <!-- Increased space between icon and text -->
                    <svg class="w-8 h-8 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V5a2 2 0 012-2h14a2 2 0 012 2v13a2 2 0 01-2 2z" />
                    </svg>
                    <div>
                        <h2 class="text-2xl font-semibold text-gray-800">Registered Office</h2>
                        <p class="text-lg text-gray-600">4, Chamelibagh, Shantinagar, Dhaka-1217, Bangladesh.</p>
                    </div>
                </div>

                <div class="flex items-start space-x-6"> <!-- Increased space between icon and text -->
                    <svg class="w-8 h-8 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 15h16a2 2 0 002-2V9a2 2 0 00-2-2H4a2 2 0 00-2 2v4a2 2 0 002 2zm0 0H2a4 4 0 004 4h14a4 4 0 004-4h-2" />
                    </svg>
                    <div>
                        <h2 class="text-2xl font-semibold text-gray-800">Professional Manpower Strength</h2>
                        <p class="text-lg text-gray-600">60+</p>
                    </div>
                </div>
            </div>

            <!-- Right Column -->
            <div class="space-y-6">
                <div class="flex items-start space-x-6"> <!-- Increased space between icon and text -->
                    <svg class="w-8 h-8 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h8a4 4 0 014 4v1a4 4 0 01-4 4H8a4 4 0 01-4-4v-1a4 4 0 014-4zm0 0H2a4 4 0 004-4h8a4 4 0 014 4h-2" />
                    </svg>
                    <div>
                        <h2 class="text-2xl font-semibold text-gray-800">E-mail Address</h2>
                        <p class="text-lg text-gray-600">
                            <a href="mailto:info@srl.com.bd" class="text-blue-600 hover:underline">info@srl.com.bd</a>, 
                            <a href="mailto:srlspprt@yahoo.com" class="text-blue-600 hover:underline">srlspprt@yahoo.com</a>
                        </p>
                    </div>
                </div>

                <div class="flex items-start space-x-6"> <!-- Increased space between icon and text -->
                    <svg class="w-8 h-8 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 15h16a2 2 0 002-2V9a2 2 0 00-2-2H4a2 2 0 00-2 2v4a2 2 0 002 2zm0 0H2a4 4 0 004 4h14a4 4 0 004-4h-2" />
                    </svg>
                    <div>
                        <h2 class="text-2xl font-semibold text-gray-800">Website</h2>
                        <p class="text-lg text-gray-600">
                            <a href="http://www.srl.com.bd" target="_blank" class="text-blue-600 hover:underline">www.srl.com.bd</a>
                        </p>
                    </div>
                </div>

                <div class="flex items-start space-x-6"> <!-- Increased space between icon and text -->
                    <svg class="w-8 h-8 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v12a2 2 0 002 2h12a2 2 0 002-2V3m-4 2v2a2 2 0 01-2 2h-4a2 2 0 01-2-2V5m0 0H3m4 0h12M4 17h12a2 2 0 002-2V8" />
                    </svg>
                    <div>
                        <h2 class="text-2xl font-semibold text-gray-800">Telephone</h2>
                        <p class="text-lg text-gray-600">+8802-48315559, 02-49349952</p>
                    </div>
                </div>

                <div class="flex items-start space-x-6"> <!-- Increased space between icon and text -->
                    <svg class="w-8 h-8 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10h6v6h-6zM3 10h6v6H3zM3 4h6v6H3zM15 4h6v6h-6z" />
                    </svg>
                    <div>
                        <h2 class="text-2xl font-semibold text-gray-800">Membership</h2>
                        <ul class="list-disc list-inside text-lg text-gray-600">
                            <li>Bangladesh Association of Software & Information Services (BASIS)</li>
                            <li>Bangladesh Computer Samity (BCS)</li>
                        </ul>
                    </div>
                </div>

                <div class="flex items-start space-x-6"> <!-- Increased space between icon and text -->
                    <svg class="w-8 h-8 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4a8 8 0 00-8 8v4a8 8 0 0016 0v-4a8 8 0 00-8-8zm-6 8a6 6 0 1112 0v2a6 6 0 01-12 0v-2z" />
                    </svg>
                    <div>
                        <h2 class="text-2xl font-semibold text-gray-800">Certification</h2>
                        <p class="text-lg text-gray-600">ISO 9001:2015 Certified</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Our Clients Section -->
    <div class="bg-white p-8 rounded-lg shadow-lg border border-gray-200">
        <h2 class="text-4xl font-extrabold text-gray-900 mb-6">Our Clients</h2>
        <p class="text-lg text-gray-600">
            We are proud to serve a diverse range of clients across various industries, reflecting our capability to provide tailored solutions that meet distinct business needs.
        </p>
    </div>
</div>
@endsection
