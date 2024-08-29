<div class="container mx-auto p-4">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
        <!-- Filters -->
        <div class="col-span-1">
            <div class="bg-white p-4 rounded-lg shadow">
                <h2 class="text-lg font-semibold mb-4">Filters</h2>

                <!-- Meal Type Filter -->
{{--                <div class="mb-4">--}}
{{--                    <label class="block font-medium text-gray-700">Meal Type</label>--}}
{{--                    <select wire:model.live="mealType" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">--}}
{{--                        <option value="">All Types</option>--}}
{{--                        <option value="burger">Burger</option>--}}
{{--                        <option value="pizza">Pizza</option>--}}
{{--                        <!-- Add more meal types as needed -->--}}
{{--                    </select>--}}
{{--                </div>--}}

                <!-- Ingredients Filter -->
                <div class="mb-4">
                    <label class="block font-medium text-gray-700">Ingredients</label>
                    <div class="mt-2 space-y-2">
                        @foreach($ingredients as $ingredient)
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="checkbox" wire:model.live="selectedIngredients" value="{{ $ingredient->id }}" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500">
                                    <span class="ml-2">{{ $ingredient->name }}</span>
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Attributes Filter -->
                <div class="mb-4">
                    <label class="block font-medium text-gray-700">Attributes</label>
                    <div class="mt-2 space-y-2">
                        @foreach($attributes as $attribute)
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="checkbox" wire:model.live="selectedAttributes" value="{{ $attribute->id }}" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500">
                                    <span class="ml-2">{{ $attribute->name }}</span>
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Preparation Methods Filter -->
                <div class="mb-4">
                    <label class="block font-medium text-gray-700">Preparation Methods</label>
                    <div class="mt-2 space-y-2">
                        @foreach($preparationMethods as $method)
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="checkbox" wire:model.live="selectedPreparationMethods" value="{{ $method->id }}" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500">
                                    <span class="ml-2">{{ $method->name }}</span>
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Sauces Filter -->
                <div class="mb-4">
                    <label class="block font-medium text-gray-700">Sauces</label>
                    <div class="mt-2 space-y-2">
                        @foreach($sauces as $sauce)
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="checkbox" wire:model.live="selectedSauces" value="{{ $sauce->id }}" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500">
                                    <span class="ml-2">{{ $sauce->name }}</span>
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Bun Types Filter -->
                <div class="mb-4">
                    <label class="block font-medium text-gray-700">Bun Types</label>
                    <div class="mt-2 space-y-2">
                        @foreach($bunTypes as $bunType)
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="checkbox" wire:model.live="selectedBunTypes" value="{{ $bunType->id }}" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500">
                                    <span class="ml-2">{{ $bunType->name }}</span>
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Meat/Vegetarian Options Filter -->
                <div class="mb-4">
                    <label class="block font-medium text-gray-700">Meat/Vegetarian Options</label>
                    <div class="mt-2 space-y-2">
                        @foreach($meatOptions as $meatOption)
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="checkbox" wire:model.live="selectedMeatOptions" value="{{ $meatOption->id }}" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500">
                                    <span class="ml-2">{{ $meatOption->name }}</span>
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <!-- Meal Listing -->
        <div class="col-span-2">
            <div class="grid grid-cols-1 gap-4">
                @forelse($meals as $meal)
                    <x-meal-card :meal="$meal" />
                @empty
                    <div class="col-span-1">
                        <p class="text-gray-600">No meals found.</p>
                    </div>
                @endforelse

            </div>
        </div>
    </div>
</div>
