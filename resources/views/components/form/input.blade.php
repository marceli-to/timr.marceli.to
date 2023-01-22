<div class="mb-6 @if ($errors->has($name)) has-error @endif">
  @if($label ?? null)
    <label class="block text-sm text-gray-900 mb-2 {{ ($required ?? false) ? 'is-required' : '' }}" for="{{ $name }}">
      {{ $label }} {{ ($required ?? false) ? '*' : '' }}
    </label>
  @endif
  <input
    class="{{ $errors->has($name) ? 'has-error' : '' }} relative block w-full appearance-none bg-white rounded-md border border-gray-200 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-electric-violet-500 focus:outline-none focus:ring-electric-violet-500 sm:text-sm"
    type="{{ $type ?? 'text' }}"
    name="{{ $name }}"

    @if ($placeholder)
      placeholder="{{ $placeholder ?? '' }}"
    @endif
    value="{{ old($name, $value ?? '') }}"
    {{ ($required ?? false) ? 'required' : '' }}

    @if ($autocomplete != 'false')
      autocomplete="off"
    @endif
  >
</div>