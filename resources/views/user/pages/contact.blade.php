<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="utf-8">
    <title>Malang Special ~ Oleh-oleh Khas Malang</title>
    <link href="{{ url('./images/logo.png') }}" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem('color-theme') === 'white' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
</head>
<body class="dark:bg-gray-900">
<nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="https://flowbite.com/" class="flex items-center">
        <img src="{{ url('./images/logo.png') }}" class="h-8 mr-3" alt="Flowbite Logo">
        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Malang~Special</span>
    </a>
    <div class="flex md:order-2">
        <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"> <a href="/login">Login</a></button>
        <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
        </button>
    </div>
    <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
      <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
        <li>
            <a href="/" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Home</a>
        </li>
        <li>
          <a href="/shop" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Shop</a>
        </li>
        <li>
          <a href="/checkout" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Cart</a>
        </li>
        <li>
          <a href="/contact" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
        </li>
      </ul>
    </div>
    </div>
</nav>
    <!-- Container for demo purpose -->
<div class="container my-24 px-6 mx-auto">

<!-- Section: Design Block -->
<section class="mb-32 text-gray-800">
  <div class="flex justify-center">
    <div class="text-center lg:max-w-3xl md:max-w-xl">
      <h2 class="text-3xl font-bold mb-12 px-6">Contact us</h2>
    </div>
  </div>

  <div class="flex flex-wrap">
    <div class="grow-0 shrink-0 basis-auto mb-12 lg:mb-0 w-full lg:w-5/12 px-3 lg:px-6">
      <form>
        <div class="form-group mb-6">
          <input type="text" class="form-control block
          w-full
          px-3
          py-1.5
          text-base
          font-normal
          text-gray-700
          bg-white bg-clip-padding
          border border-solid border-gray-300
          rounded
          transition
          ease-in-out
          m-0
          focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput7"
            placeholder="Name">
        </div>
        <div class="form-group mb-6">
          <input type="email" class="form-control block
          w-full
          px-3
          py-1.5
          text-base
          font-normal
          text-gray-700
          bg-white bg-clip-padding
          border border-solid border-gray-300
          rounded
          transition
          ease-in-out
          m-0
          focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput8"
            placeholder="Email address">
        </div>
        <div class="form-group mb-6">
          <textarea class="
          form-control
          block
          w-full
          px-3
          py-1.5
          text-base
          font-normal
          text-gray-700
          bg-white bg-clip-padding
          border border-solid border-gray-300
          rounded
          transition
          ease-in-out
          m-0
          focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
        " id="exampleFormControlTextarea13" rows="3" placeholder="Message"></textarea>
        </div>
        <div class="form-group form-check text-center mb-6">
          <input type="checkbox"
            class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain mr-2 cursor-pointer"
            id="exampleCheck87" checked>
          <label class="form-check-label inline-block text-gray-800" for="exampleCheck87">Send me a copy of this
            message</label>
        </div>
        <button type="submit" class="
        w-full
        px-6
        py-2.5
        bg-blue-600
        text-white
        font-medium
        text-xs
        leading-tight
        uppercase
        rounded
        shadow-md
        hover:bg-blue-700 hover:shadow-lg
        focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
        active:bg-blue-800 active:shadow-lg
        transition
        duration-150
        ease-in-out">Send</button>
      </form>
    </div>
    <div class="grow-0 shrink-0 basis-auto w-full lg:w-7/12">
      <div class="flex flex-wrap">
        <div class="mb-12 grow-0 shrink-0 basis-auto w-full lg:w-6/12 px-3 lg:px-6">
          <div class="flex items-start">
            <div class="shrink-0">
              <div class="p-4 bg-blue-600 rounded-md shadow-md w-14 h-14 flex items-center justify-center">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="headset" class="w-5 text-white"
                  role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                  <path fill="currentColor"
                    d="M192 208c0-17.67-14.33-32-32-32h-16c-35.35 0-64 28.65-64 64v48c0 35.35 28.65 64 64 64h16c17.67 0 32-14.33 32-32V208zm176 144c35.35 0 64-28.65 64-64v-48c0-35.35-28.65-64-64-64h-16c-17.67 0-32 14.33-32 32v112c0 17.67 14.33 32 32 32h16zM256 0C113.18 0 4.58 118.83 0 256v16c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16v-16c0-114.69 93.31-208 208-208s208 93.31 208 208h-.12c.08 2.43.12 165.72.12 165.72 0 23.35-18.93 42.28-42.28 42.28H320c0-26.51-21.49-48-48-48h-32c-26.51 0-48 21.49-48 48s21.49 48 48 48h181.72c49.86 0 90.28-40.42 90.28-90.28V256C507.42 118.83 398.82 0 256 0z">
                  </path>
                </svg>
              </div>
            </div>
            <div class="grow ml-6">
              <p class="font-bold mb-1">Technical support</p>
              <p class="text-gray-500">support@example.com</p>
              <p class="text-gray-500">+1 234-567-89</p>
            </div>
          </div>
        </div>
        <div class="mb-12 grow-0 shrink-0 basis-auto w-full lg:w-6/12 px-3 lg:px-6">
          <div class="flex items-start">
            <div class="shrink-0">
              <div class="p-4 bg-blue-600 rounded-md shadow-md w-14 h-14 flex items-center justify-center">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="dollar-sign"
                  class="w-3 text-white" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 288 512">
                  <path fill="currentColor"
                    d="M209.2 233.4l-108-31.6C88.7 198.2 80 186.5 80 173.5c0-16.3 13.2-29.5 29.5-29.5h66.3c12.2 0 24.2 3.7 34.2 10.5 6.1 4.1 14.3 3.1 19.5-2l34.8-34c7.1-6.9 6.1-18.4-1.8-24.5C238 74.8 207.4 64.1 176 64V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48h-2.5C45.8 64-5.4 118.7.5 183.6c4.2 46.1 39.4 83.6 83.8 96.6l102.5 30c12.5 3.7 21.2 15.3 21.2 28.3 0 16.3-13.2 29.5-29.5 29.5h-66.3C100 368 88 364.3 78 357.5c-6.1-4.1-14.3-3.1-19.5 2l-34.8 34c-7.1 6.9-6.1 18.4 1.8 24.5 24.5 19.2 55.1 29.9 86.5 30v48c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16v-48.2c46.6-.9 90.3-28.6 105.7-72.7 21.5-61.6-14.6-124.8-72.5-141.7z">
                  </path>
                </svg>
              </div>
            </div>
            <div class="grow ml-6">
              <p class="font-bold mb-1">Sales questions</p>
              <p class="text-gray-500">sales@example.com</p>
              <p class="text-gray-500">+1 234-567-89</p>
            </div>
          </div>
        </div>
        <div class="mb-12 grow-0 shrink-0 basis-auto w-full lg:w-6/12 px-3 lg:px-6">
          <div class="flex align-start">
            <div class="shrink-0">
              <div class="p-4 bg-blue-600 rounded-md shadow-md w-14 h-14 flex items-center justify-center">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="newspaper"
                  class="w-5 text-white" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                  <path fill="currentColor"
                    d="M552 64H88c-13.255 0-24 10.745-24 24v8H24c-13.255 0-24 10.745-24 24v272c0 30.928 25.072 56 56 56h472c26.51 0 48-21.49 48-48V88c0-13.255-10.745-24-24-24zM56 400a8 8 0 0 1-8-8V144h16v248a8 8 0 0 1-8 8zm236-16H140c-6.627 0-12-5.373-12-12v-8c0-6.627 5.373-12 12-12h152c6.627 0 12 5.373 12 12v8c0 6.627-5.373 12-12 12zm208 0H348c-6.627 0-12-5.373-12-12v-8c0-6.627 5.373-12 12-12h152c6.627 0 12 5.373 12 12v8c0 6.627-5.373 12-12 12zm-208-96H140c-6.627 0-12-5.373-12-12v-8c0-6.627 5.373-12 12-12h152c6.627 0 12 5.373 12 12v8c0 6.627-5.373 12-12 12zm208 0H348c-6.627 0-12-5.373-12-12v-8c0-6.627 5.373-12 12-12h152c6.627 0 12 5.373 12 12v8c0 6.627-5.373 12-12 12zm0-96H140c-6.627 0-12-5.373-12-12v-40c0-6.627 5.373-12 12-12h360c6.627 0 12 5.373 12 12v40c0 6.627-5.373 12-12 12z">
                  </path>
                </svg>
              </div>
            </div>
            <div class="grow ml-6">
              <p class="font-bold mb-1">Press</p>
              <p class="text-gray-500">press@example.com</p>
              <p class="text-gray-500">+1 234-567-89</p>
            </div>
          </div>
        </div>
        <div class="mb-12 grow-0 shrink-0 basis-auto w-full lg:w-6/12 px-3 lg:px-6">
          <div class="flex align-start">
            <div class="shrink-0">
              <div class="p-4 bg-blue-600 rounded-md shadow-md w-14 h-14 flex items-center justify-center">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bug" class="w-5 text-white"
                  role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                  <path fill="currentColor"
                    d="M511.988 288.9c-.478 17.43-15.217 31.1-32.653 31.1H424v16c0 21.864-4.882 42.584-13.6 61.145l60.228 60.228c12.496 12.497 12.496 32.758 0 45.255-12.498 12.497-32.759 12.496-45.256 0l-54.736-54.736C345.886 467.965 314.351 480 280 480V236c0-6.627-5.373-12-12-12h-24c-6.627 0-12 5.373-12 12v244c-34.351 0-65.886-12.035-90.636-32.108l-54.736 54.736c-12.498 12.497-32.759 12.496-45.256 0-12.496-12.497-12.496-32.758 0-45.255l60.228-60.228C92.882 378.584 88 357.864 88 336v-16H32.666C15.23 320 .491 306.33.013 288.9-.484 270.816 14.028 256 32 256h56v-58.745l-46.628-46.628c-12.496-12.497-12.496-32.758 0-45.255 12.498-12.497 32.758-12.497 45.256 0L141.255 160h229.489l54.627-54.627c12.498-12.497 32.758-12.497 45.256 0 12.496 12.497 12.496 32.758 0 45.255L424 197.255V256h56c17.972 0 32.484 14.816 31.988 32.9zM257 0c-61.856 0-112 50.144-112 112h224C369 50.144 318.856 0 257 0z">
                  </path>
                </svg>
              </div>
            </div>
            <div class="grow ml-6">
              <p class="font-bold mb-1">Bug report</p>
              <p class="text-gray-500">bugs@example.com</p>
              <p class="text-gray-500">+1 234-567-89</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->

