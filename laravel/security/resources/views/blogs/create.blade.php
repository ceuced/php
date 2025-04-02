<x-layout>
    <form method="POST" action="{{ route('blogs.store') }}">
        @csrf()
        @include('blogs.form', ['users' => $users,'blog' => $blog])
    </form>
</x-layout>
