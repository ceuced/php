<x-layout>
    <div class="alert alert-warning alert-dismissible show" role="alert">
        <i class="bi bi-exclamation-triangle"></i>
        <strong>Holy guacamole!</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    @isset($name)
        <h1>Welcome {{ $name }}</h1>
    @endisset

    @if ($type == 'corporate')
        <h2><i class="bi bi-building"></i> Corporate</h2>
    @elseif ($type == 'sme')
        <h2><i class="bi bi-briefcase"></i> Small Medium Enterprise</h2>
    @else
        <h2><i class="bi bi-person"></i> Personal</h2>
    @endif

    Count
    @for ($i = 0; $i < 5; $i++)
        {{ $i }}
    @endfor

    <ul>
        @foreach ($fruits as $fruit)
            <li>{{ $fruit }}</li>
        @endforeach
    </ul>

    <input type="text" @class(['form-control', 'is-invalid' => isset($error)]) />

    <input 
        type="checkbox" 
        class="form-check-input" 
        @checked(true) 
    />

    <select class="form-select">
        @foreach ($fruits as $fruit)
            <option @selected($fruit == $currentFruit)>{{ $fruit }}</option>
        @endforeach
    </select>

    <input type="text" class="form-control" @readonly(true) value="read only" />

    @includeWhen(false, 'form', ['name' => $name])

    @each('badge', $fruits, 'fruit')
</x-layout>
