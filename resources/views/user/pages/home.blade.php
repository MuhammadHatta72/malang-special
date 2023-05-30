@extends('user.layout.index')

@section('content')
<section class="h-screen bg-cover bg-center bg-no-repeat bg-gray-100 bg-blend-multiply" style="background-image: url('./assets/images-home/slider1.png')">
    <div class="h-full flex flex-col items-center justify-center text-center px-5 md:px-0">
        <h1 class="mb-4 text-3xl font-extrabold tracking-tight leading-none text-[#549166] md:text-5xl lg:text-6xl">Toko Oleh-oleh Khas Malang</h1>
        <p class="mb-8 text-lg font-normal text-white lg:text-xl sm:px-16 lg:px-48">Kami menjual berbagai produk oleh-oleh khas Malang yang berkualitas.</p>
        <div class="flex justify-center">
            <a href="/shop" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-full bg-[#efa911] hover:bg-[#F7C04B] focus:ring-4 focus:ring-[#F7C04B] dark:focus:ring-[#F7C04B] mr-2 md:mr-4">
                Beli Sekarang
                <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="ml-2 -mr-1 w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z"></path>
                </svg>
            </a>
            <a href="/#about" class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 text-base font-medium text-center text-white rounded-full border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400">
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
                @foreach($products as $product)
                <!-- Article -->
                <article class="relative flex flex-col overflow-hidden rounded-xl shadow-lg hover:shadow-xl hover:shadow-[#F7C04B] border">
                    <div class="aspect-square overflow-hidden">
                        <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="h-full w-full object-cover transition-all duration-300 group-hover:scale-125 text-[#F7C04B]">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"></path>
                        </svg>
                    </div>
                    <div class="flex w-full items-center justify-between p-4">
                        <div class="flex flex-col">
                            <p class="mb-2 text-lg font-semibold text-gray-800">Rp. {{$product->price}}</p>
                            <h3 class="text-base text-gray-500">{{$product->name}}</h3>
                            <p class="text-sm text-gray-400">{{$product->category}}</p>
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
        <div class="w-full flex flex-col justify-center items-center mt-5 md:mt-10">
            <a href="/shop" class="inline-flex justify-center hover:text-gray-900 items-center py-4 px-5 text-base font-medium text-center text-white rounded-full bg-[#404A7F] hover:bg-gray-100 focus:ring-4 focus:ring-gray-400 shadow-lg">
                Selengkapnya
            </a>
        </div>
    </div>
</section>

<section id="contact" class="w-full py-10 px-6 sm:px-8 lg:px-10 dark:bg-gray-800">
    <div class="container mx-auto flex flex-wrap">
        <div class="w-full flex flex-col justify-center items-center px-6 mb-5">
            <hr class="w-20 h-2 bg-[#404A7F] rounded-full mb-2 md:mb-4" />
            <h2 class="mt-3 md:mt-0 mb-2 md:mb-4 text-4xl tracking-tight font-extrabold text-gray-800 dark:text-white">Hubungi Kami</h2>
            <p class="mb-2 md:mb-4">kontak kami malang special</p>
        </div>


        <div class="flex flex-wrap">
            <div class="grow-0 shrink-0 basis-auto mb-12 lg:mb-0 w-full lg:w-5/12 px-3 lg:px-6">
                <h3 class="mt-3 md:mt-0 mb-2 md:mb-4 text-2xl tracking-tight font-extrabold text-gray-800 dark:text-white">Formulir</h3>
                <hr class="w-20 h-1 bg-[#F7C04B] rounded-full mb-2 md:mb-4" />
                <form>
                    <div class="form-group mb-6">
                        <input type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded-xl transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-[#F7C04B] focus:outline-none" id="exampleInput7" placeholder="Name">
                    </div>
                    <div class="form-group mb-6">
                        <input type="email" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded-xl transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-[#F7C04B] focus:outline-none" id="exampleInput8" placeholder="Email address">
                    </div>
                    <div class="form-group mb-6">
                        <textarea class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded-xl transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-[#F7C04B] focus:outline-none" id="exampleFormControlTextarea13" rows="3" placeholder="Message"></textarea>
                    </div>
                    <button type="submit" class="w-full px-6 py-2.5 bg-[#F7C04B] text-gray-700 font-medium text-base leading-tight uppercase rounded-xl shadow-md hover:bg-gray-100 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-[#F7C04B] active:shadow-lg transition duration-150 ease-in-out">Send</button>
                </form>
            </div>
            <div class="grow-0 shrink-0 basis-auto w-full lg:w-7/12">
                <div class="flex flex-wrap">
                    <div class="mb-12 grow-0 shrink-0 basis-auto w-full lg:w-6/12 px-3 lg:px-6">
                        <div class="flex items-start">
                            <div class="shrink-0">
                                <div class="p-4 bg-[#404A7F] rounded-full shadow-md w-14 h-14 flex items-center justify-center">
                                    <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-7 text-white">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 6.75V15m6-6v8.25m.503 3.498l4.875-2.437c.381-.19.622-.58.622-1.006V4.82c0-.836-.88-1.38-1.628-1.006l-3.869 1.934c-.317.159-.69.159-1.006 0L9.503 3.252a1.125 1.125 0 00-1.006 0L3.622 5.689C3.24 5.88 3 6.27 3 6.695V19.18c0 .836.88 1.38 1.628 1.006l3.869-1.934c.317-.159.69-.159 1.006 0l4.994 2.497c.317.158.69.158 1.006 0z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="grow ml-6">
                                <p class="font-bold mb-1">Alamat</p>
                                <p class="text-gray-500">Kota Malang</p>
                            </div>
                        </div>
                    </div>
                    <div class="mb-12 grow-0 shrink-0 basis-auto w-full lg:w-6/12 px-3 lg:px-6">
                        <div class="flex items-start">
                            <div class="shrink-0">
                                <div class="p-4 bg-[#404A7F] rounded-full shadow-md w-14 h-14 flex items-center justify-center">
                                    <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-7 text-white">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="grow ml-6">
                                <p class="font-bold mb-1">Telepon</p>
                                <p class="text-gray-500">+628155390932</p>
                                <p class="text-gray-500">+628155390932</p>
                            </div>
                        </div>
                    </div>
                    <div class="mb-12 grow-0 shrink-0 basis-auto w-full lg:w-6/12 px-3 lg:px-6">
                        <div class="flex align-start">
                            <div class="shrink-0">
                                <div class="p-4 bg-[#404A7F] rounded-full shadow-md w-14 h-14 flex items-center justify-center">
                                    <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-7 text-white">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="grow ml-6">
                                <p class="font-bold mb-1">Email</p>
                                <p class="text-gray-500">malangspecial@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="mb-12 grow-0 shrink-0 basis-auto w-full lg:w-6/12 px-3 lg:px-6">
                        <div class="flex align-start">
                            <div class="shrink-0">
                                <div class="p-4 bg-[#404A7F] rounded-full shadow-md w-14 h-14 flex items-center justify-center">
                                    <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-7 text-white">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="grow ml-6">
                                <p class="font-bold mb-1">Fax</p>
                                <p class="text-gray-500">+134-567-89</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection