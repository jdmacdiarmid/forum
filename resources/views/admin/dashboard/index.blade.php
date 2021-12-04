<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-x1 text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-indigo-100 shadow-xl sm:rounded-lg">
                {{ __('Admin Page') }}
            </div>
        </div>
    </div>
</x-app-layout>