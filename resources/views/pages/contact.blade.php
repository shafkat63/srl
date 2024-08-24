@extends('layout.app')

@section('title', 'Contact')

@section('mainContent')
<div class="container mx-auto py-12">
    <h1 class="text-4xl font-bold text-gray-800 mb-6 flex justify-center">Contact Us</h1>
    <p class="mb-8 text-lg text-gray-600 flex justify-center">
        Have questions or need assistance? Fill out the form below, and we'll get back to you as soon as possible.
    </p>
    
    <form action="" method="" class="w-full max-w-lg mx-auto">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
            <input type="text" id="name" name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>

        <div class="mb-4">
            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
            <input type="email" id="email" name="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>

        <div class="mb-4">
            <label for="subject" class="block text-gray-700 text-sm font-bold mb-2">Subject:</label>
            <input type="text" id="subject" name="subject" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>

        <div class="mb-6">
            <label for="message" class="block text-gray-700 text-sm font-bold mb-2">Message:</label>
            <textarea id="message" name="message" rows="8" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required></textarea>
        </div>

        <div class="flex items-center justify-between">
            <button type="button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Send Message
            </button>
        </div>
    </form>
</div>
@endsection
