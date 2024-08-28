@extends('layout.app')

@section('title', 'Contact')

@section('mainContent')
<div class="container mx-auto py-12">
    <h1 class="text-4xl font-bold text-gray-800 mb-6 text-center">Contact Us</h1>
    <p class="mb-8 text-lg text-gray-600 text-center">
        Have questions or need assistance? Fill out the form below, and we'll get back to you as soon as possible.
    </p>
    
    <form action="{{ url('/contact') }}" method="POST" class="w-full max-w-lg mx-auto">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
            <input type="text" id="name" name="name" placeholder="Your Name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>

        <div class="mb-4">
            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
            <input type="email" id="email" name="email" placeholder="Your Email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>

        <div class="mb-4">
            <label for="subject" class="block text-gray-700 text-sm font-bold mb-2">Subject:</label>
            <input type="text" id="subject" name="subject" placeholder="Subject" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>

        <div class="mb-6">
            <label for="message" class="block text-gray-700 text-sm font-bold mb-2">Message:</label>
            <textarea id="message" name="message" rows="8" placeholder="Your Message" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required></textarea>
        </div>

        <div class="flex items-center justify-center">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Send Message
            </button>
        </div>
    </form>
</div>

<section class="bg-gray-50 py-16">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 px-4">
        <!-- Address -->
        <div class="bg-white p-8 rounded-lg shadow-lg">
            <h3 class="text-2xl font-semibold text-gray-800 mb-4">Address</h3>
            <p class="text-gray-700">4, Chamilibagh, Shantinagar<br>Dhaka - 1217, Bangladesh.</p>
        </div>

        <!-- Call Us -->
        <div class="bg-white p-8 rounded-lg shadow-lg">
            <h3 class="text-2xl font-semibold text-gray-800 mb-4">Call Us</h3>
            <p class="text-gray-700">+8802 4831 5559<br>+88 096 78 777 117</p>
        </div>

        <!-- Email Us -->
        <div class="bg-white p-8 rounded-lg shadow-lg">
            <h3 class="text-2xl font-semibold text-gray-800 mb-4">Email Us</h3>
            <p class="text-gray-700">info@srl.com.bd<br>srlspprt@yahoo.com</p>
        </div>

        <!-- Open Hours -->
        <div class="bg-white p-8 rounded-lg shadow-lg">
            <h3 class="text-2xl font-semibold text-gray-800 mb-4">Open Hours</h3>
            <p class="text-gray-700">Sunday - Thursday<br>9:00 AM - 06:00 PM</p>
        </div>

        <!-- Affiliation and Certification -->
        <div class="bg-white p-8 rounded-lg shadow-lg">
            <h3 class="text-2xl font-semibold text-gray-800 mb-4">Affiliation and Certification</h3>
            <p class="text-gray-700">Details about affiliations and certifications can be placed here.</p>
        </div>
    </div>
</section>

@endsection
