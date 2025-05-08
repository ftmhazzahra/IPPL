<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>@yield('title', 'Scholarship Landing Page')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet"/>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-white">

    <!-- Header (Navbar) -->
    <header class="w-full border-b border-gray-200">
        <nav class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 flex items-center justify-between h-16">
            <div class="flex items-center space-x-2">
                <img src="https://storage.googleapis.com/a1aa/image/b3383030-50f4-4d99-6d70-d14da44efcd6.jpg" alt="Logo" class="w-8 h-8" />
                <span class="text-sm font-handwriting text-gray-900" style="font-family: 'Dancing Script', cursive, 'Inter', sans-serif;">
                    Explore Scholar
                </span>
            </div>
                        <ul class="hidden md:flex space-x-10 text-xs font-normal text-gray-600">
                <li>
                    <a href="{{ url('/') }}"
                    class="@yield('nav_home', 'hover:text-gray-900 transition')">
                        HOME
                    </a>
                </li>
                <li>
                    <a href="{{ url('/about') }}"
                    class="@yield('nav_about', 'hover:text-gray-900 transition')">
                        ABOUT
                    </a>
                </li>
                <li>
                    <a href="{{ url('/scholarship') }}"
                    class="@yield('nav_scholarship', 'hover:text-gray-900 transition')">
                        SCHOLARSHIP
                    </a>
                </li>
                <li>
                    <a href="{{ url('/discussion') }}"
                    class="@yield('nav_discussion', 'hover:text-gray-900 transition')">
                        DISCUSSION
                    </a>
                </li>
            </ul>

        </nav>
    </header>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 mt-20">
        @yield('content')
    </main>

</body>
</html>
