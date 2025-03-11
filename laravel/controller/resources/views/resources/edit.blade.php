<x-layout>
    <h1>Editing {{ $id }}</h1>
    <form method="post" action="/resources/{{ $id }}">
        @method('PUT')
        @csrf()
        <label for="name">Name</label>
        <input type="text" id="name" name="name" />
        <label for="email">E-Mail</label>
        <input type="text" id="email" name="email" />
        <button type="submit">Save</button>
    </form>
    <form method="post" action="/resources/{{ $id }}">
        @method('DELETE')
        @csrf()
        <button type="submit">Delete</button>
    </form>
</x-layout>
