@props(['activo' =>false])

<label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> {{__('Title')}}</label>
<input name="title" id="title"
       class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-50"
       type="text" value="{{old('title', $post->title)}}">
<p class="error-message text-red-500">
  {{ $errors->first('title') }}
</p>
<label for="content" class="block text-sm font-medium text-gray-900 dark:text-white"> {{__('Content')}}</label>
<textarea name="content" id="content" rows="4"
          class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">{{old('content', $post->content)}}</textarea>
<p class="error-message text-red-500">
  {{ $errors->first('content') }}
</p>
<div class="inline-flex gap-2 items-center">
  <label for="publicado" class="block text-sm font-medium text-gray-900 dark:text-white">{{ __('Published') }}</label>
  {{--  <input type="checkbox"
           class="w-full rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">--}}
  <div class="flex h-6 items-center">
    <!-- Enabled: "bg-indigo-600", Not Enabled: "bg-gray-200" -->
    <button id="switcher" type="button" checked=true
            class="flex w-8 flex-none cursor-pointer rounded-full bg-gray-200 p-px ring-1 ring-inset ring-gray-900/5 transition-colors duration-200 ease-in-out focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
            role="switch" aria-checked aria-labelledby="switch-1-label">
      <!-- Enabled: "translate-x-3.5", Not Enabled: "translate-x-0" -->
      <span
        class="size-4 translate-x-3.5 transform rounded-full bg-white shadow-sm ring-1 ring-gray-900/5 transition duration-200 ease-in-out"></span>
    </button>
  </div>
  <input name="published_at" type="hidden" value="">
</div>
<script>
	document.addEventListener('DOMContentLoaded', () => {
		const switcher = document.getElementById('switcher');
		const publicado = document.querySelector('input[name=published_at]')
		switcher.addEventListener('click', () => {
			if (!switcher.ariaChecked) {
				switcher.ariaChecked = true
				publicado.value = true
			} else {
				switcher.ariaChecked = ""
				publicado.value = ""
			}
			switcher.firstElementChild.classList.toggle('translate-x-3.5')
			switcher.classList.toggle('bg-indigo-600')
		})
	})
</script>