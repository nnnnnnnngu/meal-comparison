<div x-data="{ showList: false, count: @entangle('comparisonCount') }"
{{--     x-init="$watch('count', value => { showIcon = value > 0 })"--}}
     >
    <div
         class="fixed bottom-4 right-4 z-50">
        <!-- Floating Icon -->
        <div class="bg-blue-500 text-white p-3 rounded-full shadow-lg cursor-pointer relative" @click="showIcon =  false; showList = true;">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6h6M3 12h6m-6 6h6M15 6h6M15 12h6m-6 6h6" />
            </svg>
            <span x-show="count > 0" class="absolute top-0 right-0 bg-red-500 text-white rounded-full w-5 h-5 flex items-center justify-center text-xs" x-text="count"></span>
        </div>
    </div>

    <!-- Comparison List Panel -->
    <div
         x-show="showList"

         class="fixed top-16 right-4 z-50 w-80 bg-white shadow-lg rounded-lg overflow-hidden">

        <!-- Panel Header -->
        <div class="bg-blue-500 text-white p-4 flex items-center justify-between">
            <h2 class="text-lg font-semibold">Comparison List</h2>
            <button @click="showList = false" class="text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <!-- List Content -->
        <div class="p-4">
            @if($comparisonCount > 0)
                <ul class="space-y-4">
                    @foreach($comparisonMeals as $meal)
                        <li class="flex space-x-4">
                            <img src="{{ $meal->image_url }}" alt="{{ $meal->name }}" class="w-16 h-16 flex-none object-cover rounded-lg">
                            <div>
                                <h3 class="text-lg font-semibold">{{ $meal->name }}</h3>
                                <p class="text-gray-600">{{ $meal->description }}</p>
                            </div>
                        </li>
                    @endforeach
                </ul>
                <div class="mt-4 flex justify-between">
                    <button wire:click="clearComparisonList" class="bg-red-500 text-white px-4 py-2 rounded-lg">
                        Clear List
                    </button>
                    @if($comparisonCount < 2)
                        <span class="bg-blue-500 text-white px-4 py-2 rounded-lg {{ $comparisonCount < 2 ? 'opacity-50 cursor-not-allowed' : '' }}" >
                            Compare
                        </span>
                    @else
                    <a href="{{ route('meals.compare') }}"
                       class="bg-blue-500 text-white px-4 py-2 rounded-lg {{ $comparisonCount < 2 ? 'opacity-50 cursor-not-allowed' : '' }}" >
                        Compare
                    </a>
                    @endif


                </div>
            @else
                <p class="text-gray-600">No items in the comparison list.</p>
            @endif
        </div>
    </div>
</div>
