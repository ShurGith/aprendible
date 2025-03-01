<x-app-layout meta-title="📰 Crear nueva entrada" meta-description="Crear una nueva entrada de post">
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
      {{ __('New Post') }}
    </h2>
  </x-slot>
  <div class="py-12">
    <div class="mas-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow">
        <div class="p-6 text-gray-900 dark:text-gray-100">
          <form class="w-full flex items-center justify-center" action="{{ route('posts.store') }}" method="POST">
            @csrf
            <div class="flex flex-col mt-4 w-2/5 p-4 gap-2">
              @include('posts.form-fields')
              <button
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 max-w-fit mx-auto">{{ __('Send') }}</button>
            </div>
          </form>
          <div class=" w-full mt-12 flex
      ">
            <button
              class="flex justify-center gap-4  mx-auto px-6 py-2 rounded-lg bg-gray-500 text-white  hover:bg-gray-800 transition duration-300 "
              onclick="history.go(-1);" class="btn-go-back"> ⬅️<p>{{__('Back')}}</p>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>

