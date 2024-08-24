@extends('layout.app')

@section('title', 'About Us')

@section('mainContent')
<div class="container mx-auto py-12">
    <h1 id="about-title" class="text-4xl font-bold text-center mb-8">About Us</h1>
    
    <div class="flex flex-col md:flex-row items-center mb-12">
        <!-- About Image -->
        <div id="about-image" class="md:w-1/2 p-4">
            <img src="https://via.placeholder.com/500" alt="About Us Image" class="rounded-lg shadow-lg">
        </div>

        <!-- About Content -->
        <div id="about-content" class="md:w-1/2 p-4">
            <p class="text-lg text-gray-700 leading-relaxed mb-4">
                Welcome to our platform! We are dedicated to providing high-quality services and helping our clients achieve their goals. Our team is composed of experienced professionals who are passionate about what they do. We believe in continuous improvement and always strive to exceed expectations.
            </p>
            <p class="text-lg text-gray-700 leading-relaxed">
                Our mission is to deliver value and satisfaction to our clients by offering tailored solutions that fit their unique needs. We value integrity, innovation, and collaboration, and we work hard to maintain lasting relationships with all of our clients.
            </p>
        </div>
    </div>
    
    <div class="flex flex-col md:flex-row items-center mb-12">
          <!-- About Content -->
          <div id="about-content-2" class="md:w-1/2 p-4">
            <p class="text-lg text-gray-700 leading-relaxed mb-4">
                Welcome to our platform! We are dedicated to providing high-quality services and helping our clients achieve their goals. Our team is composed of experienced professionals who are passionate about what they do. We believe in continuous improvement and always strive to exceed expectations.
            </p>
            <p class="text-lg text-gray-700 leading-relaxed">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quis quo totam aut vel qui molestiae dolor quibusdam labore, eveniet natus a dicta ratione dolorum molestias esse maiores autem tenetur.
            </p>
        </div>
        <!-- About Image -->
        <div id="about-image-2" class="md:w-1/2 p-4">
            <img src="https://via.placeholder.com/500" alt="About Us Image" class="rounded-lg shadow-lg">
        </div>

      
    </div>
</div>
@endsection

@section('scripts')
<!-- GSAP -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/gsap.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // GSAP animations for the "About Us" page
        gsap.from("#about-title", { 
            duration: 1.2, 
            opacity: 0, 
            y: -60, 
            ease: "power3.out" 
        });

        gsap.from("#about-image", { 
            duration: 1.2, 
            opacity: 0, 
            x: -60, 
            delay: 0.5, 
            ease: "power3.out" 
        });

        gsap.from("#about-content", { 
            duration: 1.2, 
            opacity: 0, 
            x: 60, 
            delay: 0.7, 
            ease: "power3.out" 
        });

        gsap.from("#about-image-2", { 
            duration: 1.2, 
            opacity: 0, 
            x: 60, // Start from the right side
            delay: 1, 
            ease: "power3.out" 
        });

        gsap.from("#about-content-2", { 
            duration: 1.2, 
            opacity: 0, 
            y: 60, 
            delay: 1.2, 
            ease: "power3.out" 
        });
    });
</script>
@endsection
