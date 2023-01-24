
<div class="mt-8">
  <button type="{{ $type ?? 'submit' }}" name="{{ $name }}" class="group relative flex w-full justify-center rounded border border-transparent bg-primary-600 py-3 px-4 text-sm font-medium text-white hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2" {{ $attributes }}>
    {{ $slot }}
    <span>{{ $label }}</span>
  </button>
</div>

