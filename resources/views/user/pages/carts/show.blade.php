@extends('user.layout.index')

@section('content')

<section id="carts" class="w-full pt-20 pb-10 dark:bg-gray-800">
    <div class="container mx-auto flex flex-wrap">
        @if(session('success-checkout'))
        <!-- Success Message -->
        <div id="alert-1" class="w-full mx-6 flex p-4 mb-4 text-yellow-500 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-400" role="alert">
            <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
            </svg>
            <span class="sr-only">Info</span>
            <div class="ml-3 text-sm font-medium">
                {{session('success-checkout')}}
            </div>
            <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-yellow-50 text-yellow-500 rounded-lg focus:ring-2 focus:ring-yellow-400 p-1.5 hover:bg-yellow-200 inline-flex h-8 w-8 dark:bg-gray-500 dark:text-yellow-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-1" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <!-- End Success Message -->
        @endif

        @if(session('error-checkout'))
        <!-- Success Message -->
        <div id="alert-1" class="w-full mx-6 flex p-4 mb-4 text-red-500 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
            <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
            </svg>
            <span class="sr-only">Info</span>
            <div class="ml-3 text-sm font-medium">
                {{session('error-checkout')}}
            </div>
            <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-red-500 text-red-100 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex h-8 w-8 dark:bg-gray-500 dark:text-red-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-1" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <!-- End Success Message -->
        @endif

        <div class="w-full flex flex-col justify-start px-6">
            <h2 class="mt-3 md:mt-0 my-2 md:my-4 text-4xl tracking-tight font-extrabold text-gray-800 dark:text-white">Detail Keranjang</h2>
            <hr class="w-20 h-2 bg-[#F7C04B] rounded-full mb-2 md:mb-4" />
            <p class="mb-2 md:mb-4">Detail keranjang yang telah dibuat</p>
        </div>
        <div class="w-full mx-6 flex flex-col border p-4 shadow-md sm:rounded-lg">

            <div class="flex flex-col md:flex-row">
                @if($cart->product->image !== "not_found")
                <img src="{{ asset('image_products/' . $product->image) }}" alt="image_product" class="md:w-1/3">
                @else
                <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="md:w-1/3 text-[#F7C04B]">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 21v-7.5a.75.75 0 01.75-.75h3a.75.75 0 01.75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349m-16.5 11.65V9.35m0 0a3.001 3.001 0 003.75-.615A2.993 2.993 0 009.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 002.25 1.016c.896 0 1.7-.393 2.25-1.016a3.001 3.001 0 003.75.614m-16.5 0a3.004 3.004 0 01-.621-4.72L4.318 3.44A1.5 1.5 0 015.378 3h13.243a1.5 1.5 0 011.06.44l1.19 1.189a3 3 0 01-.621 4.72m-13.5 8.65h3.75a.75.75 0 00.75-.75V13.5a.75.75 0 00-.75-.75H6.75a.75.75 0 00-.75.75v3.75c0 .415.336.75.75.75z"></path>
                </svg>
                @endif
                <div class="md:w-2/3 p-0 md:p-5 pt-5 md:pt-0">
                    <h3 class="text-xl text-gray-800 dark:text-gray-200 mt-3 mb-3">{{$cart->product->name}}</h3>
                    <div class="mb-3">
                        <label for="first_name" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Nama Toko</label>
                        <h2 class="block text-base text-gray-500 dark:text-white">{{$cart->product->market->name}} </h2>
                    </div>
                    <div class="mb-3">
                        <label for="first_name" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Deskripsi Produk</label>
                        <h2 class="block text-base text-gray-500 dark:text-white">{{$cart->product->description}}</h2>
                    </div>
                    <div class="mb-3">
                        <label for="first_name" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Kategori Produk</label>
                        <h2 class="block text-base text-gray-500 dark:text-white">{{$cart->product->category}}</h2>
                    </div>
                    <div class="mb-3">
                        <label for="first_name" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Stok Produk</label>
                        <h2 class="block text-base text-gray-500 dark:text-white">{{$cart->product->remainder}} Produk</h2>
                    </div>
                    <div class="mb-3">
                        <label for="first_name" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Harga Produk</label>
                        <h2 class="block text-base text-gray-500 dark:text-white">Rp. {{$cart->product->price}}</h2>
                    </div>
                    <div class="mb-3">
                        <label for="first_name" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Jumlah Pembelian</label>
                        <h2 class="block text-base text-gray-500 dark:text-white">{{$cart->quantity}} Buah</h2>
                    </div>
                    <!-- <div>
                        <a href="#" class=" text-amber-400 hover:text-white bg-white hover:bg-amber-300 focus:ring-4 focus:outline-none focus:ring-white/50 border border-amber-400 hover:border-white font-medium rounded-lg text-sm px-5 py-2 text-center inline-flex items-center dark:text-amber-400 dark:hover:text-amber-200 dark:border-amber-400 dark:hover:border-amber-200 dark:bg-gray-600 dark:focus:ring-white/55 mr-2 mb-2">
                            <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-4 h-4 mr-2 -ml-1">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z"></path>
                            </svg>
                            Masukkan Keranjang
                        </a>
                        <a href="#" class=" text-white bg-[#404A7F] hover:bg-[#404A7F]/90 focus:ring-4 focus:outline-none focus:ring-[#404A7F]/50 font-medium rounded-lg text-sm px-5 py-2 text-center inline-flex items-center dark:focus:ring-[#404A7F]/55 mr-2 mb-2">
                            <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-4 h-4 mr-2 -ml-1">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z"></path>
                            </svg>
                            Beli Sekarang
                        </a>
                    </div> -->
                </div>

            </div>

        </div>
        <a href="/carts" class="mx-6 mt-4 text-amber-400 hover:text-white bg-white hover:bg-amber-300 focus:ring-4 focus:outline-none focus:ring-white/50 border border-amber-400 hover:border-white font-medium rounded-lg text-sm px-5 py-2 text-center inline-flex items-center dark:text-amber-400 dark:hover:text-amber-200 dark:border-amber-400 dark:hover:border-amber-200 dark:bg-gray-600 dark:focus:ring-white/55 mr-2 mb-2">
            <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-4 h-4 mr-2 -ml-1">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18"></path>
            </svg>Kembali
        </a>

    </div>
</section>


@endsection