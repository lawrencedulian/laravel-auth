@extends('layouts.admin')

@section('content')
    <div class="container mt-4">
        <h2 class="text-center">Create New Project</h2>

        <div class="row justify-content-center">
            <div class="col-8">
                <form action="{{ route('admin.projects.store') }}" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" class="form-control">
                    </div>

                    <div class="form-group mt-3">
                        <label for="content">Content</label>
                        <textarea name="content" id="content" rows="10" class="form-control"></textarea>
                    </div>

                    <button class="btn btn-success mt-3" type="submit">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection
