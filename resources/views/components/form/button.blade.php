
<div class="mt-8">
  <button type="{{ $type ?? 'submit' }}" name="{{ $name }}" class="group relative flex w-full justify-center rounded-md border border-transparent bg-electric-violet-600 py-2 px-4 text-sm font-medium text-white hover:bg-electric-violet-700 focus:outline-none focus:ring-2 focus:ring-electric-violet-500 focus:ring-offset-2" {{ $attributes }}>
    {{ $slot }}
    <span>{{ $label }}</span>
  </button>
</div>

