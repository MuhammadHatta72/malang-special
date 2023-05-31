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
            <h2 class="mt-3 md:mt-0 my-2 md:my-4 text-4xl tracking-tight font-extrabold text-gray-800 dark:text-white">Edit Keranjang Produk</h2>
            <hr class="w-20 h-2 bg-[#F7C04B] rounded-full mb-2 md:mb-4" />
            <p class="mb-2 md:mb-4">Edit produk yang telah di masukkan keranjang dari malang special</p>
        </div>

        <div class="w-full mx-6 flex flex-col border p-4 shadow-md sm:rounded-lg">
            <div class="mb-3">
                <label for="first_name" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Jumlah Produk yang tersedia</label>
                <h2 class="block text-base text-gray-500 dark:text-white">{{$cart->product->remainder}}</h2>
                <small class="text-sm text-red-500">Produk yang dibeli harus tidak boleh lebih dari sisa produk</small>
            </div>
            <form action="/carts/{{$cart->id}}" method="post">
                @csrf
                @method('PUT')
                <div class="mb-6">
                    <label for="quantity" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah Produk Yang Dibeli</label>
                    <input type="number" id="quantity" name="quantity" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$cart->quantity}}" required>
                </div>
                <div class="flex mt-4">
                    <a href="/carts" class="text-amber-400 hover:text-white bg-white hover:bg-amber-300 focus:ring-4 focus:outline-none focus:ring-white/50 border border-amber-400 hover:border-white font-medium rounded-lg text-sm px-5 py-2 text-center inline-flex items-center dark:text-amber-400 dark:hover:text-amber-200 dark:border-amber-400 dark:hover:border-amber-200 dark:bg-gray-600 dark:focus:ring-white/55 mr-2 mb-2">
                        <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-4 h-4 mr-2 -ml-1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18"></path>
                        </svg>Kembali
                    </a>
                    <button type="submit" class="text-[#404A7F] hover:text-white bg-white hover:bg-[#404A7F] focus:ring-4 focus:outline-none focus:ring-white/50 border border-[#404A7F] hover:border-white font-medium rounded-lg text-sm px-5 py-2 text-center inline-flex items-center dark:text-[#404A7F] dark:hover:text-amber-200 dark:border-[#404A7F] dark:hover:border-amber-200 dark:bg-gray-600 dark:focus:ring-white/55 mr-2 mb-2">
                        <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-4 h-4 mr-2 -ml-1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10"></path>
                        </svg>Update
                    </button>
                </div>
            </form>
        </div>

    </div>
</section>
@endsection