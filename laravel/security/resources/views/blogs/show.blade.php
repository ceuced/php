<x-layout>
    <h1>{{ $blog->title }}</h1>
    <p>Author: {{ $blog->user->name }}</p>
    <p class="lead">{{  $blog->content }}</p>
    <form method="POST" action="{{ route('blogs.destroy', ['blog' => $blog]) }}" 
        onsubmit="return confirm('Are you sure you want to delete?')">
        @csrf()
        @method("DELETE")
        <a class="btn btn-primary" href="{{ route('blogs.edit', ['blog' => $blog]) }}" role="button">Edit</a>
        @can('delete blog')
            <button class="btn btn-danger" type="submit">Delete</button>
        @endcan
    </form>
</x-layout>
