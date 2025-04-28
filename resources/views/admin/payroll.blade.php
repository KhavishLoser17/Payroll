@extends('layouts.master')
@section('content')
    <div class="max-w-full mx-auto w-full">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Attendance Tracking -->
            <div class="lg:col-span-2 bg-white rounded-lg shadow p-6">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-lg font-semibold">Today's Employee Attendance</h3>
                </div>

                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                            <tr>
                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Employee</th>
                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Department</th>
                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Working Hours</th>
                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Salary</th>
                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Attendance</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200" id="attendance-body">
                            <!-- Employee 1 -->
                            <tr>
                                <td class="px-4 py-3 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10">
                                            <img class="h-10 w-10 rounded-full" src="/api/placeholder/40/40" alt="Employee photo">
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">John Smith</div>
                                            <div class="text-sm text-gray-500">EMP: 10001</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500">Engineering</td>
                                <td class="px-4 py-3 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-sm leading-5 font-semibold rounded-full bg-gray-100 text-gray-800">
                                        8 HOURS
                                    </span>
                                </td>
                                <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500">₱560.00</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="relative pt-1 w-full">
                                            <div class="flex mb-2 items-center justify-between">
                                                <div>
                                                    <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-green-600 bg-green-200">
                                                        Present
                                                    </span>
                                                </div>
                                                <div class="text-right">
                                                    <span class="text-xs font-semibold inline-block text-gray-600">
                                                        22/22 days
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-green-200">
                                                <div style="width:100%" class="shadow-none flex flex-col text-center whitespace-nowrap text-black justify-center bg-green-500"></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            
                            <!-- Employee 2 -->
                            <tr>
                                <td class="px-4 py-3 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10">
                                            <img class="h-10 w-10 rounded-full" src="/api/placeholder/40/40" alt="Employee photo">
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">Emily Johnson</div>
                                            <div class="text-sm text-gray-500">EMP: 10002</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500">Marketing</td>
                                <td class="px-4 py-3 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-sm leading-5 font-semibold rounded-full bg-gray-100 text-gray-800">
                                        7 HOURS
                                    </span>
                                </td>
                                <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500">₱490.00</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="relative pt-1 w-full">
                                            <div class="flex mb-2 items-center justify-between">
                                                <div>
                                                    <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-green-600 bg-green-200">
                                                        Present
                                                    </span>
                                                </div>
                                                <div class="text-right">
                                                    <span class="text-xs font-semibold inline-block text-gray-600">
                                                        20/22 days
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-green-200">
                                                <div style="width:91%" class="shadow-none flex flex-col text-center whitespace-nowrap text-black justify-center bg-green-500"></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            
                            <!-- Employee 3 -->
                            <tr>
                                <td class="px-4 py-3 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10">
                                            <img class="h-10 w-10 rounded-full" src="/api/placeholder/40/40" alt="Employee photo">
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">Michael Chen</div>
                                            <div class="text-sm text-gray-500">EMP: 10003</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500">Finance</td>
                                <td class="px-4 py-3 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-sm leading-5 font-semibold rounded-full bg-gray-100 text-gray-800">
                                        8 HOURS
                                    </span>
                                </td>
                                <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500">₱600.00</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="relative pt-1 w-full">
                                            <div class="flex mb-2 items-center justify-between">
                                                <div>
                                                    <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-yellow-600 bg-yellow-200">
                                                        Late
                                                    </span>
                                                </div>
                                                <div class="text-right">
                                                    <span class="text-xs font-semibold inline-block text-gray-600">
                                                        21/22 days
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-yellow-200">
                                                <div style="width:95%" class="shadow-none flex flex-col text-center whitespace-nowrap text-black justify-center bg-yellow-500"></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            
                            <!-- Employee 4 -->
                            <tr>
                                <td class="px-4 py-3 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10">
                                            <img class="h-10 w-10 rounded-full" src="/api/placeholder/40/40" alt="Employee photo">
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">Sarah Rodriguez</div>
                                            <div class="text-sm text-gray-500">EMP: 10004</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500">Human Resources</td>
                                <td class="px-4 py-3 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-sm leading-5 font-semibold rounded-full bg-gray-100 text-gray-800">
                                        8 HOURS
                                    </span>
                                </td>
                                <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500">₱580.00</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="relative pt-1 w-full">
                                            <div class="flex mb-2 items-center justify-between">
                                                <div>
                                                    <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-red-600 bg-red-200">
                                                        Absent
                                                    </span>
                                                </div>
                                                <div class="text-right">
                                                    <span class="text-xs font-semibold inline-block text-gray-600">
                                                        19/22 days
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-red-200">
                                                <div style="width:86%" class="shadow-none flex flex-col text-center whitespace-nowrap text-black justify-center bg-red-500"></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Salary Calculation Panel -->
            <div class="bg-white rounded-lg shadow p-6 min-h-[700px]">
                <h3 class="text-lg font-semibold mb-4">Salary Calculation</h3>

                <!-- Employee Selector -->
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Select Employee</label>
                    <select id="employee-selector" class="block w-full border border-gray-300 rounded-md px-3 py-2 text-sm focus:outline-none focus:ring-blue-800 focus:border-blue-800 transition-all duration-300">
                        <option value="">-- Select an employee --</option>
                        <option value="1" data-type="fulltime" data-hourly-rate="70" data-allowance="200" data-working-hours="8">John Smith (Engineering)</option>
                        <option value="2" data-type="fulltime" data-hourly-rate="70" data-allowance="200" data-working-hours="7">Emily Johnson (Marketing)</option>
                        <option value="3" data-type="fulltime" data-hourly-rate="75" data-allowance="250" data-working-hours="8">Michael Chen (Finance)</option>
                        <option value="4" data-type="fulltime" data-hourly-rate="72.5" data-allowance="200" data-working-hours="8">Sarah Rodriguez (Human Resources)</option>
                        <option value="5" data-type="parttime" data-hourly-rate="80" data-allowance="100" data-working-hours="4">David Wilson (IT Support)</option>
                    </select>
                </div>

                <!-- Days Counter -->
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Working Days</label>
                    <div class="flex items-center">
                        <button id="decrease-days" class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold py-2 px-4 rounded-l-lg transition-all duration-200">
                            -
                        </button>
                        <input type="number" id="working-days" value="22" min="1" max="31"
                               class="w-16 text-center border-t border-b border-gray-300 py-2 px-2 focus:outline-none">
                        <button id="increase-days" class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold py-2 px-4 rounded-r-lg transition-all duration-200">
                            +
                        </button>
                        <span class="ml-2 text-gray-600 text-sm">days/month</span>
                    </div>
                </div>

                <!-- Salary Breakdown -->
                <div class="space-y-3 mb-4 transition-all duration-300 ease-in-out" id="salary-breakdown">
                    <!-- Default message -->
                    <div class="text-center py-4 text-gray-500 text-sm" id="default-message">
                        Select an employee to view salary breakdown
                    </div>

                    <!-- Template for salary calculation -->
                    <div id="salary-template" class="hidden">
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <h4 class="font-medium text-gray-700 text-sm">Basic Information</h4>
                                <div class="mt-2 space-y-2">
                                    <div class="flex justify-between">
                                        <span class="text-sm">Hourly Rate:</span>
                                        <span id="hourly-rate" class="font-medium text-sm">₱0.00</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-sm">Daily Working Hours:</span>
                                        <span id="working-hours" class="font-medium text-sm">0 HOURS</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-sm">Daily Basic Salary:</span>
                                        <span id="daily-basic" class="font-medium text-sm">₱0.00</span>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <h4 class="font-medium text-gray-700 text-sm">Allowances</h4>
                                <div class="mt-2 space-y-2">
                                    <div class="flex justify-between">
                                        <span class="text-sm">Daily Allowance:</span>
                                        <span id="daily-allowance" class="font-medium text-sm">₱0.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4 border-t pt-4">
                            <h4 class="font-medium text-gray-700">Deductions</h4>
                            <div class="mt-2 space-y-2">
                                <div class="flex justify-between">
                                    <span class="text-sm">Tax (10%):</span>
                                    <span id="tax-deduction" class="font-medium text-red-600 text-sm">-₱0.00</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-sm">SSS (5%):</span>
                                    <span id="sss-deduction" class="font-medium text-red-600 text-sm">-₱0.00</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-sm">PhilHealth (3%):</span>
                                    <span id="philhealth-deduction" class="font-medium text-red-600 text-sm">-₱0.00</span>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4 border-t pt-4">
                            <div class="flex justify-between text-sm font-bold">
                                <span>Net Daily Salary:</span>
                                <span id="net-salary" class="text-blue-800 text-sm">₱0.00</span>
                            </div>
                            <div class="flex justify-between text-sm font-bold mt-2">
                                <span>Monthly Salary (<span id="days-count">22</span> days):</span>
                                <span id="monthly-salary" class="text-green-600 text-sm">₱0.00</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="mt-4 flex space-x-2 bg-blue">
                    <button id="generate-payslip" class="flex-1 bg-blue-800 hover:bg-blue-900 py-2 rounded-md text-xl transition-all duration-300 text-black">
                        Generate Payslip
                    </button>
                </div>                
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const employeeSelector = document.getElementById('employee-selector');
            const workingDaysInput = document.getElementById('working-days');
            const decreaseDaysBtn = document.getElementById('decrease-days');
            const increaseDaysBtn = document.getElementById('increase-days');
            const salaryBreakdown = document.getElementById('salary-breakdown');
            const salaryTemplate = document.getElementById('salary-template');
            const defaultMessage = document.getElementById('default-message');

            // Initialize with default values
            let currentWorkingDays = 22;
            let currentData = null;

            // Calculate and display salary function
            function calculateSalary() {
                if (!currentData) return;

                const { type, hourlyRate, dailyAllowance, workingHours } = currentData;

                // Calculate basic components
                const dailyBasicSalary = hourlyRate * workingHours;
                const monthlyBasicSalary = dailyBasicSalary * currentWorkingDays;
                const monthlyAllowance = dailyAllowance * currentWorkingDays;

                // Calculate deductions based on MONTHLY basic salary
                const tax = monthlyBasicSalary * 0.10;
                const sss = monthlyBasicSalary * 0.05;
                const philhealth = monthlyBasicSalary * 0.03;
                const totalDeductions = tax + sss + philhealth;

                // Calculate net salaries
                const netMonthlySalary = monthlyBasicSalary + monthlyAllowance - totalDeductions;
                const netDailySalary = netMonthlySalary / currentWorkingDays; // For display purposes

                // Hide default message if showing
                if (!defaultMessage.classList.contains('hidden')) {
                    defaultMessage.classList.add('hidden');
                }

                // Show the template if it's hidden
                if (salaryTemplate.classList.contains('hidden')) {
                    salaryTemplate.classList.remove('hidden');
                }

                // Fill in the values
                document.getElementById('hourly-rate').textContent = `₱${hourlyRate.toFixed(2)}`;
                document.getElementById('working-hours').textContent = `${workingHours.toFixed(1)} HOURS`;
                document.getElementById('daily-basic').textContent = `₱${dailyBasicSalary.toFixed(2)}`;
                document.getElementById('daily-allowance').textContent = `₱${dailyAllowance.toFixed(2)}`;

                // Show MONTHLY deductions
                document.getElementById('tax-deduction').textContent = `-₱${tax.toFixed(2)}`;
                document.getElementById('sss-deduction').textContent = `-₱${sss.toFixed(2)}`;
                document.getElementById('philhealth-deduction').textContent = `-₱${philhealth.toFixed(2)}`;

                // Show calculated salaries
                document.getElementById('net-salary').textContent = `₱${netDailySalary.toFixed(2)}`;
                document.getElementById('days-count').textContent = currentWorkingDays;
                document.getElementById('monthly-salary').textContent = `₱${netMonthlySalary.toFixed(2)}`;
            }

            // Employee selector change handler
            employeeSelector.addEventListener('change', function() {
                if (this.value === "") {
                    currentData = null;
                    salaryTemplate.classList.add('hidden');
                    defaultMessage.classList.remove('hidden');
                    return;
                }

                const selectedOption = this.options[this.selectedIndex];
                const type = selectedOption.getAttribute('data-type');
                const hourlyRate = parseFloat(selectedOption.getAttribute('data-hourly-rate')) || 0;
                const dailyAllowance = parseFloat(selectedOption.getAttribute('data-allowance')) || 200;
                const workingHours = parseFloat(selectedOption.getAttribute('data-working-hours')) || 0;

                // Store current data
                currentData = { type, hourlyRate, dailyAllowance, workingHours };

                // Calculate salary
                calculateSalary();
            });

            // Days counter handlers
            decreaseDaysBtn.addEventListener('click', function() {
                if (currentWorkingDays > 1) {
                    currentWorkingDays--;
                    workingDaysInput.value = currentWorkingDays;
                    calculateSalary();
                }
            });

            increaseDaysBtn.addEventListener('click', function() {
                if (currentWorkingDays < 31) {
                    currentWorkingDays++;
                    workingDaysInput.value = currentWorkingDays;
                    calculateSalary();
                }
            });

            workingDaysInput.addEventListener('change', function() {
                const days = parseInt(this.value);
                if (!isNaN(days) && days >= 1 && days <= 31) {
                    currentWorkingDays = days;
                    calculateSalary();
                } else {
                    this.value = currentWorkingDays;
                }
            });

            // Generate Payslip button handler
            document.getElementById('generate-payslip').addEventListener('click', function() {
                if (!currentData) {
                    Swal.fire({
                        icon: 'warning',
                        title: 'No Employee Selected',
                        text: 'Please select an employee to generate a payslip.'
                    });
                    return;
                }

                // Show loading state
                Swal.fire({
                    title: 'Processing...',
                    text: 'Generating payslip and processing payment',
                    allowOutsideClick: false,
                    didOpen: () => {
                        Swal.showLoading();
                    }
                });

                // Simulate API call to generate payslip and send payment
                setTimeout(() => {
                    // Generate random data for demonstration
                    const payslipId = 'PS' + Math.floor(Math.random() * 1000000);
                    const cardLastFour = '4321';
                    const transactionId = 'TXN' + Date.now();

                    // Show success message
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        html: `
                            <div class="text-center text-blue-500">
                            <p class="mb-3">Your Payslip has been generated successfully!</p>
                            <p class="font-bold mb-3">PAYMENT CONFIRMATION</p>
                            <p class="mb-2">Payment has been sent to your Credit Card ending in ${cardLastFour}</p>
                            <p class="mb-3">Transaction ID: ${transactionId}</p>
                            <p>A confirmation email has been sent to your registered email address.</p>
                            </div>
                        `,
                        confirmButtonText: 'View Payslip',
                        showCancelButton: true,
                        cancelButtonText: 'Close'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // In a real app, this would redirect to the payslip page
                            Swal.fire({
                                icon: 'info',
                                title: 'Payslip Viewer',
                                text: `This is a frontend prototype. In a real application, this would open payslip ${payslipId}.`
                            });
                        }
                    });
                }, 2000); 
            });
        });
    </script>

@endsection
