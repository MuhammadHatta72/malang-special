@extends('admin.layout.index')

@section('content')
<div class="px-4 pt-8 pb-3 sm:ml-64">
    <div class="mt-12 mr-3">
        @can('admin_has_market')
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

        <h2 class="text-2xl text-gray-800 dark:text-gray-100">Toko</h2>

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

                    <a href="{{ url('/market-admin/'.$market->id.'/edit') }}" class="text-gray-100 bg-[#404A7F] border border-gray-300 focus:outline-none hover:bg-[#404A7F] focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-[#404A7F] dark:text-gray-100 dark:border-gray-600 dark:hover:bg-[#404A7F] dark:hover:border-gray-600 dark:focus:ring-gray-700">Edit Toko</a>
                </div>

                <div class="md:w-1/3 md:ml-3 mt-3 md:mt-0">
                    <div class="p-3 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <h3 class="text-gray-600 dark:text-gray-200 mb-3">Gambar Toko</h3>
                        @if($market->image !== "not_found")
                        <img src="{{ asset('image_markets/' . $market->image) }}" alt="image_market" class="w-full h-full">
                        <form action="/market-admin/{{$market->id}}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="w-full text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex justify-center items-center mr-2 dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-800 my-3" onclick="return confirm('Apakah yakin ingin menghapus logo toko?')">
                                <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-5 h-5 mr-2 -ml-1">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"></path>
                                </svg>
                                Hapus Foto
                            </button>
                        </form>
                        @else
                        <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-full h-full text-[#404A7F]">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 21v-7.5a.75.75 0 01.75-.75h3a.75.75 0 01.75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349m-16.5 11.65V9.35m0 0a3.001 3.001 0 003.75-.615A2.993 2.993 0 009.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 002.25 1.016c.896 0 1.7-.393 2.25-1.016a3.001 3.001 0 003.75.614m-16.5 0a3.004 3.004 0 01-.621-4.72L4.318 3.44A1.5 1.5 0 015.378 3h13.243a1.5 1.5 0 011.06.44l1.19 1.189a3 3 0 01-.621 4.72m-13.5 8.65h3.75a.75.75 0 00.75-.75V13.5a.75.75 0 00-.75-.75H6.75a.75.75 0 00-.75.75v3.75c0 .415.336.75.75.75z"></path>
                        </svg>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        @endcan
    </div>
</div>


@endsection