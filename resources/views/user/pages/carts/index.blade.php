@extends('user.layout.index')

@section('content')


<section id="carts" class="w-full pt-20 pb-10 dark:bg-gray-800">
    <div class="container mx-auto flex flex-wrap">
        @if(session('success-checkout'))
        <!-- Success Message -->
        <div id="alert-1" class="w-full mx-6 flex p-4 mb-4 text-yellow-500 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-400" role="alert">
            <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
            </svg>
            <span class="sr-only">Info</span>
            <div class="ml-3 text-sm font-medium">
                {{session('success-checkout')}}
            </div>
            <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-yellow-50 text-yellow-500 rounded-lg focus:ring-2 focus:ring-yellow-400 p-1.5 hover:bg-yellow-200 inline-flex h-8 w-8 dark:bg-gray-500 dark:text-yellow-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-1" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <!-- End Success Message -->
        @endif

        @if(session('error-checkout'))
        <!-- Success Message -->
        <div id="alert-1" class="w-full mx-6 flex p-4 mb-4 text-red-500 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
            <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
            </svg>
            <span class="sr-only">Info</span>
            <div class="ml-3 text-sm font-medium">
                {{session('error-checkout')}}
            </div>
            <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-red-500 text-red-100 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex h-8 w-8 dark:bg-gray-500 dark:text-red-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-1" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <!-- End Success Message -->
        @endif

        <div class="w-full flex flex-col justify-start px-6">
            <h2 class="mt-3 md:mt-0 my-2 md:my-4 text-4xl tracking-tight font-extrabold text-gray-800 dark:text-white">Keranjang Produk</h2>
            <hr class="w-20 h-2 bg-[#F7C04B] rounded-full mb-2 md:mb-4" />
            <p class="mb-2 md:mb-4 dark:text-gray-200">Daftar produk yang telah di masukkan keranjang dari malang special</p>
        </div>
        <div class="w-full mx-6 flex flex-col border p-4 shadow-md sm:rounded-lg">

            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="p-4">
                                <div class="flex items-center">
                                    <input id="checkbox-all" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="checkbox-all" class="sr-only">checkbox</label>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Kategori
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Toko
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Harga
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Jumlah
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Opsi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($carts as $cart)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="w-4 p-4">
                                <div class="flex items-center">
                                    <input id="checkbox-cart" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="checkbox-cart" class="sr-only">checkbox</label>
                                </div>
                            </td>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $cart->product->name }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $cart->product->category }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $cart->product->market->name }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $cart->product->price }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $cart->quantity }}
                            </td>
                            <td class="flex items-center px-6 py-4 space-x-3">
                                <a href="{{ url('carts/'.$cart->id)}}" class="text-white bg-blue-500 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2 text-center inline-flex items-center mr-1 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </a>
                                <a href="{{ url('carts/'.$cart->id.'/edit')}}" class="text-white bg-yellow-300 hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-full text-sm p-2 text-center inline-flex items-center mr-1 dark:bg-yellow-400 dark:hover:bg-yellow-500 dark:focus:ring-yellow-600">
                                    <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125"></path>
                                    </svg>
                                </a>
                                <form action="{{ url('carts/'.$cart->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-full text-sm p-2 text-center inline-flex items-center mr-1 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800" onclick="return confirm('Apakah yakin menghapus produk?')">

                                        <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"></path>
                                        </svg>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="w-full mt-5 md:mt-10">

            </div>
            <small class="text-sm text-red-500">Produk yang dichecked harus satu toko</small>
        </div>

        <form action="/transactions" method="post">
            @csrf
            <div class="carts">
                @foreach($carts as $cart_hidden)
                <input type="hidden" id="cart_id" name="cart_id[]" value="{{$cart_hidden->id}}" disabled>
                @endforeach
            </div>
            <button type="submit" class=" text-white bg-[#404A7F] hover:bg-[#404A7F]/90 focus:ring-4 focus:outline-none focus:ring-[#404A7F]/50 font-medium rounded-lg text-sm mx-6 mt-4 px-5 py-2 text-center inline-flex items-center dark:focus:ring-[#404A7F]/55 mr-2 mb-2">
                <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-4 h-4 mr-2 -ml-1">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z"></path>
                </svg>
                Pesan Sekarang
            </button>
        </form>

    </div>
</section>
<script>
    const carts = document.querySelectorAll('#cart_id');
    const checkbox_carts = document.querySelectorAll('#checkbox-cart');

    checkbox_carts.forEach((checkbox_cart, index) => {
        checkbox_cart.addEventListener('click', () => {
            if (checkbox_cart.checked) {
                carts[index].removeAttribute('disabled');
            } else {
                carts[index].setAttribute('disabled', '');
            }
        });
    });

    const checkbox_all = document.querySelector('#checkbox-all');
    checkbox_all.addEventListener('click', () => {
        if (checkbox_all.checked) {
            carts.forEach((cart) => {
                cart.removeAttribute('disabled');
            });
            checkbox_carts.forEach((checkbox) => {
                checkbox.checked = true;
            });
        } else {
            carts.forEach((cart) => {
                cart.setAttribute('disabled', '');
            });
            checkbox_carts.forEach((checkbox) => {
                checkbox.checked = false;
            });
        }
    });
</script>
@endsection