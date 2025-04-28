@extends('layouts.master')
@section('content')
<main class="max-w-full mx-auto py-6 sm:px-6 lg:px-8 w-full">
    <!-- Tabs -->
    <div class="border-b border-gray-200 mb-6">
        <div class="sm:flex sm:items-baseline">
            <h3 class="text-lg leading-6 font-medium text-gray-900 sm:mr-8">Finance Operations</h3>
            
            <div class="mt-4 sm:mt-0">
                <nav class="-mb-px flex space-x-8">
                    <a href="#" class="tab-link whitespace-nowrap pb-4 px-1 border-b-2 border-blue-500 font-medium text-sm text-blue-600" data-tab="reimbursement">
                        Reimbursement
                    </a>
                    <a href="#" class="tab-link whitespace-nowrap pb-4 px-1 border-b-2 border-transparent font-medium text-sm text-gray-500 hover:text-gray-700 hover:border-gray-300" data-tab="disbursement">
                        Disbursement
                    </a>
                </nav>
            </div>
        </div>
    </div>

    <!-- Reimbursement Tab Content -->
    <div id="reimbursement" class="tab-content active">
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <div class="px-4 py-5 sm:px-6 flex justify-between items-center">
                <div>
                    <h2 class="text-lg leading-6 font-medium text-gray-900">Expense Reimbursement</h2>
                    <p class="mt-1 max-w-2xl text-sm text-gray-500">Submit and track employee expense reimbursement requests.</p>
                </div>
                <button class="btn-primary bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-md shadow-sm">
                    New Request
                </button>
            </div>
            
            <!-- Filters -->
            <div class="px-4 py-3 bg-gray-50 border-t border-b border-gray-200">
                <div class="flex flex-col sm:flex-row sm:items-center space-y-3 sm:space-y-0 sm:space-x-4">
                    <div class="flex items-center space-x-2">
                        <label for="status" class="text-sm font-medium text-gray-700">Status:</label>
                        <select id="status" class="text-sm rounded-md border-gray-300 shadow-sm">
                            <option>All</option>
                            <option>Pending</option>
                            <option>Approved</option>
                            <option>Rejected</option>
                            <option>Paid</option>
                        </select>
                    </div>
                    <div class="flex items-center space-x-2">
                        <label for="date-range" class="text-sm font-medium text-gray-700">Date Range:</label>
                        <select id="date-range" class="text-sm rounded-md border-gray-300 shadow-sm">
                            <option>All Time</option>
                            <option>This Month</option>
                            <option>Last Month</option>
                            <option>Last 3 Months</option>
                            <option>Custom</option>
                        </select>
                    </div>
                    <div class="flex items-center space-x-2 sm:ml-auto">
                        <div class="relative rounded-md shadow-sm">
                            <input type="text" class="text-sm focus:ring-blue-500 focus:border-blue-500 block w-full pr-10 sm:text-sm border-gray-300 rounded-md" placeholder="Search requests...">
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <i class="fas fa-search text-gray-400"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Reimbursement Table -->
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Request ID</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Employee</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Category</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Amount</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">REQ-2023-0542</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-8 w-8">
                                        <img class="h-8 w-8 rounded-full" src="/api/placeholder/32/32" alt="Employee photo">
                                    </div>
                                    <div class="ml-3">
                                        <div class="text-sm font-medium text-gray-900">Sarah Johnson</div>
                                        <div class="text-sm text-gray-500">IT Department</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Travel</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Apr 15, 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">$245.50</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">Pending</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                <div class="flex space-x-2">
                                    <button class="text-blue-600 hover:text-blue-900">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="text-green-600 hover:text-green-900">
                                        <i class="fas fa-check"></i>
                                    </button>
                                    <button class="text-red-600 hover:text-red-900">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">REQ-2023-0541</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-8 w-8">
                                        <img class="h-8 w-8 rounded-full" src="/api/placeholder/32/32" alt="Employee photo">
                                    </div>
                                    <div class="ml-3">
                                        <div class="text-sm font-medium text-gray-900">Mike Chen</div>
                                        <div class="text-sm text-gray-500">Sales Department</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Office Supplies</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Apr 12, 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">$89.00</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Approved</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                <div class="flex space-x-2">
                                    <button class="text-blue-600 hover:text-blue-900">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="text-blue-600 hover:text-blue-900">
                                        <i class="fas fa-dollar-sign"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">REQ-2023-0540</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-8 w-8">
                                        <img class="h-8 w-8 rounded-full" src="/api/placeholder/32/32" alt="Employee photo">
                                    </div>
                                    <div class="ml-3">
                                        <div class="text-sm font-medium text-gray-900">Lisa Wong</div>
                                        <div class="text-sm text-gray-500">Marketing Department</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Client Meeting</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Apr 10, 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">$124.75</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">Paid</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                <div class="flex space-x-2">
                                    <button class="text-blue-600 hover:text-blue-900">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="text-blue-600 hover:text-blue-900">
                                        <i class="fas fa-file-invoice"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">REQ-2023-0539</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-8 w-8">
                                        <img class="h-8 w-8 rounded-full" src="/api/placeholder/32/32" alt="Employee photo">
                                    </div>
                                    <div class="ml-3">
                                        <div class="text-sm font-medium text-gray-900">David Miller</div>
                                        <div class="text-sm text-gray-500">HR Department</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Training Materials</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Apr 8, 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">$350.00</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">Rejected</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                <div class="flex space-x-2">
                                    <button class="text-blue-600 hover:text-blue-900">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <!-- Pagination -->
            <div class="bg-white px-4 py-3 border-t border-gray-200 sm:px-6">
                <div class="flex items-center justify-between">
                    <div class="flex-1 flex justify-between sm:hidden">
                        <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                            Previous
                        </a>
                        <a href="#" class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                            Next
                        </a>
                    </div>
                    <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                        <div>
                            <p class="text-sm text-gray-700">
                                Showing <span class="font-medium">1</span> to <span class="font-medium">4</span> of <span class="font-medium">22</span> results
                            </p>
                        </div>
                        <div>
                            <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                                <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                    <span class="sr-only">Previous</span>
                                    <i class="fas fa-chevron-left"></i>
                                </a>
                                <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
                                    1
                                </a>
                                <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-blue-50 text-sm font-medium text-blue-600 hover:bg-blue-100">
                                    2
                                </a>
                                <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
                                    3
                                </a>
                                <span class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700">
                                    ...
                                </span>
                                <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
                                    6
                                </a>
                                <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                    <span class="sr-only">Next</span>
                                    <i class="fas fa-chevron-right"></i>
                                </a>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Disbursement Tab Content -->
    <div id="disbursement" class="tab-content">
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <div class="px-4 py-5 sm:px-6 flex justify-between items-center">
                <div>
                    <h2 class="text-lg leading-6 font-medium text-gray-900">Disbursement Management</h2>
                    <p class="mt-1 max-w-2xl text-sm text-gray-500">Process and track payments to employees and vendors.</p>
                </div>
                <button class="btn-primary bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-md shadow-sm">
                    New Disbursement
                </button>
            </div>
            
            <!-- Quick Stats -->
            <div class="px-4 py-5 sm:p-6 bg-gray-50 border-t border-gray-200">
                <dl class="grid grid-cols-1 gap-5 sm:grid-cols-4">
                    <div class="bg-white overflow-hidden shadow rounded-lg">
                        <div class="px-4 py-5 sm:p-6">
                            <dt class="text-sm font-medium text-gray-500 truncate">Pending Disbursements</dt>
                            <dd class="mt-1 text-3xl font-semibold text-gray-900">15</dd>
                        </div>
                    </div>
                    <div class="bg-white overflow-hidden shadow rounded-lg">
                        <div class="px-4 py-5 sm:p-6">
                            <dt class="text-sm font-medium text-gray-500 truncate">Processed Today</dt>
                            <dd class="mt-1 text-3xl font-semibold text-gray-900">8</dd>
                        </div>
                    </div>
                    <div class="bg-white overflow-hidden shadow rounded-lg">
                        <div class="px-4 py-5 sm:p-6">
                            <dt class="text-sm font-medium text-gray-500 truncate">Total Amount (Today)</dt>
                            <dd class="mt-1 text-3xl font-semibold text-gray-900">$12,450</dd>
                        </div>
                    </div>
                    <div class="bg-white overflow-hidden shadow rounded-lg">
                        <div class="px-4 py-5 sm:p-6">
                            <dt class="text-sm font-medium text-gray-500 truncate">Failed Transactions</dt>
                            <dd class="mt-1 text-3xl font-semibold text-gray-900">2</dd>
                        </div>
                    </div>
                </dl>
            </div>
            
            <!-- Filters -->
            <div class="px-4 py-3 bg-gray-50 border-t border-b border-gray-200">
                <div class="flex flex-col sm:flex-row sm:items-center space-y-3 sm:space-y-0 sm:space-x-4">
                    <div class="flex items-center space-x-2">
                        <label for="type" class="text-sm font-medium text-gray-700">Type:</label>
                        <select id="type" class="text-sm rounded-md border-gray-300 shadow-sm">
                            <option>All</option>
                            <option>Reimbursement</option>
                            <option>Salary</option>
                            <option>Bonus</option>
                            <option>Vendor Payment</option>
                        </select>
                    </div>
                    <div class="flex items-center space-x-2">
                        <label for="status-disb" class="text-sm font-medium text-gray-700">Status:</label>
                        <select id="status-disb" class="text-sm rounded-md border-gray-300 shadow-sm">
                            <option>All</option>
                            <option>Pending</option>
                            <option>Processed</option>
                            <option>Failed</option>
                        </select>
                    </div>
                    <div class="flex items-center space-x-2 sm:ml-auto">
                        <div class="relative rounded-md shadow-sm">
                            <input type="text" class="text-sm focus:ring-blue-500 focus:border-blue-500 block w-full pr-10 sm:text-sm border-gray-300 rounded-md" placeholder="Search disbursements...">
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <i class="fas fa-search text-gray-400"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Disbursement Table -->
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Transaction ID</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Recipient</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Type</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Amount</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">TRX-2023-0987</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-8 w-8">
                                        <img class="h-8 w-8 rounded-full" src="/api/placeholder/32/32" alt="Employee photo">
                                    </div>
                                    <div class="ml-3">
                                        <div class="text-sm font-medium text-gray-900">James Wilson</div>
                                        <div class="text-sm text-gray-500">Engineering Department</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Salary</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Apr 15, 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">$4,250.00</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Processed</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                <div class="flex space-x-2">
                                    <button class="text-blue-600 hover:text-blue-900">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="text-blue-600 hover:text-blue-900">
                                        <i class="fas fa-file-invoice"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">TRX-2023-0986</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-8 w-8">
                                        <img class="h-8 w-8 rounded-full" src="/api/placeholder/32/32" alt="Employee photo">
                                    </div>
                                    <div class="ml-3">
                                        <div class="text-sm font-medium text-gray-900">Emma Thompson</div>
                                        <div class="text-sm text-gray-500">Finance Department</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Bonus</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Apr 15, 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">$2,000.00</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">Pending</span>
                            </td>

                        </tbody>
                </table>
            </div>
        </main>
@endsection
