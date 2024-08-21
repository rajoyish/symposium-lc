@php use App\Enums\TalkType; @endphp
<div class="space-y-2">
    <x-input-label for="title">Title</x-input-label>
    <x-text-input name="title" value="{{ old('title', $talk->title) }}" id="title"
                  placeholder="How to save a life" class="w-full" />
    <x-input-error :messages="$errors->get('title')" />
</div>

<div class="md:flex md:gap-8 space-y-8 md:space-y-0">
    <div class="space-y-2 w-full">
        <x-input-label for="type">Type</x-input-label>
        <select name="type"
                class="py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
            <option selected disabled>Select Type</option>
            @foreach(TalkType::cases() as $talkType)
                <option
                    @selected($talkType->value === old($talkType->value, $talk->type))
                    value="{{ $talkType->value }}">
                    {{ ucwords($talkType->value) }}
                </option>
            @endforeach
        </select>
        <x-input-error :messages="$errors->get('type')" />
    </div>
    <div class="w-full">
        <div class="space-y-2">
            <x-input-label for="length">Length</x-input-label>
            <x-text-input name="length" value="{{ old('length', $talk->length) }}" id="length"
                          placeholder="12-15 minutes"
                          class="w-full"
            />
        </div>
    </div>
</div>

<div class="max-w-full">
    <label for="hs-autoheight-textarea" class="block text-sm font-medium mb-2 dark:text-white">Abstract</label>
    <textarea name="abstract" id="hs-autoheight-textarea"
              class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
              rows="3" placeholder="Abstract of the talk">{{ old('abstract', $talk->abstract) }}</textarea>
</div>
<div class="max-w-full">
    <label for="hs-autoheight-textarea" class="block text-sm font-medium mb-2 dark:text-white">Organizer
        notes</label>
    <textarea name="organizer_notes" id="hs-autoheight-textarea"
              class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
              rows="3"
              placeholder="Note of the organizer">{{ old('organizer_notes', $talk->organizer_notes) }}</textarea>
</div>
<div>
    <x-secondary-button>Cancel</x-secondary-button>
    <x-primary-button>Save</x-primary-button>
</div>
