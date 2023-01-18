@extends('layouts.admin')

@section('content')
    <div class="container mt-3">
        <h1 class="text-center">{{ $project->title }}</h1>
        <div class="d-flex justify-content-between">
            <h5>{{ $project->created_at }}</h5>
            <p> {{ $project->slug }}</p>
        </div>
        <div class="text-center">
            @if ($project->cover_image)
                <img class="w-50" src="{{ asset('storage/' . $project->cover_image) }}" alt="">
            @else
                <div class="w-50 bg-secondary py-4 text-center d-inline-block">NO FILE</div>
            @endif
        </div>
        <p class="mt-3">{{ $project->content }}</p>
    </div>
@endsection
