<div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ @old('title', $blog?->title) }}" />
    @error('title')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="mb-3">
    <label for="content" class="form-label">Content</label>
    <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content" rows="3">{{ @old('content', $blog?->content) }}</textarea>
    @error('content')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="mb-3">
    <label for="user_id" class="form-label">Author</label>
    <select class="form-select" id="user_id" name="user_id">
        @foreach ($users as $user)
            <option value="{{ $user->id }}" @selected($user->id === $blog?->user_id)>{{ $user->name }}</option>
        @endforeach
    </select>
</div>
<div class="col-12">
    <button class="btn btn-primary" type="submit">Save</button>
</div>

