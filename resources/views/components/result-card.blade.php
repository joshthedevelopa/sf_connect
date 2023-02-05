<div class="w-full">
  <div class="overflow-hidden rounded-lg bg-white">
    <img src="https://cdn.tailgrids.com/2.0/image/application/images/cards/card-01/image-01.jpg" alt="image"
      class="w-full" />
    <div class="p-4">
      <h3>
        <a href="javascript:void(0)" class="text-dark hover:text-primary block text-base font-semibold xl:text-lg">
          {{ $name }}
        </a>
      </h3>
      <span class="text-gray-800 text-sm leading-relaxed block">{{ $type }}</span>
      <p class="text-gray-600 my-4 text-sm leading-relaxed">
        {{ $description }}
      </p>
      <div class="flex justify-end">
        <a href="{{ route('show', ['id' => $id ]) }}" class="text-indigo-900 hover:text-primary p-3 text-base font-semibold underline">
          Details
        </a>
      </div>
    </div>
  </div>
</div>