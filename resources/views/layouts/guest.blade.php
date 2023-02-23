<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'HisasOnline') }}</title>

    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet"/>

    <!-- Styles -->
    <style>
        [x-cloak] {
            display: none;
        }
    </style>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body dir="{{ session('applocale') == 'ar' ? 'rtl' : 'ltr' }}">
<div
    x-data="mainState"
    class="font-sans antialiased"
    :class="{dark: isDarkMode}"
    x-cloak
>
    <div class="flex flex-col min-h-screen text-gray-900 bg-gray-100 dark:bg-dark-eval-0 dark:text-gray-200">
        {{ $slot }}
        <x-footer/>
    </div>
    <div
        class="w-full fixed top-0 right-0 p-2 flex gap-x-2 justify-end">
        <x-dropdown align="{{ session('applocale') == 'ar' ? 'left' : 'right' }}" width="48">
            <x-slot name="trigger">
                <button
                    class="flex items-center p-2 text-sm font-medium text-gray-500 rounded-md transition duration-150 ease-in-out hover:text-gray-700 focus:outline-none focus:ring focus:ring-purple-500 focus:ring-offset-1 focus:ring-offset-white dark:focus:ring-offset-dark-eval-1 dark:text-gray-400 dark:hover:text-gray-200"
                >
                    <div>{{ \Illuminate\Support\Facades\Config::get('languages')[\Illuminate\Support\Facades\App::getLocale()] }}</div>

                    <div class="ml-1">
                        <svg
                            class="w-4 h-4 fill-current"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"
                            />
                        </svg>
                    </div>
                </button>
            </x-slot>

            <x-slot name="content">
                @foreach (\Illuminate\Support\Facades\Config::get('languages') as $lang => $language)
                    @if ($lang != \Illuminate\Support\Facades\App::getLocale())
                        <x-dropdown-link
                            :href="route('lang.switch', $lang)"
                        >
                            {{ __($language) }}
                        </x-dropdown-link>
                    @endif
                @endforeach
            </x-slot>
        </x-dropdown>
        <x-button
            type="button"
            icon-only
            variant="secondary"
            sr-text="Toggle dark mode"
            x-on:click="toggleTheme"
        >
            <x-heroicon-o-moon
                x-show="!isDarkMode"
                aria-hidden="true"
                class="w-6 h-6"
            />

            <x-heroicon-o-sun
                x-show="isDarkMode"
                aria-hidden="true"
                class="w-6 h-6"
            />
        </x-button>
    </div>
</div>
</body>
</html>
