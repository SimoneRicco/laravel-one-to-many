@extends('admin.layouts.base')

@section('contents')

    <h1>Add new project</h1>
    <form method="POST" action="{{ route('admin.projects.store') }}" novalidate>
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input
                type="text"
                class="form-control @error('title') is-invalid @enderror"
                id="title"
                name="title"
                value="{{ old('title') }}"
            >
            @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="url_image" class="form-label">Image url</label>
            <input
                type="url"
                class="form-control @error('url_image') is-invalid @enderror"
                id="url_image"
                name="url_image"
                value="{{ old('url_image') }}"
            >
            @error('url_image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <select
                class="form-select @error('type_id') is-invalid @enderror"
                id="type"
                name="type_id"
            >
                @foreach ($types as $t)
                    <option value="{{ $t->id }}">{{ $t->name }}</option>
                @endforeach
            </select>
            @error('type_id')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea
                class="form-control @error('content') is-invalid @enderror"
                id="content"
                rows="10"
                name="content">{{ old('content') }}</textarea>
            @error('content')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button class="btn btn-primary">Save</button>
    </form>

@endsection