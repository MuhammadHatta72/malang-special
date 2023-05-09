@extends('admin.layout.index')

@section('content')
<div class="px-4 pt-8 pb-3 sm:ml-64">
    <div class="mt-12 mr-3">
        <h2 class="text-2xl text-gray-800 dark:text-gray-100">Detail Product</h2>


        <div class="w-full mt-4 px-6 py-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <h3 class="text-sm text-gray-600 dark:text-gray-200 mb-3">Data lengkap produk</h3>

            <div class="flex flex-col md:flex-row">
                <img src="{{ url('./images/image-2.png') }}" class="md:w-1/3">
                <div class="md:w-2/3 p-0 md:p-5 pt-4 md:pt-0">
                    <h3 class="text-xl text-gray-800 dark:text-gray-200 mb-3">Nama Produk</h3>
                    <div class="mb-3">
                        <label for="first_name" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Deskripsi Produk</label>
                        <h2 class="block text-base text-gray-500 dark:text-white">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita repudiandae nostrum ipsa eaque autem consectetur, ut reprehenderit harum sit. Commodi pariatur illo enim natus minus vitae delectus expedita quas placeat harum dolorem, beatae aliquam fugiat praesentium vel omnis consequuntur aspernatur.</h2>
                    </div>
                    <div class="mb-3">
                        <label for="first_name" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Stok Produk</label>
                        <h2 class="block text-base text-gray-500 dark:text-white">12 Produk</h2>
                    </div>
                    <div class="mb-3">
                        <label for="first_name" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Harga Produk</label>
                        <h2 class="block text-base text-gray-500 dark:text-white">Rp. 70.000</h2>
                    </div>
                    <div>
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
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


@endsection