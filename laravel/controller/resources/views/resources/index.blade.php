<x-layout>
    @if (session('status'))
        <div class="alert alert-success alert-dismissible">
            {{ session('status') }}
        </div>
    @endif
</x-layout>
