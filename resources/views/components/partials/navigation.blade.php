@props(['active'=>false, 'url'=>request()->getPathInfo(),])
<div class="inline-flex w-full bg-black items-center ">
  <ul class="flex gap-2 text-green-600 w-4/5 items-center justify-center p-4">
    <li><a
        class="px-4 py-2 {{$url ===  '/'  ? 'bg-slate-600 text-white': 'bg-slate-800 text-slate-500' }} rounded-md text-xs hover:text-slate-100 transition duration-300 hover:bg-slate-600"
        href="/">Home</a></li>
    <li><a
        class="px-4 py-2  {{ $url === '/blog'  ? 'bg-slate-600 text-white': 'bg-slate-800 text-slate-500' }} rounded-md text-xs hover:text-slate-100 transition duration-300 hover:bg-slate-600"
        href="{{ route('blog') }}">Blog</a></li>
    <li><a
        class="px-4 py-2  {{ $url === '/nosotros' ? 'bg-slate-600 text-white': 'bg-slate-800 text-slate-500' }} rounded-md text-xs hover:text-slate-100 transition duration-300 hover:bg-slate-600"
        href="{{ route('about') }}">Nosotros</a>
    </li>
    <li><a
        class="px-4 py-2 {{$url ===  '/contacto' ? 'bg-slate-600 text-white': 'bg-slate-800 text-slate-500' }} rounded-md text-xs hover:text-slate-100 transition duration-300 hover:bg-slate-600"
        href="{{ route('contact') }}">Contacto</a>
    </li>
    <li>
      <a
        class="px-4 py-2  {{ $url === '/index'  ? 'bg-slate-600 text-white': 'bg-slate-800 text-slate-500' }} rounded-md text-xs hover:text-slate-100 transition duration-300 hover:bg-slate-600"
        href="{{ route('posts.index') }}">Posts List</a>
    </li>
    <li>
      <a
        class="px-4 py-2  {{ $url === '/posts/create'  ? 'bg-slate-600 text-white': 'bg-slate-800 text-slate-500' }} rounded-md text-xs hover:text-slate-100 transition duration-300 hover:bg-slate-600"
        href="{{ route('posts.create') }}">Nuevo Post</a>
    </li>
  </ul>
  <ul class="inline-flex justify-center gap-4">
    @if (Route::has('login'))
    @auth
      <p class="text-gray-400">
        {{ Auth::user()->name }}</p>
    <li>
      <a href="{{ route('dashboard') }}" class="px-4 py-2 bg-slate-800 text-slate-500 rounded-md  text-xs hover:text-slate-100 transition duration-300 hover:bg-slate-600">Dashboard</a>
    </li>
    <li>
      <a href="{{ route('logout') }}" class="px-4 py-2 bg-slate-800 text-slate-500 rounded-md  text-xs hover:text-slate-100 transition duration-300 hover:bg-slate-600">Desconectarse</a>
    </li>
      @else
    <li>
      <a href="{{ route('login') }}" class="px-4 py-2 bg-slate-800 text-slate-500 rounded-md  text-xs hover:text-slate-100 transition duration-300 hover:bg-slate-600">Login</a>
    </li>
    @if (Route::has('register'))
      <li>
      <a href="{{ route('register') }}"
        class="px-4 py-2 bg-slate-800 text-slate-500 rounded-md  text-xs hover:text-slate-100 transition duration-300 hover:bg-slate-600">
        Register
      </a>
      </li>
    @endif
    @endauth
    @endif
  </ul>
</div>