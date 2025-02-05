<x-layout title="{{ $post->title }}">
  <div class="w-full justify-center flex items-center">
    <div class="flex  flex-col w-2/3">
      <h2 class="text-3xl font-bold underline text-blue-700 mb-2">{{ $post->title }}</h2>
      <h4 class="text-gray-400 mb-2 ">{{ $post->user->name }}</h4>
      <p>{{ $post->content }}</p>
      <div class="p-24 flex gap-4 flex-col">
        @foreach($post->comments as $comment)
          <div class="text-slate-400  text-sm">
            <h6 class="mt-4 mb-1 mb-2 ">
              Comentario:<small>{{ $comment->created_at->format('d-m-Y') }}</small></h6>
            <p>{{ $comment->content }}</p>
          </div>
        @endforeach
      </div>
    </div>
  </div>
  <button
    class="flex justify-center gap-4  mx-auto px-6 py-2 rounded-lg bg-gray-500 text-white  hover:bg-gray-800 transition duration-300 "
    onclick="history.go(-1);" class="btn-go-back"> ⬅️<p>{{__('Back')}}</p>
  </button>
</x-layout>