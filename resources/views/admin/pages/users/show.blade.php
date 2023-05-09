@extends('admin.layout.index')

@section('content')
<div class="px-4 pt-8 pb-3 sm:ml-64">
    <div class="mt-12 mr-3">
        <h2 class="text-2xl text-gray-800 dark:text-gray-100">Detail User</h2>


        <div class="w-full mt-4 px-6 py-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <h3 class="text-sm text-gray-600 dark:text-gray-200 mb-3">Data lengkap pengguna</h3>

            <div class="grid gap-6 mb-6 md:grid-cols-2">
                <div>
                    <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First name</label>
                    <h2 class="block mb-2 text-base text-gray-500 dark:text-white">First name</h2>
                </div>
                <div>
                    <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last name</label>
                    <h2 class="block mb-2 text-base text-gray-500 dark:text-white">First name</h2>
                </div>
                <div>
                    <label for="company" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Company</label>
                    <h2 class="block mb-2 text-base text-gray-500 dark:text-white">First name</h2>
                </div>
                <div>
                    <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone number</label>
                    <h2 class="block mb-2 text-base text-gray-500 dark:text-white">First name</h2>
                </div>
                <div>
                    <label for="website" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Website URL</label>
                    <h2 class="block mb-2 text-base text-gray-500 dark:text-white">First name</h2>
                </div>
                <div>
                    <label for="visitors" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Unique visitors (per month)</label>
                    <h2 class="block mb-2 text-base text-gray-500 dark:text-white">First name</h2>
                </div>
            </div>

            <a href="{{ url('/users') }}" class="text-gray-900 bg-amber-300 border border-gray-300 focus:outline-none hover:bg-amber-400 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-amber-300 dark:text-gray-800 dark:border-gray-600 dark:hover:bg-amber-400 dark:hover:border-gray-600 dark:focus:ring-gray-700">Kembali</a>

        </div>
    </div>
</div>


@endsection