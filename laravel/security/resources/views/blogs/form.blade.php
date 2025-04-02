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
<div class="col-12">
    <button class="btn btn-primary" type="submit">Save</button>
</div>

