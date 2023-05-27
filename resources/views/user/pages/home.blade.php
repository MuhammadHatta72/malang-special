@extends('user.layout.index')

@section('content')
<section class="h-screen bg-cover bg-center bg-no-repeat bg-gray-100 bg-blend-multiply" style="background-image: url('./assets/images-home/slider1.png')">
    <div class="h-full flex flex-col items-center justify-center text-center px-5 md:px-0">
        <h1 class="mb-4 text-3xl font-extrabold tracking-tight leading-none text-[#549166] md:text-5xl lg:text-6xl">Toko Oleh-oleh Khas Malang</h1>
        <p class="mb-8 text-lg font-normal text-white lg:text-xl sm:px-16 lg:px-48">Kami menjual berbagai produk oleh-oleh khas Malang yang berkualitas.</p>
        <div class="flex justify-center">
            <a href="#" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-full bg-[#efa911] hover:bg-[#F7C04B] focus:ring-4 focus:ring-[#F7C04B] dark:focus:ring-[#F7C04B] mr-2 md:mr-4">
                Beli Sekarang
                <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="ml-2 -mr-1 w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z"></path>
                </svg>
            </a>
            <a href="#about" class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 text-base font-medium text-center text-white rounded-full border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400">
                Selengkapnya
            </a>
        </div>
    </div>
</section>

<section id="about" class="w-full dark:bg-grey flex justify-center">
    <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
        <img src="{{ url('./assets/images-home/img1.png') }}" alt="Image 1" class="w-full hover:animate-bounce">
        <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
            <h2 class="mt-3 md:mt-0 mb-4 text-6xl tracking-tight font-extrabold text-gray-800 dark:text-white">Malang Special</h2>
            <hr class="w-20 h-2 bg-[#549166] rounded-full mb-4" />
            <p class="mb-4">Kami menjual oleh-oleh khas Kota Malang. Ada berbagai produk yang kami sediakan dengan kategori makanan, minuman, pakaian, dan souvenir. Kami juga bekerja sama dengan toko-toko oleh-oleh yang ada di malang. Kami menjamin produk yang dijual berkualitas.</p>
            <!-- <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-8.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-9.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-10.jpg" alt="">
                </div>
            </div> -->
            <a href="#" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-full bg-[#efa911] hover:bg-[#F7C04B] focus:ring-4 focus:ring-[#F7C04B] dark:focus:ring-[#F7C04B]">
                Beli Sekarang
                <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="ml-2 -mr-1 w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z"></path>
                </svg>
            </a>
        </div>
    </div>
</section>

<section id="service" class="bg-[#FFEFCE] py-16 px-6 sm:px-8 lg:px-10 text-gray-700">
    <div class="flex flex-col justify-center items-center ">
        <hr class="w-20 h-2 bg-[#404A7F] rounded-full mb-2 md:mb-4" />
        <h2 class="mt-3 md:mt-0 mb-2 md:mb-4 text-4xl tracking-tight font-extrabold text-gray-800 dark:text-white">Layanan Kami</h2>
        <p class="mb-2 md:mb-4">Layanan dari malang special</p>
    </div>
    <div class="w-10/12 grid grid-cols-1 md:grid-cols-3 gap-6 mx-auto justify-center">
        <div class="border border-[#404A7F] rounded-lg px-3 py-6 flex flex-col justify-center items-center hover:bg-[#404A7F] group">
            <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-24 h-24 text-[#404A7F] mb-2 group-hover:text-gray-100">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 01-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 00-3.213-9.193 2.056 2.056 0 00-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 00-10.026 0 1.106 1.106 0 00-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12"></path>
            </svg>
            <h4 class="font-medium capitalize text-lg text-gray-800 group-hover:text-gray-100">Free Shipping</h4>
            <p class="text-gray-500 group-hover:text-gray-100 text-sm">Minimum Order Rp.50,000</p>
        </div>
        <div class="border border-[#404A7F] rounded-lg px-3 py-6 flex flex-col justify-center items-center hover:bg-[#404A7F] group">
            <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-24 h-24 text-[#404A7F] mb-2 group-hover:text-gray-100">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 11.25v8.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 109.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1114.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z"></path>
            </svg>
            <h4 class="font-medium capitalize text-lg text-gray-800 group-hover:text-gray-100">Preorder Product</h4>
            <p class="text-gray-500 group-hover:text-gray-100 text-sm">Beli langsung atau pesan dulu</p>
        </div>
        <div class="border border-[#404A7F] rounded-lg px-3 py-6 flex flex-col justify-center items-center hover:bg-[#404A7F] group">
            <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-24 h-24 text-[#404A7F] mb-2 group-hover:text-gray-100">
                <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z"></path>
            </svg>
            <h4 class="font-medium capitalize text-lg text-gray-800 group-hover:text-gray-100">24/7 Support</h4>
            <p class="text-gray-500 group-hover:text-gray-100 text-sm">Customer support</p>
        </div>
    </div>
</section>

<section id="product" class="w-full pt-20 pb-10 dark:bg-gray-800">
    <div class="container mx-auto flex flex-wrap">
        <div class="w-full flex flex-col justify-center items-center px-6">
            <h2 class="mt-3 md:mt-0 mb-2 md:mb-4 text-4xl tracking-tight font-extrabold text-gray-800 dark:text-white">Produk Kami</h2>
            <hr class="w-20 h-2 bg-[#549166] rounded-full mb-2 md:mb-4" />
            <p class="mb-2 md:mb-4">Daftar Produk dari malang special</p>
        </div>
        <div class="w-full px-6 flex flex-col">
            <div class="mt-5 grid grid-cols-2 gap-6 sm:grid-cols-4 sm:gap-4 lg:mt-8">
                <!-- Article -->
                <article class="relative flex flex-col overflow-hidden rounded-xl shadow-lg hover:shadow-xl hover:shadow-[#F7C04B] border">
                    <div class="aspect-square overflow-hidden">
                        <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="h-full w-full object-cover transition-all duration-300 group-hover:scale-125 text-[#F7C04B]">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"></path>
                        </svg>
                    </div>
                    <div class="flex w-full items-center justify-between p-4">
                        <div class="flex flex-col">
                            <p class="mb-2 text-lg font-semibold text-gray-800">Rp. 100000</p>
                            <h3 class="text-base text-gray-500">Fresh Apples</h3>
                            <p class="text-sm text-gray-400">Kategori</p>
                        </div>
                        <button type="button" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                            <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-4 h-4 fill-current">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"></path>
                            </svg>
                        </button>
                    </div>
                </article>
                <!-- End Article -->
                <article class="relative flex flex-col overflow-hidden rounded-xl shadow-lg hover:shadow-xl hover:shadow-[#F7C04B] border">
                    <div class="aspect-square overflow-hidden">
                        <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="h-full w-full object-cover transition-all duration-300 group-hover:scale-125 text-[#F7C04B]">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"></path>
                        </svg>
                    </div>
                    <div class="flex w-full items-center justify-between p-4">
                        <div class="flex flex-col">
                            <p class="mb-2 text-lg font-semibold text-gray-800">Rp. 100000</p>
                            <h3 class="text-base text-gray-500">Fresh Apples</h3>
                            <p class="text-sm text-gray-400">Kategori</p>
                        </div>
                        <button type="button" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                            <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-4 h-4 fill-current">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"></path>
                            </svg>
                        </button>
                    </div>
                </article>
                <article class="relative flex flex-col overflow-hidden rounded-xl shadow-lg hover:shadow-xl hover:shadow-[#F7C04B] border">
                    <div class="aspect-square overflow-hidden">
                        <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="h-full w-full object-cover transition-all duration-300 group-hover:scale-125 text-[#F7C04B]">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"></path>
                        </svg>
                    </div>
                    <div class="flex w-full items-center justify-between p-4">
                        <div class="flex flex-col">
                            <p class="mb-2 text-lg font-semibold text-gray-800">Rp. 100000</p>
                            <h3 class="text-base text-gray-500">Fresh Apples</h3>
                            <p class="text-sm text-gray-400">Kategori</p>
                        </div>
                        <button type="button" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                            <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-4 h-4 fill-current">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"></path>
                            </svg>
                        </button>
                    </div>
                </article>
                <article class="relative flex flex-col overflow-hidden rounded-xl shadow-lg hover:shadow-xl hover:shadow-[#F7C04B] border">
                    <div class="aspect-square overflow-hidden">
                        <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="h-full w-full object-cover transition-all duration-300 group-hover:scale-125 text-[#F7C04B]">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"></path>
                        </svg>
                    </div>
                    <div class="flex w-full items-center justify-between p-4">
                        <div class="flex flex-col">
                            <p class="mb-2 text-lg font-semibold text-gray-800">Rp. 100000</p>
                            <h3 class="text-base text-gray-500">Fresh Apples</h3>
                            <p class="text-sm text-gray-400">Kategori</p>
                        </div>
                        <button type="button" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                            <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-4 h-4 fill-current">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"></path>
                            </svg>
                        </button>
                    </div>
                </article>
                <article class="relative flex flex-col overflow-hidden rounded-xl shadow-lg hover:shadow-xl hover:shadow-[#F7C04B] border">
                    <div class="aspect-square overflow-hidden">
                        <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="h-full w-full object-cover transition-all duration-300 group-hover:scale-125 text-[#F7C04B]">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"></path>
                        </svg>
                    </div>
                    <div class="flex w-full items-center justify-between p-4">
                        <div class="flex flex-col">
                            <p class="mb-2 text-lg font-semibold text-gray-800">Rp. 100000</p>
                            <h3 class="text-base text-gray-500">Fresh Apples</h3>
                            <p class="text-sm text-gray-400">Kategori</p>
                        </div>
                        <button type="button" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                            <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-4 h-4 fill-current">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"></path>
                            </svg>
                        </button>
                    </div>
                </article>
                <article class="relative flex flex-col overflow-hidden rounded-xl shadow-lg hover:shadow-xl hover:shadow-[#F7C04B] border">
                    <div class="aspect-square overflow-hidden">
                        <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="h-full w-full object-cover transition-all duration-300 group-hover:scale-125 text-[#F7C04B]">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"></path>
                        </svg>
                    </div>
                    <div class="flex w-full items-center justify-between p-4">
                        <div class="flex flex-col">
                            <p class="mb-2 text-lg font-semibold text-gray-800">Rp. 100000</p>
                            <h3 class="text-base text-gray-500">Fresh Apples</h3>
                            <p class="text-sm text-gray-400">Kategori</p>
                        </div>
                        <button type="button" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                            <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-4 h-4 fill-current">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"></path>
                            </svg>
                        </button>
                    </div>
                </article>
                <article class="relative flex flex-col overflow-hidden rounded-xl shadow-lg hover:shadow-xl hover:shadow-[#F7C04B] border">
                    <div class="aspect-square overflow-hidden">
                        <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="h-full w-full object-cover transition-all duration-300 group-hover:scale-125 text-[#F7C04B]">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"></path>
                        </svg>
                    </div>
                    <div class="flex w-full items-center justify-between p-4">
                        <div class="flex flex-col">
                            <p class="mb-2 text-lg font-semibold text-gray-800">Rp. 100000</p>
                            <h3 class="text-base text-gray-500">Fresh Apples</h3>
                            <p class="text-sm text-gray-400">Kategori</p>
                        </div>
                        <button type="button" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                            <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-4 h-4 fill-current">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"></path>
                            </svg>
                        </button>
                    </div>
                </article>
                <article class="relative flex flex-col overflow-hidden rounded-xl shadow-lg hover:shadow-xl hover:shadow-[#F7C04B] border">
                    <div class="aspect-square overflow-hidden">
                        <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="h-full w-full object-cover transition-all duration-300 group-hover:scale-125 text-[#F7C04B]">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"></path>
                        </svg>
                    </div>
                    <div class="flex w-full items-center justify-between p-4">
                        <div class="flex flex-col">
                            <p class="mb-2 text-lg font-semibold text-gray-800">Rp. 100000</p>
                            <h3 class="text-base text-gray-500">Fresh Apples</h3>
                            <p class="text-sm text-gray-400">Kategori</p>
                        </div>
                        <button type="button" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                            <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-4 h-4 fill-current">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"></path>
                            </svg>
                        </button>
                    </div>
                </article>
            </div>
        </div>
        <div class="w-full flex flex-col justify-center items-center mt-5 md:mt-10">
            <a href="#" class="inline-flex justify-center hover:text-gray-900 items-center py-4 px-5 text-base font-medium text-center text-white rounded-full bg-[#404A7F] hover:bg-gray-100 focus:ring-4 focus:ring-gray-400 shadow-lg">
                Selengkapnya
            </a>
        </div>
    </div>
</section>

<section id="contact" class="w-full py-20 dark:bg-gray-800">
    <div class="container mx-auto flex flex-wrap">
        <div class="w-full flex flex-col justify-center items-center px-6 mb-5">
            <hr class="w-20 h-2 bg-[#404A7F] rounded-full mb-2 md:mb-4" />
            <h2 class="mt-3 md:mt-0 mb-2 md:mb-4 text-4xl tracking-tight font-extrabold text-gray-800 dark:text-white">Hubungi Kami</h2>
            <p class="mb-2 md:mb-4">kontak kami malang special</p>
        </div>


        <div class="flex flex-wrap">
            <div class="grow-0 shrink-0 basis-auto mb-12 lg:mb-0 w-full lg:w-5/12 px-3 lg:px-6">
                <form>
                    <div class="form-group mb-6">
                        <input type="text" class="form-control block
          w-full
          px-3
          py-1.5
          text-base
          font-normal
          text-gray-700
          bg-white bg-clip-padding
          border border-solid border-gray-300
          rounded
          transition
          ease-in-out
          m-0
          focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput7" placeholder="Name">
                    </div>
                    <div class="form-group mb-6">
                        <input type="email" class="form-control block
          w-full
          px-3
          py-1.5
          text-base
          font-normal
          text-gray-700
          bg-white bg-clip-padding
          border border-solid border-gray-300
          rounded
          transition
          ease-in-out
          m-0
          focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput8" placeholder="Email address">
                    </div>
                    <div class="form-group mb-6">
                        <textarea class="form-control block
          w-full
          px-3
          py-1.5
          text-base
          font-normal
          text-gray-700
          bg-white bg-clip-padding
          border border-solid border-gray-300
          rounded
          transition
          ease-in-out
          m-0
          focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
        " id="exampleFormControlTextarea13" rows="3" placeholder="Message"></textarea>
                    </div>
                    <div class="form-group form-check text-center mb-6">
                        <input type="checkbox" class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain mr-2 cursor-pointer" id="exampleCheck87" checked>
                        <label class="form-check-label inline-block text-gray-800" for="exampleCheck87">Send me a copy of this
                            message</label>
                    </div>
                    <button type="submit" class="
        w-full
        px-6
        py-2.5
        bg-blue-600
        text-white
        font-medium
        text-xs
        leading-tight
        uppercase
        rounded
        shadow-md
        hover:bg-blue-700 hover:shadow-lg
        focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
        active:bg-blue-800 active:shadow-lg
        transition
        duration-150
        ease-in-out">Send</button>
                </form>
            </div>
            <div class="grow-0 shrink-0 basis-auto w-full lg:w-7/12">
                <div class="flex flex-wrap">
                    <div class="mb-12 grow-0 shrink-0 basis-auto w-full lg:w-6/12 px-3 lg:px-6">
                        <div class="flex items-start">
                            <div class="shrink-0">
                                <div class="p-4 bg-blue-600 rounded-md shadow-md w-14 h-14 flex items-center justify-center">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="headset" class="w-5 text-white" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path fill="currentColor" d="M192 208c0-17.67-14.33-32-32-32h-16c-35.35 0-64 28.65-64 64v48c0 35.35 28.65 64 64 64h16c17.67 0 32-14.33 32-32V208zm176 144c35.35 0 64-28.65 64-64v-48c0-35.35-28.65-64-64-64h-16c-17.67 0-32 14.33-32 32v112c0 17.67 14.33 32 32 32h16zM256 0C113.18 0 4.58 118.83 0 256v16c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16v-16c0-114.69 93.31-208 208-208s208 93.31 208 208h-.12c.08 2.43.12 165.72.12 165.72 0 23.35-18.93 42.28-42.28 42.28H320c0-26.51-21.49-48-48-48h-32c-26.51 0-48 21.49-48 48s21.49 48 48 48h181.72c49.86 0 90.28-40.42 90.28-90.28V256C507.42 118.83 398.82 0 256 0z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                            <div class="grow ml-6">
                                <p class="font-bold mb-1">Technical support</p>
                                <p class="text-gray-500">support@example.com</p>
                                <p class="text-gray-500">+1 234-567-89</p>
                            </div>
                        </div>
                    </div>
                    <div class="mb-12 grow-0 shrink-0 basis-auto w-full lg:w-6/12 px-3 lg:px-6">
                        <div class="flex items-start">
                            <div class="shrink-0">
                                <div class="p-4 bg-blue-600 rounded-md shadow-md w-14 h-14 flex items-center justify-center">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="dollar-sign" class="w-3 text-white" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 288 512">
                                        <path fill="currentColor" d="M209.2 233.4l-108-31.6C88.7 198.2 80 186.5 80 173.5c0-16.3 13.2-29.5 29.5-29.5h66.3c12.2 0 24.2 3.7 34.2 10.5 6.1 4.1 14.3 3.1 19.5-2l34.8-34c7.1-6.9 6.1-18.4-1.8-24.5C238 74.8 207.4 64.1 176 64V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48h-2.5C45.8 64-5.4 118.7.5 183.6c4.2 46.1 39.4 83.6 83.8 96.6l102.5 30c12.5 3.7 21.2 15.3 21.2 28.3 0 16.3-13.2 29.5-29.5 29.5h-66.3C100 368 88 364.3 78 357.5c-6.1-4.1-14.3-3.1-19.5 2l-34.8 34c-7.1 6.9-6.1 18.4 1.8 24.5 24.5 19.2 55.1 29.9 86.5 30v48c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16v-48.2c46.6-.9 90.3-28.6 105.7-72.7 21.5-61.6-14.6-124.8-72.5-141.7z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                            <div class="grow ml-6">
                                <p class="font-bold mb-1">Sales questions</p>
                                <p class="text-gray-500">sales@example.com</p>
                                <p class="text-gray-500">+1 234-567-89</p>
                            </div>
                        </div>
                    </div>
                    <div class="mb-12 grow-0 shrink-0 basis-auto w-full lg:w-6/12 px-3 lg:px-6">
                        <div class="flex align-start">
                            <div class="shrink-0">
                                <div class="p-4 bg-blue-600 rounded-md shadow-md w-14 h-14 flex items-center justify-center">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="newspaper" class="w-5 text-white" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                        <path fill="currentColor" d="M552 64H88c-13.255 0-24 10.745-24 24v8H24c-13.255 0-24 10.745-24 24v272c0 30.928 25.072 56 56 56h472c26.51 0 48-21.49 48-48V88c0-13.255-10.745-24-24-24zM56 400a8 8 0 0 1-8-8V144h16v248a8 8 0 0 1-8 8zm236-16H140c-6.627 0-12-5.373-12-12v-8c0-6.627 5.373-12 12-12h152c6.627 0 12 5.373 12 12v8c0 6.627-5.373 12-12 12zm208 0H348c-6.627 0-12-5.373-12-12v-8c0-6.627 5.373-12 12-12h152c6.627 0 12 5.373 12 12v8c0 6.627-5.373 12-12 12zm-208-96H140c-6.627 0-12-5.373-12-12v-8c0-6.627 5.373-12 12-12h152c6.627 0 12 5.373 12 12v8c0 6.627-5.373 12-12 12zm208 0H348c-6.627 0-12-5.373-12-12v-8c0-6.627 5.373-12 12-12h152c6.627 0 12 5.373 12 12v8c0 6.627-5.373 12-12 12zm0-96H140c-6.627 0-12-5.373-12-12v-40c0-6.627 5.373-12 12-12h360c6.627 0 12 5.373 12 12v40c0 6.627-5.373 12-12 12z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                            <div class="grow ml-6">
                                <p class="font-bold mb-1">Press</p>
                                <p class="text-gray-500">press@example.com</p>
                                <p class="text-gray-500">+1 234-567-89</p>
                            </div>
                        </div>
                    </div>
                    <div class="mb-12 grow-0 shrink-0 basis-auto w-full lg:w-6/12 px-3 lg:px-6">
                        <div class="flex align-start">
                            <div class="shrink-0">
                                <div class="p-4 bg-blue-600 rounded-md shadow-md w-14 h-14 flex items-center justify-center">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bug" class="w-5 text-white" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path fill="currentColor" d="M511.988 288.9c-.478 17.43-15.217 31.1-32.653 31.1H424v16c0 21.864-4.882 42.584-13.6 61.145l60.228 60.228c12.496 12.497 12.496 32.758 0 45.255-12.498 12.497-32.759 12.496-45.256 0l-54.736-54.736C345.886 467.965 314.351 480 280 480V236c0-6.627-5.373-12-12-12h-24c-6.627 0-12 5.373-12 12v244c-34.351 0-65.886-12.035-90.636-32.108l-54.736 54.736c-12.498 12.497-32.759 12.496-45.256 0-12.496-12.497-12.496-32.758 0-45.255l60.228-60.228C92.882 378.584 88 357.864 88 336v-16H32.666C15.23 320 .491 306.33.013 288.9-.484 270.816 14.028 256 32 256h56v-58.745l-46.628-46.628c-12.496-12.497-12.496-32.758 0-45.255 12.498-12.497 32.758-12.497 45.256 0L141.255 160h229.489l54.627-54.627c12.498-12.497 32.758-12.497 45.256 0 12.496 12.497 12.496 32.758 0 45.255L424 197.255V256h56c17.972 0 32.484 14.816 31.988 32.9zM257 0c-61.856 0-112 50.144-112 112h224C369 50.144 318.856 0 257 0z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                            <div class="grow ml-6">
                                <p class="font-bold mb-1">Bug report</p>
                                <p class="text-gray-500">bugs@example.com</p>
                                <p class="text-gray-500">+1 234-567-89</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection