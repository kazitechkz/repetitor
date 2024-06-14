<div>
    <nav class="bg-white shadow p-4 flex flex-col md:flex-row justify-center space-y-2 md:space-y-0 md:space-x-4">
        <button wire:click="utm('query')" class="border-indigo-400 border text-black px-4 py-2 rounded flex items-center space-x-2 w-full md:w-auto justify-center">
            <svg class="h-5 w-28 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12H8m0 0H5m3 0l1 9m-1-9H7m2 0V9m1 3V9m0 0l2-6m2 6h1m0 0l-1 9m1-9h2.3M5 12h2.3M5 12l1-6m2 6v3.3m0-3.3v2.3m2-2.3v2.3m0-2.3v3.3M9 12h6m3 0h2.3M8 12h6m-6 0v3.3m0-3.3V9m-2 3v2.3m0-2.3v3.3m3-3v3.3m-3-3V9m0 0l-2 6m2-6h4m2 0h4"></path>
            </svg>
            <span class="text-2xl">Запросы</span>
        </button>
        <button wire:click="utm('balance')" class="border-indigo-400 border text-black px-4 py-2 rounded flex items-center space-x-2 w-full md:w-auto justify-center">
            <svg class="h-5 w-28 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8V4m0 0v4m0 0l3 3m-3-3L9 7m7 13h5a2 2 0 002-2v-5a2 2 0 00-2-2h-5a2 2 0 00-2 2v5a2 2 0 002 2zM7 7H4a2 2 0 00-2 2v5a2 2 0 002 2h3a2 2 0 002-2V9a2 2 0 00-2-2zm0 10h5a2 2 0 002-2v-5a2 2 0 00-2-2H7a2 2 0 00-2 2v5a2 2 0 002 2z"></path>
            </svg>
            <span class="text-2xl">Баланс</span>
        </button>
        <button wire:click="utm('rating')" class="border-indigo-400 border text-black px-4 py-2 rounded flex items-center space-x-2 w-full md:w-auto justify-center">
            <svg class="h-5 w-28 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 12l3-3m0 0l3 3m-3-3v12m4-8h2a2 2 0 012 2v8a2 2 0 01-2 2h-8a2 2 0 01-2-2v-8a2 2 0 012-2h2"></path>
            </svg>
            <span class="text-2xl">Рейтинг</span>
        </button>
        <button wire:click="utm('account')" class="border-indigo-400 border text-black px-4 py-2 rounded flex items-center space-x-2 w-full md:w-auto justify-center">
            <svg class="h-5 w-28 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 11.707a2 2 0 010-2.828L12 2m0 0l6.879 6.879a2 2 0 010 2.828l-8.465 8.465a4.97 4.97 0 01-2.828 1.172H3v-3.586a4.97 4.97 0 011.172-2.828L12 2zM7.757 5.757L6.343 7.171m9.192-1.414L15.172 7.757m2.829 2.828l-1.414 1.414m-9.192 1.414L6.343 13.243m6.343 6.343H10.5a2.5 2.5 0 01-1.768-.732L7.1 16.5m7.8-7.8l2.828 2.829a2 2 0 010 2.828l-3.535 3.535m-3.536 3.536l-.732-1.768a2.5 2.5 0 01-.732-1.768V10.5m7.071-7.071l-.732-1.768a2.5 2.5 0 01-.732-1.768V10.5"></path>
            </svg>
            <span class="text-2xl">Аккаунт</span>
        </button>
    </nav>
    <div class="my-3 mx-auto max-w-6xl px-2 sm:px-6 lg:px-8">
        <div class="w-full mx-auto bg-white shadow-md rounded-lg overflow-hidden">
            <div class="md:flex justify-between">
                <div class="md:flex">
                    <div class="md:flex-shrink-0 p-4">
                        <div class="rounded-xl w-20 h-20 my-auto" style="background-image: url('{{asset('images/book.svg')}}'); background-position: center; background-size: contain; background-repeat: no-repeat;"></div>
                    </div>
                    <div class="p-4">
                        <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Репетитор по истории</div>
                        <p class="mt-2 text-gray-500">Можно выполнить удаленно</p>
                        <p class="mt-1 text-gray-500">Регулярные занятия</p>
                        <div class="mt-2 flex items-center">
                            <div class="w-10 h-10 bg-no-repeat bg-center bg-contain rounded-xl" style="background-image: url('{{asset('images/credit.png')}}')"></div>
                            <span class="ml-2 text-sm text-gray-500">Сделка без риска</span>
                        </div>
                    </div>
                </div>
                <div class="p-4 text-right">
                    <div class="text-lg font-semibold text-gray-900">до 2000 тг/час</div>
                    <div class="mt-2">
                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Алина</a>
                    </div>
                    <div class="mt-1 text-gray-500">Нет отзывов</div>
                    <button type="button" wire:click="utm('query')" class=" my-3 flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        Откликнуться
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="my-3 mx-auto max-w-6xl px-2 sm:px-6 lg:px-8">
        <div class="w-full mx-auto bg-white shadow-md rounded-lg overflow-hidden">
            <div class="md:flex justify-between">
                <div class="md:flex">
                    <div class="md:flex-shrink-0 p-4">
                        <div class="rounded-xl w-20 h-20 my-auto" style="background-image: url('{{asset('images/book.svg')}}'); background-position: center; background-size: contain; background-repeat: no-repeat;"></div>
                    </div>
                    <div class="p-4">
                        <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Информатика практическое задание</div>
                        <p class="mt-2 text-gray-500">Можно выполнить удаленно</p>
                        <p class="mt-1 text-gray-500">29 мая, 23:41 — 14 июня, 23:59</p>
                        <div class="mt-2 flex items-center">
                            <div class="w-10 h-10 bg-no-repeat bg-center bg-contain rounded-xl" style="background-image: url('{{asset('images/credit.png')}}')"></div>
                            <span class="ml-2 text-sm text-gray-500">Сделка без риска</span>
                        </div>
                    </div>
                </div>
                <div class="p-4 text-right">
                    <div class="text-lg font-semibold text-gray-900">до 1500 тг/час</div>
                    <div class="mt-2">
                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Нота Д</a>
                    </div>
                    <div class="mt-1 text-gray-500">Нет отзывов</div>
                    <button type="button" wire:click="utm('query')" class=" my-3 flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        Откликнуться
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="my-3 mx-auto max-w-6xl px-2 sm:px-6 lg:px-8">
        <div class="w-full mx-auto bg-white shadow-md rounded-lg overflow-hidden">
            <div class="md:flex justify-between">
                <div class="md:flex">
                    <div class="md:flex-shrink-0 p-4">
                        <div class="rounded-xl w-20 h-20 my-auto" style="background-image: url('{{asset('images/autocad.svg')}}'); background-position: center; background-size: contain; background-repeat: no-repeat;"></div>
                    </div>
                    <div class="p-4">
                        <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Ищу учителя AutoCAD, solid works, Siemens</div>
                        <p class="mt-2 text-gray-500">Улица Каскабулак, 101/2</p>
                        <p class="mt-1 text-gray-500">Регулярные занятия</p>
                        <div class="mt-2 flex items-center">
                            <div class="w-10 h-10 bg-no-repeat bg-center bg-contain rounded-xl" style="background-image: url('{{asset('images/credit.png')}}')"></div>
                            <span class="ml-2 text-sm text-gray-500">Сделка без риска</span>
                        </div>
                    </div>
                </div>
                <div class="p-4 text-right">
                    <div class="text-lg font-semibold text-gray-900">до 3000 тг/час</div>
                    <div class="mt-2">
                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Максим Т</a>
                    </div>
                    <div class="mt-1 text-gray-500">Нет отзывов</div>
                    <button type="button" wire:click="utm('query')" class=" my-3 flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        Откликнуться
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="my-3 mx-auto max-w-6xl px-2 sm:px-6 lg:px-8">
        <div class="w-full mx-auto bg-white shadow-md rounded-lg overflow-hidden">
            <div class="md:flex justify-between">
                <div class="md:flex">
                    <div class="md:flex-shrink-0 p-4">
                        <div class="rounded-xl w-20 h-20 my-auto" style="background-image: url('{{asset('images/painting.svg')}}'); background-position: center; background-size: contain; background-repeat: no-repeat;"></div>
                    </div>
                    <div class="p-4">
                        <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Подготовка к экзамену по живописи натюрморт</div>
                        <p class="mt-2 text-gray-500">Улица Каскабулак, 101/2</p>
                        <p class="mt-1 text-gray-500">Регулярные занятия</p>
                        <div class="mt-2 flex items-center">
                            <div class="w-10 h-10 bg-no-repeat bg-center bg-contain rounded-xl" style="background-image: url('{{asset('images/credit.png')}}')"></div>
                            <span class="ml-2 text-sm text-gray-500">Сделка без риска</span>
                        </div>
                    </div>
                </div>
                <div class="p-4 text-right">
                    <div class="text-lg font-semibold text-gray-900">до 2500 тг/час</div>
                    <div class="mt-2">
                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Асет К</a>
                    </div>
                    <div class="mt-1 text-gray-500">Нет отзывов</div>
                    <button type="button" wire:click="utm('query')" class=" my-3 flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        Откликнуться
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="my-3 mx-auto max-w-6xl px-2 sm:px-6 lg:px-8">
        <div class="w-full mx-auto bg-white shadow-md rounded-lg overflow-hidden">
            <div class="md:flex justify-between">
                <div class="md:flex">
                    <div class="md:flex-shrink-0 p-4">
                        <div class="rounded-xl w-20 h-20 my-auto" style="background-image: url('{{asset('images/music.svg')}}'); background-position: center; background-size: contain; background-repeat: no-repeat;"></div>
                    </div>
                    <div class="p-4">
                        <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Уроки игры на фортепиано</div>
                        <p class="mt-2 text-gray-500">Выезд на дом</p>
                        <p class="mt-1 text-gray-500">Регулярные занятия</p>
                        <div class="mt-2 flex items-center">
                            <div class="w-10 h-10 bg-no-repeat bg-center bg-contain rounded-xl" style="background-image: url('{{asset('images/credit.png')}}')"></div>
                            <span class="ml-2 text-sm text-gray-500">Сделка без риска</span>
                        </div>
                    </div>
                </div>
                <div class="p-4 text-right">
                    <div class="text-lg font-semibold text-gray-900">до 5000 тг/час</div>
                    <div class="mt-2">
                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Кристина А</a>
                    </div>
                    <div class="mt-1 text-gray-500">Нет отзывов</div>
                    <button type="button" wire:click="utm('query')" class=" my-3 flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        Откликнуться
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.addEventListener('livewire:init', function () {
        Livewire.on('triggerAlert', message => {
            Swal.fire({
                title: "Данный раздел находится в разработке!",
                text: " Мы прилагаем все усилия, чтобы предложить вам что-то удивительное. Следите за обновлениями! ",
                icon: "info"
            });
        });
    });
</script>
