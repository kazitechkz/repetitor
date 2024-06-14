<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Личный кабинет</title>
</head>
<body class="bg-gray-100">
<header>
    <nav>
        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
            <div class="relative flex h-16 items-center justify-between">
                <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                    <!-- Mobile menu button-->
                    <button type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                        <span class="absolute -inset-0.5"></span>
                        <span class="sr-only">Open main menu</span>
                        <!--
                          Icon when menu is closed.

                          Menu open: "hidden", Menu closed: "block"
                        -->
                        <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                        <!--
                          Icon when menu is open.

                          Menu open: "block", Menu closed: "hidden"
                        -->
                        <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                    <div class="flex flex-shrink-0 items-center">
                        <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
                    </div>
                </div>
                <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                    <button type="button" class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                        <span class="absolute -inset-1.5"></span>
                        <span class="sr-only">View notifications</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                        </svg>
                    </button>

                    <!-- Profile dropdown -->
                    <div class="relative ml-3">
                        <div>
                            <button type="button" class="relative flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                <span class="absolute -inset-1.5"></span>
                                <span class="sr-only">Open user menu</span>
                                <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
<nav class="bg-white shadow p-4 flex flex-col md:flex-row justify-center space-y-2 md:space-y-0 md:space-x-4">
    <button class="bg-green-100 text-green-700 px-4 py-2 rounded flex items-center space-x-2 w-full md:w-auto justify-center">
        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12H8m0 0H5m3 0l1 9m-1-9H7m2 0V9m1 3V9m0 0l2-6m2 6h1m0 0l-1 9m1-9h2.3M5 12h2.3M5 12l1-6m2 6v3.3m0-3.3v2.3m2-2.3v2.3m0-2.3v3.3M9 12h6m3 0h2.3M8 12h6m-6 0v3.3m0-3.3V9m-2 3v2.3m0-2.3v3.3m3-3v3.3m-3-3V9m0 0l-2 6m2-6h4m2 0h4"></path>
        </svg>
        <span>Запросы</span>
    </button>
    <button class="bg-green-100 text-green-700 px-4 py-2 rounded flex items-center space-x-2 w-full md:w-auto justify-center">
        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8V4m0 0v4m0 0l3 3m-3-3L9 7m7 13h5a2 2 0 002-2v-5a2 2 0 00-2-2h-5a2 2 0 00-2 2v5a2 2 0 002 2zM7 7H4a2 2 0 00-2 2v5a2 2 0 002 2h3a2 2 0 002-2V9a2 2 0 00-2-2zm0 10h5a2 2 0 002-2v-5a2 2 0 00-2-2H7a2 2 0 00-2 2v5a2 2 0 002 2z"></path>
        </svg>
        <span>Заказы</span>
    </button>
    <button class="bg-green-100 text-green-700 px-4 py-2 rounded flex items-center space-x-2 w-full md:w-auto justify-center">
        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 12l3-3m0 0l3 3m-3-3v12m4-8h2a2 2 0 012 2v8a2 2 0 01-2 2h-8a2 2 0 01-2-2v-8a2 2 0 012-2h2"></path>
        </svg>
        <span>Баланс</span>
    </button>
    <button class="bg-green-100 text-green-700 px-4 py-2 rounded flex items-center space-x-2 w-full md:w-auto justify-center">
        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8h.01M4 4h16a2 2 0 012 2v12a2 2 0 01-2 2H4a2 2 0 01-2-2V6a2 2 0 012-2z"></path>
        </svg>
        <span>Анкеты</span>
    </button>
    <button class="bg-green-100 text-green-700 px-4 py-2 rounded flex items-center space-x-2 w-full md:w-auto justify-center">
        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 11.707a2 2 0 010-2.828L12 2m0 0l6.879 6.879a2 2 0 010 2.828l-8.465 8.465a4.97 4.97 0 01-2.828 1.172H3v-3.586a4.97 4.97 0 011.172-2.828L12 2zM7.757 5.757L6.343 7.171m9.192-1.414L15.172 7.757m2.829 2.828l-1.414 1.414m-9.192 1.414L6.343 13.243m6.343 6.343H10.5a2.5 2.5 0 01-1.768-.732L7.1 16.5m7.8-7.8l2.828 2.829a2 2 0 010 2.828l-3.535 3.535m-3.536 3.536l-.732-1.768a2.5 2.5 0 01-.732-1.768V10.5m7.071-7.071l-.732-1.768a2.5 2.5 0 01-.732-1.768V10.5"></path>
        </svg>
        <span>Аккаунт</span>
    </button>
</nav>
</body>
</html>
