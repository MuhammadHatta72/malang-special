@extends('admin.layout.index')

@section('content')

<div class="px-4 pt-8 pb-3 sm:ml-64">
    <div class="mt-12 mr-3">
        @if (session('success'))
        <!-- Success Message -->
        <div id="alert-1" class="flex p-4 mb-4 text-green-500 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
            <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
            </svg>
            <span class="sr-only">Info</span>
            <div class="ml-3 text-sm font-medium">
                {{ session('success') }}
            </div>
            <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 dark:bg-gray-500 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-1" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <!-- End Success Message -->
        @endif
        <h2 class="text-2xl text-gray-800 dark:text-gray-100">Dashboard</h2>

        <div class="w-screen mt-4">
            <div class="md:flex">
                @if (auth()->user()->role == '3')
                @can('user')
                <div class="md:w-2/3 px-6 py-3 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <div class="grid grid-rows-2 grid-flow-col gap-3 md:gap-0 md:flex">
                        <div class="md:w-1/4 h-24 rounded-lg border md:mr-2 p-4">
                            <div class="flex justify-between items-center">
                                <p class="text-gray-600 dark:text-yellow-300 underline"> {{$countTrsc}} </p>
                                <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-6 h-6 text-yellow-300 dark:text-yellow-300">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 7.5l-9-5.25L3 7.5m18 0l-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9"></path>
                                </svg>
                            </div>
                            <p class="text-xs text-gray-600 dark:text-gray-100 mt-4">Total Transaksi</p>
                        </div>
                        <div class="md:w-1/4 h-24 rounded-lg border p-4 md:mr-2">
                            <div class="flex justify-between items-center">
                                <p class="text-gray-600 dark:text-green-500 underline">300 Buah</p>
                                <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-6 h-6 text-green-500 dark:text-green-500">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5m6 4.125l2.25 2.25m0 0l2.25 2.25M12 13.875l2.25-2.25M12 13.875l-2.25 2.25M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z"></path>
                                </svg>
                            </div>
                            <p class="text-xs text-gray-600 dark:text-gray-100 mt-4">Barang Dibeli</p>
                        </div>   
                        <div class="md:w-1/4 h-24 rounded-lg border md:mr-2 p-4">
                            <div class="flex justify-between items-center">
                                <p class="text-gray-600 dark:text-yellow-300 underline">Rp. {{$transactions}}</p>
                                <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-6 h-6 text-cyan-800 dark:text-cyan-600">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z"></path>
                                </svg>
                            </div>
                            <p class="text-xs text-gray-600 dark:text-gray-100 mt-4">Pengeluaran</p>
                        </div>                     
                    </div>                    
                </div>
                @endcan
                @endif
                @if (auth()->user()->role == '2')
                @can('admin_has_market')
                <div class=" md:w-2/3 px-6 py-3 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 w-auto">
                    
                    <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2 md:gap-0 md:flex">
                        <!-- <div class="md:w-1/4 h-24 rounded-lg border md:mr-2 p-4"> -->
                        <div class="shadow-2xl bg-red-600 border-l-8 hover:bg-red-700 border-red-700 mb-2 p-2 md:w-1/4 mx-2 rounded-lg">
                            <div class="flex justify-between items-center">
                                <p class="text-white dark:white underline"> {{$adminTrsc}} </p>
                                <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-6 h-6 text-white dark:text-white underline">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5z"></path>
                                </svg>
                            </div>
                            <p class="text-xs text-white dark:text-gray-100 mt-4">Total Transaksi</p>
                        </div>
                        <!-- <div class="md:w-1/4 h-24 rounded-lg border p-4 md:mr-2"> -->
                        <div class="shadow-lg bg-indigo-600 border-l-8 hover:bg-indigo-700 border-indigo-700 mb-2 p-2 md:w-1/4 mx-2 rounded-lg">
                            <div class="flex justify-between items-center">
                                <p class="text-white dark:text-white underline">300 Buah</p>
                                <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-6 h-6 text-white dark:text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z"></path>                                </svg>
                            </div>
                            <p class="text-xs text-white dark:text-gray-100 mt-4">Produk Terjual</p>
                        </div>
                        <!-- <div class="md:w-1/4 h-24 rounded-lg border p-4 md:mr-2"> -->
                        <div class="shadow-lg bg-yellow-400 border-l-8 hover:bg-yellow-500 border-yellow-500 mb-2 p-2 md:w-1/4 mx-2 rounded-lg">
                            <div class="flex justify-between items-center">
                                <p class="text-white dark:text-white underline">{{$productToko}}</p>
                                <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-6 h-6 text-white dark:text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5m8.25 3v6.75m0 0l-3-3m3 3l3-3M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z"></path>
                                </svg>
                            </div>
                            <p class="text-xs text-white dark:text-gray-100 mt-4">Stok Barang</p>
                        </div>                        
                        <!-- <div class="md:w-1/4 h-24 rounded-lg border p-4"> -->
                        <div class="shadow-lg bg-green-500 border-l-8 hover:bg-green-600 border-green-600 mb-2 p-2 md:w-1/4 mx-2 rounded-lg">
                            <div class="flex justify-between items-center">
                                <p class="text-white dark:text-white underline">RP. {{$adminSales}}</p>
                                <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-6 h-6 text-white dark:text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z"></path>
                                </svg>
                            </div>
                            <p class="text-xs text-white dark:text-gray-100 mt-4">Pemasukan</p>
                        </div>
                    </div>
                </div>
                @endcan
                @endif
                @if (auth()->user()->role == '1')
                @can('superadmin')
                <div class=" md:w-2/3 px-6 py-3 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 w-auto">
                    
                    <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2 md:gap-0 md:flex">
                        <!-- <div class="md:w-1/4 h-24 rounded-lg border md:mr-2 p-4"> -->
                        <div class="shadow-2xl bg-red-600 border-l-8 hover:bg-red-700 border-red-700 mb-2 p-2 md:w-1/4 mx-2 rounded-lg">
                            <div class="flex justify-between items-center">
                                <p class="text-white dark:white underline"> {{$adminTrsc}} </p>
                                <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-6 h-6 text-white dark:text-white underline">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5z"></path>
                                </svg>
                            </div>
                            <p class="text-xs text-white dark:text-gray-100 mt-4">Total Transaksi</p>
                        </div>
                        <!-- <div class="md:w-1/4 h-24 rounded-lg border p-4 md:mr-2"> -->
                        <div class="shadow-lg bg-indigo-600 border-l-8 hover:bg-indigo-700 border-indigo-700 mb-2 p-2 md:w-1/4 mx-2 rounded-lg">
                            <div class="flex justify-between items-center">
                                <p class="text-white dark:text-white underline">300 Buah</p>
                                <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-6 h-6 text-white dark:text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z"></path>                                </svg>
                            </div>
                            <p class="text-xs text-white dark:text-gray-100 mt-4">Produk Terjual</p>
                        </div>
                        <!-- <div class="md:w-1/4 h-24 rounded-lg border p-4 md:mr-2"> -->
                        <div class="shadow-lg bg-yellow-400 border-l-8 hover:bg-yellow-500 border-yellow-500 mb-2 p-2 md:w-1/4 mx-2 rounded-lg">
                            <div class="flex justify-between items-center">
                                <p class="text-white dark:text-white underline">{{$productToko}}</p>
                                <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-6 h-6 text-white dark:text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5m8.25 3v6.75m0 0l-3-3m3 3l3-3M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z"></path>
                                </svg>
                            </div>
                            <p class="text-xs text-white dark:text-gray-100 mt-4">Stok Barang</p>
                        </div>                        
                        <!-- <div class="md:w-1/4 h-24 rounded-lg border p-4"> -->
                        <div class="shadow-lg bg-green-500 border-l-8 hover:bg-green-600 border-green-600 mb-2 p-2 md:w-1/4 mx-2 rounded-lg">
                            <div class="flex justify-between items-center">
                                <p class="text-white dark:text-white underline">RP. {{$adminSales}}</p>
                                <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-6 h-6 text-white dark:text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z"></path>
                                </svg>
                            </div>
                            <p class="text-xs text-white dark:text-gray-100 mt-4">Pemasukan</p>
                        </div>
                    </div>
                </div>
                @endcan
                @endif
                <!-- <div class="md:w-1/3 md:ml-3 mt-3 md:mt-0">
                    @can('user')
                    <div class="flex">
                        <div class="w-1/2 p-3 ml-3 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <h3 class="text-gray-600 dark:text-gray-200 mb-1.5">Pengeluaran</h3>
                            <p class="text-gray-600 dark:text-gray-200 mb-3 text-sm">Rp. {{$transactions}} </p>
                            <div class="border border-gray-200 rounded-lg mt-4 h-40"></div>
                        </div>
                    </div>
                    @endcan
                    @can('superadmin')
                    <div class="flex">
                        <div class="w-1/2 p-3 ml-3 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <h3 class="text-gray-600 dark:text-gray-200 mb-1.5">Total Transaksi</h3>
                            <p class="text-gray-600 dark:text-gray-200 mb-3 text-sm">Rp. {{$adminSales}}</p>
                            <div class="border border-gray-200 rounded-lg mt-4 h-40"></div>
                        </div>
                    </div>
                    @endcan
                </div> -->
            </div>
        </div>

        <div class="w-full mt-4 px-6 py-3 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <h3 class="text-gray-600 dark:text-gray-200 mb-3">Malang Kota</h3>
            <img src="{{ url('./assets/images-admin/malang-city.jpg') }}" alt="">
        </div>
    </div>
</div>


@endsection