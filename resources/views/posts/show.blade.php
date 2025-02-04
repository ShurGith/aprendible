<x-layout title="{{ $post->title }}">
  <div class="w-full justify-center flex items-center">
    <div class="flex  flex-col w-2/3">
      <h2 class="text-3xl font-bold underline text-blue-700 mb-2">{{ $post->title }}</h2>
      <h4 class="text-gray-400 mb-2 ">{{ $post->user->name }}</h4>
      <p>{{ $post->content }}</p>
      <div class=" mt-2">
        @foreach($post->comments as $comment)
          <h6 class="mt-4 mb-1 text-sm text-slate-400 ">Comentario:<small>{{ $comment->created_at->format('d-m-Y') }}</small></h6>
          <p>{{ $comment->content }}</p>
        @endforeach
      </div>
    </div>
  </div>
</x-layout>