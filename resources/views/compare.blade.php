<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


        <div class="container mx-auto p-4">
            <h1 class="text-2xl font-semibold mb-4">Compare Meals</h1>

            @if($meals->isNotEmpty())
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    @foreach($meals as $meal)
                        <div class="bg-white p-4 rounded-lg shadow-lg">
                            <img src="{{ $meal->image_url }}" alt="{{ $meal->name }}" class="w-full h-40 object-cover rounded-lg mb-4">
                            <h2 class="text-xl font-semibold">{{ $meal->name }}</h2>
                            <p class="mt-2 text-gray-600">{{ $meal->description }}</p>

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
                        </div>
                    @endforeach
                </div>
            @else
                <p class="text-gray-600">No meals selected for comparison.</p>
            @endif
        </div>

</x-app-layout>
