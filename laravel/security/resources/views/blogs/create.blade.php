<x-layout>
    <form method="POST" action="{{ route('blogs.update') }}">
        @csrf()
        @include('blogs.form', ['users' => $users,'blog' => $blog])
    </form>
</x-layout>
