@extends('admin.layout.index')

@section('content')
<div class="px-4 pt-8 pb-3 sm:ml-64">
    <div class="mt-12 mr-3">
        <h2 class="text-2xl text-gray-800 dark:text-gray-100">Detail Toko</h2>

        <div class="w-full mt-4">
            <div class="md:flex">
                <div class="md:w-2/3 px-6 pt-4 pb-8 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <h3 class="text-gray-600 dark:text-gray-200 mb-3">Profil Toko</h3>
                    <div class="grid gap-6 mb-6 md:grid-cols-1">
                        <div>
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                            <h2 class="block mb-2 text-base text-gray-500 dark:text-white">{{ $market->name}}</h2>
                        </div>
                        <div>
                            <label for="admin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Admin</label>
                            <h2 class="block mb-2 text-base text-gray-500 dark:text-white">{{ $market->user->name }}</h2>
                        </div>
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                            <h2 class="block mb-2 text-base text-gray-500 dark:text-white">{{ $market->email }}</h2>
                        </div>
                        <div>
                            <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor Telepon</label>
                            <h2 class="block mb-2 text-base text-gray-500 dark:text-white">{{ $market->phone }}</h2>
                        </div>
                        <div>
                            <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
                            <h2 class="block mb-2 text-base text-gray-500 dark:text-white">{{ $market->address }}</h2>
                        </div>
                        <div>
                            <label for="no_bca" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor Rekening BCA</label>
                            <h2 class="block mb-2 text-base text-gray-500 dark:text-white">{{ $market->no_bca }}</h2>
                        </div>
                        <div>
                            <label for="no_bri" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor Rekening BRI</label>
                            <h2 class="block mb-2 text-base text-gray-500 dark:text-white">{{ $market->no_bri }}</h2>
                        </div>
                        <div>
                            <label for="no_bni" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor Rekening BNI</label>
                            <h2 class="block mb-2 text-base text-gray-500 dark:text-white">{{ $market->no_bni }}</h2>
                        </div>
                        <div>
                            <label for="no_mandiri" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor Rekening MANDIRI</label>
                            <h2 class="block mb-2 text-base text-gray-500 dark:text-white">{{ $market->no_mandiri }}</h2>
                        </div>
                    </div>

                    <a href="{{ url('/markets') }}" class="text-gray-900 bg-amber-300 border border-gray-300 focus:outline-none hover:bg-amber-400 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-amber-300 dark:text-gray-800 dark:border-gray-600 dark:hover:bg-amber-400 dark:hover:border-gray-600 dark:focus:ring-gray-700">Kembali</a>
                </div>

                <div class="md:w-1/3 md:ml-3 mt-3 md:mt-0">
                    <div class="p-3 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <h3 class="text-gray-600 dark:text-gray-200 mb-3">Gambar Toko</h3>
                        @if($market->image !== "not_found")
                        <img src="{{ asset('image_markets/' . $market->image) }}" alt="image_market" class="w-full h-full">
                        @else
                        <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-full h-full text-[#F7C04B]">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 21v-7.5a.75.75 0 01.75-.75h3a.75.75 0 01.75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349m-16.5 11.65V9.35m0 0a3.001 3.001 0 003.75-.615A2.993 2.993 0 009.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 002.25 1.016c.896 0 1.7-.393 2.25-1.016a3.001 3.001 0 003.75.614m-16.5 0a3.004 3.004 0 01-.621-4.72L4.318 3.44A1.5 1.5 0 015.378 3h13.243a1.5 1.5 0 011.06.44l1.19 1.189a3 3 0 01-.621 4.72m-13.5 8.65h3.75a.75.75 0 00.75-.75V13.5a.75.75 0 00-.75-.75H6.75a.75.75 0 00-.75.75v3.75c0 .415.336.75.75.75z"></path>
                        </svg>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection