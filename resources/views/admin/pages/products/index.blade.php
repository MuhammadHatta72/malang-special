@extends('admin.layout.index')

@section('content')
<div class="px-4 pt-8 pb-3 sm:ml-64">
    <div class="mt-12 mr-3">
        @can('admin_has_market')
        <div class="w-full my-4 pl-4 md:pl-6 bg-gradient-to-r from-[#2C3E50] to-[#3498DB] rounded-xl shadow dark:bg-gray-800 dark:border-gray-700 flex flex-col md:flex-row justify-center md:justify-between sm:items-center overflow-hidden">
            <div class="flex flex-col md:justify-start md:items-center mt-4 md:mt-0 mb-3 md:mb-0">
                <h2 class="text-2xl text-gray-100">Makanan Khas Malang</h2>
                <p class="text-base text-gray-100">#cintai produk dalam negeri</p>
            </div>
            <img src="{{ url('./assets/images-admin/bakso-malang.png') }}" alt="" class="w-40 md:w-72 mb-5 md:mb-0" />
        </div>

        <h2 class="text-2xl text-gray-800 dark:text-gray-100">Daftar Produk</h2>

        @if (session('success'))
        <!-- Success Message -->
        <div id="alert-1" class="flex p-4 my-4 text-green-500 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
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
        @if(session('error'))
        <!-- Error Message -->
        <div id="alert-1" class="flex p-4 my-4 text-red-500 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
            <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
            </svg>
            <span class="sr-only">Info</span>
            <div class="ml-3 text-sm font-medium">
                {{ session('error') }}
            </div>
            <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex h-8 w-8 dark:bg-gray-500 dark:text-red-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-1" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <!-- End Error Message -->
        @endif

        <div class="flex flex-col md:flex-row md:justify-between mb-4">
            <h3 class="text-sm text-gray-600 dark:text-gray-200 my-3">Daftar semua produk yang ada di aplikasi special Malang</h3>
            <a href="{{ url('products/create') }}" class=" text-white bg-[#549166] hover:bg-[#549166]/90 focus:ring-4 focus:outline-none focus:ring-[#549166]/50 font-medium rounded-lg text-sm px-5 py-2 text-center inline-flex items-center dark:focus:ring-[#549166]/55 mr-2 mb-2">
                <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-4 h-4 mr-2 -ml-1">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"></path>
                </svg>
                Tambah Produk
            </a>
        </div>

        <!-- Related Product -->
        <div class="grid grid-cols-2 md:grid-cols-5 gap-4">
            <!-- column -->
            @foreach ($products as $product)
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    @if($product->image == 'not_found')
                    <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-full text-[#F7C04B]">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"></path>
                    </svg>
                    @else
                    <img class="rounded-t-lg w-full h-auto" src="{{ url('./image_products/'. $product->image) }}" alt="" />
                    @endif
                </a>
                <div class="p-2">
                    <div class="flex justify-between pt-2">
                        <a href="{{ url('/products/'.$product->id) }}">
                            <h5 class="mb-2 text-base font-medium tracking-tight text-gray-800 dark:text-white">{{$product->name}}</h5>
                        </a>
                        <button id="dropdownButton-{{$product->id}}" data-dropdown-toggle="dropdown-{{$product->id}}" class="inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-1.5" type="button">
                            <span class="sr-only">Open dropdown</span>
                            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z"></path>
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="dropdown-{{$product->id}}" class="z-10 hidden text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                            <ul class="py-2" aria-labelledby="dropdownButton-{{$product->id}}">
                                <li>
                                    <a href="{{ url('/products/'.$product->id.'/edit') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Edit</a>
                                </li>
                                <form action="{{ url('products/'. $product->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <li>
                                        <button type="submit" class="block px-4 py-2 text-sm text-left w-full text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white" onclick="return confirm('apakah yakin ingin mengahapus produk?')">Delete</button>
                                    </li>
                                </form>
                                @if($product->image !== 'not_found')
                                <form action="{{ url('products/delete-image/'. $product->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <li>
                                        <button type="submit" class="block px-4 py-2 text-sm text-left w-full text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white" onclick="return confirm('apakah yakin ingin mengahapus gambar produk?')">Delete Image</button>
                                    </li>
                                </form>
                                @endif
                            </ul>
                        </div>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-sm text-gray-600 dark:text-gray-400">Rp. {{$product->price}}</span>
                        <span class="text-sm text-gray-600 dark:text-gray-400">Sisa {{$product->remainder}}</span>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- end column -->
        </div>
        <!-- End Related Product -->


        <div class="mt-3">
            {{ $products->links('pagination::tailwind') }}
        </div>

        @endcan
    </div>
</div>

@endsection