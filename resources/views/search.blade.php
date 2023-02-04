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
    <div class="mx-auto max-w-7xl flex justify-center lg:px-8 md:flex md:space-x-6">
      <div class="overflow-hidden sm:rounded-lg md:w-1/4">
        <div class="flex h-full w-full flex-col overflow-y-auto bg-white pb-12">
          <x-search-filter :types="$types" :regions="$regions"/>
        </div>
      </div>
      <div class="mx-auto md:w-3/4">
        <div class="grid grid-cols-1 gap-6 p-6 md:grid-cols-2 lg:grid-cols-3 ">
            <x-result-card></x-result-card>
            <x-result-card></x-result-card>
            <x-result-card></x-result-card>
            <x-result-card></x-result-card>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>