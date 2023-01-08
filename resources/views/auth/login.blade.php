@extends('auth.layout')
@section('content')
<div>
  <x-logo class="mx-auto h-12 w-auto" />
  <h2>{{ __('Sign in to your account') }}</h2>
  <p>{{ __('Use the provided email and password') }}</p>
</div>
<x-form method="POST" action="{{ route('login') }}">
  @if ($errors->any())
    <x-notification style="error">
      <h2>{{ __('Es ist ein Fehler aufgetreten.') }}</h2>
      <ul>
        @foreach($errors->all() as $error)
          <li>
            {{ $error}}
          </li>
        @endforeach
      </ul>
    </x-notification>
  @endif

  @if (session('status'))
    <div class="mb-4 font-medium text-sm text-green-600">
      {{ session('status') }}
    </div>
  @endif

  <x-input label="{{ __('E-Mail') }}" type="email" name="email" required />
  <x-input label="{{ __('Password') }}" type="password" name="password" required />
  <x-button label="{{ __('Login') }}" type="submit" name="login">
    <span class="absolute inset-y-0 left-0 flex items-center pl-3">
      <svg class="h-5 w-5 text-electric-violet-500 group-hover:text-electric-violet-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
        <path fill-rule="evenodd" d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z" clip-rule="evenodd" />
      </svg>
    </span>
  </x-button>
  <a href="{{ route('password.request') }}" class="helper-link">
    {{ __('Forgot password?') }}
  </a>
</x-form>
@endsection