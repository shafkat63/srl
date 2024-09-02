@extends('layout.app')
@section('title', 'payRoll')

@section('mainContent')
<div class="bg-gray-100 py-12 px-6">
<div class="container mx-auto p-4 md:p-6 bg-white shadow-lg rounded-lg">
    <h1 class="text-2xl md:text-3xl font-bold mb-4 text-center">Payroll Management System</h1>

    <div class="mb-6">
        <p class="text-base md:text-lg text-gray-700 leading-relaxed">
            The Payroll Management System is designed to automate payroll processes such as managing salaries, wages, deductions, provident fund, bonuses, loan management, and income tax. This system allows for in-depth analysis of staff costs across departments and the business as a whole.
        </p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 md:gap-8">
        <div class="p-4 border rounded-lg bg-gray-50">
            <h2 class="text-lg md:text-xl font-semibold text-gray-800">User Roles & Permissions</h2>
            <p class="text-gray-600 mt-2 text-sm md:text-base">
                Organizations can grant user roles and permissions, delegate responsibilities, and oversee approvals. This feature ensures that the right personnel have access to the relevant modules, enhancing workflow and security.
            </p>
        </div>

        <div class="p-4 border rounded-lg bg-gray-50">
            <h2 class="text-lg md:text-xl font-semibold text-gray-800">Data Integrity & Security</h2>
            <p class="text-gray-600 mt-2 text-sm md:text-base">
                Ensure data integrity by granting users role-based access to specific modules they need. This role-based access control helps protect sensitive payroll information and maintains organizational integrity.
            </p>
        </div>

        <div class="p-4 border rounded-lg bg-gray-50">
            <h2 class="text-lg md:text-xl font-semibold text-gray-800">Seamless Integration</h2>
            <p class="text-gray-600 mt-2 text-sm md:text-base">
                The system seamlessly integrates with HR and accounting systems and scales with business growth. It adapts to the evolving needs of your organization, ensuring smooth and efficient operations.
            </p>
        </div>
    </div>

    
</div></div>
@endsection
