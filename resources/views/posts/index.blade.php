<x-layout title="Indice del Blog">
  <h1>Indice de los posts</h1>
  @foreach($posts as $post)
    <h5><a href="{{ route('post.show', $post) }}">{{ $post->title }}</a></h5>
  @endforeach
</x-layout>