

  <button type="{{ $type ?? 'submit' }}" name="{{ $name }}" class="group relative w-auto flex justify-center bg-gray-100 block shadow-inner shadow shadow-primary-200 hover:shadow-md hover:shadow-primary-200 rounded-lg px-4 py-3 @if (isset($icon)) pl-10 @endif text-primary-500 text-sm" {{ $attributes }}>
    @if (isset($icon))
      <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3 text-primary-500">
        {{ $icon }}
      </div>
    @endif
    <span>{{ $label }}</span>
  </button>


