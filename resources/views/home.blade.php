<x-app-layout>
    <div class="max-w-4xl mx-auto">
        <!-- Header -->
        <header class="flex justify-between items-center mb-8 text-black">
            <div class="flex items-center">
                <img src="https://i.imgur.com/8lN4D6S.png" alt="DM Sport Logo" class="h-12 w-12 mr-4">
                <div>
                    <h1 class="text-2xl font-bold">DM Sport</h1>
                    <p>Dashboard Financiero</p>
                </div>
            </div>
            <button class="bg-white/80 p-2 rounded-lg shadow">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6 6 0 00-5-5.917V5a1 1 0 00-2 0v.083A6 6 0 006 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                </svg>
            </button>
        </header>

        <!-- Resumen Diario -->
        <div class="bg-gradient-to-br from-cyan-400 to-lime-300 p-6 rounded-2xl shadow-lg text-black mb-8">
            <div class="flex justify-between items-start">
                <h2 class="text-xl font-semibold">Resumen Diario</h2>
                <span class="text-2xl">📈</span>
            </div>
            <div class="mt-4">
                <p class="text-5xl font-bold">$45750</p>
            </div>
            <div class="mt-6 grid grid-cols-2 gap-4">
                <div>
                    <p class="text-sm">Transacciones</p>
                    <p class="text-2xl font-bold">127</p>
                </div>
                <div>
                    <p class="text-sm">% Margen</p>
                    <p class="text-2xl font-bold">32.5%</p>
                </div>
            </div>
        </div>

        <!-- Ventas y Créditos -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
            <!-- Ventas de Hoy -->
            <div class="bg-white/80 p-6 rounded-2xl shadow-lg">
                <div class="flex justify-between items-start">
                    <h2 class="text-xl font-semibold">Ventas de Hoy</h2>
                    <span class="text-2xl">📈</span>
                </div>
                <p class="text-4xl font-bold mt-4">$8450</p>
                <p class="text-green-500 mt-2">
                    <span class="font-semibold">↗ +28.5%</span> hoy
                </p>
            </div>

            <!-- Créditos -->
            <div class="bg-gradient-to-br from-fuchsia-500 to-pink-500 p-6 rounded-2xl shadow-lg text-white">
                <div class="flex justify-between items-center">
                    <h2 class="text-xl font-semibold">Créditos</h2>
                    <a href="#" class="text-sm">Ver Todo →</a>
                </div>
                <p class="text-4xl font-bold mt-4">$12300</p>
                <p class="mt-2">Total pendiente</p>
                <div class="mt-4 flex items-center justify-between bg-black bg-opacity-20 p-2 rounded-lg">
                    <span>👥 8 clientes</span>
                    <span class="bg-yellow-400 text-black text-xs font-bold px-2 py-1 rounded-full">3 vencidos</span>
                </div>
            </div>
        </div>

        <!-- Acciones Rápidas -->
        <div class="mb-8">
            <h2 class="text-2xl font-bold mb-4 text-black">Acciones Rápidas</h2>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                <!-- Registrar Cliente -->
                <div class="bg-gradient-to-br from-cyan-400 to-blue-500 p-4 rounded-2xl shadow-lg text-white text-center">
                    <div class="text-4xl">👥</div>
                    <p class="mt-2 font-semibold">Registrar Cliente</p>
                </div>
                <!-- Registrar Venta -->
                <div class="bg-gradient-to-br from-fuchsia-500 to-pink-500 p-4 rounded-2xl shadow-lg text-white text-center">
                    <div class="text-4xl">💰</div>
                    <p class="mt-2 font-semibold">Registrar Venta</p>
                </div>
                <!-- Agregar Inventario -->
                <div class="bg-gradient-to-br from-yellow-400 to-amber-500 p-4 rounded-2xl shadow-lg text-black text-center">
                    <div class="text-4xl">📦</div>
                    <p class="mt-2 font-semibold">Agregar Inventario</p>
                </div>
            </div>
        </div>

        <!-- Alertas y Transacciones -->
        <div class="bg-white/80 rounded-t-3xl p-6">
            <!-- Alertas de Crédito -->
            <div class="mb-8">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-xl font-bold text-black">Alertas de Crédito</h2>
                    <a href="#" class="text-pink-500 font-semibold text-sm">Ver Todo</a>
                </div>
                <div class="space-y-4">
                    <!-- Cliente 1 -->
                    <div class="bg-white p-4 rounded-2xl shadow-lg flex items-center justify-between">
                        <div class="flex items-center">
                            <div class="bg-orange-100 text-orange-500 font-bold rounded-full h-10 w-10 flex items-center justify-center mr-4">C</div>
                            <div>
                                <p class="font-bold">Carlos Rodriguez</p>
                                <p class="text-sm text-gray-500">$850 <span class="bg-orange-200 text-orange-600 px-2 py-1 rounded-full text-xs">15 días</span></p>
                            </div>
                        </div>
                        <div class="flex space-x-2">
                            <button class="bg-cyan-400 text-white px-3 py-1 rounded-lg text-sm">Llamar</button>
                            <button class="bg-pink-500 text-white px-3 py-1 rounded-lg text-sm">Registrar Pago</button>
                        </div>
                    </div>
                    <!-- Cliente 2 -->
                    <div class="bg-white p-4 rounded-2xl shadow-lg flex items-center justify-between">
                        <div class="flex items-center">
                            <div class="bg-orange-100 text-orange-500 font-bold rounded-full h-10 w-10 flex items-center justify-center mr-4">M</div>
                            <div>
                                <p class="font-bold">Maria Santos</p>
                                <p class="text-sm text-gray-500">$1200 <span class="bg-orange-200 text-orange-600 px-2 py-1 rounded-full text-xs">8 días</span></p>
                            </div>
                        </div>
                        <div class="flex space-x-2">
                            <button class="bg-cyan-400 text-white px-3 py-1 rounded-lg text-sm">Llamar</button>
                            <button class="bg-pink-500 text-white px-3 py-1 rounded-lg text-sm">Registrar Pago</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Transacciones Recientes -->
            <div>
                <div class="flex justify-between items-center mb-4">
                    <div>
                        <h2 class="text-xl font-bold text-black">Transacciones Recientes</h2>
                        <p class="text-gray-500 text-sm">Últimas 4 operaciones</p>
                    </div>
                    <a href="#" class="text-pink-500 font-semibold text-sm">Ver Todo</a>
                </div>
                <div class="space-y-4">
                    <!-- Transacción 1 -->
                    <div class="bg-white p-4 rounded-2xl shadow-lg flex items-center justify-between">
                        <div class="flex items-center">
                            <div class="bg-green-100 p-2 rounded-lg mr-4">
                                <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>
                            </div>
                            <div>
                                <p class="font-bold">Ana García <span class="text-gray-400 text-sm font-normal ml-2">14:30</span></p>
                                <p class="text-sm text-gray-500"><span class="text-green-600 font-semibold">Venta</span> - Efectivo</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="font-bold text-green-500">$245</p>
                            <p class="text-sm text-gray-400">TXN-001</p>
                        </div>
                    </div>
                    <!-- Transacción 2 -->
                    <div class="bg-white p-4 rounded-2xl shadow-lg flex items-center justify-between">
                        <div class="flex items-center">
                            <div class="bg-pink-100 p-2 rounded-lg mr-4">
                                <svg class="w-6 h-6 text-pink-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            </div>
                            <div>
                                <p class="font-bold">Roberto Silva <span class="text-gray-400 text-sm font-normal ml-2">13:45</span></p>
                                <p class="text-sm text-gray-500"><span class="text-pink-600 font-semibold">Crédito</span> - Crédito</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="font-bold text-pink-500">$181</p>
                            <p class="text-sm text-gray-400">TXN-002</p>
                        </div>
                    </div>
                    <!-- Transacción 3 -->
                    <div class="bg-white p-4 rounded-2xl shadow-lg flex items-center justify-between">
                        <div class="flex items-center">
                            <div class="bg-green-100 p-2 rounded-lg mr-4">
                                <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>
                            </div>
                            <div>
                                <p class="font-bold">Carmen Lopez <span class="text-gray-400 text-sm font-normal ml-2">12:15</span></p>
                                <p class="text-sm text-gray-500"><span class="text-green-600 font-semibold">Venta</span> - Tarjeta</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="font-bold text-green-500">$320</p>
                            <p class="text-sm text-gray-400">TXN-003</p>
                        </div>
                    </div>
                    <!-- Transacción 4 -->
                    <div class="bg-white p-4 rounded-2xl shadow-lg flex items-center justify-between">
                        <div class="flex items-center">
                            <div class="bg-cyan-100 p-2 rounded-lg mr-4">
                                <svg class="w-6 h-6 text-cyan-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h1a2 2 0 002-2v-2a2 2 0 00-2-2H9a2 2 0 00-2 2v2a2 2 0 002 2h1m-1-4h1a2 2 0 002-2V7a2 2 0 00-2-2H9a2 2 0 00-2 2v2"></path></svg>
                            </div>
                            <div>
                                <p class="font-bold">Diego Morales <span class="text-gray-400 text-sm font-normal ml-2">11:30</span></p>
                                <p class="text-sm text-gray-500"><span class="text-cyan-600 font-semibold">Pago</span> - Efectivo</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="font-bold text-cyan-500">$95</p>
                            <p class="text-sm text-gray-400">TXN-004</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>