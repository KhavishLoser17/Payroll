@extends('layouts.hr3-admin')
@section('content')
<body class="bg-gray-50 font-sans">
    <nav class="bg-indigo-600 shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <div class="text-white text-xl font-bold">HR1 Training Schedule</div>
                </div>
                <div class="flex items-center space-x-4">
                </div>
            </div>
        </div>
    </nav>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-900">Seminar & Workshop Schedule</h1>
            <div class="flex space-x-2">
                
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="bg-white shadow-lg rounded-lg overflow-hidden mb-8">
                <div class="p-6">
                    <h2 class="text-xl font-semibold text-gray-900 mb-6">Calendar View</h2>
                    <div id="calendar" class="h-full rounded-lg"></div>
                </div>
            </div>
        </div>
        
        <div class="flex flex-col md:flex-row gap-6">
            <!-- Filter Section -->
            <div class="w-full md:w-1/4">
                <div class="bg-white shadow rounded-lg p-6 sticky top-6">
                    <h2 class="text-lg font-medium text-gray-900 mb-4">Filters</h2>
                    
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Department</label>
                        <select class="w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                            <option value="">All Departments</option>
                            <option value="HR">Human Resources</option>
                            <option value="IT">Information Technology</option>
                            <option value="Finance">Finance</option>
                            <option value="Marketing">Marketing</option>
                        </select>
                    </div>
                    
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Training Type</label>
                        <select class="w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                            <option value="">All Types</option>
                            <option value="seminar">Seminar</option>
                            <option value="workshop">Workshop</option>
                            <option value="training">Training</option>
                        </select>
                    </div>
                    
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Date Range</label>
                        <input type="date" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mb-2">
                        <input type="date" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                    </div>
                    
                    <div class="pt-4">
                        <button class="w-full bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-md text-sm font-medium">
                            Apply Filters
                        </button>
                        <button class="w-full mt-2 bg-gray-100 hover:bg-gray-200 text-gray-700 px-4 py-2 rounded-md text-sm font-medium">
                            Reset
                        </button>
                    </div>
                </div>
            </div>

            <!-- List View Section -->
            <div class="w-full md:w-3/4">
                <div class="bg-white shadow rounded-lg overflow-hidden">
                    <div class="border-b border-gray-200 px-6 py-4 flex items-center justify-between bg-gray-50">
                        <h2 class="text-lg font-medium text-gray-900">Scheduled Seminars & Workshops</h2>
                        <div class="flex items-center space-x-2">
                            <span class="text-sm text-gray-500">View:</span>
                            <button class="bg-indigo-600 text-white px-3 py-1 rounded-md text-sm">List</button>
                            <button class="bg-white text-gray-700 border border-gray-300 px-3 py-1 rounded-md text-sm">Grid</button>
                        </div>
                    </div>

                    @foreach($seminars as $index => $seminar)
                    <div class="border-b last:border-none hover:bg-gray-50 transition-colors">
                        <div class="px-6 py-4">
                            <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between">
                                <div class="flex-1">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10 bg-indigo-100 text-indigo-600 rounded-full flex items-center justify-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                            </svg>
                                        </div>
                                        <div class="ml-4">
                                            <h3 class="text-lg font-medium text-gray-900">{{ $seminar['training_title'] }}</h3>
                                            <div class="flex items-center text-sm mt-1">
                                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ $seminar['training_type'] === 'Seminar' ? 'bg-blue-100 text-blue-800' : 'bg-purple-100 text-purple-800' }}">
                                                    {{ $seminar['training_type'] }}
                                                </span>
                                                <span class="mx-2 text-gray-500">•</span>
                                                <span class="text-gray-500">{{ $seminar['department'] }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="mt-4 ml-14">
                                        <p class="text-sm text-gray-600 line-clamp-2">{{ $seminar['description'] }}</p>
                                    </div>
                                </div>
                                
                                <div class="mt-4 lg:mt-0 ml-14 lg:ml-6 flex flex-col lg:items-end">
                                    <div class="flex items-center text-sm text-gray-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                        <time datetime="{{ $seminar['start_date'] }}">{{ \Carbon\Carbon::parse($seminar['start_date'])->format('F j, Y') }}</time>
                                    </div>
                                    <div class="flex items-center text-sm text-gray-500 mt-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <span>{{ $seminar['start_time'] }} - {{ $seminar['end_time'] }}</span>
                                    </div>
                                    <div class="flex items-center text-sm text-gray-500 mt-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                        <span>{{ $seminar['facility'] }}{{ $seminar['outside_campus_location'] ? ' - ' . $seminar['outside_campus_location'] : '' }}</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="mt-4 ml-14 lg:ml-14 flex justify-between items-center">
                                <div class="flex items-center">
                                    <img class="h-8 w-8 rounded-full" src="/api/placeholder/50/50" alt="{{ $seminar['trainer'] }}">
                                    <span class="ml-2 text-sm text-gray-700">{{ $seminar['trainer'] }}</span>
                                </div>
                                <div class="flex space-x-2">
                                    <button class="text-indigo-600 hover:text-indigo-900 text-sm font-medium">
                                        Details
                                    </button>
                                    <button class="text-indigo-600 hover:text-indigo-900 text-sm font-medium">
                                        Register
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

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
                                        Showing <span class="font-medium">1</span> to <span class="font-medium">{{ count($seminars) }}</span> of <span class="font-medium">{{ count($seminars) }}</span> results
                                    </p>
                                </div>
                                <div>
                                    <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                                        <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                            <span class="sr-only">Previous</span>
                                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                            </svg>
                                        </a>
                                        <a href="#" aria-current="page" class="z-10 bg-indigo-50 border-indigo-500 text-indigo-600 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                                            1
                                        </a>
                                        <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
                                            2
                                        </a>
                                        <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                            <span class="sr-only">Next</span>
                                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                            </svg>
                                        </a>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,listWeek'
                },
                height: 'auto',
                events: [
                    @foreach($seminars as $seminar)
                    {
                        title: '{{ $seminar['training_title'] }}',
                        start: '{{ \Carbon\Carbon::parse($seminar['start_date'])->format('Y-m-d') }}T{{ $seminar['start_time'] }}',
                        end: '{{ \Carbon\Carbon::parse($seminar['start_date'])->format('Y-m-d') }}T{{ $seminar['end_time'] }}',
                        extendedProps: {
                            department: '{{ $seminar['department'] }}',
                            trainer: '{{ $seminar['trainer'] }}',
                            location: '{{ $seminar['facility'] }}{{ $seminar['outside_campus_location'] ? " - " + $seminar['outside_campus_location'] : "" }}',
                        },
                        backgroundColor: '{{ $seminar['training_type'] === 'Seminar' ? '#4f46e5' : '#8b5cf6' }}',
                        borderColor: '{{ $seminar['training_type'] === 'Seminar' ? '#4338ca' : '#7c3aed' }}'
                    },
                    @endforeach
                ],
                eventClick: function(info) {
                    alert('Event: ' + info.event.title + '\nTrainer: ' + info.event.extendedProps.trainer + '\nLocation: ' + info.event.extendedProps.location);
                }
            });
            
            calendar.render();
        });
    </script>
@endsection