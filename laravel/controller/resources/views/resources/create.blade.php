<x-layout>
    <h1>Creating Resource</h1>
    <form method="post" action="/resources">
        @csrf()
        <label for="name">Name</label>
        <input type="text" id="name" name="name" />
        <label for="email">E-Mail</label>
        <input type="text" id="email" name="email" />
        <button type="submit">Save</button>
    </form>
</x-layout>
