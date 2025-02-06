<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="description" content="{{ $metaDescription }}">
  
  <title>{{ $metaTitle }}</title>
  
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>
  
  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
<div class="min-h-screen bg-gray-100 dark:bg-gray-900">
  
  @include('layouts.navigation')
  @session('status')
  <div class="flex  place-self-end w-2/6">
    <div id="div-sesion"
         class="absolute top-12 opacity-0 translate-x-full mt-2 bg-green-600 text-green-200 py-2 w-2/3  transition duration-1000 pl-4">
      {{ $value }}
    </div>
  </div>
  @endsession
  @session('success')
  <div class="flex  place-self-end w-2/6">
    <div id="div-sesion"
         class="absolute top-12 opacity-0 translate-x-full mt-2 bg-red-600 text-red-100 py-2 w-2/3  transition duration-1000 pl-4">
      {{ $value }}
    </div>
  </div>
  @endsession
  <!-- Page Heading -->
  @isset($header)
    <header class="bg-white dark:bg-gray-800 shadow">
      <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        {{ $header }}
      </div>
    </header>
  @endisset
  
  <!-- Page Content -->
  <main>
    {{ $slot }}
  </main>
</div>
<script>
	const divSesion = document.getElementById('div-sesion')
	if (divSesion) {
		setTimeout(() => {
			divSesion.classList.remove('translate-x-full', 'opacity-0')
		}, 1000)
		setTimeout(() => {
			divSesion.classList.add('translate-x-full', 'opacity-0')
		}, 5000)
		
	}
</script>
</body>
</html>
