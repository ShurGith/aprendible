<x-layout title="Indice del Blog">
  <h1 class="font-serif text-xl text-orange-600 pl-8 py-8">Indice de los posts</h1>
  <div class="flex flex-col mb-12">
    @foreach($posts as $post)
      <div class="flex items-center mb-2 pl-4 gap-2 border-b border-slate-300 max-w-fit pr-12 pb-2">
        <a class="font-serif" href="{{ route('post.show', $post) }}">{{ $post->title }}</a>
        <p class="text-xs">{{ $post->user->name }}</p>
        @if($post->comments->count())
          <p class="text-xs"> - {{ $post->comments->count()}} comentario{{$post->comments->count() > 1 ? 's':''}} </p>
        @endif
      </div>
    @endforeach
  </div>
  {{ $posts->links() }}
</x-layout>