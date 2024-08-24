@extends('layout.app')

@section('title', 'About Us')

@section('mainContent')
<div class="container mx-auto py-12 px-4">
    <!-- About Us Title -->
    <h1 class="text-5xl font-bold text-center mb-12 text-gray-900">About Us</h1>
    
    <!-- Operation Brief -->
    <section class="mb-12">
        <div class="flex flex-col lg:flex-row items-center">
            <div class="w-full lg:w-1/2 mb-6 lg:mb-0 lg:pr-6">
                <img src="https://via.placeholder.com/600x400?text=Our+Expertise" alt="Operation Brief" class="w-full rounded-lg shadow-lg transform transition-transform duration-500 hover:scale-105" id="operation-brief-image">
            </div>
            <div class="w-full lg:w-1/2">
                <h2 class="text-3xl font-semibold text-gray-800 mb-6">Operation Brief</h2>
                <p class="text-lg text-gray-700 leading-relaxed mb-6">
                    System Resources Limited (SRL) mainly offers services for developing business application software, database management, web-based applications, useful & user-friendly mobile apps, IT facilities management, IT communication and network solutions, IT audit, and project management, among others.
                </p>
                <p class="text-lg text-gray-700 leading-relaxed mb-6">
                    A sound management team comprising professionals endowed with proven ability in IT management focuses on appropriate human resources development and professionalism, positioning SRL as a trusted and result-oriented lead solution firm.
                </p>
                <p class="text-lg text-gray-700 leading-relaxed mb-6">
                    SRL has completed numerous software development, enhancement, and modification projects at Bangladesh Power Development Board (BPDB) and Dhaka Power Distribution Company (DPDC). These software are in live operation, and SRL provides maintenance and upgradation services.
                </p>
                <p class="text-lg text-gray-700 leading-relaxed mb-6">
                    ‘Bill Pro’ Billing application software developed by SRL is in live operation at BPDB’s 15 computer centers.
                </p>
                <p class="text-lg text-gray-700 leading-relaxed">
                    SRL has provided facility management services at Sylhet, Moulavibazar, Bogra, and Naugaon Computer Centers of BPDB, maintaining billing for over 500,000 consumers. SRL provides database maintenance support at several BPDB and DPDC computer centers, producing bills for around 4 million consumers. SRL also delivered interface software to Grameen Phone & ROBI for their SMS-based utility bill pay system and provides maintenance services for smooth operation.
                </p>
            </div>
        </div>
    </section>
    
    <!-- Expertise Section -->
    <section class="mb-12">
        <div class="flex flex-col lg:flex-row items-center">
            <div class="w-full lg:w-1/2 mb-6 lg:mb-0 lg:pr-6">
                <img src="https://via.placeholder.com/600x400?text=Our+Expertise" alt="Our Expertise" class="w-full rounded-lg shadow-lg transform transition-transform duration-500 hover:scale-105" id="expertise-image">
            </div>
            <div class="w-full lg:w-1/2">
                <h2 class="text-3xl font-semibold text-gray-800 mb-6">Our Expertise</h2>
                <p class="text-lg text-gray-700 leading-relaxed mb-6">
                    SRL’s long experience in major IT projects at BPDB and DPDC has uniquely positioned SRL over its competitors in the power sector. Our domain knowledge in Power sector Utility billing, KPI, Human Resources Management, and Inventory Management empowers SRL professionals to develop software solutions matching client requirements.
                </p>
                <p class="text-lg text-gray-700 leading-relaxed mb-6">
                    SRL completed IT audit at IFIC Bank and provided project management support to Standard Bank for implementing centralized Banking Software. We also provided expert services for user acceptance testing of online banking software “T24” by Temenos at Agrani Bank Ltd. and Janata Bank Ltd.
                </p>
                <p class="text-lg text-gray-700 leading-relaxed mb-6">
                    Our professionals have worked intensively with IBM, BULL, PriceWaterhouse Cooper Development Associates, and PA Consulting Group on major IT projects in Bangladesh. SRL’s primary objective is to provide value to customers by delivering appropriate solutions that meet their specific needs.
                </p>
                <p class="text-lg text-gray-700 leading-relaxed">
                    SRL employs 60+ professionals skilled in various technologies, including Oracle, SQL Server, mySQL, AIX, HVX, COBOL, Linux, Visual Basic, PHP, ProC, ASP, .NET, Java, Apex, and Eclipse. Our team has built trusted relationships with decision-makers at higher levels of government, which has helped us successfully complete IT projects and ensure reliable services.
                </p>
            </div>
        </div>
    </section>
    
    <!-- Recent Projects -->
    <section class="mb-12">
        <div class="flex flex-col lg:flex-row items-center">
            <div class="w-full lg:w-1/2 mb-6 lg:mb-0 lg:pr-6">
                <img src="https://via.placeholder.com/600x400?text=Recent+Projects" alt="Recent Projects" class="w-full rounded-lg shadow-lg transform transition-transform duration-500 hover:scale-105" id="recent-projects-image">
            </div>
            <div class="w-full lg:w-1/2">
                <h2 class="text-3xl font-semibold text-gray-800 mb-6">Recent Projects</h2>
                <p class="text-lg text-gray-700 leading-relaxed mb-6">
                    In line with the Government's Digital Bangladesh Policy, SRL has developed several state-of-the-art mobile applications. Our mobile application mBill for snapshot-based meter reading collection has improved billing accuracy, reduced collection time, and significantly reduced system loss. This service is being extended across the country.
                </p>
                <p class="text-lg text-gray-700 leading-relaxed mb-6">
                    We have also developed mBill+ for various collections through banking channels, with several commercial banks joining SRL for this service. SRL provided middleware and services to bKash for utility bill collection, and developed e-Payment software for recording collection information electronically at around 100 bank branches.
                </p>
                <p class="text-lg text-gray-700 leading-relaxed">
                    Additionally, SRL developed sForce, a multi-platform software for distribution channel management, helping businesses in fast-moving consumer goods and pharmaceutical sectors.
                </p>
            </div>
        </div>
    </section>
    
    <!-- Training and Support -->
    <section class="mb-12">
        <div class="flex flex-col lg:flex-row items-center">
            <div class="w-full lg:w-1/2 mb-6 lg:mb-0 lg:pr-6">
                <img src="https://via.placeholder.com/600x400?text=Training+and+Support" class="w-full rounded-lg shadow-lg transform transition-transform duration-500 hover:scale-105" id="training-image">
            </div>
            <div class="w-full lg:w-1/2">
                <h2 class="text-3xl font-semibold text-gray-800 mb-6">Training and Support</h2>
                <p class="text-lg text-gray-700 leading-relaxed">
                    For smooth implementation and continuity of IT products, SRL performs appropriate assessments of IT training needs for user organizations and provides need-based IT training to users at various levels. Our commitment and professionalism have established SRL as a trusted service provider.
                </p>
            </div>
        </div>
    </section>
