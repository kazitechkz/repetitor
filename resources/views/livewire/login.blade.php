<div>
    <div class="space-y-6">
        @if(!$isSend)
            <div>
                <label for="number" class="block text-sm font-medium leading-6 text-gray-900">Номер телефона</label>
                <div class="mt-2">
                    <input wire:model="phoneForm.number" id="number" placeholder="+7 (___) ___-__-__" name="phone" type="text" autocomplete="phone" required class="block w-full rounded-md border-0 px-1.5 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    <div class="text-red-500">@error('phoneForm.number') {{ $message }} @enderror</div>
                </div>
            </div>
        @endif

        @if($isSend)
            <div class="mt-2">
                <label for="code" class="block text-sm font-medium leading-6 text-gray-900">Введите код</label>
                <input wire:model.defer="codeForm.number" id="code" placeholder="__-__" type="text" required class="block w-full rounded-md border-0 px-1.5 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                <div class="text-red-500">@error('codeForm.number') {{ $message }} @enderror</div>
                @if ($errorCode)
                    <div class="text-red-600">
                        Не правильный код
                    </div>
                @endif
            </div>
            <div class="mt-2 flex justify-between">
                <p class="text-center text-sm text-gray-500">
                    <a wire:click="changePhone()" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500 cursor-pointer">Другой номер</a>
                </p>
                @if ($seconds > 0 && $seconds != 60)
                    <p class="text-center text-sm text-gray-500">{{ $seconds }} сек</p>
                @else
                    <a wire:click="sendSms" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500 cursor-pointer">
                        Отправить еще раз
                    </a>
                @endif
            </div>
        @endif
        <div>
            @if($isSend)
                <button type="submit" wire:click.prevent="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    Отправить
                </button>
            @else
                <button type="button" wire:click="sendSms" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    Получить код
                </button>
            @endif
        </div>
    </div>
</div>

<script>
    document.addEventListener('livewire:init', () => {
        setInterval(() => {
            Livewire.dispatch('timer');
        }, 1000)
    });
</script>
