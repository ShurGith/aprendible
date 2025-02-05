<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="{{ $metaDescription ?? 'Descripción por defecto' }}">
  <title>{{ $metaTitle ?? 'MetaTitulo por defecto'}}</title>
  
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-[figtree] grid min-h-screen justify-items-center w-full " style="grid-template-rows: auto 1fr auto">
{{--@include('components.partials.navigation')--}}
<x-partials.navigation/>
<div class="w-10/12 bg-gray-100">
  @session('status')
  <div class="flex  place-self-end w-2/6">
    <div id="div-sesion"
         class="absolute top-12 opacity-0 translate-x-full mt-2 bg-green-600 text-green-200 py-2 w-2/3  transition duration-1000 pl-4">
      Este es el texto
      {{ $value }}
    </div>
  </div>
  @endsession
  @session('success')
  <div class="flex  place-self-end w-2/6">
    <div id="div-sesion"
         class="absolute top-12 opacity-0 translate-x-full mt-2 bg-red-600 text-red-100 py-2 w-2/3  transition duration-1000 pl-4">
      Este es el texto
      {{ $value }}
    </div>
  </div>
  @endsession
  {{ $slot }}
  
  @isset($sidebar)
    <div id="sidebar">
      <h2>Este es el SideBar</h2>
      {{ $sidebar }}
    </div>
  
  @endisset
</div>
<x-partials.footer/>
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