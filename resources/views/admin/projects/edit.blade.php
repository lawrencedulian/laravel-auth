@extends('layouts.admin')

@section('content')
    <div class="container mt-4">
        <h2 class="text-center">Edit Project</h2>

        <div class="row justify-content-center">
            <div class="col-8">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li> {{ $error }} </li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('admin.projects.update', $project->slug) }}" method="POST"
                    enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group mb-3">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" value="{{ old('title', $project->title) }}"
                            class="form-control @error('title') is-invalid @enderror">
                        @error('title')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="cover_image">Image</label>
                        <input type="file" name="cover_image" id="cover_image"
                            class="form-control @error('cover_image') is-invalid @enderror">
                        @error('cover_image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <div id="img_preview" class="mt-3">
                            @if ($project->cover_image)
                                <img class="w-50" src="{{ asset('storage/' . $project->cover_image) }}">
                            @else
                                <p>No Image</p>
                            @endif
                        </div>
                    </div>

                    <div class="form-group mt-3">
                        <label for="content">Content</label>
                        <textarea name="content" id="content" rows="10" class="form-control @error('content') is-invalid @enderror">{{ old('content', $project->content) }}</textarea>
                        @error('content')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button class="btn btn-success mt-3" type="submit">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection
