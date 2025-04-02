<x-layout>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($blogs as $blog)
                <tr>
                    <th scope="row">
                        <a href="{{ route('blogs.show', ['blog' => $blog]) }}">
                            {{ $blog->id }}
                        </a>
                    </th>
                    <td>
                        {{ $blog->title }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>