</div>
<!-- Container for demo purpose -->
<footer
  class="bg-neutral-100 text-center text-neutral-600 dark:bg-neutral-600 dark:text-neutral-200 lg:text-left">
  <div
    class="flex items-center justify-center border-b-2 border-neutral-200 p-6 dark:border-neutral-500 lg:justify-between">
    <div class="mr-12 hidden lg:block">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Social network icons container -->
    <div class="flex justify-center">
      <a href="#!" class="mr-6 text-neutral-600 dark:text-neutral-200">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="h-4 w-4"
          fill="currentColor"
          viewBox="0 0 24 24">
          <path
            d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
        </svg>
      </a>
      <a href="#!" class="mr-6 text-neutral-600 dark:text-neutral-200">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="h-4 w-4"
          fill="currentColor"
          viewBox="0 0 24 24">
          <path
            d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
        </svg>
      </a>
      <a href="#!" class="mr-6 text-neutral-600 dark:text-neutral-200">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="h-5 w-5"
          fill="currentColor"
          viewBox="0 0 24 24">
          <path
            d="M7 11v2.4h3.97c-.16 1.029-1.2 3.02-3.97 3.02-2.39 0-4.34-1.979-4.34-4.42 0-2.44 1.95-4.42 4.34-4.42 1.36 0 2.27.58 2.79 1.08l1.9-1.83c-1.22-1.14-2.8-1.83-4.69-1.83-3.87 0-7 3.13-7 7s3.13 7 7 7c4.04 0 6.721-2.84 6.721-6.84 0-.46-.051-.81-.111-1.16h-6.61zm0 0 17 2h-3v3h-2v-3h-3v-2h3v-3h2v3h3v2z"
            fill-rule="evenodd"
            clip-rule="evenodd" />
        </svg>
      </a>
      <a href="#!" class="mr-6 text-neutral-600 dark:text-neutral-200">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="h-4 w-4"
          fill="currentColor"
          viewBox="0 0 24 24">
          <path
            d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
        </svg>
      </a>
      <a href="#!" class="mr-6 text-neutral-600 dark:text-neutral-200">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="h-4 w-4"
          fill="currentColor"
          viewBox="0 0 24 24">
          <path
            d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z" />
        </svg>
      </a>
      <a href="#!" class="text-neutral-600 dark:text-neutral-200">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="h-4 w-4"
          fill="currentColor"
          viewBox="0 0 24 24">
          <path
            d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
        </svg>
      </a>
    </div>
  </div>

  <!-- Main container div: holds the entire content of the footer, including four sections (Tailwind Elements, Products, Useful links, and Contact), with responsive styling and appropriate padding/margins. -->
  <div class="mx-6 py-10 text-center md:text-left">
    <div class="grid-1 grid gap-8 md:grid-cols-2 lg:grid-cols-4">
      <!-- Tailwind Elements section -->
      <div class="">
        <h6
          class="mb-4 flex items-center justify-center font-semibold uppercase md:justify-start">
          <img src="http://127.0.0.1:8000/./images/logo.png" class="h-8 mr-3" alt="Flowbite Logo">
          Malang Special
        </h6>
        <p>
          Here you can use rows and columns to organize your footer
          content. Lorem ipsum dolor sit amet, consectetur adipisicing
          elit.
        </p>
      </div>
      <!-- Products section -->
      <div class="">
        <h6
          class="mb-4 flex justify-center font-semibold uppercase md:justify-start">
          Produk
        </h6>
        <p class="mb-4">
          <a href="#!" class="text-neutral-600 dark:text-neutral-200"
            >Pakaian</a
          >
        </p>
        <p class="mb-4">
          <a href="#!" class="text-neutral-600 dark:text-neutral-200"
            >Makanan</a
          >
        </p>
        <p class="mb-4">
          <a href="#!" class="text-neutral-600 dark:text-neutral-200"
            >Minuman</a
          >
        </p>
        <p>
          <a href="#!" class="text-neutral-600 dark:text-neutral-200"
            >Souvenir</a
          >
        </p>
      </div>
      <!-- Useful links section -->
      <div class="">
        <h6
          class="mb-4 flex justify-center font-semibold uppercase md:justify-start">
          Useful links
        </h6>
        <p class="mb-4">
          <a href="#!" class="text-neutral-600 dark:text-neutral-200"
            >Home</a
          >
        </p>
        <p class="mb-4">
          <a href="#!" class="text-neutral-600 dark:text-neutral-200"
            >About</a
          >
        </p>
        <p class="mb-4">
          <a href="#!" class="text-neutral-600 dark:text-neutral-200"
            >Produk Terlaris</a
          >
        </p>
        <p>
          <a href="#!" class="text-neutral-600 dark:text-neutral-200"
            >Help</a
          >
        </p>
      </div>
      <!-- Contact section -->
      <div>
        <h6
          class="mb-4 flex justify-center font-semibold uppercase md:justify-start">
          Contact
        </h6>
        <p class="mb-4 flex items-center justify-center md:justify-start">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            fill="currentColor"
            class="mr-3 h-5 w-5">
            <path
              d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z" />
            <path
              d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z" />
          </svg>
          New York, NY 10012, US
        </p>
        <p class="mb-4 flex items-center justify-center md:justify-start">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            fill="currentColor"
            class="mr-3 h-5 w-5">
            <path
              d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z" />
            <path
              d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z" />
          </svg>
          info@example.com
        </p>
        <p class="mb-4 flex items-center justify-center md:justify-start">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            fill="currentColor"
            class="mr-3 h-5 w-5">
            <path
              fill-rule="evenodd"
              d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z"
              clip-rule="evenodd" />
          </svg>
          + 01 234 567 88
        </p>
        <p class="flex items-center justify-center md:justify-start">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            fill="currentColor"
            class="mr-3 h-5 w-5">
            <path
              fill-rule="evenodd"
              d="M7.875 1.5C6.839 1.5 6 2.34 6 3.375v2.99c-.426.053-.851.11-1.274.174-1.454.218-2.476 1.483-2.476 2.917v6.294a3 3 0 003 3h.27l-.155 1.705A1.875 1.875 0 007.232 22.5h9.536a1.875 1.875 0 001.867-2.045l-.155-1.705h.27a3 3 0 003-3V9.456c0-1.434-1.022-2.7-2.476-2.917A48.716 48.716 0 0018 6.366V3.375c0-1.036-.84-1.875-1.875-1.875h-8.25zM16.5 6.205v-2.83A.375.375 0 0016.125 3h-8.25a.375.375 0 00-.375.375v2.83a49.353 49.353 0 019 0zm-.217 8.265c.178.018.317.16.333.337l.526 5.784a.375.375 0 01-.374.409H7.232a.375.375 0 01-.374-.409l.526-5.784a.373.373 0 01.333-.337 41.741 41.741 0 018.566 0zm.967-3.97a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H18a.75.75 0 01-.75-.75V10.5zM15 9.75a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75V10.5a.75.75 0 00-.75-.75H15z"
              clip-rule="evenodd" />
          </svg>
          + 01 234 567 89
        </p>
      </div>
    </div>
  </div>

  <!--Copyright section-->
  <div class="bg-neutral-200 p-6 text-center dark:bg-neutral-700">
    <span>© 2023 Copyright:</span>
    <a
      class="font-semibold text-neutral-600 dark:text-neutral-400"
      href="https://tailwind-elements.com/"
      >Tailwind Elements</a
    >
  </div>
</footer>