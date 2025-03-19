<x-layout>
    <form method="POST" action="{{ route('blogs.update', ['blog' => $blog]) }}">
        @csrf()
        @method('PATCH')
        @include('blogs.form', ['users' => $users,'blog' => $blog])
    </form>
</x-layout>
