<div class="form-group">
    <label for="title">Título</label>
    <input type="text" id="title" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $post->title ?? '') }}" required>
    @error('title')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="content">Contenido</label>
    <textarea id="content" name="content" class="form-control @error('content') is-invalid @enderror" rows="10" required>{{ old('content', $post->content ?? '') }}</textarea>
    @error('content')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="category_id">Categoría</label>
    <select name="category_id" id="category_id" class="form-control">
        @foreach ($categories as $category)
            <option value="{{ $category->id }}" @if ($post->category && $post->category->id == $category->id) selected @endif>{{ $category->name }}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="posted">Estado</label>
    @include('dashboard.partial.option-yes-not', ['name' => 'posted', 'value' => $post->posted])
</div>
