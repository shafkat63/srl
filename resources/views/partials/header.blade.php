<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<header class="fixed top-0 left-0 w-full bg-white shadow-md z-50">
    <div class="w-full px-4 py-4 flex justify-between items-center">
        <!-- Logo or Branding -->
        <div class="flex items-center">
            <a href="{{ url('/') }}" class="flex items-center space-x-2">
                <img src="/logo2.png" alt="srl" class="h-8 w-auto">
            </a>
        </div>

        <!-- Navigation Links -->
        <nav class="space-x-6 hidden md:flex">
            <a href="{{ url('/') }}"
                class="text-gray-600 hover:text-cyan-600 transition duration-300 {{ Request::is('/') ? 'glow' : '' }}">Home</a>
            <a href="{{ url('/about') }}"
                class="text-gray-600 hover:text-blue-500 transition duration-300 {{ Request::is('about') ? 'glow' : '' }}">About</a>
            <a href="{{ url('/services') }}"
                class="text-gray-600 hover:text-blue-500 transition duration-300 {{ Request::is('services') ? 'glow' : '' }}">Our
                Services</a>
            <a href="{{ url('/contact') }}"
                class="text-gray-600 hover:text-blue-500 transition duration-300 {{ Request::is('contact') ? 'glow' : '' }}">Contact</a>
            
            <!-- Dropdown -->
            <div class="relative group">
                <button class="flex items-center text-gray-600 hover:text-blue-500 transition duration-300 focus:outline-none focus:ring-2 focus:ring-blue-500 px-4 py-2 bg-gray-100 rounded-md shadow-md hover:bg-gray-200 {{ Request::is('products*') ? 'glow' : '' }}">
                    Products
                    <i class="fas fa-chevron-down ml-2"></i>
                </button>
                <!-- Dropdown Menu -->
                <div class="absolute right-0 mt-2 bg-white shadow-lg rounded-md opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out transform scale-95 group-hover:scale-100 pointer-events-auto">
                    <a href="{{ url('/products/vatfast') }}" class="block px-4 py-2 text-gray-600 hover:bg-gray-100 hover:underline transition duration-300">Vat Fast</a>
                    <a href="{{ url('/products/sforce') }}" class="block px-4 py-2 text-gray-600 hover:bg-gray-100 hover:underline transition duration-300">sForce</a>
                    <a href="{{ url('/products/ivvr') }}" class="block px-4 py-2 text-gray-600 hover:bg-gray-100 hover:underline transition duration-300">ivvr </a>
                    <a href="{{ url('/products/mbill') }}" class="block px-4 py-2 text-gray-600 hover:bg-gray-100 hover:underline transition duration-300">mBill </a>
                    <a href="{{ url('/products/payroll') }}" class="block px-4 py-2 text-gray-600 hover:bg-gray-100 hover:underline transition duration-300">Payroll </a>
                </div>
            </div>

            <a href="{{ url('/profile') }}"
                class="text-gray-600 hover:text-blue-500 transition duration-300 {{ Request::is('profile') ? 'glow' : '' }}">Company
                Profile</a>
            <a href="{{ url('/portfolio') }}"
                class="text-gray-600 hover:text-blue-500 transition duration-300 {{ Request::is('portfolio') ? 'glow' : '' }}">Portfolio</a>
          
            <a href="{{ url('/clients') }}"
                class="text-gray-600 hover:text-blue-500 transition duration-300 {{ Request::is('clients') ? 'glow' : '' }}">Clients</a>
          
                <a href="{{ url('/techStack') }}"
                class="text-gray-600 hover:text-blue-500 transition duration-300 {{ Request::is('techStack') ? 'glow' : '' }}">Tech
                Stack</a>
        </nav>

        <!-- Mobile Menu Button -->
        <button class="md:hidden text-gray-600 hover:text-blue-500 focus:outline-none" id="menuButton">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="md:hidden fixed inset-0 bg-white shadow-md z-50 transform translate-x-full transition-transform duration-300 ease-in-out">
        <div class="flex justify-end p-4">
            <button id="closeMenu" class="text-gray-600 hover:text-blue-500 focus:outline-none">
                <i class="fas fa-times text-2xl"></i>
            </button>
        </div>
        <nav class="flex flex-col items-center py-4 space-y-4">
            <a href="{{ url('/') }}"
                class="text-gray-600 hover:text-blue-500 transition duration-300 {{ Request::is('/') ? 'glow' : '' }}">Home</a>
            <a href="{{ url('/about') }}"
                class="text-gray-600 hover:text-blue-500 transition duration-300 {{ Request::is('about') ? 'glow' : '' }}">About</a>
            <a href="{{ url('/services') }}"
                class="text-gray-600 hover:text-blue-500 transition duration-300 {{ Request::is('services') ? 'glow' : '' }}">Our
                Services</a>
            <a href="{{ url('/contact') }}"
                class="text-gray-600 hover:text-blue-500 transition duration-300 {{ Request::is('contact') ? 'glow' : '' }}">Contact</a>
            
            <!-- Dropdown -->
            <div class="relative group">
                <button class="flex items-center text-gray-600 hover:text-blue-500 transition duration-300 focus:outline-none focus:ring-2 focus:ring-blue-500 px-4 py-2 bg-gray-100 rounded-md shadow-md hover:bg-gray-200 {{ Request::is('products*') ? 'glow' : '' }}">
                    Products
                    <i class="fas fa-chevron-down ml-2"></i>
                </button>
                <!-- Dropdown Menu -->
                <div class="absolute right-0 mt-2 bg-white shadow-lg rounded-md opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out transform scale-95 group-hover:scale-100 pointer-events-auto">
                    <a href="{{ url('/products/vatfast') }}" class="block px-4 py-2 text-gray-600 hover:bg-gray-100 hover:underline transition duration-300">Vat Fast</a>
                    <a href="{{ url('/products/sforce') }}" class="block px-4 py-2 text-gray-600 hover:bg-gray-100 hover:underline transition duration-300">sForce</a>
                    <a href="{{ url('/products/ivvr') }}" class="block px-4 py-2 text-gray-600 hover:bg-gray-100 hover:underline transition duration-300">ivvr</a>
                    <a href="{{ url('/products/mbill') }}" class="block px-4 py-2 text-gray-600 hover:bg-gray-100 hover:underline transition duration-300">mBill</a>
                    <a href="{{ url('/products/payroll') }}" class="block px-4 py-2 text-gray-600 hover:bg-gray-100 hover:underline transition duration-300">Payroll</a>
                </div>
            </div>

            <a href="{{ url('/profile') }}"
                class="text-gray-600 hover:text-blue-500 transition duration-300 {{ Request::is('profile') ? 'glow' : '' }}">Company
                Profile</a>
            <a href="{{ url('/portfolio') }}"
                class="text-gray-600 hover:text-blue-500 transition duration-300 {{ Request::is('portfolio') ? 'glow' : '' }}">Portfolio</a>
                <a href="{{ url('/clients') }}"
                class="text-gray-600 hover:text-blue-500 transition duration-300 {{ Request::is('clients') ? 'glow' : '' }}">Clients</a>
            
                <a href="{{ url('/techStack') }}"
                class="text-gray-600 hover:text-blue-500 transition duration-300 {{ Request::is('techStack') ? 'glow' : '' }}">Tech
                Stack</a>
        </nav>
    </div>
