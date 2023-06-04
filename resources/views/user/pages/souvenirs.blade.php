@extends('user.layout.index')

@section('content')
<section class="h-screen bg-cover bg-center bg-no-repeat bg-gray-100 bg-blend-multiply" style="background-image: url('./assets/images-home/slider2.png')">
    <div class="h-full flex flex-col items-center justify-center text-center px-5 md:px-0">
        <h1 class="mb-4 text-3xl font-extrabold tracking-tight leading-none text-[#F7C04B] md:text-5xl lg:text-6xl">Toko Oleh-oleh Khas Malang</h1>
        <p class="mb-8 text-lg font-normal text-white lg:text-xl sm:px-16 lg:px-48">Kami menjual berbagai produk oleh-oleh khas Malang yang berkualitas.</p>
        <div class="flex justify-center">
            <a href="#product-souvenir" class="bg-[#efa911] inline-flex justify-center hover:text-gray-900 items-center p-3 text-base font-medium text-center text-white rounded-full border-2 border-white shadow-xl shadow-white hover:bg-yellow-300 focus:ring-4 focus:ring-gray-400 animate-bounce">
                <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-7">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m0 0l6.75-6.75M12 19.5l-6.75-6.75"></path>
                </svg>
            </a>
        </div>
    </div>
</section>

<section id="product-souvenir" class="w-full pt-20 pb-10 bg-[#f1f4ff] dark:bg-gray-800">
    <div class="container mx-auto flex flex-wrap">
        <div class="w-full flex flex-col justify-start px-6">
            <h2 class="mt-3 md:mt-0 mb-2 md:mb-4 text-4xl tracking-tight font-extrabold text-gray-800 dark:text-white">Produk Souvenir</h2>
            <hr class="w-20 h-2 bg-[#549166] rounded-full mb-2 md:mb-4" />
            <p class="mb-2 md:mb-4 dark:text-gray-200">Daftar produk souvenir dari malang special</p>
        </div>
        <div class="w-full px-6 flex flex-col">
            <div class="mt-5 grid grid-cols-2 gap-6 sm:grid-cols-4 sm:gap-4 lg:mt-8">
                @foreach($product_souvenirs as $product)
                <!-- Article -->
                <article class="relative flex flex-col overflow-hidden rounded-xl shadow-lg hover:shadow-xl hover:shadow-[#F7C04B] border bg-white dark:bg-gray-700">
                    <div class="aspect-square overflow-hidden">
                        <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="h-full w-full object-cover transition-all duration-300 group-hover:scale-125 text-[#F7C04B]">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"></path>
                        </svg>
                    </div>
                    <div class="flex w-full items-center justify-between p-4">
                        <div class="flex flex-col">
                            <p class="mb-2 text-lg font-semibold text-gray-800 dark:text-white">Rp. {{$product->price}}</p>
                            <h3 class="text-base text-gray-500 dark:text-gray-200">{{$product->name}}</h3>
                            <p class="text-sm text-gray-400">{{$product->category}}</p>
                            <h5 class="text-base text-gray-500 dark:text-gray-200">{{$product->market->name}}</h5>
                        </div>
                        <form action="/carts" method="post">
                            @csrf
                            <input type="hidden" name="product_id" value="{{$product->id}}">
                            <button type="submit" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white" onclick="return confirm('apakah anda ingin memasukkan produk ini ke keranjang?')">
                                <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-4 h-4 fill-current">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"></path>
                                </svg>
                            </button>
                        </form>
                    </div>
                </article>
                <!-- End Article -->
                @endforeach
            </div>
        </div>
        <div class="w-full mt-5 md:mt-10">
            {{$product_souvenirs->links('pagination::simple-tailwind')}}
        </div>
    </div>
</section>

@endsection