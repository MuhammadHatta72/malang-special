<div class="grid gap-6 mb-6 md:grid-cols-2">
    <div>
        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Toko</label>
        <input type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Toko Barokah" value="{{ $market->name }}" required>
        @if($errors->has('name'))
        <small class="text-xs text-red-500">{{ $errors->first('name') }}</small>
        @endif
    </div>
    <div>
        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
        <input type="email" id="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="toko@gmail.com" value="{{ $market->email }}" required>
        @if($errors->has('email'))
        <small class="text-xs text-red-500">{{ $errors->first('email') }}</small>
        @endif
    </div>
    <div>
        <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor Telepon</label>
        <input type="number" id="phone" name="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="08155000000" value="{{ $market->phone }}" required>
        @if($errors->has('phone'))
        <small class="text-xs text-red-500">{{ $errors->first('phone') }}</small>
        @endif
    </div>
    <div>
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="image_new">Gambar Toko</label>
        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="image_new" name="image_new" type="file" accept="image/png, image/jpg, image/jpeg">
        @if($errors->has('image'))
        <small class="text-xs text-red-500">{{ $errors->first('image_new') }}</small>
        @endif
    </div>
    <div>
        <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
        <input type="text" id="address" name="address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Malang" value="{{ $market->address }}" required>
        @if($errors->has('address'))
        <small class="text-xs text-red-500">{{ $errors->first('address') }}</small>
        @endif
    </div>
    <div>
        <label for="user_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih Admin</label>
        <select id="user_id" name="user_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
            <option value="" selected>Pilih</option>
            @foreach ($admins as $admin)
            <option value="{{$admin->id}}" @if($market->user_id == $admin->id) selected @endif>{{$admin->name}} - {{$admin->username}}</option>
            @endforeach
        </select>
        @if($errors->has('user_id'))
        <small class="text-xs text-red-500">{{ $errors->first('user_id') }}</small>
        @endif
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