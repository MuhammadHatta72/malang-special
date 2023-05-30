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
        <label for="user_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih Admin</label>
        <select id="user_id" name="user_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option selected>Pilih</option>
            @foreach ($admins as $admin)
            <option value="{{$admin->id}}" @if($market->user_id == $admin->id) selected @endif>{{$admin->name}} - {{$admin->username}}</option>
            @endforeach
        </select>
        @error('user_id')
        <small class="text-xs text-red-500">{{ $message }}</small>
        @enderror
    </div>
</div>