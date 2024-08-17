<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="md:grid md:ap-x-8 md:gap-y-8 md:grid-cols-2 flex flex-col gap-8">
                        @foreach($talks as $talk)
                            <div
                                class="max-w-full flex flex-col bg-white border border-t-4 border-t-blue-600 shadow-sm rounded-xl dark:bg-neutral-900 ">
                                <div class="p-4 md:p-5">
                                    <h3 class="text-lg font-bold text-gray-800">
                                        {{ $talk->title }}
                                    </h3>
                                    <p class="mt-2 text-gray-500">
                                        {{$talk->abstract }}
                                    </p>
                                    <a class="mt-3 inline-flex items-center gap-x-1 text-sm font-semibold rounded-lg border border-transparent text-blue-600 decoration-2 hover:text-blue-700 hover:underline focus:underline focus:outline-none focus:text-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                                       href="{{ route('talks.show', $talk) }}">
                                        Read More
                                        <svg class="shrink-0 size-4" width="24"
                                             height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                             stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="m9 18 6-6-6-6"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
