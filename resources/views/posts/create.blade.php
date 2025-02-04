<x-layout title="Crear nueva entrada">
  <form class="w-full flex items-center justify-center" action="{{ route('posts.store') }}" method="POST">
    @csrf
    <div class="flex flex-col mt-4 w-2/5 bg-red-100 p-4 container gap-4">
      <label for="title"> {{__('Title')}}</label>
      <input name="title" id="title" type="text" value="{{old('title')}}">
      <p class="error-message text-red-500">
        {{ $errors->first('title') }}
      </p>
      <label for="title"> {{__('Content')}}</label>
      <textarea name="content" id="content">{{old('content')}}</textarea>
      <p class="error-message text-red-500">
        {{ $errors->first('content') }}
      </p>
      <button
        class="mx-auto px-6 py-2 rounded-lg bg-slate-500 text-white  max-w-fit hover:bg-gray-800 transition duration-300">{{ __('Send') }}</button>
    </div>
  </form>

</x-layout>

