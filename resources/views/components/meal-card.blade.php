<div class="block bg-white p-4 rounded-lg shadow hover:shadow-xl transition-shadows duration-300 relative">
    <!-- Compare Button -->
    <div class="absolute top-2 right-2">
        <button wire:click="$dispatch('addToCompare', {{ $meal->id }})" class="text-blue-500">
            <svg data-slot="icon" class="w-6 h-6" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 21 3 16.5m0 0L7.5 12M3 16.5h13.5m0-13.5L21 7.5m0 0L16.5 12M21 7.5H7.5"></path>
            </svg>
        </button>
    </div>

    <a href="{{ route('meals.show', $meal) }}"  class="flex space-x-4">
        <!-- Meal Image -->
        <div class="flex-shrink-0">
            <img src="{{ $meal->image_url }}" alt="{{ $meal->name }}" class="w-40 h-40 object-cover rounded-lg">
        </div>

        <!-- Meal Details -->
        <div>
            <h3 class="text-xl font-semibold hover:underline">{{ $meal->name }}</h3>
            <p class="mt-2 text-gray-600">{{ $meal->description }}</p>

            <!-- Meal Details -->
            <div class="mt-2">
                <strong>Ingredients:</strong> {{ $meal->ingredients->pluck('name')->join(', ') }}
            </div>
            <div class="mt-2">
                <strong>Attributes:</strong> {{ $meal->attributes->pluck('name')->join(', ') }}
            </div>
        </div>
    </a>

    <a href="{{ route('meals.show', $meal) }}"  class="grid grid-cols-2 gap-2 mt-4">
        <div class="mt-2">
            <strong>Preparation Methods:</strong> {{ $meal->preparationMethods->pluck('name')->join(', ') }}
        </div>
        <div class="mt-2">
            <strong>Sauces:</strong> {{ $meal->sauces->pluck('name')->join(', ') }}
        </div>
        <div class="mt-2">
            <strong>Bun Types:</strong> {{ $meal->bunTypes->pluck('name')->join(', ') }}
        </div>
        <div class="mt-2">
            <strong>Meat/Vegetarian Options:</strong> {{ $meal->meatOptions->pluck('name')->join(', ') }}
        </div>
    </a>
</div>
