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