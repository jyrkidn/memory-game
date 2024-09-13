<x-app-layout>
    <div class="h-screen grid place-content-center grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
        @foreach($cardCategories as $cardCategory)
            <a
                href="{{ route('card_categories.show', $cardCategory) }}"
                class="col-span-1 divide-y inline-flex items-center gap-x-1.5 text-purple-500 rounded-lg px-3 py-2 font-medium text-3xl bg-gray-100 border border-purple-200"
            >
                <img src="{{ $cardCategory->getFirstMediaUrl() }}" alt="{{ $cardCategory->name }}" >
            </a>
        @endforeach
    </div>
</x-app-layout>