</div>
@endsection

@section('scripts')
<!-- GSAP -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/gsap.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // GSAP animations
        gsap.from("#about-title", { duration: 1, opacity: 0, y: -50, ease: "power2.out" });
        
        gsap.from("#operation-brief-image", { duration: 1, opacity: 0, x: -50, ease: "power2.out", delay: 0.3 });
        gsap.from("#operation-brief-title", { duration: 1, opacity: 0, y: -50, ease: "power2.out", delay: 0.6 });
        
        gsap.from("#expertise-image", { duration: 1, opacity: 0, x: -50, ease: "power2.out", delay: 0.9 });
        gsap.from("#expertise-title", { duration: 1, opacity: 0, y: -50, ease: "power2.out", delay: 1.2 });
        
        gsap.from("#recent-projects-image", { duration: 1, opacity: 0, x: -50, ease: "power2.out", delay: 1.5 });
        gsap.from("#recent-projects-title", { duration: 1, opacity: 0, y: -50, ease: "power2.out", delay: 1.8 });
        
        gsap.from("#training-image", { duration: 1, opacity: 0, x: -50, ease: "power2.out", delay: 2.1 });
        gsap.from("#training-title", { duration: 1, opacity: 0, y: -50, ease: "power2.out", delay: 2.4 });
        
        gsap.from("p", { duration: 1, opacity: 0, y: 20, stagger: 0.2, ease: "power2.out" });
    });
</script>
@endsection
