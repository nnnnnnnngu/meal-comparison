<div class="max-w-7xl mx-auto py-12">
    <div class="bg-white p-6 rounded-lg shadow-md">
        <div class="flex space-x-6">
            <!-- Meal Image -->
            <div class="flex-shrink-0 w-1/2">
                <img src="{{ $meal->image_url }}" alt="{{ $meal->name }}" class="w-full h-96 object-contain rounded-lg">
            </div>

            <!-- Meal Details -->
            <div>
                <h1 class="text-3xl font-semibold">{{ $meal->name }}</h1>
                <p class="mt-2 text-gray-700">{{ $meal->description }}</p>

                <!-- Meal Details -->
                <div class="mt-4">
                    <strong>Ingredients:</strong> {{ $meal->ingredients->pluck('name')->join(', ') }}
                </div>
                <div class="mt-2">
                    <strong>Attributes:</strong> {{ $meal->attributes->pluck('name')->join(', ') }}
                </div>
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

                <!-- Add to Comparison Button -->
                <div class="mt-4">
                    <button wire:click="$dispatch('addToCompare', {{ $meal->id }})" class="bg-blue-500 text-white px-4 py-2 rounded-lg">
                        Add to Compare
                    </button>
                </div>
            </div>
        </div>

        <!-- Recommendations -->
        @if($recommendations->count())
            <div class="mt-12">
                <h2 class="text-2xl font-semibold">Recommended Meals</h2>
                <div class="mt-2 grid grid-cols-2 gap-2">
                    @foreach($recommendations as $recommended)
                        <a href="{{ route('meals.show', $recommended) }}" class="flex items-center space-x-4 hover:shadow rounded transition-shadows duration-300">
                            <img src="{{ $recommended->image_url }}" alt="{{ $recommended->name }}" class="flex-none w-24 h-24 object-cover rounded-lg">
                            <div>
                                <h3 class="text-xl font-semibold">{{ $recommended->name }}</h3>
                                <p class="text-gray-600">{{ $recommended->description }}</p>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        @endif
    </div>

</div>