</header>

<!-- JavaScript -->
<!-- jQuery CDN -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
    const $menuButton = $('#menuButton');
    const $mobileMenu = $('#mobileMenu');
    const $closeButton = $('#closeMenu');
    const $mobileDropdownButton = $('#mobileDropdownButton');
    const $mobileDropdownMenu = $('#mobileDropdownMenu');
    const $dropdownButton = $('#dropdownButton');
    const $dropdownMenu = $('#dropdownMenu');

    // Mobile Menu Toggle
    $menuButton.on('click', function () {
        $mobileMenu.removeClass('translate-x-full').addClass('translate-x-0');
    });

    $closeButton.on('click', function () {
        $mobileMenu.removeClass('translate-x-0').addClass('translate-x-full');
    });

    // Close mobile menu when a link is clicked
    $mobileMenu.find('a').on('click', function () {
        $mobileMenu.removeClass('translate-x-0').addClass('translate-x-full');
    });

    // Mobile Dropdown Handling
    $mobileDropdownButton.on('click', function () {
        $mobileDropdownMenu.toggleClass('opacity-100 pointer-events-auto');
    });

    // Dropdown Menu Handling
    $dropdownButton.on('mouseenter', function () {
        $dropdownMenu.addClass('opacity-100 pointer-events-auto');
    });

    $dropdownButton.on('mouseleave', function () {
        setTimeout(() => {
            if (!$dropdownMenu.is(':hover')) {
                $dropdownMenu.removeClass('opacity-100 pointer-events-auto');
            }
        }, 100);
    });

    $dropdownMenu.on('mouseenter', function () {
        $dropdownMenu.addClass('opacity-100 pointer-events-auto');
    });

    $dropdownMenu.on('mouseleave', function () {
        $dropdownMenu.removeClass('opacity-100 pointer-events-auto');
    });
});

</script>
