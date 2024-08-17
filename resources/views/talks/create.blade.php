<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Talk') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4 md:p-8">
                <form method="post" action="{{ route('talks.store') }}" class="space-y-8">
                    @csrf
                    <div class="space-y-2">
                        <x-input-label for="title">title</x-input-label>
                        <x-text-input name="title" id="title" placeholder="How to save a life" class="w-full" />
                        <x-input-error :messages="$errors->get('title')" />
                    </div>

                    <div class="md:flex md:gap-8">
                        <div class="space-y-2 w-full">
                            <x-input-label for="type">Type</x-input-label>
                            <select name="type"
                                    class="py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                <option selected disabled>Select Type</option>
                                <option value="standard">Standard</option>
                            </select>
                            <x-input-error :messages="$errors->get('type')" />
                        </div>
                        <div class="w-full">
                            <div class="space-y-2">
                                <x-input-label for="length">length</x-input-label>
                                <x-text-input name="length" id="length" placeholder="12-15 minutes"
                                              class="w-full"
                                />
                            </div>
                        </div>
                    </div>

                    <div class="max-w-full">
                        <label for="hs-autoheight-textarea" class="block text-sm font-medium mb-2 dark:text-white">Abstract</label>
                        <textarea name="abstract" id="hs-autoheight-textarea"
                                  class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                  rows="3" placeholder="Abstract of the talk"></textarea>
                    </div>
                    <div class="max-w-full">
                        <label for="hs-autoheight-textarea" class="block text-sm font-medium mb-2 dark:text-white">Organizer
                            notes</label>
                        <textarea name="organizer_notes" id="hs-autoheight-textarea"
                                  class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                  rows="3" placeholder="Note of the organizer"></textarea>
                    </div>
                    <div>
                        <x-secondary-button>Cancel</x-secondary-button>
                        <x-primary-button>Save</x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
