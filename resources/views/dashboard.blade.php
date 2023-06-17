<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <ul class="flex">
                        <li class="mr-6">
                            <a href="{{ url('/series') }}" class="text-blue-500 hover:text-blue-700">
                                Series
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/casts') }}" class="text-blue-500 hover:text-blue-700">
                                Casts
                            </a>
                        </li>
                    </ul>
                    <div class="mt-8">
                        You're logged in!
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>