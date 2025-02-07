<div class="flex justify-around items-center w-full bg-gray-800 ">
  
  <img class="size-8" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
  
  <div class="flex gap-2 text-green-600 items-center justify-center p-4">
    <x-partials.nav-link href="{{ route('home') }}"
                         :active="request()->routeIs('home')">{{  __('Home') }}</x-partials.nav-link>
    <x-partials.nav-link href="{{ route('blog') }}"
                         :active="request()->routeIs('blog')">{{ __('Blog') }}</x-partials.nav-link>
    <x-partials.nav-link href="{{ route('about') }}"
                         :active="request()->routeIs('about')">{{__('About Us')}}</x-partials.nav-link>
    <x-partials.nav-link href="{{ route('contact') }}"
                         :active="request()->routeIs('contact')">{{__('Contact')}}</x-partials.nav-link>
    <x-partials.nav-link href="{{ route('posts.index') }}"
                         :active="request()->routeIs('posts.index')">{{__('Post List')}}</x-partials.nav-link>
    @auth
      <x-partials.nav-link href="{{ route('posts.create') }}"
                           :active="request()->routeIs('posts.create')">{{__('New Post')}}</x-partials.nav-link>
    @endauth
  </div>
  <div class="inline-flex justify-center items-center gap-4">
    @if (Route::has('login'))
      @auth
        <x-partials.nav-link href="{{ url('dashboard') }}" :active="false">{{__('Dashboard')}}</x-partials.nav-link>
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <button
            class="bg-slate-700 text-white px-4 py-2 rounded-md text-xs transition duration-300 hover:bg-slate-500"
            onclick="event.preventDefault();
            this.closest('form').submit();">
            {{ __('Log Out') }}
          </button>
        </form>
        
        <h6 class="text-gray-400 text-sm">{{ Auth::user()->name }}</h6>
        <img class="size-10 rounded-full"
             src="{{ Auth::user()->avatar }}">
      @else
        <x-partials.nav-link href="{{ route('login') }}">{{__('Login')}}</x-partials.nav-link>
        @if (Route::has('register'))
          <a href="{{ route('register') }}"
             class="px-4 py-2 bg-slate-700 text-white rounded-md  text-xs transition duration-300 hover:bg-slate-500">
            {{ __('Register') }}
          </a>
        @endif
      
      @endauth
    @endif
  </div>
</div>
