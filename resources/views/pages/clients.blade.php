@extends('layout.app')

@section('title', 'Our Customers')

@section('mainContent')
<div class="max-w-7xl mx-auto py-12 px-6">
    <!-- Page Title -->
    <h1 class="text-4xl font-bold text-center text-gray-800 mb-8">Our Customers</h1>

    <!-- Description -->
    <p class="text-center text-gray-600 max-w-3xl mx-auto mb-12">
        Domain knowledge on Power sector Utility billing including KPI, Human Resources Management, Inventory Management empowered SRL professionals in the development of appropriate software solutions matching the requirements of its clients.
    </p>

    <!-- Client Grid -->
    <div id="clients" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Client cards will be appended here by JavaScript -->
    </div>
    
</div>
@endsection

@section('scripts')
<script type="module">
    import { clients } from '/js/clients.js'; // Ensure correct path to the JS file

    $(document).ready(function() {
        const clientsContainer = $('#clients');

        Object.values(clients).forEach(client => {
            const clientDiv = `
                <div class="bg-white shadow-lg rounded-lg p-6 hover:shadow-xl hover:transform hover:scale-105 transition duration-300 ease-in-out">
                    <h2 class="text-xl font-semibold text-gray-800 mb-4">
                        <i class="fa-solid fa-hotel mr-2 text-blue-600"></i>${client}
                        </h2>
                </div>
            `;
            clientsContainer.append(clientDiv);
        });
    });
</script>
@endsection
