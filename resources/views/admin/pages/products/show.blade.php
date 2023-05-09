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
                        <a href="{{ url('/products') }}" class="text-gray-900 bg-amber-300 border border-gray-300 focus:outline-none hover:bg-amber-400 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-amber-300 dark:text-gray-800 dark:border-gray-600 dark:hover:bg-amber-400 dark:hover:border-gray-600 dark:focus:ring-gray-700 mt-3">Kembali</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


@endsection