<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Search') }}
    </h2>
  </x-slot>

  <div class="py-4">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900">
          {{ __("You're logged in!") }}
        </div>
      </div>
    </div>
  </div>

  <div class="py-4">
    <form method="POST" action="{{ route('search') }}">
      @csrf
      <div class="mx-auto max-w-7xl flex justify-center lg:px-8 md:flex md:space-x-6">
        <div class="overflow-hidden sm:rounded-lg md:w-1/4">
          <div class="flex h-full w-full flex-col overflow-y-auto bg-white pb-12">
            <x-search-filter :types="$types" :regions="$regions" :input="($input ?? [])" />
          </div>
        </div>
        <div class="mx-auto md:w-3/4">
          <button type="submit"
            class="cursor-pointer inline-flex items-center px-4 py-2 bg-indigo-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 ml-3">
            {{ __('Search') }}
          </button>
          <div class="grid grid-cols-1 gap-6 p-6 md:grid-cols-2 lg:grid-cols-3 ">
            @if(isset($results) && count($results) > 0)
            @foreach($results as $result)
            <x-result-card :name="$result->name" :description="$result->description" :id="$result->id" :type="$result->type"
              :region="$result->region" />
            @endforeach
            @else
            <div>No search results</div>
            @endif
          </div>
        </div>
      </div>
    </form>
  </div>
</x-app-layout>