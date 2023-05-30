<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="utf-8">
    <title>Malang Special ~ Oleh-oleh Khas Malang</title>
    <link href="{{ url('./assets/images-admin/logo.png') }}" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <style>
        html {
            scroll-behavior: smooth;
            width: 100%;
        }

        nav {
            z-index: 999;
        }

        nav.bg-scroll {
            background-color: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(15px);
        }

        /* add style bounce */
        @keyframes bounce {

            0%,
            20%,
            50%,
            80%,
            100% {
                transform: translateY(0);
            }

            20% {
                transform: translateY(-10px) 2.0s;

            }

            60% {
                transform: translateY(-14px);
            }
        }
    </style>
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

    @yield('master.content')

    @vite('resources/js/app.js')
    <script>
        // Navbar Scroll
        const navbar = document.querySelector('nav');
        let lastScrollTop = 0;

        window.addEventListener('scroll', function() {
            const currentScrollTop = document.documentElement.scrollTop;
            if (currentScrollTop > 0) {
                navbar.classList.add('bg-scroll');
            } else {
                navbar.classList.remove('bg-scroll');
            }
            // lastScrollTop = currentScrollTop;
        });
        var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
        var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

        // Change the icons inside the button based on previous settings
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            themeToggleLightIcon.classList.remove('hidden');
        } else {
            themeToggleDarkIcon.classList.remove('hidden');
        }

        var themeToggleBtn = document.getElementById('theme-toggle');

        themeToggleBtn.addEventListener('click', function() {

            // toggle icons inside button
            themeToggleDarkIcon.classList.toggle('hidden');
            themeToggleLightIcon.classList.toggle('hidden');

            // if set via local storage previously
            if (localStorage.getItem('color-theme')) {
                if (localStorage.getItem('color-theme') === 'light') {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                } else {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                }

                // if NOT set via local storage previously
            } else {
                if (document.documentElement.classList.contains('dark')) {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                } else {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                }
            }

        });
    </script>

</body>

</html>