<x-app-layout>
    <div class="max-w-7xl mx-auto py-12">
        <h1 class="text-2xl font-semibold mb-4">Compare Meals</h1>

        @if($meals->isNotEmpty())
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white shadow-lg rounded-lg">
                    <!-- Table Header -->
                    <thead class="bg-blue-500 text-white sticky top-0 z-10">
                    <tr>
                        <th class="p-4 text-left"></th>
                        @foreach($meals as $meal)
                            <th class="p-4 text-center">
                                <!-- Meal Image -->
                                <a href="{{ route('meals.show', $meal) }}">
                                    <img src="{{ $meal->image_url }}" alt="{{ $meal->name }}" class="w-20 h-20 object-cover rounded-full mx-auto mb-2 shadow-md">
                                    <div>{{ $meal->name }}</div>
                                </a>
                            </th>
                        @endforeach
                    </tr>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                    <!-- Ingredients Row -->
                    <tr class="border-t">
                        <td class="p-4 font-semibold bg-gray-100">Ingredients</td>
                        @foreach($meals as $meal)
                            <td class="p-4 text-center bg-gray-50">{{ $meal->ingredients->pluck('name')->join(', ') }}</td>
                        @endforeach
                    </tr>

                    <!-- Attributes Row -->
                    <tr class="border-t">
                        <td class="p-4 font-semibold bg-gray-100">Attributes</td>
                        @foreach($meals as $meal)
                            <td class="p-4 text-center bg-gray-50">{{ $meal->attributes->pluck('name')->join(', ') }}</td>
                        @endforeach
                    </tr>

                    <!-- Preparation Methods Row -->
                    <tr class="border-t">
                        <td class="p-4 font-semibold bg-gray-100">Preparation Methods</td>
                        @foreach($meals as $meal)
                            <td class="p-4 text-center bg-gray-50">{{ $meal->preparationMethods->pluck('name')->join(', ') }}</td>
                        @endforeach
                    </tr>

                    <!-- Sauces Row -->
                    <tr class="border-t">
                        <td class="p-4 font-semibold bg-gray-100">Sauces</td>
                        @foreach($meals as $meal)
                            <td class="p-4 text-center bg-gray-50">{{ $meal->sauces->pluck('name')->join(', ') }}</td>
                        @endforeach
                    </tr>

                    <!-- Bun Types Row -->
                    <tr class="border-t">
                        <td class="p-4 font-semibold bg-gray-100">Bun Types</td>
                        @foreach($meals as $meal)
                            <td class="p-4 text-center bg-gray-50">{{ $meal->bunTypes->pluck('name')->join(', ') }}</td>
                        @endforeach
                    </tr>

                    <!-- Meat/Vegetarian Options Row -->
                    <tr class="border-t">
                        <td class="p-4 font-semibold bg-gray-100">Meat/Vegetarian Options</td>
                        @foreach($meals as $meal)
                            <td class="p-4 text-center bg-gray-50">{{ $meal->meatOptions->pluck('name')->join(', ') }}</td>
                        @endforeach
                    </tr>

{{--                    <!-- Remove Buttons Row -->--}}
{{--                    <tr class="border-t">--}}
{{--                        <td class="p-4 font-semibold bg-gray-100"></td>--}}
{{--                        @foreach($meals as $meal)--}}
{{--                            <td class="p-4 text-center bg-gray-50">--}}
{{--                                <button wire:click="removeFromCompare({{ $meal->id }})" class="text-red-500 hover:text-red-700">--}}
{{--                                    Remove--}}
{{--                                </button>--}}
{{--                            </td>--}}
{{--                        @endforeach--}}
{{--                    </tr>--}}
                    </tbody>
                </table>
            </div>
        @else
            <p class="text-gray-600">No meals selected for comparison.</p>
        @endif
    </div>
</x-app-layout>
