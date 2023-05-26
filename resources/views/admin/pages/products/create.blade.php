@extends('admin.layout.index')

@section('content')
<div class="px-4 pt-8 pb-3 sm:ml-64">
    <div class="mt-12 mr-3">
        <h2 class="text-2xl text-gray-800 dark:text-gray-100">Tambah Produk</h2>


        <div class="w-full mt-4 px-6 py-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <h3 class="text-sm text-gray-600 dark:text-gray-200 mb-3">Tambah produk baru</h3>

            <form action="/products" method="post" enctype="multipart/form-data">
                @csrf
                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Produk</label>
                        <input type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Brownies" required>
                        @error('name')
                        <small class="text-xs text-red-500">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga</label>
                        <span class="input-group-text">$</span>
                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                        <span class="input-group-text">.00</span>
                        @error('price')
                        <small class="text-xs text-red-500">{{ $message }}</small>
                        @enderror
                      </div>
                    {{-- <div class="input-group mb-3">
                        <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga</label>
                        <span class="input-group-text">Rp</span>
                        <input type="price" id="price" name="price" class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" aria-label="Amount (to the nearest dollar)">
                        <span class="input-group-text">,00</span>
                        @error('price')
                        <small class="text-xs text-red-500">{{ $message }}</small>
                        @enderror
                    </div> --}}
                    <div>
                        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
                        <input type="description" id="description" name="description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" style="height: 150px" placeholder="-----" required>
                        @error('description')
                        <small class="text-xs text-red-500">{{ $message }}</small>
                        @enderror
                    </div>
                    <div>
                        <label for="stock" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Stok</label>
                        <input type="stock" id="stok" name="stock" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="0" required>
                        @error('stock')
                        <small class="text-xs text-red-500">{{ $message }}</small>
                        @enderror
                    </div>
                    <div>
                        <label for="remainder" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sisa</label>
                        <input type="remainder" id="remainder" name="remainder" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="---" required>
                        @error('remainder')
                        <small class="text-xs text-red-500">{{ $message }}</small>
                        @enderror
                    </div>
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="image">Gambar Toko</label>
                        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="image" name="image" type="file" accept="image/png, image/jpg, image/jpeg">
                        @error('image')
                        <small class="text-xs text-red-500">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <a href="{{ url('/products') }}" class="text-gray-900 bg-amber-300 border border-amber-300 focus:outline-none hover:bg-amber-400 focus:ring-4 focus:ring-amber-400 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-amber-300 dark:text-gray-800 dark:border-amber-400 dark:hover:bg-amber-400 dark:hover:border-amber-400 dark:focus:ring-amber-400">Kembali</a>
                <button type="submit" class="text-white bg-[#549166] hover:bg-[#326742] focus:ring-4 focus:outline-none focus:ring-[#326742] font-medium rounded-lg text-sm sm:w-auto px-5 py-2.5 text-center dark:bg-[#549166] dark:hover:bg-[#326742] dark:focus:ring-[#326742]">Tambah</button>
            </form>

        </div>
    </div>
</div>


@endsection
