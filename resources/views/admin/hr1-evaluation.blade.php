@extends('layouts.hr3-admin')
@section('content')
    <div class="min-h-screen">
        <!-- Header -->
        <header class="bg-indigo-700 shadow-md">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
                <div class="flex justify-between items-center">
                    <h1 class="text-2xl font-bold text-white">HR Management System</h1>
                    <div class="flex items-center space-x-4">
                        <button class="bg-indigo-600 hover:bg-indigo-500 text-white px-4 py-2 rounded-md text-sm font-medium transition duration-150 ease-in-out">
                            <i class="fas fa-sync-alt mr-2"></i>Refresh Data
                        </button>
                        <div class="relative">
                            <button class="bg-white text-indigo-700 rounded-full w-8 h-8 flex items-center justify-center">
                                <i class="fas fa-user"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Main Content -->
        <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <!-- Dashboard Title and Controls -->
            <div class="mb-6 flex flex-col md:flex-row md:items-center md:justify-between">
                <div>
                    <h2 class="text-2xl font-bold text-gray-800">Employee Evaluation Dashboard</h2>
                    <p class="text-gray-600 mt-1">View and manage employee seminar evaluations</p>
                </div>
                
                <div class="mt-4 md:mt-0 flex flex-col sm:flex-row gap-3">
                    <div class="relative">
                        <input type="text" placeholder="Search evaluations..." class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                        <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                            <i class="fas fa-search text-gray-400"></i>
                        </div>
                    </div>
                    <select class="px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 bg-white">
                        <option value="">All Types</option>
                        <option value="peer">Peer Evaluation</option>
                        <option value="manager">Manager Evaluation</option>
                        <option value="self">Self Evaluation</option>
                    </select>
                </div>
            </div>

            <!-- Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <div class="bg-white rounded-lg shadow p-6 border-l-4 border-indigo-500">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 bg-indigo-100 rounded-md p-3">
                            <i class="fas fa-users text-indigo-600 text-xl"></i>
                        </div>
                        <div class="ml-5">
                            <p class="text-sm font-medium text-gray-500 truncate">Total Evaluations</p>
                            <p class="mt-1 text-3xl font-semibold text-gray-900" id="total-count">-</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow p-6 border-l-4 border-green-500">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 bg-green-100 rounded-md p-3">
                            <i class="fas fa-chart-line text-green-600 text-xl"></i>
                        </div>
                        <div class="ml-5">
                            <p class="text-sm font-medium text-gray-500 truncate">Average Score</p>
                            <p class="mt-1 text-3xl font-semibold text-gray-900" id="avg-score">-</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow p-6 border-l-4 border-blue-500">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 bg-blue-100 rounded-md p-3">
                            <i class="fas fa-calendar-check text-blue-600 text-xl"></i>
                        </div>
                        <div class="ml-5">
                            <p class="text-sm font-medium text-gray-500 truncate">Recent Evaluations</p>
                            <p class="mt-1 text-3xl font-semibold text-gray-900" id="recent-count">-</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Evaluation Table Card -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden mb-8">
                <div class="border-b border-gray-200 px-6 py-4 bg-gray-50 flex justify-between items-center">
                    <h3 class="text-lg font-medium text-gray-900">Employee Evaluation Records</h3>
                    <div class="flex items-center">
                        <button class="text-indigo-600 hover:text-indigo-800 mr-4 font-medium text-sm">
                            <i class="fas fa-file-export mr-1"></i> Export
                        </button>
                        <button class="text-indigo-600 hover:text-indigo-800 font-medium text-sm">
                            <i class="fas fa-print mr-1"></i> Print
                        </button>
                    </div>
                </div>
                
                <!-- Table to display the evaluations -->
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Employee
                                    <i class="fas fa-sort ml-1"></i>
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Seminar Title
                                    <i class="fas fa-sort ml-1"></i>
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Score
                                    <i class="fas fa-sort ml-1"></i>
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Comments
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Type
                                    <i class="fas fa-sort ml-1"></i>
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Date
                                    <i class="fas fa-sort ml-1"></i>
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody id="evaluation-data" class="bg-white divide-y divide-gray-200">
                            <!-- Data will be loaded here -->
                            <tr>
                                <td colspan="7" class="px-6 py-4 text-center text-sm text-gray-500">
                                    <div class="flex justify-center items-center space-x-2">
                                        <i class="fas fa-circle-notch fa-spin text-indigo-500"></i>
                                        <span>Loading evaluation data...</span>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <!-- Pagination -->
                <div class="bg-white px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6">
                    <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                        <div>
                            <p class="text-sm text-gray-700">
                                Showing <span class="font-medium">1</span> to <span class="font-medium" id="items-per-page">10</span> of <span class="font-medium" id="total-items">-</span> results
                            </p>
                        </div>
                        <div>
                            <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                                <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                    <span class="sr-only">Previous</span>
                                    <i class="fas fa-chevron-left"></i>
                                </a>
                                <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">1</a>
                                <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-indigo-50 text-sm font-medium text-indigo-600 hover:bg-indigo-100">2</a>
                                <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">3</a>
                                <span class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700">...</span>
                                <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">8</a>
                                <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                    <span class="sr-only">Next</span>
                                    <i class="fas fa-chevron-right"></i>
                                </a>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <!-- Footer -->
        <footer class="bg-white border-t border-gray-200">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
                <div class="md:flex md:items-center md:justify-between">
                    <div class="flex justify-center md:justify-start">
                        <p class="text-sm text-gray-500">&copy; 2025 HR Management System. All rights reserved.</p>
                    </div>
                    <div class="flex justify-center md:justify-end mt-4 md:mt-0">
                        <div class="flex space-x-6">
                            <a href="#" class="text-gray-400 hover:text-gray-500">Help</a>
                            <a href="#" class="text-gray-400 hover:text-gray-500">Privacy Policy</a>
                            <a href="#" class="text-gray-400 hover:text-gray-500">Terms of Service</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- Script to fetch and populate the data -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Show loading state
            const evaluationTable = document.getElementById('evaluation-data');
            
            fetch('https://hr2.easetravelandtours.com/api/v1/get-evaluation')
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    const evaluationData = data;
                    
                    // Update stats
                    document.getElementById('total-count').textContent = evaluationData.length;
                    document.getElementById('total-items').textContent = evaluationData.length;
                    
                    // Calculate average score
                    const avgScore = evaluationData.reduce((sum, eval) => sum + parseFloat(eval.evaluation_score), 0) / evaluationData.length;
                    document.getElementById('avg-score').textContent = avgScore.toFixed(1);
                    
                    // Count recent evaluations (last 30 days)
                    const thirtyDaysAgo = new Date();
                    thirtyDaysAgo.setDate(thirtyDaysAgo.getDate() - 30);
                    const recentCount = evaluationData.filter(eval => new Date(eval.evaluated_at) >= thirtyDaysAgo).length;
                    document.getElementById('recent-count').textContent = recentCount;
                    
                    // Clear loading state
                    evaluationTable.innerHTML = '';
                    
                    // Populate table
                    evaluationData.forEach(evaluation => {
                        // Format date nicely
                        const evalDate = new Date(evaluation.evaluated_at);
                        const formattedDate = evalDate.toLocaleDateString('en-US', { 
                            year: 'numeric', 
                            month: 'short', 
                            day: 'numeric' 
                        });
                        
                        // Create score badge with color based on score
                        let scoreClass = 'bg-gray-100 text-gray-800';
                        if (evaluation.evaluation_score >= 8) {
                            scoreClass = 'bg-green-100 text-green-800';
                        } else if (evaluation.evaluation_score >= 6) {
                            scoreClass = 'bg-blue-100 text-blue-800';
                        } else if (evaluation.evaluation_score >= 4) {
                            scoreClass = 'bg-yellow-100 text-yellow-800';
                        } else {
                            scoreClass = 'bg-red-100 text-red-800';
                        }
                        
                        // Create type badge
                        let typeClass = 'bg-gray-100 text-gray-800';
                        if (evaluation.evaluation_type === 'manager') {
                            typeClass = 'bg-purple-100 text-purple-800';
                        } else if (evaluation.evaluation_type === 'peer') {
                            typeClass = 'bg-blue-100 text-blue-800';
                        } else if (evaluation.evaluation_type === 'self') {
                            typeClass = 'bg-green-100 text-green-800';
                        }
                        
                        const row = document.createElement('tr');
                        row.className = 'hover:bg-gray-50 transition-colors duration-150';
                        
                        row.innerHTML = `
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10 bg-indigo-100 rounded-full flex items-center justify-center">
                                        <span class="text-indigo-700 font-medium">
                                            ${evaluation.reflection.employee.first_name.charAt(0)}${evaluation.reflection.employee.last_name.charAt(0)}
                                        </span>
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">${evaluation.reflection.employee.first_name} ${evaluation.reflection.employee.last_name}</div>
                                        <div class="text-sm text-gray-500">ID: ${evaluation.reflection.employee.id || 'N/A'}</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">${evaluation.reflection.seminar?.title || 'N/A'}</div>
                                <div class="text-xs text-gray-500">${evaluation.reflection.seminar?.date || ''}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full ${scoreClass}">
                                    ${evaluation.evaluation_score}/10
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900 max-w-xs truncate" title="${evaluation.evaluation_comments}">
                                    ${evaluation.evaluation_comments || 'No comments provided'}
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full ${typeClass}">
                                    ${evaluation.evaluation_type.charAt(0).toUpperCase() + evaluation.evaluation_type.slice(1)}
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                ${formattedDate}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <button class="text-indigo-600 hover:text-indigo-900 mr-3">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="text-blue-600 hover:text-blue-900 mr-3">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="text-red-600 hover:text-red-900">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                        `;
                        
                        evaluationTable.appendChild(row);
                    });
                })
                .catch(error => {
                    console.error('Error fetching data:', error);
                    evaluationTable.innerHTML = `
                        <tr>
                            <td colspan="7" class="px-6 py-4 text-center text-sm text-red-500">
                                <div class="flex justify-center items-center space-x-2">
                                    <i class="fas fa-exclamation-circle"></i>
                                    <span>Error loading evaluation data. Please try again later.</span>
                                </div>
                            </td>
                        </tr>
                    `;
                });
        });
    </script>
@endsection