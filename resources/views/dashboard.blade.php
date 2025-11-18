<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Stats Grid -->
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4 mb-8">
                <!-- Total Clients Card -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Total Clients</p>
                                <p class="text-3xl font-bold text-gray-900 dark:text-gray-100 mt-2">
                                    {{-- {{ $totalClients ?? 0 }} --}}
                                    10
                                </p>
                            </div>
                            <div class="p-3 bg-blue-100 dark:bg-blue-900/30 rounded-lg">
                                <svg class="w-8 h-8 text-blue-600 dark:text-blue-400" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Total Earnings Card -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Total Earnings</p>
                                <p class="text-3xl font-bold text-gray-900 dark:text-gray-100 mt-2">
                                    {{-- ${{ number_format($totalEarnings ?? 0, 2) }} --}}
                                    599.00
                                </p>
                            </div>
                            <div class="p-3 bg-green-100 dark:bg-green-900/30 rounded-lg">
                                <svg class="w-8 h-8 text-green-600 dark:text-green-400" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Active Clients Card -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Active Clients</p>
                                <p class="text-3xl font-bold text-gray-900 dark:text-gray-100 mt-2">
                                    {{-- {{ $activeClients ?? 0 }} --}}
                                    20
                                </p>
                                <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">Subscribed & Paid</p>
                            </div>
                            <div class="p-3 bg-emerald-100 dark:bg-emerald-900/30 rounded-lg">
                                <svg class="w-8 h-8 text-emerald-600 dark:text-emerald-400" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Inactive Clients Card -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Inactive Clients</p>
                                <p class="text-3xl font-bold text-gray-900 dark:text-gray-100 mt-2">
                                    {{-- {{ $inactiveClients ?? 0 }} --}}
                                    2
                                </p>
                                <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">Disconnected/Unpaid</p>
                            </div>
                            <div class="p-3 bg-red-100 dark:bg-red-900/30 rounded-lg">
                                <svg class="w-8 h-8 text-red-600 dark:text-red-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Secondary Stats Grid -->
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4 mb-8">
                <!-- Monthly Revenue Card -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Monthly Revenue</p>
                                <p class="text-3xl font-bold text-gray-900 dark:text-gray-100 mt-2">
                                    {{-- ${{ number_format($monthlyRevenue ?? 0, 2) }} --}}
                                    5,489.00
                                </p>
                                <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">This Month</p>
                            </div>
                            <div class="p-3 bg-purple-100 dark:bg-purple-900/30 rounded-lg">
                                <svg class="w-8 h-8 text-purple-600 dark:text-purple-400" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Outstanding Balances Card -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Outstanding Balances</p>
                                <p class="text-3xl font-bold text-gray-900 dark:text-gray-100 mt-2">
                                    {{-- ${{ number_format($outstandingBalances ?? 0, 2) }} --}}
                                    1,000.00
                                </p>
                                <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">Unpaid Bills</p>
                            </div>
                            <div class="p-3 bg-amber-100 dark:bg-amber-900/30 rounded-lg">
                                <svg class="w-8 h-8 text-amber-600 dark:text-amber-400" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- New Signups This Month Card -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-600 dark:text-gray-400">New Signups</p>
                                <p class="text-3xl font-bold text-gray-900 dark:text-gray-100 mt-2">
                                    {{-- {{ $newSignupsThisMonth ?? 0 }} --}}
                                    5
                                </p>
                                <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">This Month</p>
                            </div>
                            <div class="p-3 bg-indigo-100 dark:bg-indigo-900/30 rounded-lg">
                                <svg class="w-8 h-8 text-indigo-600 dark:text-indigo-400" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Churn Rate Card -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Churn Rate</p>
                                <p class="text-3xl font-bold text-gray-900 dark:text-gray-100 mt-2">
                                    {{-- {{ number_format($churnRate ?? 0, 1) }}% --}}
                                    0.0%
                                </p>
                                <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">Clients Left</p>
                            </div>
                            <div class="p-3 bg-rose-100 dark:bg-rose-900/30 rounded-lg">
                                <svg class="w-8 h-8 text-rose-600 dark:text-rose-400" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 17h8m0 0V9m0 8l-8-8-4 4-6-6"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Additional Info Section -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100 mb-4">Quick Overview</h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div class="p-4 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                            <p class="text-sm text-gray-600 dark:text-gray-400">Active Rate</p>
                            <p class="text-2xl font-bold text-gray-900 dark:text-gray-100 mt-1">
                                {{-- {{ $totalClients > 0 ? number_format(($activeClients ?? 0) / $totalClients * 100, 1) : 0 }}% --}}
                                0.0%
                            </p>
                        </div>
                        <div class="p-4 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                            <p class="text-sm text-gray-600 dark:text-gray-400">Average Monthly Revenue</p>
                            <p class="text-2xl font-bold text-gray-900 dark:text-gray-100 mt-1">
                                {{-- ${{ $totalClients > 0 ? number_format(($monthlyRevenue ?? 0) / max($activeClients ?? 1, 1), 2) : 0 }} --}}
                                $0.00
                            </p>
                        </div>
                        <div class="p-4 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                            <p class="text-sm text-gray-600 dark:text-gray-400">Collection Rate</p>
                            <p class="text-2xl font-bold text-gray-900 dark:text-gray-100 mt-1">
                                {{-- {{ ($monthlyRevenue ?? 0) > 0 ? number_format((($monthlyRevenue ?? 0) - ($outstandingBalances ?? 0)) / ($monthlyRevenue ?? 1) * 100, 1) : 0 }}% --}}
                                0.0%
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
