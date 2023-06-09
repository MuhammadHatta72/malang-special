@extends('admin.layout.index')

@section('content')
<div class="px-4 pt-8 pb-3 sm:ml-64">
    <div class="mt-12 mr-3">
        <h2 class="text-2xl text-gray-800 dark:text-gray-100">Edit Toko</h2>


        <div class="w-full mt-4 px-6 py-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <h3 class="text-sm text-gray-600 dark:text-gray-200 mb-3">Edit toko baru</h3>

            <form action="/market-admin/{{ $market->id}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Toko</label>
                        <input type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Toko Barokah" value="{{ $market->name }}" required>
                        @error('name')
                        <small class="text-xs text-red-500">{{ $message }}</small>
                        @enderror
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input type="email" id="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="toko@gmail.com" value="{{ $market->email }}" required>
                        @error('email')
                        <small class="text-xs text-red-500">{{ $message }}</small>
                        @enderror
                    </div>
                    <div>
                        <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor Telepon</label>
                        <input type="number" id="phone" name="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="08155000000" value="{{ $market->phone }}" required>
                        @error('phone')
                        <small class="text-xs text-red-500">{{ $message }}</small>
                        @enderror
                    </div>
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="image_new">Gambar Toko</label>
                        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="image_new" name="image_new" type="file" accept="image/png, image/jpg, image/jpeg">
                        @error('image')
                        <small class="text-xs text-red-500">{{ $message }}</small>
                        @enderror
                    </div>
                    <div>
                        <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
                        <input type="text" id="address" name="address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Malang" value="{{ $market->address }}" required>
                        @error('address')
                        <small class="text-xs text-red-500">{{ $message }}</small>
                        @enderror
                    </div>
                    <div>
                        <label for="disable-user" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih Admin</label>
                        <input type="text" id="disable-user" aria-label="disabled input 2" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$market->user->name}}" disabled readonly>
                    </div>
                    <div>
                        <label for="no_bri" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No. Rekening BRI</label>
                        <input type="number" id="no_bri" name="no_bri" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="XXXX-XXXX-XXXX-XXXX" value="{{ $market->no_bri }}" required>
                        @if($errors->has('no_bri'))
                        <small class="text-xs text-red-500">{{ $errors->first('no_bri') }}</small>
                        @endif
                    </div>
                    <div>
                        <label for="no_bni" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No. Rekening BNI</label>
                        <input type="number" id="no_bni" name="no_bni" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="XXXX-XXXX-XXXX-XXXX" value="{{ $market->no_bni }}" required>
                        @if($errors->has('no_bni'))
                        <small class="text-xs text-red-500">{{ $errors->first('no_bni') }}</small>
                        @endif
                    </div>
                    <div>
                        <label for="no_bca" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No. Rekening BCA</label>
                        <input type="number" id="no_bca" name="no_bca" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="XXXX-XXXX-XXXX-XXXX" value="{{ $market->no_bca }}" required>
                        @if($errors->has('no_bca'))
                        <small class="text-xs text-red-500">{{ $errors->first('no_bca') }}</small>
                        @endif
                    </div>
                    <div>
                        <label for="no_mandiri" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No. Rekening Mandiri</label>
                        <input type="number" id="no_mandiri" name="no_mandiri" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="XXXX-XXXX-XXXX-XXXX" value="{{ $market->no_mandiri }}" required>
                        @if($errors->has('no_mandiri'))
                        <small class="text-xs text-red-500">{{ $errors->first('no_mandiri') }}</small>
                        @endif
                    </div>
                </div>
                <a href="{{ url('/market-admin') }}" class="text-gray-900 bg-amber-300 border border-amber-300 focus:outline-none hover:bg-amber-400 focus:ring-4 focus:ring-amber-400 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-amber-300 dark:text-gray-800 dark:border-amber-400 dark:hover:bg-amber-400 dark:hover:border-amber-400 dark:focus:ring-amber-400">Kembali</a>
                <button type="submit" class="text-white bg-[#404A7F] hover:bg-[#374380] focus:ring-4 focus:outline-none focus:ring-[#374380] font-medium rounded-lg text-sm sm:w-auto px-5 py-2.5 text-center dark:bg-[#404A7F] dark:hover:bg-[#374380] dark:focus:ring-[#374380]">Update</button>
            </form>

        </div>
    </div>
</div>


@endsection