<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Organization Detail') }}
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
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex items-center justify-between">
      <div class="p-4 w-1/2 flex justify-center">
        <img loading="lazy" src="https://cdn.tailgrids.com/2.0/image/marketing/images/about/about-01/image-1.jpg" alt=""
          class="w-3/4 rounded-xl" />
      </div>
      <div class="bg-white p-8 w-1/2">
        <span class="text-indigo-500 mb-2 block text-lg font-semibold">
          {{ $user->type }}
        </span>
        <h2 class="text-dark mb-8 text-3xl font-bold sm:text-4xl">
          {{ $user->name }}
        </h2>
        <p class="text-body-color mb-12 text-base">
          {{ $user->description }}
        </p>
      </div>
    </div>
  </div>
  <div class="py-4">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="w-full">
        <form class="bg-white w-1/2 mx-auto p-8 rounded-md">
          <div class="flex flex-wrap mb-6">
            <div class="w-full md:w-1/2 mb-6 md:mb-0">
              <x-input-label for="first_name" :value="__('First Name')" />

              <x-text-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" required />

              <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
            </div>
            <div class="w-full md:w-1/2 px-3">
              <x-input-label for="last_name" :value="__('Last Name')" />

              <x-text-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" required />

              <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
            </div>
          </div>
          <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
              <x-input-label for="email" :value="__('Email Address')" />

              <x-text-input id="email" class="block mt-1 w-full" type="text" name="email" required />

              <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
          </div>
          <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
              <x-input-label for="message" :value="__('Message')" />

              <textarea
                class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm no-resize appearance-none block w-full h-48 resize-none"
                id="message" required></textarea>
                
              <x-input-error :messages="$errors->get('message')" class="mt-2" />
            </div>
          </div>
          <div class="md:flex md:items-center">
            <div class="md:w-2/5">
              <button
                class="w-full text-center cursor-pointer inline-flex items-center px-4 py-2 bg-indigo-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 ml-3"
                type="button">
                Send
              </button>
            </div>
            <div class="md:w-3/5"></div>
          </div>
        </form>
      </div>
    </div>
  </div>
</x-app-layout>