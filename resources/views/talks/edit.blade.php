@php use App\Enums\TalkType; @endphp
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Talk') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4 md:p-8">
                <form method="post" action="{{ route('talks.update', ['talk' => $talk]) }}" class="space-y-8">
                    @csrf
                    @method('PATCH')
                    @include('talks.template')
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
