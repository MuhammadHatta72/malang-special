@extends('admin.layout.index')

@section('content')
<div class="px-4 pt-8 pb-3 sm:ml-64">
    <div class="mt-12 mr-3">
        <h2 class="text-2xl text-gray-800 dark:text-gray-100">Edit Toko</h2>


        <div class="w-full mt-4 px-6 py-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <h3 class="text-sm text-gray-600 dark:text-gray-200 mb-3">Edit toko baru</h3>

            <form action="/markets/{{ $market->id}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @include('admin.pages.markets.partials.form-control')
                <a href="{{ url('/markets') }}" class="text-gray-900 bg-amber-300 border border-amber-300 focus:outline-none hover:bg-amber-400 focus:ring-4 focus:ring-amber-400 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-amber-300 dark:text-gray-800 dark:border-amber-400 dark:hover:bg-amber-400 dark:hover:border-amber-400 dark:focus:ring-amber-400">Kembali</a>
                <button type="submit" class="text-white bg-[#404A7F] hover:bg-[#374380] focus:ring-4 focus:outline-none focus:ring-[#374380] font-medium rounded-lg text-sm sm:w-auto px-5 py-2.5 text-center dark:bg-[#404A7F] dark:hover:bg-[#374380] dark:focus:ring-[#374380]">Update</button>
            </form>

        </div>
    </div>
</div>


@endsection