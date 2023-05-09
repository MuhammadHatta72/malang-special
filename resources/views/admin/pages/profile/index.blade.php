@extends('admin.layout.index')

@section('content')
<div class="px-4 pt-8 pb-3 sm:ml-64">
    <div class="mt-12 mr-3">
        <h2 class="text-2xl text-gray-800 dark:text-gray-100">Profile User</h2>

        <div class="w-full mt-4">
            <div class="md:flex">
                <div class="md:w-2/3 px-6 pt-4 pb-8 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <h3 class="text-gray-600 dark:text-gray-200 mb-3">Profil pengguna dari aplikasi malang special</h3>
                    <div class="grid gap-6 mb-6 md:grid-cols-1">
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

                    <a href="{{ url('/profile/1/edit') }}" class="text-gray-100 bg-[#404A7F] border border-gray-300 focus:outline-none hover:bg-[#404A7F] focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-[#404A7F] dark:text-gray-100 dark:border-gray-600 dark:hover:bg-[#404A7F] dark:hover:border-gray-600 dark:focus:ring-gray-700">Edit Profile</a>
                </div>

                <div class="md:w-1/3 md:ml-3 mt-3 md:mt-0">
                    <div class="p-3 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <h3 class="text-gray-600 dark:text-gray-200 mb-3">Gambar Pengguna</h3>
                        <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-full h-full text-[#404A7F]">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection