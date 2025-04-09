@extends('layouts.app')

@section('title', 'Dashboard - JB Koskont')

@section('content')
    <section class="py-8 px-4 bg-gray-900 text-white min-h-screen">
        <div class="container mx-auto">
            <div class="flex justify-between items-center mb-8">
                <div>
                    <h1 class="text-3xl font-bold">Welcome back, {{ Auth::user()->name }}!</h1>
                    <p class="text-gray-400">Take a look at the updated dashboard overview</p>
                </div>
                <div class="relative">
                    <!-- Date selector -->
                    <div class="flex items-center bg-gray-800 rounded-lg px-4 py-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <span class="text-white">Last 30 Days</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400 ml-2" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <!-- Left Column -->
                <div class="lg:col-span-2 space-y-6">
                    <!-- TVL Rankings Table with Search -->
                    <div class="bg-gray-800 rounded-xl p-6">
                        <div class="flex justify-between items-center mb-4">
                            <h2 class="text-xl font-semibold">TVL Rankings</h2>
                            <div class="relative">
                                <input type="text" placeholder="Search protocols..." class="bg-gray-700 text-white px-4 py-2 rounded-lg pl-10 focus:outline-none focus:ring-2 focus:ring-orange-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400 absolute left-3 top-2.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </div>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="w-full">
                                <thead>
                                    <tr class="text-left text-gray-400 border-b border-gray-700">
                                        <th class="pb-3 px-4">Name</th>
                                        <th class="pb-3 px-4">Category</th>
                                        <th class="pb-3 px-4">Chains</th>
                                        <th class="pb-3 px-4">7D Change</th>
                                        <th class="pb-3 px-4 text-right">TVL</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="border-b border-gray-700 hover:bg-gray-700/50 transition-colors">
                                        <td class="py-4 px-4 flex items-center">
                                            <div class="bg-orange-500 rounded-full w-8 h-8 flex items-center justify-center mr-3">
                                                <span class="text-xs font-bold">MD</span>
                                            </div>
                                            MakerDAO
                                        </td>
                                        <td class="py-4 px-4">CDP</td>
                                        <td class="py-4 px-4">
                                            <div class="flex space-x-1">
                                                <span class="chain-tag ethereum">ETH</span>
                                                <span class="chain-tag arbitrum">ARB</span>
                                            </div>
                                        </td>
                                        <td class="py-4 px-4">
                                            <div class="flex items-center text-red-500">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                                                </svg>
                                                3.12%
                                            </div>
                                        </td>
                                        <td class="py-4 px-4 text-right">$56.68B</td>
                                    </tr>
                                    <tr class="border-b border-gray-700 hover:bg-gray-700/50 transition-colors">
                                        <td class="py-4 px-4 flex items-center">
                                            <div class="bg-purple-500 rounded-full w-8 h-8 flex items-center justify-center mr-3">
                                                <span class="text-xs font-bold">CV</span>
                                            </div>
                                            Convex
                                        </td>
                                        <td class="py-4 px-4">CDP</td>
                                        <td class="py-4 px-4">
                                            <div class="flex space-x-1">
                                                <span class="chain-tag ethereum">ETH</span>
                                            </div>
                                        </td>
                                        <td class="py-4 px-4">
                                            <div class="flex items-center text-red-500">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                                                </svg>
                                                0.07%
                                            </div>
                                        </td>
                                        <td class="py-4 px-4 text-right">$52.28B</td>
                                    </tr>
                                    <tr class="hover:bg-gray-700/50 transition-colors">
                                        <td class="py-4 px-4 flex items-center">
                                            <div class="bg-blue-500 rounded-full w-8 h-8 flex items-center justify-center mr-3">
                                                <span class="text-xs font-bold">ID</span>
                                            </div>
                                            Instadapp
                                        </td>
                                        <td class="py-4 px-4">CDP</td>
                                        <td class="py-4 px-4">
                                            <div class="flex space-x-1">
                                                <span class="chain-tag ethereum">ETH</span>
                                                <span class="chain-tag polygon">MATIC</span>
                                            </div>
                                        </td>
                                        <td class="py-4 px-4">
                                            <div class="flex items-center text-red-500">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                                                </svg>
                                                0.62%
                                            </div>
                                        </td>
                                        <td class="py-4 px-4 text-right">$51.68B</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="mt-4 flex justify-between items-center text-gray-400 text-sm">
                            <div>Showing 3 of 25 protocols</div>
                            <div class="flex space-x-2">
                                <button class="px-3 py-1 rounded bg-gray-700">1</button>
                                <button class="px-3 py-1 rounded hover:bg-gray-700">2</button>
                                <button class="px-3 py-1 rounded hover:bg-gray-700">3</button>
                                <button class="px-3 py-1 rounded hover:bg-gray-700">...</button>
                                <button class="px-3 py-1 rounded hover:bg-gray-700">Next</button>
                            </div>
                        </div>
                    </div>

                    <!-- Mini Analytics Chart -->
                    <div class="bg-gray-800 rounded-xl p-6">
                        <div class="flex justify-between items-center mb-4">
                            <h2 class="text-xl font-semibold">TVL Trend</h2>
                            <div class="flex space-x-2">
                                <button class="px-3 py-1 text-sm rounded bg-gray-700">7D</button>
                                <button class="px-3 py-1 text-sm rounded hover:bg-gray-700">30D</button>
                                <button class="px-3 py-1 text-sm rounded hover:bg-gray-700">90D</button>
                            </div>
                        </div>
                        <div class="h-64 bg-gray-700 rounded-lg flex items-center justify-center">
                            <!-- Placeholder for chart -->
                            <div class="text-center text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                </svg>
                                <p>TVL Trend Chart</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column -->
                <div class="space-y-6">
                    <!-- Stats Cards -->
                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-gradient-to-br from-orange-500 to-orange-600 rounded-xl p-5">
                            <div class="text-orange-100 text-sm mb-1">Total Invoices</div>
                            <div class="text-2xl font-bold text-white">{{ $totalInvoices }}</div>
                            <div class="mt-4">
                                <a href="{{ route('invoices.create') }}" class="inline-flex items-center text-orange-100 hover:text-white text-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                    </svg>
                                    Add Invoice
                                </a>
                            </div>
                        </div>
                        <div class="bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl p-5">
                            <div class="text-purple-100 text-sm mb-1">Total Clients</div>
                            <div class="text-2xl font-bold text-white">{{ $totalClients }}</div>
                            <div class="mt-4">
                                <a href="{{ route('clients.index') }}" class="inline-flex items-center text-purple-100 hover:text-white text-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                    </svg>
                                    View Clients
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- File Drop Card -->
                    <div class="bg-gray-800 rounded-xl p-6">
                        <h2 class="text-xl font-semibold mb-4">Quick Upload</h2>
                        <button id="dropItBtn" onclick="toggleDropZone()" class="w-full border-2 border-dashed border-gray-600 hover:border-orange-500 rounded-xl p-6 flex flex-col items-center justify-center transition-colors group">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-gray-400 group-hover:text-orange-500 mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                            </svg>
                            <div class="text-gray-300 group-hover:text-white font-medium">DROP a File!</div>
                            <div class="text-gray-500 text-sm mt-1">or click to browse</div>
                        </button>
                    </div>

                    <!-- Quick Actions -->
                    <div class="bg-gray-800 rounded-xl p-6">
                        <h2 class="text-xl font-semibold mb-4">Quick Actions</h2>
                        <div class="space-y-3">
                            <a href="{{ route('invoices.index') }}" class="flex items-center p-3 rounded-lg hover:bg-gray-700 transition-colors">
                                <div class="bg-orange-500/10 p-2 rounded-lg mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-orange-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 14l6-6m-5.5.5h.01m4.99 5h.01M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16l3.5-2 3.5 2 3.5-2 3.5 2z" />
                                    </svg>
                                </div>
                                <div>
                                    <div class="font-medium">Manage Invoices</div>
                                    <div class="text-gray-400 text-sm">View and edit all invoices</div>
                                </div>
                                <div class="ml-auto text-gray-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </a>
                            <a href="{{ route('clients.index') }}" class="flex items-center p-3 rounded-lg hover:bg-gray-700 transition-colors">
                                <div class="bg-purple-500/10 p-2 rounded-lg mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-purple-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a4 4 0 00-3-3.87M9 20H4v-2a4 4 0 013-3.87M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 10a4 4 0 00-8 0m-6 0a4 4 0 00-8 0" />
                                    </svg>
                                </div>
                                <div>
                                    <div class="font-medium">Manage Clients</div>
                                    <div class="text-gray-400 text-sm">View and manage clients</div>
                                </div>
                                <div class="ml-auto text-gray-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </a>
                            <a href="#" class="flex items-center p-3 rounded-lg hover:bg-gray-700 transition-colors">
                                <div class="bg-blue-500/10 p-2 rounded-lg mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <div class="font-medium">Account Settings</div>
                                    <div class="text-gray-400 text-sm">Edit your profile</div>
                                </div>
                                <div class="ml-auto text-gray-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- Recent Activity -->
                    <div class="bg-gray-800 rounded-xl p-6">
                        <h2 class="text-xl font-semibold mb-4">Recent Activity</h2>
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <div class="bg-green-500/10 p-2 rounded-full mr-3 mt-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                <div>
                                    <div class="font-medium">New invoice paid</div>
                                    <div class="text-gray-400 text-sm">Invoice #INV-0042 from Acme Corp</div>
                                    <div class="text-gray-500 text-xs mt-1">2 hours ago</div>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="bg-blue-500/10 p-2 rounded-full mr-3 mt-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                    </svg>
                                </div>
                                <div>
                                    <div class="font-medium">New client added</div>
                                    <div class="text-gray-400 text-sm">Global Tech Solutions</div>
                                    <div class="text-gray-500 text-xs mt-1">5 hours ago</div>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="bg-orange-500/10 p-2 rounded-full mr-3 mt-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-orange-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <div class="font-medium">Payment reminder sent</div>
                                    <div class="text-gray-400 text-sm">Invoice #INV-0038 is overdue</div>
                                    <div class="text-gray-500 text-xs mt-1">1 day ago</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- DropZone Modal -->
    <div id="dropZone" class="fixed inset-0 z-50 flex items-center justify-center bg-black/60 backdrop-blur-md hidden">
        <div class="relative w-11/12 max-w-2xl bg-gray-800 border border-gray-700 p-6 rounded-2xl shadow-xl animate-zoomIn">
            <button onclick="toggleDropZone()" class="absolute top-4 right-4 text-gray-400 hover:text-white text-2xl font-bold">&times;</button>
            <div class="text-center mb-6">
                <h3 class="text-xl font-bold text-white">Upload Files</h3>
                <p class="text-gray-400">Drag and drop files here or click to browse</p>
            </div>
            <div class="border-2 border-dashed border-gray-600 hover:border-orange-500 rounded-xl p-8 flex flex-col items-center justify-center transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-gray-400 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                </svg>
                <div class="text-gray-300 font-medium mb-2">Select files to upload</div>
                <div class="text-gray-500 text-sm mb-4">PDF, DOCX, XLSX up to 10MB</div>
                <button class="px-4 py-2 bg-orange-600 hover:bg-orange-700 rounded-lg text-white font-medium transition-colors">
                    Browse Files
                </button>
                <input type="file" class="h-full w-full opacity-0 absolute inset-0 cursor-pointer" name="file_upload" multiple>
            </div>
            <div class="mt-6 grid grid-cols-2 gap-4">
                <button onclick="toggleDropZone()" class="px-4 py-2 border border-gray-600 hover:border-gray-500 rounded-lg text-white font-medium transition-colors">
                    Cancel
                </button>
                <button class="px-4 py-2 bg-orange-600 hover:bg-orange-700 rounded-lg text-white font-medium transition-colors">
                    Upload Files
                </button>
            </div>
        </div>
    </div>

    <footer class="footer">
        &copy; {{ date('Y') }} JB Koskont. All rights reserved.
    </footer>

    <style>
        .footer {
            background: #111827;
            color: #9CA3AF;
            text-align: center;
            padding: 16px;
            font-size: 0.875rem;
        }

        /* Chain tags */
        .chain-tag {
            @apply text-xs px-2 py-1 rounded;
        }
        .chain-tag.ethereum {
            @apply bg-blue-900/50 text-blue-300;
        }
        .chain-tag.arbitrum {
            @apply bg-blue-500/10 text-blue-400;
        }
        .chain-tag.polygon {
            @apply bg-purple-500/10 text-purple-400;
        }

        /* Zoom animation for modal */
        @keyframes zoomIn {
            0% {
                transform: scale(0.8);
                opacity: 0;
            }
            100% {
                transform: scale(1);
                opacity: 1;
            }
        }
        .animate-zoomIn {
            animation: zoomIn 0.3s ease-out;
        }

        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 6px;
            height: 6px;
        }
        ::-webkit-scrollbar-track {
            background: #1F2937;
        }
        ::-webkit-scrollbar-thumb {
            background: #4B5563;
            border-radius: 3px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #6B7280;
        }
    </style>

    <script>
        function toggleDropZone() {
            const dropZone = document.getElementById('dropZone');
            dropZone.classList.toggle('hidden');
        }

        // Drag and drop functionality
        document.addEventListener('DOMContentLoaded', function() {
            const dropArea = document.querySelector('#dropZone input[type="file"]').parentElement;

            ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
                dropArea.addEventListener(eventName, preventDefaults, false);
            });

            function preventDefaults(e) {
                e.preventDefault();
                e.stopPropagation();
            }

            ['dragenter', 'dragover'].forEach(eventName => {
                dropArea.addEventListener(eventName, highlight, false);
            });

            ['dragleave', 'drop'].forEach(eventName => {
                dropArea.addEventListener(eventName, unhighlight, false);
            });

            function highlight() {
                dropArea.classList.add('border-orange-500');
                dropArea.classList.remove('border-gray-600');
            }

            function unhighlight() {
                dropArea.classList.remove('border-orange-500');
                dropArea.classList.add('border-gray-600');
            }

            dropArea.addEventListener('drop', handleDrop, false);

            function handleDrop(e) {
                const dt = e.dataTransfer;
                const files = dt.files;
                document.querySelector('input[type="file"]').files = files;
                // Handle the files...
            }
        });
    </script>
@endsection
