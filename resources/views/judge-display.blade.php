<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Judge Round') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-fit mx-auto sm:px-6 lg:px-8 flex">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 py-10 px-10">
                    <x-round-to-judge />
                    <x-judge-suggestions-display />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>