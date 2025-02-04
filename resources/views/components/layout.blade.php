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
  {{ $slot }}
  
  @isset($sidebar)
    <div id="sidebar">
      <h2>Este es el SideBar</h2>
      {{ $sidebar }}
    </div>
  
  @endisset
</div>
<x-partials.footer/>

</body>
</html>