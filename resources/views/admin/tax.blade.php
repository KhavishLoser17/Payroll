@extends('layouts.master')
@section('content')
<div class="bg-white shadow-md rounded-lg p-6 mx-auto max-w-full w-full">
    <!-- Header Section -->
    <div class="flex justify-between items-center border-b border-gray-200 pb-4 mb-6">
        <h1 class="text-2xl font-bold text-gray-800">Tax Management</h1>
        <div class="flex space-x-2">
            <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md text-sm font-medium flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
                Add Tax Rule
            </button>
            <button class="bg-gray-100 hover:bg-gray-200 text-gray-700 px-4 py-2 rounded-md text-sm font-medium flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                </svg>
                Export
            </button>
        </div>
    </div>

    <!-- Tax Settings Panel -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
        <!-- Tax Calendar -->
        <div class="bg-gray-50 rounded-lg p-4 border border-gray-200">
            <h2 class="text-lg font-semibold text-gray-700 mb-3">Tax Calendar</h2>
            <div class="flex justify-between mb-2">
                <span class="text-sm font-medium text-gray-600">Current Tax Year:</span>
                <span class="text-sm font-bold text-gray-800">2025</span>
            </div>
            <div class="flex justify-between mb-2">
                <span class="text-sm font-medium text-gray-600">Next Filing Due:</span>
                <span class="text-sm font-bold text-blue-600">April 30, 2025</span>
            </div>
            <div class="flex justify-between">
                <span class="text-sm font-medium text-gray-600">Last Updated:</span>
                <span class="text-sm text-gray-800">April 15, 2025</span>
            </div>
            <div class="mt-4">
                <button class="w-full bg-gray-200 hover:bg-gray-300 text-gray-700 py-2 rounded text-sm font-medium">
                    View Full Calendar
                </button>
            </div>
        </div>

        <!-- Quick Stats -->
        <div class="bg-gray-50 rounded-lg p-4 border border-gray-200">
            <h2 class="text-lg font-semibold text-gray-700 mb-3">Tax Withholding Stats</h2>
            <div class="flex justify-between mb-2">
                <span class="text-sm font-medium text-gray-600">Total Employees:</span>
                <span class="text-sm font-bold text-gray-800">147</span>
            </div>
            <div class="flex justify-between mb-2">
                <span class="text-sm font-medium text-gray-600">Withholding This Month:</span>
                <span class="text-sm font-bold text-gray-800">$87,432.56</span>
            </div>
            <div class="flex justify-between">
                <span class="text-sm font-medium text-gray-600">YTD Withholding:</span>
                <span class="text-sm font-bold text-gray-800">$349,730.24</span>
            </div>
            <div class="mt-4">
                <button class="w-full bg-gray-200 hover:bg-gray-300 text-gray-700 py-2 rounded text-sm font-medium">
                    View Detailed Reports
                </button>
            </div>
        </div>

        <!-- Compliance Status -->
        <div class="bg-gray-50 rounded-lg p-4 border border-gray-200">
            <h2 class="text-lg font-semibold text-gray-700 mb-3">Compliance Status</h2>
            <div class="flex items-center mb-2">
                <div class="w-3 h-3 rounded-full bg-green-500 mr-2"></div>
                <span class="text-sm font-medium text-gray-800">Federal Tax Filing: </span>
                <span class="ml-1 text-sm text-green-600 font-semibold">Compliant</span>
            </div>
            <div class="flex items-center mb-2">
                <div class="w-3 h-3 rounded-full bg-green-500 mr-2"></div>
                <span class="text-sm font-medium text-gray-800">State Tax Filing: </span>
                <span class="ml-1 text-sm text-green-600 font-semibold">Compliant</span>
            </div>
            <div class="flex items-center">
                <div class="w-3 h-3 rounded-full bg-yellow-500 mr-2"></div>
                <span class="text-sm font-medium text-gray-800">Local Tax Filing: </span>
                <span class="ml-1 text-sm text-yellow-600 font-semibold">Review Needed</span>
            </div>
            <div class="mt-4">
                <button class="w-full bg-gray-200 hover:bg-gray-300 text-gray-700 py-2 rounded text-sm font-medium">
                    Compliance Dashboard
                </button>
            </div>
        </div>
    </div>

    <!-- Tax Rates Table -->
    <div class="mb-8">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-semibold text-gray-800">Tax Rates & Brackets</h2>
            <div class="flex items-center">
                <div class="relative mr-2">
                    <select class="block appearance-none bg-white border border-gray-300 rounded-md py-2 pl-3 pr-10 text-sm leading-5 focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                        <option>Federal</option>
                        <option>State</option>
                        <option>Local</option>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </div>
                <div class="relative">
                    <select class="block appearance-none bg-white border border-gray-300 rounded-md py-2 pl-3 pr-10 text-sm leading-5 focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                        <option>2025</option>
                        <option>2024</option>
                        <option>2023</option>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-white overflow-hidden border border-gray-200 rounded-lg">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Government Tax
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Income Range
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Rate
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Filing Status
                        </th>
                        <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">SSS</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">$0 - $11,000</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">10%</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Single</td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <a href="#" class="text-blue-600 hover:text-blue-900">Edit</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">PHILHEALTH</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">$11,001 - $44,725</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">12%</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Single</td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <a href="#" class="text-blue-600 hover:text-blue-900">Edit</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">PAG-IBIG</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">$44,726 - $95,375</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">22%</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Single</td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <a href="#" class="text-blue-600 hover:text-blue-900">Edit</a>
                        </td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </div>

    <!-- Employee Tax Settings -->
    <div class="mb-8">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-semibold text-gray-800">Employee Tax Settings</h2>
            <div class="relative">
                <input type="text" placeholder="Search employees..." class="block w-64 border border-gray-300 rounded-md py-2 px-3 text-sm leading-5 focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                    <svg class="h-4 w-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                    </svg>
                </div>
            </div>
        </div>
        <div class="bg-white overflow-hidden border border-gray-200 rounded-lg">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Employee
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            ID
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Filing Status
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Allowances
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Additional Withholding
                        </th>
                        <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="h-8 w-8 rounded-full bg-gray-200 flex items-center justify-center text-gray-600">
                                    JD
                                </div>
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900">John Doe</div>
                                    <div class="text-sm text-gray-500">john.doe@example.com</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">EMP-001</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Married Filing Jointly</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">$50.00</td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <a href="#" class="text-blue-600 hover:text-blue-900">Edit</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="h-8 w-8 rounded-full bg-gray-200 flex items-center justify-center text-gray-600">
                                    JS
                                </div>
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900">Jane Smith</div>
                                    <div class="text-sm text-gray-500">jane.smith@example.com</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">EMP-002</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Single</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">1</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">$0.00</td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <a href="#" class="text-blue-600 hover:text-blue-900">Edit</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="h-8 w-8 rounded-full bg-gray-200 flex items-center justify-center text-gray-600">
                                    RJ
                                </div>
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900">Robert Johnson</div>
                                    <div class="text-sm text-gray-500">robert.johnson@example.com</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">EMP-003</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Head of Household</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">3</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">$25.00</td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <a href="#" class="text-blue-600 hover:text-blue-900">Edit</a>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="bg-gray-50 px-6 py-3 flex justify-between items-center border-t border-gray-200">
                <div class="text-sm text-gray-500">
                    Showing <span class="font-medium">1</span> to <span class="font-medium">3</span> of <span class="font-medium">147</span> employees
                </div>
                <div class="flex space-x-2">
                    <button class="bg-white border border-gray-300 text-gray-500 px-3 py-1 rounded-md text-sm font-medium" disabled>
                        Previous
                    </button>
                    <button class="bg-white border border-gray-300 hover:bg-gray-50 text-gray-700 px-3 py-1 rounded-md text-sm font-medium">
                        Next
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Tax Forms & Documents -->
   
</div>
@endsection