@extends('layouts.master')
@section('content')
<div class="flex flex-col flex-1 overflow-hidden">
    <!-- Top Navbar -->
    <header class="flex items-center justify-between px-6 py-4 bg-white border-b">
        <div class="flex items-center">
            <button class="text-gray-500 md:hidden">
                <i class="fas fa-bars"></i>
            </button>
            <h2 class="ml-4 text-xl font-semibold text-gray-800">Employee Management</h2>
        </div>
        <div class="flex items-center">
            <div class="relative">
                <button class="flex items-center text-gray-500 hover:text-gray-700 focus:outline-none">
                    <span class="mr-2 text-sm">John Admin</span>
                    <img class="w-8 h-8 rounded-full" src="/api/placeholder/50/50" alt="Admin Avatar">
                </button>
            </div>
        </div>
    </header>

    <!-- Main Content Area -->
    <main class="flex-1 overflow-y-auto p-6">
        <!-- Page Header -->
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-900">Employee Lists</h1>
            <button class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <i class="fas fa-plus mr-2"></i> Add Employee
            </button>
        </div>

        <!-- Filters and Search -->
        <div class="flex flex-col md:flex-row justify-between items-center mb-6 space-y-4 md:space-y-0">
            <div class="flex items-center w-full md:w-auto">
                <div class="relative w-full md:w-64">
                    <input type="text" placeholder="Search employees..." class="w-full pl-10 pr-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <div class="absolute left-3 top-2.5 text-gray-400">
                        <i class="fas fa-search"></i>
                    </div>
                </div>
            </div>
            <div class="flex space-x-2 w-full md:w-auto">
                <select class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option>All Departments</option>
                    <option>Human Resources</option>
                    <option>IT</option>
                    <option>Finance</option>
                    <option>Marketing</option>
                    <option>Support</option>
                </select>
                <select class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option>All Status</option>
                    <option>Active</option>
                    <option>On Leave</option>
                    <option>Terminated</option>
                </select>
                <select class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option>All Types</option>
                    <option>Full-time</option>
                    <option>Part-time</option>
                    <option>Contract</option>
                </select>
            </div>
        </div>

        <!-- Employee Table -->
        <div class="bg-white rounded-lg shadow overflow-hidden">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Position</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Department</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Type</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Basic Salary</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                            <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <!-- Employee 1 -->
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="h-10 w-10 rounded-full bg-gray-200 flex items-center justify-center text-gray-500">
                                        <span>J</span>
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">Jane Smith</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">HR Manager</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">Human Resources</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Active</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">Full-time</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">₱5,500.00</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">jane.smith@example.com</td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <button class="text-blue-600 hover:text-blue-900 mr-3">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="text-red-600 hover:text-red-900">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        
                        <!-- Employee 2 -->
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="h-10 w-10 rounded-full bg-gray-200 flex items-center justify-center text-gray-500">
                                        <span>M</span>
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">Michael Johnson</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">Software Developer</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">IT</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Active</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">Full-time</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">₱6,200.00</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">michael.j@example.com</td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <button class="text-blue-600 hover:text-blue-900 mr-3">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="text-red-600 hover:text-red-900">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        
                        <!-- Employee 3 -->
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="h-10 w-10 rounded-full bg-gray-200 flex items-center justify-center text-gray-500">
                                        <span>E</span>
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">Emily Davis</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">Accountant</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">Finance</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Active</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">Full-time</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">₱4,800.00</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">emily.d@example.com</td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <button class="text-blue-600 hover:text-blue-900 mr-3">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="text-red-600 hover:text-red-900">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        
                        <!-- Employee 4 -->
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="h-10 w-10 rounded-full bg-gray-200 flex items-center justify-center text-gray-500">
                                        <span>R</span>
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">Robert Wilson</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">Marketing Specialist</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">Marketing</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">On Leave</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">Part-time</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">₱2,800.00</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">robert.w@example.com</td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <button class="text-blue-600 hover:text-blue-900 mr-3">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="text-red-600 hover:text-red-900">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        
                        <!-- Employee 5 -->
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="h-10 w-10 rounded-full bg-gray-200 flex items-center justify-center text-gray-500">
                                        <span>S</span>
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">Sarah Brown</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">Customer Support</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">Support</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Active</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">Part-time</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">₱2,500.00</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">sarah.b@example.com</td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <button class="text-blue-600 hover:text-blue-900 mr-3">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="text-red-600 hover:text-red-900">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="bg-white px-4 py-3 border-t border-gray-200 sm:px-6">
                <div class="flex items-center justify-between">
                    <div class="text-sm text-gray-700">
                        Showing <span class="font-medium">1</span> to <span class="font-medium">5</span> of <span class="font-medium">20</span> results
                    </div>
                    <div class="flex-1 flex justify-end">
                        <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                            <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                <i class="fas fa-chevron-left"></i>
                            </a>
                            <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-blue-50 text-sm font-medium text-blue-600">1</a>
                            <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">2</a>
                            <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">3</a>
                            <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                <i class="fas fa-chevron-right"></i>
                            </a>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!-- Add/Edit Employee Modal (Hidden by default) -->
        <div class="fixed inset-0 overflow-y-auto z-50 hidden">
            <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                    <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                </div>
                <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
                <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                    <div class="bg-gray-50 px-4 py-3 border-b flex justify-between items-center">
                        <h3 class="text-lg font-medium text-gray-900">Add New Employee</h3>
                        <button class="text-gray-400 hover:text-gray-500">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <form>
                            <div class="grid grid-cols-1 gap-6">
                                <div>
                                    <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                                    <input type="text" name="name" id="name" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md p-2 border">
                                </div>
                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                                    <input type="email" name="email" id="email" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md p-2 border">
                                </div>
                                <div>
                                    <label for="position" class="block text-sm font-medium text-gray-700">Position</label>
                                    <input type="text" name="position" id="position" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md p-2 border">
                                </div>
                                <div>
                                    <label for="department" class="block text-sm font-medium text-gray-700">Department</label>
                                    <select id="department" name="department" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                        <option value="">Select Department</option>
                                        <option>Human Resources</option>
                                        <option>IT</option>
                                        <option>Finance</option>
                                        <option>Marketing</option>
                                        <option>Support</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                                    <select id="status" name="status" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                        <option>Active</option>
                                        <option>On Leave</option>
                                        <option>Terminated</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="employmentType" class="block text-sm font-medium text-gray-700">Employment Type</label>
                                    <select id="employmentType" name="employmentType" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                        <option>Full-time</option>
                                        <option>Part-time</option>
                                        <option>Contract</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="salary" class="block text-sm font-medium text-gray-700">Basic Salary</label>
                                    <div class="mt-1 relative rounded-md shadow-sm">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <span class="text-gray-500 sm:text-sm">₱</span>
                                        </div>
                                        <input type="text" name="salary" id="salary" class="focus:ring-blue-500 focus:border-blue-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md p-2 border" placeholder="0.00">
                                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                            <span class="text-gray-500 sm:text-sm">USD</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                        <button type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-600 text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:ml-3 sm:w-auto sm:text-sm">
                            Save
                        </button>
                        <button type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                            Cancel
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
