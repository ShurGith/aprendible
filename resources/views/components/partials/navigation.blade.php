@props(['active'=>false, 'url'=>request()->getPathInfo(),])

<ul class="flex gap-2 text-green-600 w-full items-center justify-center p-4 bg-black">
  <li><a
      class="px-4 py-2 {{$url ===  '/'  ? 'bg-slate-600 text-white': 'bg-slate-800 text-slate-500' }}   rounded-full text-xs hover:text-slate-100 transition duration-300 hover:bg-slate-600"
      href="/">Home</a></li>
  <li><a
      class="px-4 py-2  {{ $url === '/blog'  ? 'bg-slate-600 text-white': 'bg-slate-800 text-slate-500' }} rounded-full text-xs hover:text-slate-100 transition duration-300 hover:bg-slate-600"
      href="{{ route('blog') }}">Blog</a></li>
  <li><a
      class="px-4 py-2  {{ $url === '/nosotros' ? 'bg-slate-600 text-white': 'bg-slate-800 text-slate-500' }} rounded-full text-xs hover:text-slate-100 transition duration-300 hover:bg-slate-600"
      href="{{ route('about') }}">Nosotros</a>
  </li>
  <li><a
      class="px-4 py-2 {{$url ===  '/contacto' ? 'bg-slate-600 text-white': 'bg-slate-800 text-slate-500' }} rounded-full text-xs hover:text-slate-100 transition duration-300 hover:bg-slate-600"
      href="{{ route('contact') }}">Contacto</a>
  </li>
  <li>
    <a
      class="px-4 py-2  {{ $url === '/index'  ? 'bg-slate-600 text-white': 'bg-slate-800 text-slate-500' }} rounded-full  text-xs hover:text-slate-100 transition duration-300 hover:bg-slate-600"
      href="{{ route('posts.index') }}">Posts List</a>
  </li>
  <li>
    <a
      class="px-4 py-2  {{ $url === '/index'  ? 'bg-slate-600 text-white': 'bg-slate-800 text-slate-500' }} rounded-full  text-xs hover:text-slate-100 transition duration-300 hover:bg-slate-600"
      href="{{ route('posts.create') }}">Nuevo Post</a>
  </li>
</ul>