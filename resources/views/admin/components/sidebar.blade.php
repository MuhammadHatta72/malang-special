<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
        <ul class="space-y-2 font-medium">
            <li>
                <a href="{{url('/dashboard')}}" class="flex items-center p-2 text-gray-600 rounded-lg dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700 {{ request()->is('dashboard') ? 'text-gray-900 bg-gray-100 dark:bg-gray-700': '' }}">
                    <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-6 h-6 transition duration-75 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z"></path>
                    </svg>
                    <span class="ml-3">Dashboard</span>
                </a>
            </li>
            @can('superadmin')
            <li>
                <a href="{{url('/users')}}" class="flex items-center p-2 text-gray-600 rounded-lg dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700 {{ request()->is('users') ? 'text-gray-900 bg-gray-100 dark:bg-gray-700': '' }}">
                    <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-6 h-6 transition duration-75 group-hover:text-gray-900 dark:group-hover:text-white">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z"></path>
                    </svg>
                    <span class="ml-3">Users</span>
                </a>
            </li>
            @endcan
            @can('superadmin')
            <li>
                <a href="{{url('/markets')}}" class="flex items-center p-2 text-gray-600 rounded-lg dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700 {{ request()->is('markets') ? 'text-gray-900 bg-gray-100 dark:bg-gray-700': '' }}">
                    <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-6 h-6 transition duration-75 group-hover:text-gray-900 dark:group-hover:text-white">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 21v-7.5a.75.75 0 01.75-.75h3a.75.75 0 01.75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349m-16.5 11.65V9.35m0 0a3.001 3.001 0 003.75-.615A2.993 2.993 0 009.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 002.25 1.016c.896 0 1.7-.393 2.25-1.016a3.001 3.001 0 003.75.614m-16.5 0a3.004 3.004 0 01-.621-4.72L4.318 3.44A1.5 1.5 0 015.378 3h13.243a1.5 1.5 0 011.06.44l1.19 1.189a3 3 0 01-.621 4.72m-13.5 8.65h3.75a.75.75 0 00.75-.75V13.5a.75.75 0 00-.75-.75H6.75a.75.75 0 00-.75.75v3.75c0 .415.336.75.75.75z"></path>
                    </svg>
                    <span class="ml-3">Markets</span>
                </a>
            </li>
            @endcan
            @can('admin_has_market')
            <li>
                <a href="{{url('/market-admin')}}" class="flex items-center p-2 text-gray-600 rounded-lg dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700 {{ request()->is('markets') ? 'text-gray-900 bg-gray-100 dark:bg-gray-700': '' }}">
                    <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-6 h-6 transition duration-75 group-hover:text-gray-900 dark:group-hover:text-white">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 21v-7.5a.75.75 0 01.75-.75h3a.75.75 0 01.75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349m-16.5 11.65V9.35m0 0a3.001 3.001 0 003.75-.615A2.993 2.993 0 009.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 002.25 1.016c.896 0 1.7-.393 2.25-1.016a3.001 3.001 0 003.75.614m-16.5 0a3.004 3.004 0 01-.621-4.72L4.318 3.44A1.5 1.5 0 015.378 3h13.243a1.5 1.5 0 011.06.44l1.19 1.189a3 3 0 01-.621 4.72m-13.5 8.65h3.75a.75.75 0 00.75-.75V13.5a.75.75 0 00-.75-.75H6.75a.75.75 0 00-.75.75v3.75c0 .415.336.75.75.75z"></path>
                    </svg>
                    <span class="ml-3">Market</span>
                </a>
            </li>
            <li>
                <a href="{{url('/products')}}" class="flex items-center p-2 text-gray-600 rounded-lg dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700 {{ request()->is('products') ? 'text-gray-900 bg-gray-100 dark:bg-gray-700': '' }}">
                    <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-6 h-6 transition duration-75 group-hover:text-gray-900 dark:group-hover:text-white">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"></path>
                    </svg>
                    <span class="ml-3">Products</span>
                </a>
            </li>
            <li>
                <a href="{{url('/transactions')}}" class="flex items-center p-2 text-gray-600 rounded-lg dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700 {{ request()->is('products') ? 'text-gray-900 bg-gray-100 dark:bg-gray-700': '' }}">
                    <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-6 h-6 transition duration-75 group-hover:text-gray-900 dark:group-hover:text-white">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5m.75-9l3-3 2.148 2.148A12.061 12.061 0 0116.5 7.605"></path>
                    </svg>
                    <span class="ml-3">Transaction</span>
                </a>
            </li>
            @endcan
            @can('user')
            <li>
                <a href="{{url('/carts')}}" class="flex items-center p-2 text-gray-600 rounded-lg dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700 {{ request()->is('carts') ? 'text-gray-900 bg-gray-100 dark:bg-gray-700': '' }}">
                    <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-6 h-6 transition duration-75 group-hover:text-gray-900 dark:group-hover:text-white">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z"></path>
                    </svg>
                    <span class="ml-3">Carts</span>
                </a>
            </li>
            @endcan
            @can('admin_has_market')
            <li>
                <a href="{{url('/payments')}}" class="flex items-center p-2 text-gray-600 rounded-lg dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700 {{ request()->is('payments') ? 'text-gray-900 bg-gray-100 dark:bg-gray-700': '' }}">
                    <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-6 h-6 transition duration-75 group-hover:text-gray-900 dark:group-hover:text-white">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a2.25 2.25 0 00-2.25-2.25H15a3 3 0 11-6 0H5.25A2.25 2.25 0 003 12m18 0v6a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 18v-6m18 0V9M3 12V9m18 0a2.25 2.25 0 00-2.25-2.25H5.25A2.25 2.25 0 003 9m18 0V6a2.25 2.25 0 00-2.25-2.25H5.25A2.25 2.25 0 003 6v3"></path>
                    </svg>
                    <span class="ml-3">Payment</span>
                </a>
            </li>
            @endcan
            @can('superadmin')
            <li>
                <button type="button" class="flex items-center w-full p-2 text-gray-600 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                    <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="flex-shrink-0 w-6 h-6 transition duration-75">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z"></path>
                    </svg>
                    <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Report</span>
                    <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
                <ul id="dropdown-example" class="hidden space-y-0.5">
                    <li>
                        <a href="{{ url('/report-users') }}" class="flex items-center w-full p-2 text-gray-600 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Pengguna</a>
                    </li>
                    <li>
                        <a href="{{ url('/report-markets') }}" class="flex items-center w-full p-2 text-gray-600 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Toko</a>
                    </li>
                </ul>
            </li>
            @endcan
            @can('admin_has_market')
            <li>
                <button type="button" class="flex items-center w-full p-2 text-gray-600 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                    <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="flex-shrink-0 w-6 h-6 transition duration-75">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z"></path>
                    </svg>
                    <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Report</span>
                    <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
                <ul id="dropdown-example" class="hidden space-y-0.5">

                    <li>
                        <a href="{{ url('/report-products') }}" class="flex items-center w-full p-2 text-gray-600 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Produk</a>
                    </li>
                    <li>
                        <a href="{{ url('/report-transactions') }}" class="flex items-center w-full p-2 text-gray-600 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Transaksi</a>
                    </li>
                </ul>
            </li>
            @endcan
        </ul>
    </div>
</aside>