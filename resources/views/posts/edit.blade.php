<x-layout meta-title="Editando {{ $post->title }}">
  <form class="w-full flex items-center justify-center" action="{{ route('posts.update', $post->id) }}" method="POST">
    @csrf
    @method('PATCH')
    <div class="flex flex-col mt-4 w-2/5 bg-red-100 p-4 container gap-4">
      <label for="title"> {{__('Title')}}</label>
      <input name="title" id="title" type="text" value="{{old('title', $post->title)}}">
      <p class="error-message text-red-500">
        {{ $errors->first('title') }}
      </p>
      <label for="title"> {{__('Content')}}</label>
      <textarea name="content" id="content">{{old('content', $post->content)}}</textarea>
      <p class="error-message text-red-500">
        {{ $errors->first('content') }}
      </p>
      <button
        class="mx-auto px-6 py-2 rounded-lg bg-slate-500 text-white  max-w-fit hover:bg-gray-800 transition duration-300">{{ __('Send') }}</button>
    </div>
  </form>
  <div class="w-full mt-12 flex">
    <button
      class="flex justify-center gap-4  mx-auto px-6 py-2 rounded-lg bg-gray-500 text-white  hover:bg-gray-800 transition duration-300 "
      onclick="history.go(-1);" class="btn-go-back"> ⬅️<p>{{__('Back')}}</p>
    </button>
  </div>

</x-layout>