<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>ADMIN DASHBOARD</title>
</head>
<body class="bg-gray-600">
    <div class="container mx-auto">
        <div class="flex justify-between">
            <h1 class="text-3xl text-white">Статистика</h1>
            <a class="text-3xl text-white" href="{{route('auth.logout')}}">Выход</a>
        </div>

        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                        <table
                            class="min-w-full text-left text-sm font-light text-surface dark:text-white">
                            <thead
                                class="border-b border-neutral-200 font-medium dark:border-white/10">
                            <tr>
                                <th scope="col" class="px-6 py-4">#</th>
                                <th scope="col" class="px-6 py-4">Номер телефона</th>
                                <th scope="col" class="px-6 py-4">Отклики</th>
                                <th scope="col" class="px-6 py-4">Баланс</th>
                                <th scope="col" class="px-6 py-4">Рейтинг</th>
                                <th scope="col" class="px-6 py-4">Аккаунт</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($stats as $stat)
                                    <tr class="border-b border-neutral-200 dark:border-white/10">
                                        <td class="whitespace-nowrap px-6 py-4 font-medium">{{$loop->iteration}}</td>
                                        <td class="whitespace-nowrap px-6 py-4">{{$stat->user->phone}}</td>
                                        <td class="whitespace-nowrap px-6 py-4">{{$stat->query}}</td>
                                        <td class="whitespace-nowrap px-6 py-4">{{$stat->balance}}</td>
                                        <td class="whitespace-nowrap px-6 py-4">{{$stat->rating}}</td>
                                        <td class="whitespace-nowrap px-6 py-4">{{$stat->account}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="my-3">
                            {!! $stats->links() !!}
                        </div>
                        <div
                            class="block rounded-lg bg-gray-600 p-6 text-surface shadow-secondary-1 dark:bg-surface-dark dark:text-white">
                            <h5 class="mb-2 text-xl font-medium leading-tight">Итого:</h5>
                            <p class="mb-4 text-base">Отлики: <b>{{$totalQuery}}</b></p>
                            <p class="mb-4 text-base">Баланс: <b>{{$totalBalance}}</b></p>
                            <p class="mb-4 text-base">Рейтинг: <b>{{$totalRating}}</b></p>
                            <p class="mb-4 text-base">Аккаунт: <b>{{$totalAccount}}</b></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
