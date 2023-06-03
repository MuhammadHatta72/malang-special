<nav class="bg-transparent fixed top-0 left-0 right-0 border-b border-white">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="/" class="flex items-center">
            <img src="{{ url('./assets/images-admin/logo.png') }}" class="h-8 mr-3" alt=" Logo" />
            <span class="self-center text-2xl bg-gradient-to-r from-[#404A7F] to-[#262A56] hover:from-[#F7C04B] hover:to-[#FFD95A] text-transparent bg-clip-text font-semibold whitespace-nowrap dark:text-cyan-900 dark:hover:text-blue-500">Malang Special</span>
        </a>
        <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul class="font-medium flex flex-col items-center p-4 md:p-0 mt- rounded-lg md:flex-row md:space-x-8 md:mt-0">
                <li>
                    <a href="/" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#F7C04B] md:p-0 dark:text-cyan-900 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Home</a>
                </li>
                @if($title_page == 'home')
                <li>
                    <a href="#about" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#F7C04B] md:p-0 dark:text-cyan-900 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">About</a>
                </li>
                <li>
                    <a href="#service" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#F7C04B] md:p-0 dark:text-cyan-900 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Service</a>
                </li>
                <li>
                    <a href="#product" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#F7C04B] md:p-0 dark:text-cyan-900 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Product</a>
                </li>
                <li>
                    <a href="#ulasan" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#F7C04B] md:p-0 dark:text-cyan-900 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Testimonial</a>
                </li>
                @endif
                @if($title_page !== 'home')
                <li>
                    <a href="/shop" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#F7C04B] md:p-0 dark:text-cyan-900 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Shop</a>
                </li>
                @endif
                <li>
                    <a href="/carts" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#F7C04B] md:p-0 dark:text-cyan-900 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Cart</a>
                </li>
                @if($title_page === 'home')
                <li>
                    <a href="#contact" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#F7C04B] md:p-0 dark:text-cyan-900 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact</a>
                </li>
                @endif
                <li>
                    <button id="theme-toggle" type="button" class="hover:bg-gray-600 dark:hover:bg-white focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-full text-sm p-2 group">
                        <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5 text-gray-700 group-hover:text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                        </svg>
                        <svg id="theme-toggle-light-icon" class=" hidden w-5 h-5 text-cyan-700 group-hover:text-blue-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </li>
                @if(!auth()->user())
                <li>
                    <a href="/login" class="text-white bg-[#549166] hover:bg-[#F7C04B] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-3 text-center dark:bg-[#549166] dark:hover:bg-[#F7C04B] dark:focus:ring-[#549166]">Login</a>
                </li>
                @else
                <div class="flex items-center ml-3">
                    <div>
                        <button type="button" class="flex text-sm rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                            <span class="sr-only">Open user menu</span>
                            @if (auth()->user()->image !== 'not_found')
                            <img class="w-8 h-8 rounded-full" src="{{ url('./image_users/'.auth()->user()->image) }}" alt="user photo">
                            @else
                            <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-8 h-8 text-gray-500 dark:text-cyan-900">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            @endif
                        </button>
                    </div>
                    <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600" id="dropdown-user">
                        <div class="px-4 py-3" role="none">
                            <p class="text-sm text-gray-900 dark:text-white" role="none">
                                {{ auth()->user()->username}}
                            </p>
                            <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                                {{ auth()->user()->email}}
                            </p>
                        </div>
                        <ul class="py-1" role="none">
                            <li>
                                <a href="{{ url('/dashboard') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Dashboard</a>
                            </li>
                            <li>
                                <a href="{{ url('/profile') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Profile</a>
                            </li>
                            <li>
                                <a href="{{url('/logout')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Sign out</a>
                            </li>
                        </ul>
                    </div>
                </div>
                @endif
            </ul>
        </div>
    </div>
</nav>