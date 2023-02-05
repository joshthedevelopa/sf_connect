{{-- @props(['types', 'regions']) --}}

<div class="flex items-center justify-between p-4">
    <h2 class="text-lg font-medium text-gray-900">Filters</h2>
</div>

<!-- Filters -->
<form class="border-gray-200">
    <div class="border-t border-gray-200 px-4 py-6">
        <h3 class="-mx-2 -my-3 flow-root">
            <!-- Expand/collapse section button -->
            <div class="flex w-full items-center justify-between bg-white px-2 py-3 text-gray-400 hover:text-gray-500"
                aria-controls="filter-section-mobile-0" aria-expanded="false">
                <span class="font-medium text-gray-900">Keywords</span>
            </div>
        </h3>
        <!-- Filter section, show/hide based on section state. -->
        <div class="pt-6" id="filter-section-mobile-0">
            <div class="space-y-6">
                <input value="{{ ($input['keywords'] ?? '') }}" id="keywords" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md block mt-1 w-full" type="text" name="keywords" placeholder="Enter in search words..."/>
            </div>
        </div>
    </div>

    <div class="border-t border-gray-200 px-4 py-6">
        <h3 class="-mx-2 -my-3 flow-root">
            <!-- Expand/collapse section button -->
            <div class="flex w-full items-center justify-between bg-white px-2 py-3 text-gray-400 hover:text-gray-500"
                aria-controls="filter-section-mobile-0" aria-expanded="false">
                <span class="font-medium text-gray-900">Organization Type</span>
            </div>
        </h3>
        <!-- Filter section, show/hide based on section state. -->
        <div class="pt-6" id="filter-section-mobile-0">
            <div class="space-y-6">
                @foreach($types as $type)
                <div class="flex items-center">
                    <input id="types" name="types[]" value="{{ $type }}" type="checkbox"
                        class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500 cursor-pointer" @checked(in_array($type, $input['types'] ?? []))>
                    <label for="types" class="ml-3 min-w-0 flex-1 text-gray-500">{{ $type }}</label>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="border-t border-gray-200 px-4 py-6">
        <h3 class="-mx-2 -my-3 flow-root">
            <!-- Expand/collapse section button -->
            <div class="flex w-full items-center justify-between bg-white px-2 py-3 text-gray-400 hover:text-gray-500"
                aria-controls="filter-section-mobile-1" aria-expanded="false">
                <span class="font-medium text-gray-900">Region</span>
            </div>
        </h3>
        <!-- Filter section, show/hide based on section state. -->
        <div class="pt-6" id="filter-section-mobile-1">
            <div class="space-y-6">
                @foreach($regions as $region)
                <div class="flex items-center">
                    <input id="regions" name="regions[]" value="{{ $region }}" type="checkbox"
                        class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500 cursor-pointer" @checked(in_array($region, $input['regions'] ?? []))>
                    <label for="regions" class="ml-3 min-w-0 flex-1 text-gray-500">{{ $region }}</label>
                </div>
                @endforeach
            </div>
        </div>
    </div>

</form>