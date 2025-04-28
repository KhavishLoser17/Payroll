@extends('layouts.master')
@section('content')
<div class="flex flex-col flex-1 overflow-hidden">
    <!-- Top Navbar -->
    <header class="flex items-center justify-between px-6 py-4 bg-white border-b">
        <div class="flex items-center">
            <button class="text-gray-500 md:hidden">
                <i class="fas fa-bars"></i>
            </button>
            <h2 class="ml-4 text-xl font-semibold text-gray-800">Attendance & Leave Management</h2>
        </div>
    </header>

    <!-- Main Content Area -->
    <main class="flex-1 overflow-y-auto bg-gray-50 p-6">
        <!-- Team Attendance Summary Section -->
        <div class="mb-6">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                <!-- Card 1 -->
                <div class="bg-white rounded-lg shadow p-4">
                    <div class="flex justify-between items-center">
                        <div>
                            <h3 class="text-lg font-medium text-gray-800">Present Today</h3>
                            <span class="text-3xl font-bold text-green-600">18</span>
                            <span class="text-sm text-gray-500 ml-2">/ 22 employees</span>
                        </div>
                        <div class="h-12 w-12 rounded-full bg-green-100 flex items-center justify-center text-green-600">
                            <i class="fas fa-user-check text-xl"></i>
                        </div>
                    </div>
                </div>
                
                <!-- Card 2 -->
                <div class="bg-white rounded-lg shadow p-4">
                    <div class="flex justify-between items-center">
                        <div>
                            <h3 class="text-lg font-medium text-gray-800">On Leave</h3>
                            <span class="text-3xl font-bold text-blue-600">3</span>
                            <span class="text-sm text-gray-500 ml-2">employees</span>
                        </div>
                        <div class="h-12 w-12 rounded-full bg-blue-100 flex items-center justify-center text-blue-600">
                            <i class="fas fa-umbrella-beach text-xl"></i>
                        </div>
                    </div>
                </div>
                
                <!-- Card 3 -->
                <div class="bg-white rounded-lg shadow p-4">
                    <div class="flex justify-between items-center">
                        <div>
                            <h3 class="text-lg font-medium text-gray-800">Late Arrivals</h3>
                            <span class="text-3xl font-bold text-yellow-600">1</span>
                            <span class="text-sm text-gray-500 ml-2">employees</span>
                        </div>
                        <div class="h-12 w-12 rounded-full bg-yellow-100 flex items-center justify-center text-yellow-600">
                            <i class="fas fa-clock text-xl"></i>
                        </div>
                    </div>
                </div>
                
                <!-- Card 4 -->
                <div class="bg-white rounded-lg shadow p-4">
                    <div class="flex justify-between items-center">
                        <div>
                            <h3 class="text-lg font-medium text-gray-800">Absent</h3>
                            <span class="text-3xl font-bold text-red-600">0</span>
                            <span class="text-sm text-gray-500 ml-2">employees</span>
                        </div>
                        <div class="h-12 w-12 rounded-full bg-red-100 flex items-center justify-center text-red-600">
                            <i class="fas fa-user-times text-xl"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Page Header -->
        <div class="flex flex-col md:flex-row justify-between items-center mb-6">
            <div>
                <p class="text-xl text-gray-600">Monitor employee attendance and manage leave requests</p>
            </div>
            <div class="flex space-x-2 mt-4 md:mt-0">
                <button id="clockInOutBtn" class="px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500">
                    <i class="fas fa-check-circle mr-2"></i> Clock In/Out
                </button>
                <button id="newLeaveRequestBtn" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <i class="fas fa-plus mr-2"></i> New Leave Request
                </button>
            </div>
        </div>

        <!-- Tabs -->
        <div class="mb-6 border-b border-gray-200">
            <ul class="flex flex-wrap -mb-px text-sm font-medium text-center">
                <li class="mr-2">
                    <a href="#" class="inline-block p-4 text-blue-600 border-b-2 border-blue-600 active rounded-t-lg">Calendar View</a>
                </li>
                <li class="mr-2">
                    <a href="#" class="inline-block p-4 text-gray-500 hover:text-gray-600 hover:border-gray-300 border-b-2 border-transparent rounded-t-lg">Attendance Log</a>
                </li>
                <li class="mr-2">
                    <a href="#" class="inline-block p-4 text-gray-500 hover:text-gray-600 hover:border-gray-300 border-b-2 border-transparent rounded-t-lg">Leave Requests</a>
                </li>
                <li class="mr-2">
                    <a href="#" class="inline-block p-4 text-gray-500 hover:text-gray-600 hover:border-gray-300 border-b-2 border-transparent rounded-t-lg">Reports</a>
                </li>
            </ul>
        </div>

        <!-- Content Section -->
        <div class="flex flex-col lg:flex-row gap-6">
            <!-- Left Column - Calendar -->
            <div class="w-full lg:w-3/4 bg-white rounded-lg shadow overflow-hidden">
                <!-- Calendar Header -->
                <div class="flex items-center justify-between px-6 py-4 border-b">
                    <div class="flex items-center">
                        <h3 class="text-lg font-semibold text-gray-800">April 2025</h3>
                        <div class="ml-6 flex space-x-2">
                            <button class="p-1 rounded hover:bg-gray-100">
                                <i class="fas fa-chevron-left text-gray-600"></i>
                            </button>
                            <button class="p-1 rounded hover:bg-gray-100">
                                <i class="fas fa-chevron-right text-gray-600"></i>
                            </button>
                        </div>
                    </div>
                    <div class="flex space-x-2">
                        <button class="px-3 py-1 text-sm bg-gray-200 rounded hover:bg-gray-300">Today</button>
                        <select class="text-sm border-gray-300 rounded focus:ring-blue-500 focus:border-blue-500">
                            <option>Month View</option>
                            <option>Week View</option>
                            <option>Day View</option>
                        </select>
                    </div>
                </div>
                
                <!-- Calendar Days Header -->
                <div class="grid grid-cols-7 gap-0 border-b">
                    <div class="px-2 py-3 text-center text-sm font-semibold text-gray-600">Sun</div>
                    <div class="px-2 py-3 text-center text-sm font-semibold text-gray-600">Mon</div>
                    <div class="px-2 py-3 text-center text-sm font-semibold text-gray-600">Tue</div>
                    <div class="px-2 py-3 text-center text-sm font-semibold text-gray-600">Wed</div>
                    <div class="px-2 py-3 text-center text-sm font-semibold text-gray-600">Thu</div>
                    <div class="px-2 py-3 text-center text-sm font-semibold text-gray-600">Fri</div>
                    <div class="px-2 py-3 text-center text-sm font-semibold text-gray-600">Sat</div>
                </div>
                
                <!-- Calendar Days - Fixed to ensure consistent sizing -->
                <div class="grid grid-cols-7 auto-rows-fr" style="height: 500px;">
                    <!-- Previous month days (grayed out) -->
                    <div class="border p-1 overflow-y-auto bg-gray-100">
                        <div class="text-gray-400 text-sm p-1">30</div>
                    </div>
                    <div class="border p-1 overflow-y-auto bg-gray-100">
                        <div class="text-gray-400 text-sm p-1">31</div>
                    </div>
                    
                    <!-- Current month days -->
                    <div class="border p-1 overflow-y-auto">
                        <div class="text-gray-700 text-sm p-1">1</div>
                    </div>
                    <div class="border p-1 overflow-y-auto">
                        <div class="text-gray-700 text-sm p-1">2</div>
                    </div>
                    <div class="border p-1 overflow-y-auto">
                        <div class="text-gray-700 text-sm p-1">3</div>
                    </div>
                    <div class="border p-1 overflow-y-auto">
                        <div class="text-gray-700 text-sm p-1">4</div>
                    </div>
                    <div class="border p-1 overflow-y-auto">
                        <div class="text-gray-700 text-sm p-1">5</div>
                    </div>
                    
                    <!-- Second Week -->
                    <div class="border p-1 overflow-y-auto">
                        <div class="text-gray-700 text-sm p-1">6</div>
                    </div>
                    <div class="border p-1 overflow-y-auto">
                        <div class="text-gray-700 text-sm p-1">7</div>
                    </div>
                    <div class="border p-1 overflow-y-auto">
                        <div class="text-gray-700 text-sm p-1">8</div>
                    </div>
                    <div class="border p-1 overflow-y-auto">
                        <div class="text-gray-700 text-sm p-1">9</div>
                    </div>
                    <div class="border p-1 overflow-y-auto">
                        <div class="text-gray-700 text-sm p-1">10</div>
                    </div>
                    <div class="border p-1 overflow-y-auto">
                        <div class="text-gray-700 text-sm p-1">11</div>
                    </div>
                    <div class="border p-1 overflow-y-auto">
                        <div class="text-gray-700 text-sm p-1">12</div>
                    </div>
                    
                    <!-- Third Week -->
                    <div class="border p-1 overflow-y-auto">
                        <div class="text-gray-700 text-sm p-1">13</div>
                    </div>
                    <div class="border p-1 overflow-y-auto">
                        <div class="text-gray-700 text-sm p-1">14</div>
                    </div>
                    <div class="border p-1 overflow-y-auto">
                        <div class="text-gray-700 text-sm p-1">15</div>
                    </div>
                    <div class="border p-1 overflow-y-auto">
                        <div class="text-gray-700 text-sm p-1">16</div>
                    </div>
                    <div class="border p-1 overflow-y-auto">
                        <div class="text-gray-700 text-sm p-1">17</div>
                    </div>
                    <div class="border p-1 overflow-y-auto">
                        <div class="text-gray-700 text-sm p-1">18</div>
                    </div>
                    <div class="border p-1 overflow-y-auto">
                        <div class="text-gray-700 text-sm p-1">19</div>
                    </div>
                    
                    <!-- Fourth Week -->
                    <div class="border p-1 overflow-y-auto">
                        <div class="text-gray-700 text-sm p-1">20</div>
                    </div>
                    <div class="border p-1 overflow-y-auto bg-green-50">
                        <div class="text-gray-700 text-sm p-1 font-bold">21</div>
                        <!-- Today marker -->
                        <div class="bg-green-100 rounded p-1 text-xs mb-1 border-l-2 border-green-500">
                            <span class="font-semibold">8:30 AM</span> Clock In
                        </div>
                    </div>
                    <div class="border p-1 overflow-y-auto">
                        <div class="text-gray-700 text-sm p-1">22</div>
                        <!-- Leave marker -->
                        <div class="bg-orange-100 rounded p-1 text-xs mb-1 border-l-2 border-orange-500">
                            <span class="font-semibold">M. Johnson</span> - PTO
                        </div>
                    </div>
                    <div class="border p-1 overflow-y-auto">
                        <div class="text-gray-700 text-sm p-1">23</div>
                        <!-- Leave marker -->
                        <div class="bg-orange-100 rounded p-1 text-xs mb-1 border-l-2 border-orange-500">
                            <span class="font-semibold">M. Johnson</span> - PTO
                        </div>
                        <!-- Leave marker -->
                        <div class="bg-blue-100 rounded p-1 text-xs mb-1 border-l-2 border-blue-500">
                            <span class="font-semibold">S. Brown</span> - Sick
                        </div>
                    </div>
                    <div class="border p-1 overflow-y-auto">
                        <div class="text-gray-700 text-sm p-1">24</div>
                        <!-- Meeting marker -->
                        <div class="bg-purple-100 rounded p-1 text-xs mb-1 border-l-2 border-purple-500">
                            <span class="font-semibold">Team</span> - Meeting
                        </div>
                    </div>
                    <div class="border p-1 overflow-y-auto">
                        <div class="text-gray-700 text-sm p-1">25</div>
                    </div>
                    <div class="border p-1 overflow-y-auto">
                        <div class="text-gray-700 text-sm p-1">26</div>
                    </div>
                    
                    <!-- Fifth Week -->
                    <div class="border p-1 overflow-y-auto">
                        <div class="text-gray-700 text-sm p-1">27</div>
                    </div>
                    <div class="border p-1 overflow-y-auto">
                        <div class="text-gray-700 text-sm p-1">28</div>
                    </div>
                    <div class="border p-1 overflow-y-auto">
                        <div class="text-gray-700 text-sm p-1">29</div>
                    </div>
                    <div class="border p-1 overflow-y-auto">
                        <div class="text-gray-700 text-sm p-1">30</div>
                    </div>
                    
                    <!-- Next month days (grayed out) -->
                    <div class="border p-1 overflow-y-auto bg-gray-100">
                        <div class="text-gray-400 text-sm p-1">1</div>
                    </div>
                    <div class="border p-1 overflow-y-auto bg-gray-100">
                        <div class="text-gray-400 text-sm p-1">2</div>
                    </div>
                    <div class="border p-1 overflow-y-auto bg-gray-100">
                        <div class="text-gray-400 text-sm p-1">3</div>
                    </div>
                </div>
            </div>

            <!-- Right Column - Summary & Stats -->
            <div class="w-full lg:w-1/4 space-y-6">
                <!-- Stats Cards -->
                <div class="bg-white rounded-lg shadow p-4">
                    <h3 class="text-md font-semibold text-gray-800 mb-4">April Overview</h3>
                    <div class="space-y-3">
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-600">Present</span>
                            <span class="text-sm font-medium text-gray-800">15/21 days</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-green-500 h-2 rounded-full" style="width: 71%"></div>
                        </div>
                        
                        <div class="flex justify-between items-center mt-3">
                            <span class="text-sm text-gray-600">Late Arrivals</span>
                            <span class="text-sm font-medium text-gray-800">2 days</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-yellow-500 h-2 rounded-full" style="width: 10%"></div>
                        </div>
                        
                        <div class="flex justify-between items-center mt-3">
                            <span class="text-sm text-gray-600">Absences</span>
                            <span class="text-sm font-medium text-gray-800">1 day</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-red-500 h-2 rounded-full" style="width: 5%"></div>
                        </div>
                        
                        <div class="flex justify-between items-center mt-3">
                            <span class="text-sm text-gray-600">Leave Taken</span>
                            <span class="text-sm font-medium text-gray-800">3 days</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-blue-500 h-2 rounded-full" style="width: 14%"></div>
                        </div>
                    </div>
                </div>
                
                <!-- Leave Balance -->
                <div class="bg-white rounded-lg shadow p-4">
                    <h3 class="text-md font-semibold text-gray-800 mb-4">Leave Balance</h3>
                    <div class="space-y-4">
                        <div>
                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-600">Annual Leave</span>
                                <span class="text-sm font-medium text-gray-800">18 days</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2 mt-1">
                                <div class="bg-blue-500 h-2 rounded-full" style="width: 75%"></div>
                            </div>
                        </div>
                        
                        <div>
                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-600">Sick Leave</span>
                                <span class="text-sm font-medium text-gray-800">7 days</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2 mt-1">
                                <div class="bg-blue-500 h-2 rounded-full" style="width: 58%"></div>
                            </div>
                        </div>
                        
                        <div>
                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-600">Personal Days</span>
                                <span class="text-sm font-medium text-gray-800">3 days</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2 mt-1">
                                <div class="bg-blue-500 h-2 rounded-full" style="width: 100%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Pending Leave Requests Section -->
        <div class="mt-6">
            <h2 class="text-lg font-semibold text-gray-800 mb-4">Pending Leave Requests</h2>
            <div class="bg-white rounded-lg shadow overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Employee</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Type</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">From</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">To</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Days</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Reason</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                            <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <!-- Request 1 -->
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="h-10 w-10 rounded-full bg-gray-200 flex items-center justify-center text-gray-500">
                                        <span>S</span>
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">Sarah Brown</div>
                                        <div class="text-sm text-gray-500">Customer Support</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">Sick Leave</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">Apr 28, 2025</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">Apr 29, 2025</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">2</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">Medical appointment</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">Pending</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <button class="text-green-600 hover:text-green-900 mr-3">
                                    <i class="fas fa-check"></i>
                                </button>
                                <button class="text-red-600 hover:text-red-900">
                                    <i class="fas fa-times"></i>
                                </button>
                            </td>
                        </tr>
                        
                        <!-- Request 2 -->
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="h-10 w-10 rounded-full bg-gray-200 flex items-center justify-center text-gray-500">
                                        <span>E</span>
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">Emily Davis</div>
                                        <div class="text-sm text-gray-500">Accountant</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">Annual Leave</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">May 5, 2025</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">May 9, 2025</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">5</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">Family vacation</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">Pending</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <button class="text-green-600 hover:text-green-900 mr-3">
                                    <i class="fas fa-check"></i>
                                </button>
                                <button class="text-red-600 hover:text-red-900">
                                    <i class="fas fa-times"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>   
                </table>   
@endsection