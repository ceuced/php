<x-layout>
    <h1>{{ $blog->title }}</h1>
    <p>Author: {{ $blog->user->name }}</p>
    <p class="lead">{{  $blog->content }}</p>
</x-layout>
