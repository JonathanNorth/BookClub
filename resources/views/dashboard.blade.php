<x-app-layout>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-fit mx-auto">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg ">
                <div class=" text-gray-900 dark:text-gray-100 py-10 px-10">
                    <x-display-rounds />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
