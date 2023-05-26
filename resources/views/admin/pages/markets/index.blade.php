@extends('admin.layout.index')

@section('content')
<div class="px-4 pt-8 pb-3 sm:ml-64">
    <div class="mt-12 mr-3">
        @can('superadmin')
        <h2 class="text-2xl text-gray-800 dark:text-gray-100">Markets</h2>

        <div class="flex flex-col md:flex-row md:justify-between mb-4">
            <h3 class="text-sm text-gray-600 dark:text-gray-200 my-3">Daftar semua toko yang menggunakan aplikasi special Malang</h3>
            <a href="{{ url('markets/create') }}" class=" text-white bg-[#549166] hover:bg-[#549166]/90 focus:ring-4 focus:outline-none focus:ring-[#549166]/50 font-medium rounded-lg text-sm px-5 py-2 text-center inline-flex items-center dark:focus:ring-[#549166]/55 mr-2 mb-2">
                <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-4 h-4 mr-2 -ml-1">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"></path>
                </svg>
                Tambah Toko
            </a>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-5 gap-4">
            @foreach ($markets as $market)
            <!-- column -->
            <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <div class="flex justify-end px-4 pt-2">
                    <button id="dropdownButton" data-dropdown-toggle="dropdown" class="inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-1.5" type="button">
                        <span class="sr-only">Open dropdown</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z"></path>
                        </svg>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="dropdown" class="z-10 hidden text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                        <ul class="py-2" aria-labelledby="dropdownButton">
                            <li>
                                <a href="{{ url('/markets/'.$market->id.'/edit') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Edit</a>
                            </li>
                            <form action="{{ url('markets/'. $market->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <li>
                                    <button type="submit" class="block px-4 py-2 text-sm text-left w-full text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white" onclick="return confirm('apakah yakin ingin mengahapus toko?')">Delete</button>
                                </li>
                            </form>
                        </ul>
                    </div>
                </div>
                <div class="flex flex-col items-center pb-10">
                    @if($market->image == 'not_found')
                    <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-32 h-32 text-[#F7C04B]">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 21v-7.5a.75.75 0 01.75-.75h3a.75.75 0 01.75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349m-16.5 11.65V9.35m0 0a3.001 3.001 0 003.75-.615A2.993 2.993 0 009.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 002.25 1.016c.896 0 1.7-.393 2.25-1.016a3.001 3.001 0 003.75.614m-16.5 0a3.004 3.004 0 01-.621-4.72L4.318 3.44A1.5 1.5 0 015.378 3h13.243a1.5 1.5 0 011.06.44l1.19 1.189a3 3 0 01-.621 4.72m-13.5 8.65h3.75a.75.75 0 00.75-.75V13.5a.75.75 0 00-.75-.75H6.75a.75.75 0 00-.75.75v3.75c0 .415.336.75.75.75z"></path>
                    </svg>
                    @else
                    <img class="w-32 h-32 object-cover mb-3" src="{{ url('image_markets/' . $market->image) }}" alt="Image {{$market->name}}">
                    @endif
                    <a href="{{ url('/markets/'. $market->id) }}" class="text-base text-gray-600 group-hover:text-gray-800 dark:text-gray-200">{{$market->name}}</a>
                </div>
            </div>
            <!-- end column -->
            @endforeach
        </div>

        <div class="mt-3">
            {{ $markets->links() }}
        </div>

        @endcan
    </div>
</div>

@endsection
