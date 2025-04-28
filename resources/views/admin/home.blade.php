@extends('layouts.master')
@section('content')
    {{-- message --}}
    {!! Toastr::message() !!}
    <div class="animate__animated p-6" :class="[$store.app.animation]">
        <!-- start main content section -->
        <div x-data="sales">
            <ul class="flex space-x-2 rtl:space-x-reverse">
                <li>
                    <a href="javascript:;" class="text-black dark:text-white hover:underline">Payroll Dashboard</a>

                </li>
                <li class="before:content-['/'] ltr:before:mr-1 rtl:before:ml-1">
                    <span></span>
                </li>
            </ul>
            <div class="flex-1 p-6 overflow-y-auto">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                  <!-- Mission Section -->
                  <div class="bg-blue-900 text-white p-6 rounded-lg shadow-md">
                    <h2 class="text-xl font-bold mb-4 text-center">OUR MISSION</h2>
                    <p class="text-sm">
                      To provide efficient and accurate financial services to students and staff, 
                      ensuring timely processing of payments and maintaining transparent 
                      financial records. We strive to foster a supportive environment by
                      offering reliable support and guidance in all financial matters.
                    </p>
                  </div>
          
                  <!-- Vision Section -->
                  <div class="bg-blue-900 text-white p-6 rounded-lg shadow-md">
                    <h2 class="text-xl font-bold mb-4 text-center">OUR VISION</h2>
                    <p class="text-sm">
                      To be a trusted partner in the financial journey of every student, 
                      leveraging technology to streamline payment processes and improve 
                      communication. We aim to foster a culture of transparency and
                      responsibility, empowering students to make informed financial 
                      decisions.
                    </p>
                  </div>
                </div>
          
                <!-- About Us Section -->
                <div class="mt-6 bg-yellow-100 p-6 rounded-lg shadow-md">
                  <h2 class="text-xl font-bold mb-4 text-center">ABOUT US</h2>
                  <p class="text-sm mb-3">Our services include student enrollment management, record keeping, financial management, and much more. We ensure that your school's data is secure, accurate, and easily accessible.</p>
                  <p class="text-sm mb-3">At School Registrar, we understand the importance of managing student data effectively. Our team of experts is committed to providing personalized support to our clients, ensuring that you get the best service.</p>
                  <p class="text-sm">We pride ourselves on our ability to provide cost-effective solutions that meet the needs of each student and to simplify the student record management process. Thank you for choosing School Registrar as your partner in student record management. We look forward to serving you!</p>
                </div>
          
                <!-- Cashier Department Section -->
                <div class="mt-6 bg-orange-400 p-6 rounded-lg shadow-md">
                  <h2 class="text-xl font-bold mb-4 text-center">Payroll Management</h2>
                  <p class="text-center">email us at <a href="mailto:schoolcashier123@gmail.com" class="underline">payroll@gmail.com</a></p>
                </div>
          
                <!-- Footer -->
                <footer class="mt-6 bg-blue-900 text-white p-4 rounded-lg text-center text-sm">
                  <p>For inquiries please contact 000-0000</p>
                  <p>Copyright © 2025 Payroll Management System.</p>
                  <p>All Rights Reserved.</p>
                </footer>
              </div>
       
    </div>
@endsection
