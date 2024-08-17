<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $talk->title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 space-y-4">
                    <div>
                        <span
                            class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium border border-gray-800 text-gray-800 dark:border-neutral-200 dark:text-white">
                            {{ Str::ucfirst($talk->type) }}
                        </span>
                        <span
                            class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium border border-gray-800 text-gray-800 dark:border-neutral-200 dark:text-white">
                            {{ $talk->length }} Minutes
                        </span>
                    </div>

                    <p>{{ $talk->abstract }}</p>
                    <div class="border p-4 rounded-md">
                        <h2 class="font-bold mb-4">Organizer Notes:</h2>
                        {{ $talk->organizer_notes }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
