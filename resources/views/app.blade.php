<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>TIMR - marceli.to</title>
@vite('resources/js/app.js')
</head>
<body class="antialised">
  <div>
    @auth
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <x-button type="submit" label="{{ __('Logout') }}" name="logout" />
      </form>
    @endauth
    @guest 
      <a href="{{ route('login') }}">Login</a>
    @endguest
  </div>
  <div class="flex justify-center items-center h-screen">
	  <div id="app"></div>
  </div>
</body>
</html>