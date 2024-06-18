<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Repetitor.kz</title>
</head>
<body class="bg-gradient-to-l from-indigo-300">
    <header>
        <nav>
        <div class="mx-auto max-w-6xl px-2 sm:px-6 lg:px-8">
            <div class="relative flex h-16 items-center justify-between">
                <div class="flex flex-1 items-center md:justify-center xl:justify-start sm:items-stretch sm:justify-between">
                    <div class="flex flex-shrink-0 items-center">
                        <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
                    </div>
                    <h1 class="text-indigo-500 text-2xl ml-3">REPETITOR.KZ</h1>
                </div>
                <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">

                    <div class="relative ml-3">
                        <a href="{{route('auth.login')}}">
                            <button class="border-white border text-white px-4 py-2 rounded flex items-center space-x-2 w-full md:w-auto justify-center">
                                <span class="text-2xl">Войти</span>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    </header>

    <div class="my-10">
        <div class="p-10 rounded-lg text-center">
            <h1 class="text-5xl font-bold">Зарабатывайте с нами — в среднем 5000 тг/час за занятие</h1>
            <div class="grid grid-cols-1 md:grid-cols-5 gap-5 mt-10">
                <div class="w-full bg-center bg-no-repeat bg-cover rounded-xl" style="background-image: url('https://repetitor.ru/v2023/img/slide-1.jpg'); height: 300px"></div>
                <div class="w-full p-5 bg-white bg-center bg-no-repeat bg-contain flex items-center rounded-xl" style="height: 300px">
                    <div class="mx-auto">
                        <h2 class="text-xl font-semibold">Стать репетитором в Астане</h2>
                        <a href="{{route('auth.login')}}" class="mt-2 inline-block bg-green-500 text-white px-4 py-2 rounded-lg">ЗАРЕГИСТРИРОВАТЬСЯ</a>
                        <p class="mt-2"><a href="javascript:void (0)" class="text-green-500">ПРАВИЛА СОТРУДНИЧЕСТВА</a></p>
                    </div>
                </div>
                <div class="w-full bg-center bg-no-repeat bg-cover rounded-xl" style="background-image: url('https://repetitor.ru/v2023/img/slide-2.jpg'); height: 300px"></div>
                <div class="w-full bg-center bg-no-repeat bg-cover rounded-xl" style="background-image: url('https://repetitor.ru/v2023/img/slide-3.jpg'); height: 300px"></div>
                <div class="w-full bg-center bg-no-repeat bg-cover rounded-xl" style="background-image: url('https://repetitor.ru/v2023/img/slide-4.jpg'); height: 300px"></div>
            </div>

        </div>
    </div>

    <div class="container mx-auto">
        <div class="p-10 rounded-lg text-center">
            <h2 class="text-5xl font-semibold">Преимущества стать репетитором в Астане на Repetitor.kz</h2>
        </div>
        <div class="container mx-auto mt-10">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-white p-6 rounded-lg shadow-md flex items-start">
                    <img src="https://repetitor.ru/v2023/img/ac-icon-1.svg" alt="Icon 1" class="w-12 h-12 mr-4">
                    <div>
                        <h3 class="text-2xl font-semibold">Комиссия ниже, чем у конкурентов</h3>
                        <p class="text-gray-600 text-lg">Ученики обходятся в среднем на 50% дешевле, чем на похожих сайтах</p>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md flex items-start">
                    <img src="https://repetitor.ru/v2023/img/ac-icon-2.svg" alt="Icon 2" class="w-12 h-12 mr-4">
                    <div>
                        <h3 class="text-2xl font-semibold">Заказы от клиентов</h3>
                        <p class="text-gray-600 text-lg">К вам приходят заказы, которые соответствуют вашей анкете</p>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md flex items-start">
                    <img src="https://repetitor.ru/v2023/img/ac-icon-3.svg" alt="Icon 3" class="w-12 h-12 mr-4">
                    <div>
                        <h3 class="text-2xl font-semibold">Удобно</h3>
                        <p class="text-gray-600 text-lg">Вы сами составляете расписание, определяете стоимость ваших занятий</p>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md flex items-start">
                    <img src="https://repetitor.ru/v2023/img/ac-icon-4.svg" alt="Icon 4" class="w-12 h-12 mr-4">
                    <div>
                        <h3 class="text-2xl font-semibold">Работа online</h3>
                        <p class="text-gray-600 text-lg">Вы можете найти учеников для занятий online и проводить занятия из дома</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="my-10 text-center">
        <a href="{{route('auth.login')}}" class="mt-2 inline-block bg-green-500 text-white px-4 py-2 rounded-lg">ЗАРЕГИСТРИРОВАТЬСЯ</a>
    </div>

</body>
</html>
