<div class="mb-6 @if ($errors->has($name)) has-error @endif">
  @if($label ?? null)
    <label class="block font-mono font-semi text-sm text-gray-900 mb-3" for="{{ $name }}">
      {{ $label }} {{ ($required ?? false) ? '*' : '' }}
    </label>
  @endif
  <input
    class="{{ $errors->has($name) ? 'has-error' : '' }} relative block w-full appearance-none bg-white rounded border border-gray-200 px-4 py-3 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-primary-500 focus:outline-none focus:ring-primary-500 sm:text-sm"
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