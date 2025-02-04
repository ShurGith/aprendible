<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ $metaTitle ?? 'MetaTitulo por defecto'}}</title>
  <meta name="description" content="{{ $metaDescription ?? 'Descripción por defecto' }}">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="grid min-h-screen justify-items-center w-full " style="grid-template-rows: auto 1fr auto">
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