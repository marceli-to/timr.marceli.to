@extends('auth.layout')
@section('content')
<div>
  <x-logo class="mx-auto h-12 w-auto" />
  <h2>{{ __('Change your password') }}</h2>
  <p>{{ __('Set a new password and confirm it, just in case.') }}</p>
</div>
<x-form method="POST" action="{{ route('password.update') }}">
  <input type="hidden" name="token" value="{{ request()->route('token') }}" />
  @if (session('status'))
    <div class="mb-4 text-sm text-green-600">
        {{ session('status') }}
    </div>
  @endif
  <x-input label="{{ __('E-Mail') }}" type="email" name="email" required />
  <x-input label="{{ __('Password') }}" type="password" name="password" required />
  <x-input label="{{ __('Password confirmation') }}" type="password" name="password_confirmation" required />
  <x-button label="{{ __('Request password') }}" type="submit" name="request-password" />
</x-form>
@endsection