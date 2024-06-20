@extends('layouts.auth')
@push('css')
    <style>
        .google-btn {
            background: #fff;
            color: #747474;
            width: 184px;
            border-radius: 5px;
            border: thin solid #888;
            box-shadow: 1px 1px 1px grey;
            white-space: nowrap;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2px;
        }

        .google-icon-wrapper {
            background-color: #fff;
            border-radius: 5px;
            height: 40px;
            width: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .google-icon {
            width: 30px;
            height: 30px;
        }

        .btn-text {
            font-size: 14px;
            letter-spacing: 0.2px;
            margin-left: 10px;
            color: #5f6368;
        }

    </style>
@endpush
@section('content')
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Добро пожаловать</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <a href="{{ route('auth.google') }}" class="google-btn w-full">
                <div class="google-icon-wrapper">
                    <img class="google-icon" src="{{asset('images/google_logo.png')}}" alt="Google sign-in"/>
                </div>
                <p class="btn-text"><b>Войти через Google</b></p>
            </a>

            <livewire:login />
        </div>
    </div>
@endsection
@push('js')
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/imask"></script>
    <script>
        const phone = document.getElementById('number');
        const phoneOptions = {
            mask: '+{7} (000) 000-00-00'
        };
        const phoneMask = IMask(phone, phoneOptions);
    </script>

@endpush
