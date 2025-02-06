<x-app-layout meta-title="🗂️ Indice del Blog">
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
      🗂️ Indice del Blog
    </h2>
  </x-slot>
  <div class="py-12">
    <div class="mas-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow">
        <div class="p-6 text-gray-900 dark:text-gray-100">
          <div class="flex flex-col mb-12">
            @foreach($posts as $post)
              <div
                class="flex items-center justify-between mb-2 pl-4 gap-2 border-b border-slate-300 w-full pr-12 pb-2">
                <div class="inline-flex place-items-center gap-4">
                  <a class="font-[figtree] " href="{{ route('post.show', $post) }}">{{ $post->title }}</a>
                  <p class="text-xs">{{ $post->user->name }}</p>
                  @if($post->comments->count())
                    <p class="text-xs"> - {{ $post->comments->count()}}
                      comentario{{$post->comments->count() > 1 ? 's':''}} </p>
                  @endif
                </div>
                <div class="inline-flex">
                  @auth
                    <a class="border px-2 py-1 rounded-lg bg-blue-500 text-blue-200"
                       href="{{ route('posts.edit', $post->id) }}">Editar</a>
                    <form method="post" action="{{ route('posts.delete', $post) }}">
                      @csrf
                      <button class="cursor-pointer border px-2 py-1 rounded-lg bg-red-500 text-red-200">Borrar
                      </button>
                    </form>
                  @endauth
                </div>
              </div>
            @endforeach
          </div>
          {{ $posts->links() }}
        </div>
      </div>
    </div>
  </div>
</x-app-layout>