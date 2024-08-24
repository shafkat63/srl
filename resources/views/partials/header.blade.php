<header class="fixed top-0 left-0 w-full bg-white shadow-md z-50">
    <div class="w-full px-4 py-4 flex justify-between items-center">
        <!-- Logo or Branding -->
        <div class="flex items-center">
            <a href="{{ url('/') }}" class="flex items-center space-x-2">
                <span class="text-2xl font-bold text-gray-800 hover:text-blue-500">
                    <img src="/logo2.png" alt="srl" class="h-8 w-auto">
                </span>
            </a>
        </div>

        <!-- Navigation Links -->
        <nav class="space-x-6 hidden md:flex">
            <a href="{{ url('/') }}" class="text-gray-600 hover:text-cyan-600 transition duration-300 {{ Request::is('/') ? 'glow' : '' }}">Home</a>
            <a href="{{ url('/about') }}" class="text-gray-600 hover:text-blue-500 transition duration-300 {{ Request::is('about') ? 'glow' : '' }}">About</a>
            <a href="{{ url('/services') }}" class="text-gray-600 hover:text-blue-500 transition duration-300 {{ Request::is('services') ? 'glow' : '' }}">Our Services</a>
            <a href="{{ url('/contact') }}" class="text-gray-600 hover:text-blue-500 transition duration-300 {{ Request::is('contact') ? 'glow' : '' }}">Contact</a>
            <a href="{{ url('/profile') }}" class="text-gray-600 hover:text-blue-500 transition duration-300 {{ Request::is('profile') ? 'glow' : '' }}">Company Profile</a>
        </nav>

        <!-- Mobile Menu Button -->
        <button class="md:hidden text-gray-600 hover:text-blue-500 focus:outline-none" id="menu-button">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div class="md:hidden fixed inset-0 bg-white shadow-md z-50 hidden" id="mobile-menu">
        <nav class="flex flex-col items-center py-4 space-y-4">
            <a href="{{ url('/') }}" class="text-gray-600 hover:text-blue-500 transition duration-300 {{ Request::is('/') ? 'glow' : '' }}">Home</a>
            <a href="{{ url('/about') }}" class="text-gray-600 hover:text-blue-500 transition duration-300 {{ Request::is('about') ? 'glow' : '' }}">About</a>
            <a href="{{ url('/services') }}" class="text-gray-600 hover:text-blue-500 transition duration-300 {{ Request::is('services') ? 'glow' : '' }}">Our Services</a>
            <a href="{{ url('/profile') }}" class="text-gray-600 hover:text-blue-500 transition duration-300 {{ Request::is('profile') ? 'glow' : '' }}">Company Profile</a>
        </nav>
    </div>
</header>

<!-- jQuery Script -->
<script src="{{ asset('js/jquery.js') }}"></script>
<script>
    $(document).ready(function() {
        $('#menu-button').on('click', function() {
            $('#mobile-menu').slideToggle(500); 
        });

        $('#mobile-menu a').on('click', function() {
            $('#mobile-menu').slideUp(500); n
        });
    });
</script>
