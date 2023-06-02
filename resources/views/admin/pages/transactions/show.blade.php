@extends('admin.layout.index')

@section('content')
<div class="px-4 pt-8 pb-3 sm:ml-64">
    <div class="mt-12 mr-3">
        <h2 class="text-2xl text-gray-800 dark:text-gray-100">Pembayaran</h2>

        <div class="w-full mt-4">
            <div class="md:flex">
                <div class="md:w-2/3 px-6 py-3 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <h4 class="text-gray-600 dark:text-gray-200 mb-3">Daftar semua produk yang akan di bayarkan</h4>
                    <div class="relative overflow-x-auto my-3">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr class="">
                                    <th class="px-2 py-3 font-medium text-center text-gray-900 whitespace-nowrap dark:text-white">
                                        Gambar
                                    </th>
                                    <th class="px-2 py-4 font-medium text-center text-gray-900 whitespace-nowrap dark:text-white">
                                        Nama
                                    </th>
                                    <th class="px-2 py-3 font-medium text-center text-gray-900 whitespace-nowrap dark:text-white">
                                        Harga
                                    </th>
                                    <th class="px-2 py-3 font-medium text-center text-gray-900 whitespace-nowrap dark:text-white">
                                        Kategori
                                    </th>
                                    <th class="px-2 py-3 font-medium text-center text-gray-900 whitespace-nowrap dark:text-white">
                                        Jumlah
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($transactionItems as $transactionItem)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <td class="py-4 text-center">
                                        <div class="flex justify-center items-center">
                                            @if($transactionItem->cart->product->image !== "not_found")
                                            <img src="{{ url('./image_products/' .$transactionItem->cart->product->image) }}" class="w-1 h-auto">
                                            @else
                                            <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-14 h-auto text-[#F7C04B]">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 21v-7.5a.75.75 0 01.75-.75h3a.75.75 0 01.75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349m-16.5 11.65V9.35m0 0a3.001 3.001 0 003.75-.615A2.993 2.993 0 009.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 002.25 1.016c.896 0 1.7-.393 2.25-1.016a3.001 3.001 0 003.75.614m-16.5 0a3.004 3.004 0 01-.621-4.72L4.318 3.44A1.5 1.5 0 015.378 3h13.243a1.5 1.5 0 011.06.44l1.19 1.189a3 3 0 01-.621 4.72m-13.5 8.65h3.75a.75.75 0 00.75-.75V13.5a.75.75 0 00-.75-.75H6.75a.75.75 0 00-.75.75v3.75c0 .415.336.75.75.75z"></path>
                                            </svg>
                                            @endif
                                        </div>
                                    </td>
                                    <td scope="row" class="py-4 text-center">
                                        {{$transactionItem->cart->product->name}}
                                    </td>
                                    <td class="py-4 text-center">
                                        {{$transactionItem->cart->product->price}}
                                    </td>
                                    <td class="py-4 text-center">
                                        {{$transactionItem->cart->product->category}}
                                    </td>
                                    <td class="py-4 text-center">
                                        {{$transactionItem->cart->quantity}}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="my-3">
                        {{ $transactionItems->links('pagination::tailwind') }}
                    </div>
                </div>

                <div class="md:w-1/3 md:ml-3 mt-3 md:mt-0">
                    <div class="p-3 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <h3 class="text-gray-600 dark:text-gray-200 mb-3">Bayar Sekarang</h3>
                        <div>
                            <div class="flex justify-between mb-3">
                                <p class="block mb-1 text-sm font-medium text-gray-700 dark:text-white">Tanggal Transaksi :</p>
                                <p class="block mb-1 text-sm text-gray-500 dark:text-white">{{$transaction->date}}</p>
                            </div>
                            <div class="flex justify-between mb-3">
                                <p class="block mb-1 text-sm font-medium text-gray-700 dark:text-white">Status Pembayaran :</p>
                                @if($transaction->status_payment == 'not_yet')
                                <p class="block mb-1 text-sm font-bold text-red-400 dark:text-white">Belum Bayar</p>
                                @else
                                <p class="block mb-1 text-sm font-bold text-green-400 dark:text-white">Lunas</p>
                                @endif
                            </div>
                            <div class="flex justify-between mb-3">
                                <p class="block mb-1 text-sm font-medium text-gray-700 dark:text-white">Metode pembayaran :</p>
                                <p class="block mb-1 text-sm text-gray-500 dark:text-white">TF</p>
                            </div>
                            <hr>
                            <!-- <div class="flex justify-between mb-3">
                                <p class="block mb-1 text-sm font-medium text-gray-700 dark:text-white">Subtotal untuk produk :</p>
                                <p class="block mb-1 text-sm text-gray-500 dark:text-white">Rp. 114.000</p>
                            </div> -->
                            <div class="flex justify-between my-3">
                                <p class="block mb-1 text-sm font-medium text-gray-700 dark:text-white">Subtotal Pengiriman :</p>
                                <p class="block mb-1 text-sm text-gray-500 dark:text-white">Rp. 10.000</p>
                            </div>
                            <!-- <div class="flex justify-between mb-3">
                                <p class="block mb-1 text-sm font-medium text-gray-700 dark:text-white">Subtotal Pengamanan :</p>
                                <p class="block mb-1 text-sm text-gray-500 dark:text-white">Rp. 2.500</p>
                            </div> -->
                            <div class="flex justify-between mb-3">
                                <p class="block mb-1 text-base font-medium text-gray-700 dark:text-white">Total Pesanan :</p>
                                <p class="block mb-1 text-base text-amber-400 dark:text-white">Rp. {{$transaction->total_price}}</p>
                            </div>
                            <!-- <div class="mb-3">
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload file</label>
                                <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
                            </div>
                            <div class="mb-3">
                                <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your message</label>
                                <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here..."></textarea>
                            </div> -->
                            @if($transaction->status_payment != 'not_yet')
                            <button type="button" class="w-full text-green-400 hover:text-white border border-green-400 hover:bg-green-500 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-green-300 dark:text-green-300 dark:hover:text-white dark:hover:bg-green-400 dark:focus:ring-green-900">Konfirmasi Pembayaran</button>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection