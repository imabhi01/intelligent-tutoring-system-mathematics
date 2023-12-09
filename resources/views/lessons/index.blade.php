<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lessons') }}
        </h2>
    </x-slot>
    <div class="max-w-6xl m-4 mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="mx-auto">
                <section class="text-gray-600 body-font">
                    <div class="container px-5 py-5 mx-auto">
                        <div class="flex flex-wrap -m-4 text-center">
                            <div class="p-4 md:w-1/4 sm:w-1/2 w-full ">
                                <div class="border-2 border-gray-200 px-4 py-6 rounded-lg bg-white">
                                    <a href="{{ route('circle') }}">
                                        <svg viewBox="0 0 100 100">
                                            <circle cx="50" cy="50" r="40" stroke="black" stroke-width="1" fill="white" />
                                        </svg>
                                        <h2 class="title-font font-medium text-xl text-gray-900">Circle</h2>
                                    </a>
                                </div>
                            </div>
                            <div class="p-4 md:w-1/4 sm:w-1/2 w-full ">
                                <div class="border-2 border-gray-200 px-4 py-6 rounded-lg bg-white">
                                    <a href="{{ route('triangle') }}">
                                        <svg viewBox="0 0 100 100">
                                            <polygon points="50,10 10,100 90,100" stroke="black" stroke-width="1" fill="white" />
                                        </svg>
                                        <h2 class="title-font font-medium text-xl text-gray-900">Triangle</h2>
                                    </a>
                                </div>
                            </div>
                            <div class="p-4 md:w-1/4 sm:w-1/2 w-full ">
                                <div class="border-2 border-gray-200 px-4 py-6 rounded-lg bg-white">
                                    <a href="{{ route('rectangle') }}">
                                        <svg viewBox="0 0 100 100">
                                            <rect x="10" y="10" width="80" height="80" stroke="black" stroke-width="1" fill="white" />
                                        </svg>
                                        <h2 class="title-font font-medium text-xl text-gray-900">Rectangle</h2>
                                    </a>
                                </div>
                            </div>
                            <div class="p-4 md:w-1/4 sm:w-1/2 w-full ">
                                <div class="border-2 border-gray-200 px-4 py-6 rounded-lg bg-white">
                                    <a href="{{ route('square') }}">
                                        <svg viewBox="0 0 100 100">
                                            <rect x="20" y="20" width="60" height="60" stroke="black" stroke-width="1" fill="white" />
                                        </svg>
                                        <h2 class="title-font font-medium text-xl text-gray-900">Square</h2>
                                    </a>                                </div>
                            </div>
                            
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</x-app-layout>