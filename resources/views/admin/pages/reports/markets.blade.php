@extends('admin.layout.index')

@section('content')
<div class="px-4 pt-8 pb-3 sm:ml-64">
    <div class="mt-12 mr-3">
        <h2 class="text-2xl text-gray-800 dark:text-gray-100">Laporan Toko</h2>

        <div class="w-full mt-4 px-6 py-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <h3 class="text-sm text-gray-600 dark:text-gray-200 mb-3">Daftar semua toko yang menggunakan aplikasi special malang</h3>

            <div class="relative overflow-x-auto my-3">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr class="">
                            <th class="px-2 py-4 font-medium text-center text-gray-900 whitespace-nowrap dark:text-white">
                                No
                            </th>
                            <th class="px-2 py-3 font-medium text-center text-gray-900 whitespace-nowrap dark:text-white">
                                Nama
                            </th>
                            <th class="px-2 py-3 font-medium text-center text-gray-900 whitespace-nowrap dark:text-white">
                                Telepon
                            </th>
                            <th class="px-2 py-3 font-medium text-center text-gray-900 whitespace-nowrap dark:text-white">
                                Email
                            </th>
                            <th class="px-2 py-3 font-medium text-center text-gray-900 whitespace-nowrap dark:text-white">
                                Alamat
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($markets as $market)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="py-4 text-center">
                                {{$loop->iteration}}
                            </td>
                            <th scope="row" class=" py-4 font-medium text-center text-gray-900 whitespace-nowrap dark:text-white">
                                {{$market->name}}
                            </th>
                            <td class="py-4 text-center">
                                {{$market->phone}}
                            </td>
                            <td class="py-4 text-center">
                                {{$market->email}}
                            </td>
                            <td class="py-4 text-center">
                                {{$market->address}}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            {{ $markets->links('pagination::tailwind') }}

            <div class="flex flex-col md:flex-row">
                <form action="/export-markets-excel" method="post">
                    @csrf
                    <button type="submit" class=" text-white bg-green-500 hover:bg-green-600/90 focus:ring-4 focus:outline-none focus:ring-[#F7C04B]/50 font-medium rounded-lg text-sm px-5 py-2 text-center inline-flex items-center dark:focus:ring-[#F7C04B]/55 mr-2 mb-2">
                        <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-4 h-4 mr-2 -ml-1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"></path>
                        </svg>
                        Download Laporan Excel
                    </button>
                </form>
                <form action="/export-markets-pdf" method="post">
                    @csrf
                    <button type="submit" class=" text-white bg-red-500 hover:bg-red-600/90 focus:ring-4 focus:outline-none focus:ring-[#F7C04B]/50 font-medium rounded-lg text-sm px-5 py-2 text-center inline-flex items-center dark:focus:ring-[#F7C04B]/55 mr-2 mb-2">
                        <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-4 h-4 mr-2 -ml-1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"></path>
                        </svg>
                        Download Laporan PDF
                    </button>
                </form>
            </div>

        </div>
    </div>
</div>

@endsection