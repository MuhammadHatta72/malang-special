@extends('user.layout.index')

@section('content')
<!-- component -->
<section class="text-gray-700 body-font overflow-hidden bg-white dark:bg-gray-800">
    <div class="container px-5 py-24 mx-auto">
      <div class="lg:w-4/5 mx-auto flex flex-wrap">
        <img alt="ecommerce" class="lg:w-1/2 w-full object-cover object-center rounded border border-gray-200" src="{{ url('./image_products/'. $products->image) }}">
        <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0 ">
          <h2 class="text-sm title-font text-gray-500 tracking-widest dark:text-gray-200">{{ $products->market->name }}</h2>
          <h1 class="text-gray-900 text-3xl title-font font-medium mb-1 dark:text-white">{{ $products->name }}</h1>
          <div class="flex mb-4">
            
          </div>
          <p class="leading-relaxed dark:text-gray-200">{{ $products->description }}</p>
          <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-200 mb-5">
            <div class="flex">
              <span class="mr-3 dark:text-gray-200">Stok : {{ $products->stock }}</span>
            </div>
            <div class="flex ml-6 items-center">
              {{-- <span class="mr-3">Size</span> --}}
              <div class="relative">
                {{-- <select class="rounded border appearance-none border-gray-400 py-2 focus:outline-none focus:border-red-500 text-base pl-3 pr-10">
                  <option>SM</option>
                  <option>M</option>
                  <option>L</option>
                  <option>XL</option>
                </select> --}}
                {{-- <span class="absolute right-0 top-0 h-full w-10 text-center text-gray-600 pointer-events-none flex items-center justify-center">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4" viewBox="0 0 24 24">
                    <path d="M6 9l6 6 6-6"></path>
                  </svg>
                </span> --}}
              </div>
            </div>
          </div>
          
          <div class="flex">
            <span class="title-font font-medium text-2xl text-gray-900 dark:text-white">Rp {{ $products->price }}</span>
            <form action="/carts" method="post">
                @csrf
                <input type="hidden" name="product_id" value="{{$products->id}}">
                <button type="submit" class="lg:ml-20 pl-10 sm:ml-56 flex ml-auto text-white bg-yellow-300 border-0 py-2 px-6 focus:outline-none hover:bg-yellow-200 hover:text-black rounded" onclick="return confirm('apakah anda ingin memasukkan produk ini ke keranjang?')">
                    Masukkan keranjang
                </button>
            </form>
            <button class="rounded-full w-10 h-10 bg-gray-200 p-0 border-0 inline-flex items-center justify-center text-gray-500 ml-4">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"></path>
              </svg>
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection