@extends('layout.app')

@section('title', 'Portfolio')

@section('mainContent')
<div class="container mx-auto py-12 px-4">
    <!-- Our Mission -->
    <div class="text-center mb-12">
        <h2 class="text-4xl font-bold text-blue-600">Our Mission</h2>
        <p class="mt-4 text-lg text-gray-700">
            At System Resource Limited, our mission is to provide cutting-edge solutions that empower businesses to achieve their goals.
            We are dedicated to innovation, quality, and customer satisfaction.
        </p>
    </div>

    <!-- Our Team -->
    <div class="mb-12">
        <h2 class="text-4xl font-bold text-blue-600 text-center mb-8">Meet Our Team</h2>
        <div id="teamContainer" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
            <!-- Team members will be dynamically inserted here by JavaScript -->
        </div>
    </div>

    <!-- Our Services -->
    <div class="mb-12">
        <h2 class="text-4xl font-bold text-blue-600 text-center mb-8">Our Services</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white shadow-md rounded-lg p-6">
                <h3 class="text-2xl font-semibold text-blue-500 mb-4">Web Development</h3>
                <p class="text-gray-700">
                    We create responsive, high-performance websites that drive business growth and enhance user engagement.
                </p>
            </div>
            <div class="bg-white shadow-md rounded-lg p-6">
                <h3 class="text-2xl font-semibold text-blue-500 mb-4">Mobile App Development</h3>
                <p class="text-gray-700">
                    Our mobile apps offer seamless user experiences, ensuring your business stays connected with customers on the go.
                </p>
            </div>
            <div class="bg-white shadow-md rounded-lg p-6">
                <h3 class="text-2xl font-semibold text-blue-500 mb-4">Cloud Solutions</h3>
                <p class="text-gray-700">
                    We provide scalable cloud solutions that enhance your business operations and reduce infrastructure costs.
                </p>
            </div>
            <div class="bg-white shadow-md rounded-lg p-6">
                <h3 class="text-2xl font-semibold text-blue-500 mb-4">IT Consulting</h3>
                <p class="text-gray-700">
                    Our expert consultants offer strategic guidance to help your business leverage technology for competitive advantage.
                </p>
            </div>
        </div>
    </div>

    <!-- Portfolio -->
    <div class="mb-12">
        <h2 class="text-4xl font-bold text-blue-600 text-center mb-8">Our Portfolio</h2>
        <div id="portfolioContainer" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            <!-- Portfolio items will be dynamically inserted here by JavaScript -->
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="module">
    import { teamMembers } from '/js/teamdata.js';
    import { portfolioItems } from '/js/portfolio.js';

    $(document).ready(function() {
        const teamContainer = $('#teamContainer');
        const portfolioContainer = $('#portfolioContainer');

        teamMembers.forEach(member => {
            const teamMemberDiv = `
                <div class="text-center">
                    <img src="${member.image}" alt="${member.name}" class="mx-auto rounded-full mb-4">
                    <h3 class="text-xl font-semibold">${member.name}</h3>
                    <p class="text-gray-500">${member.role}</p>
                </div>
            `;
            teamContainer.append(teamMemberDiv);
        });

        portfolioItems.forEach(item => {
            const portfolioItemDiv = `
                <a href="${item.href}" class="bg-white shadow-md rounded-lg p-4">
                    <img src="${item.image}" alt="${item.alt}" class="rounded mb-4">
                    <h3 class="text-xl font-semibold text-blue-500">${item.title}</h3>
                    <p class="text-gray-700">${item.description}</p>
                </a>
            `;
            portfolioContainer.append(portfolioItemDiv);
        });
    });
</script>
@endsection
