@extends('layouts.hr3-admin')
@section('content')
<body class="bg-gray-50 font-sans">
    <div class="min-h-screen">
        <!-- Header -->
        <header class="bg-indigo-700 text-white shadow-lg">
            <div class="max-w-7xl mx-auto px-4 py-6 sm:px-6 lg:px-8 flex items-center justify-between">
                <h1 class="text-2xl font-bold tracking-tight">HR1 Integration to HR2</h1>
                <div class="text-sm">
                    <span class="opacity-75">Last updated:</span> 
                    <span class="font-medium">April 27, 2025</span>
                </div>
            </div>
        </header>

        <!-- Main Content -->
        <main class="max-w-7xl mx-auto px-4 py-8 sm:px-6 lg:px-8">
            <!-- Summary Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <div class="bg-white rounded-lg shadow p-6 border-l-4 border-indigo-500">
                    <div class="flex items-center">
                        <div class="bg-indigo-100 rounded-full p-3 mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-500">Total Participants</p>
                            <p class="text-2xl font-bold text-gray-900">{{ $data['summary']['passed_count'] + $data['summary']['failed_count'] }}</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow p-6 border-l-4 border-green-500">
                    <div class="flex items-center">
                        <div class="bg-green-100 rounded-full p-3 mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-500">Passed</p>
                            <p class="text-2xl font-bold text-gray-900">{{ $data['summary']['passed_count'] }}</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow p-6 border-l-4 border-red-500">
                    <div class="flex items-center">
                        <div class="bg-red-100 rounded-full p-3 mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-500">Failed</p>
                            <p class="text-2xl font-bold text-gray-900">{{ $data['summary']['failed_count'] }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Charts Section -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
                <div class="bg-white rounded-lg shadow p-6">
                    <h2 class="text-lg font-semibold text-gray-800 mb-4">Pass Rate by Exam</h2>
                    <div class="h-64">
                        <canvas id="passRateChart"></canvas>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow p-6">
                    <h2 class="text-lg font-semibold text-gray-800 mb-4">Average Scores by Department</h2>
                    <div class="h-64">
                        <canvas id="departmentScoreChart"></canvas>
                    </div>
                </div>
            </div>

            <!-- Exam Results Table -->
            <div class="bg-white rounded-lg shadow mb-8">
                <div class="px-6 py-4 border-b border-gray-200">
                    <div class="flex items-center justify-between">
                        <h2 class="text-lg font-semibold text-gray-800">Exam Results</h2>
                        <div class="flex space-x-2">
                            <button class="bg-gray-100 hover:bg-gray-200 text-gray-700 px-3 py-1 rounded text-sm">Export CSV</button>
                            <button class="bg-gray-100 hover:bg-gray-200 text-gray-700 px-3 py-1 rounded text-sm">Print</button>
                        </div>
                    </div>
                </div>
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Employee ID</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Department</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Position</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Exam Title</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Score</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($data['exam_results'] as $result)
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $result['user']['employee_id'] }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{ $result['user']['name'] }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $result['user']['department'] }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $result['user']['position'] }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $result['exam']['title'] }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-medium">{{ $result['percentage'] }}%</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    @if ($result['passed'])
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">Passed</span>
                                    @else
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">Failed</span>
                                    @endif
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $result['created_at'] }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="px-6 py-4 border-t border-gray-200 bg-gray-50">
                    <div class="flex items-center justify-between">
                        <div class="text-sm text-gray-500">
                            Showing <span class="font-medium">1</span> to <span class="font-medium">10</span> of <span class="font-medium">{{ count($data['exam_results']) }}</span> results
                        </div>
                        <div class="flex space-x-2">
                            <button class="bg-white border border-gray-300 text-gray-700 px-3 py-1 rounded text-sm disabled:opacity-50">&laquo; Previous</button>
                            <button class="bg-white border border-gray-300 text-gray-700 px-3 py-1 rounded text-sm">Next &raquo;</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Exam Statistics Cards -->
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Exam Statistics</h2>
            <div class="max-w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">  <!-- Increased max width and gap -->
                @foreach ($data['exam_statistics'] as $stat)
                <div class="bg-white rounded-lg shadow p-8">  <!-- Increased padding -->
                    <h3 class="text-xl font-medium text-gray-900 mb-4">{{ $stat['title'] }}</h3>  <!-- Increased font size and margin -->
                    <div class="grid grid-cols-2 gap-6 mt-6">  <!-- Increased gap and margin -->
                        <div class="bg-indigo-50 rounded-lg p-4">  <!-- Increased padding -->
                            <p class="text-sm text-indigo-500 font-medium uppercase">Attempts</p>  <!-- Increased text size -->
                            <p class="text-3xl font-bold text-indigo-700">{{ $stat['attempt_count'] }}</p>  <!-- Increased font size -->
                        </div>
                        <div class="bg-green-50 rounded-lg p-4">  <!-- Increased padding -->
                            <p class="text-sm text-green-500 font-medium uppercase">Passed</p>  <!-- Increased text size -->
                            <p class="text-3xl font-bold text-green-700">{{ $stat['passed_count'] }}</p>  <!-- Increased font size -->
                        </div>
                        <div class="col-span-2 bg-blue-50 rounded-lg p-4">  <!-- Increased padding -->
                            <p class="text-sm text-blue-500 font-medium uppercase">Average Score</p>  <!-- Increased text size -->
                            <div class="flex items-center">
                                <div class="flex-1 mr-6">  <!-- Increased margin -->
                                    <div class="h-4 bg-gray-200 rounded-full">  <!-- Increased height -->
                                        <div class="h-4 bg-blue-500 rounded-full" style="width: {{ $stat['avg_score'] }}%"></div>  <!-- Increased height -->
                                    </div>
                                </div>
                                <p class="text-2xl font-bold text-blue-700">{{ $stat['avg_score'] }}%</p>  <!-- Increased font size -->
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            
        </main>

        
    </div>

    <script>
        // Sample data for charts - in a real implementation, this would come from the backend
        document.addEventListener('DOMContentLoaded', function() {
            // Pass Rate Chart
            const passRateCtx = document.getElementById('passRateChart').getContext('2d');
            new Chart(passRateCtx, {
                type: 'bar',
                data: {
                    labels: [
                        @foreach ($data['exam_statistics'] as $stat)
                            "{{ $stat['title'] }}",
                        @endforeach
                    ],
                    datasets: [{
                        label: 'Pass Rate (%)',
                        data: [
                            @foreach ($data['exam_statistics'] as $stat)
                                {{ ($stat['passed_count'] / max(1, $stat['attempt_count'])) * 100 }},
                            @endforeach
                        ],
                        backgroundColor: 'rgba(79, 70, 229, 0.8)',
                        borderColor: 'rgba(79, 70, 229, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true,
                            max: 100,
                            ticks: {
                                callback: function(value) {
                                    return value + '%';
                                }
                            }
                        }
                    }
                }
            });

            // Department Score Chart - Sample data (would be calculated from actual data)
            const departments = [...new Set([
                @foreach ($data['exam_results'] as $result)
                    "{{ $result['user']['department'] }}",
                @endforeach
            ])];

            const departmentScoreCtx = document.getElementById('departmentScoreChart').getContext('2d');
            new Chart(departmentScoreCtx, {
                type: 'horizontalBar',
                data: {
                    labels: departments,
                    datasets: [{
                        label: 'Average Score (%)',
                        data: departments.map(() => Math.floor(Math.random() * 30) + 70), // Sample data
                        backgroundColor: 'rgba(16, 185, 129, 0.8)',
                        borderColor: 'rgba(16, 185, 129, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    indexAxis: 'y',
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        x: {
                            beginAtZero: true,
                            max: 100,
                            ticks: {
                                callback: function(value) {
                                    return value + '%';
                                }
                            }
                        }
                    }
                }
            });
        });
    </script>
@endsection