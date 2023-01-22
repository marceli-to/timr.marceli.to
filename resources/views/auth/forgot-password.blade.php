@extends('auth.layout')
@section('content')
<div>
  <x-logo class="mx-auto h-12 w-auto" />
  <h2>{{ __('Request a new password') }}</h2>
  <p>{{ __('No worries – simply enter your email and we\'ll send you a link to reset your old password') }}</p>
</div>
<x-form method="POST" action="{{ route('password.email') }}">
  @if (session('status'))
    <div class="mb-4 text-sm text-green-600">
      {{ session('status') }}
    </div>
  @endif
  <x-input label="{{ __('E-Mail') }}" type="email" name="email" required />
  <x-button label="{{ __('Request password') }}" type="submit" name="request-password" />
  <a href="{{ route('login') }}" class="helper-link">
    {{ __('Back to login') }}
  </a>
</x-form>
@endsection