<x-layout>
    <x-slot:title>
        About Page
    </x-slot>
    <div>
        <h1>About</h1>
        <img src="{{ asset('sample.jpg') }}" />
        <img src="{{ asset('sample.gif') }}" />
        <p>{{ $name }} - {{ $course }}</p>
    </div>
</x-layout>