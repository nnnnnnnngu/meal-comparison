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
                    <button wire:click="$dispatch('addToCompare', { mealId:  {{ $meal->id }} })" class="bg-blue-500 text-white px-4 py-2 rounded-lg">
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
                        <div class="flex items-center space-x-4 hover:shadow rounded transition-shadows duration-300">
                            <img src="{{ $recommended->image_url }}" alt="{{ $recommended->name }}" class="flex-none w-24 h-24 object-cover rounded-lg">
                            <div>
                                <div class="flex gap-2 mb-2">
                                    <a href="{{ route('meals.show', $recommended) }}" class="hover:underline text-xl font-semibold">{{ $recommended->name }}</a>
                                    <button wire:click="$dispatch('addToCompare', { mealId : {{$recommended->id}}})" class="text-blue-500">
                                        <svg data-slot="icon" class="w-6 h-6" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 21 3 16.5m0 0L7.5 12M3 16.5h13.5m0-13.5L21 7.5m0 0L16.5 12M21 7.5H7.5"></path>
                                        </svg>
                                    </button>
                                </div>
                                <p class="text-gray-600">{{ $recommended->description }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
    </div>

</div>