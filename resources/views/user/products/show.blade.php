@extends('admin.layout.index')

@section('content')
<div class="px-4 pt-8 pb-3 sm:ml-64">
    <div class="mt-12 mr-3">
        <div class="w-full mt-4 pl-4 md:pl-6 bg-gradient-to-r from-[#2C3E50] to-[#3498DB] rounded-xl shadow dark:bg-gray-800 dark:border-gray-700 flex flex-col md:flex-row justify-center md:justify-between sm:items-center overflow-hidden">
            <div class="flex flex-col md:justify-start md:items-center mt-4 md:mt-0 mb-3 md:mb-0">
                <h2 class="text-2xl text-gray-100">Makanan Khas Malang</h2>
                <p class="text-base text-gray-100">#cintai produk dalam negeri</p>
            </div>
            <img src="{{ url('./images/bakso-malang.png') }}" alt="" class="w-40 md:w-72 mb-5 md:mb-0" />
        </div>


        <!-- Related Product -->
        <h2 class="text-xl text-gray-600 dark:text-gray-100 mt-6 mb-4">Kaos</h2>

        <div class="grid grid-cols-2 md:grid-cols-5 gap-4">
            <!-- column -->
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg w-full" src="{{ url('./images/image-1.png') }}" alt="" />
                </a>
                <div class="p-3">
                    <a href="#">
                        <h5 class="mb-2 text-base font-medium tracking-tight text-gray-800 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                    </a>
                    <div class="flex justify-between">
                        <span class="text-sm text-gray-600 dark:text-gray-400">Rp. 50.000</span>
                        <span class="text-sm text-gray-600 dark:text-gray-400">172 Terjual</span>
                    </div>
                </div>
            </div>
            <!-- end column -->
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg w-full" src="{{ url('./images/image-2.png') }}" alt="" />
                </a>
                <div class="p-3">
                    <a href="#">
                        <h5 class="mb-2 text-base font-medium tracking-tight text-gray-800 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                    </a>
                    <div class="flex justify-between">
                        <span class="text-sm text-gray-600 dark:text-gray-400">Rp. 50.000</span>
                        <span class="text-sm text-gray-600 dark:text-gray-400">172 Terjual</span>
                    </div>
                </div>
            </div>
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg w-full" src="{{ url('./images/image-3.png') }}" alt="" />
                </a>
                <div class="p-3">
                    <a href="#">
                        <h5 class="mb-2 text-base font-medium tracking-tight text-gray-800 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                    </a>
                    <div class="flex justify-between">
                        <span class="text-sm text-gray-600 dark:text-gray-400">Rp. 50.000</span>
                        <span class="text-sm text-gray-600 dark:text-gray-400">172 Terjual</span>
                    </div>
                </div>
            </div>
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg w-full" src="{{ url('./images/image-4.png') }}" alt="" />
                </a>
                <div class="p-3">
                    <a href="#">
                        <h5 class="mb-2 text-base font-medium tracking-tight text-gray-800 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                    </a>
                    <div class="flex justify-between">
                        <span class="text-sm text-gray-600 dark:text-gray-400">Rp. 50.000</span>
                        <span class="text-sm text-gray-600 dark:text-gray-400">172 Terjual</span>
                    </div>
                </div>
            </div>
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg w-full" src="{{ url('./images/image-4.png') }}" alt="" />
                </a>
                <div class="p-3">
                    <a href="#">
                        <h5 class="mb-2 text-base font-medium tracking-tight text-gray-800 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                    </a>
                    <div class="flex justify-between">
                        <span class="text-sm text-gray-600 dark:text-gray-400">Rp. 50.000</span>
                        <span class="text-sm text-gray-600 dark:text-gray-400">172 Terjual</span>
                    </div>
                </div>
            </div>
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg w-full" src="{{ url('./images/image-4.png') }}" alt="" />
                </a>
                <div class="p-3">
                    <a href="#">
                        <h5 class="mb-2 text-base font-medium tracking-tight text-gray-800 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                    </a>
                    <div class="flex justify-between">
                        <span class="text-sm text-gray-600 dark:text-gray-400">Rp. 50.000</span>
                        <span class="text-sm text-gray-600 dark:text-gray-400">172 Terjual</span>
                    </div>
                </div>
            </div>
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg w-full" src="{{ url('./images/image-4.png') }}" alt="" />
                </a>
                <div class="p-3">
                    <a href="#">
                        <h5 class="mb-2 text-base font-medium tracking-tight text-gray-800 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                    </a>
                    <div class="flex justify-between">
                        <span class="text-sm text-gray-600 dark:text-gray-400">Rp. 50.000</span>
                        <span class="text-sm text-gray-600 dark:text-gray-400">172 Terjual</span>
                    </div>
                </div>
            </div>
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg w-full" src="{{ url('./images/image-4.png') }}" alt="" />
                </a>
                <div class="p-3">
                    <a href="#">
                        <h5 class="mb-2 text-base font-medium tracking-tight text-gray-800 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                    </a>
                    <div class="flex justify-between">
                        <span class="text-sm text-gray-600 dark:text-gray-400">Rp. 50.000</span>
                        <span class="text-sm text-gray-600 dark:text-gray-400">172 Terjual</span>
                    </div>
                </div>
            </div>
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg w-full" src="{{ url('./images/image-4.png') }}" alt="" />
                </a>
                <div class="p-3">
                    <a href="#">
                        <h5 class="mb-2 text-base font-medium tracking-tight text-gray-800 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                    </a>
                    <div class="flex justify-between">
                        <span class="text-sm text-gray-600 dark:text-gray-400">Rp. 50.000</span>
                        <span class="text-sm text-gray-600 dark:text-gray-400">172 Terjual</span>
                    </div>
                </div>
            </div>
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg w-full" src="{{ url('./images/image-4.png') }}" alt="" />
                </a>
                <div class="p-3">
                    <a href="#">
                        <h5 class="mb-2 text-base font-medium tracking-tight text-gray-800 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                    </a>
                    <div class="flex justify-between">
                        <span class="text-sm text-gray-600 dark:text-gray-400">Rp. 50.000</span>
                        <span class="text-sm text-gray-600 dark:text-gray-400">172 Terjual</span>
                    </div>
                </div>
            </div>

        </div>
        <!-- End Related Product -->

        <nav class="flex flex-col md:flex-row items-center justify-center mt-8 mb-6" aria-label="Table navigation">
            <ul class="inline-flex -space-x-px">
                <li>
                    <a href="#" class="px-3 py-2 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
                </li>
                <li>
                    <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                </li>
                <li>
                    <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                </li>
                <li>
                    <a href="#" aria-current="page" class="px-3 py-2 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                </li>
                <li>
                    <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                </li>
                <li>
                    <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                </li>
                <li>
                    <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                </li>
            </ul>
        </nav>
    </div>
</div>
@endsection