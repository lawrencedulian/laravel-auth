@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2>My Projects</h2>

        <div class="row">
            <div class="col-8">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Titolo</th>
                            <th scope="col">Data Creazione: </th>
                            <th scope="col">Azioni</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $proj)
                            <tr>
                                <th scope="row">{{ $proj->title }}</th>
                                <td>{{ $proj->created_at }}</td>
                                <td>
                                    <a class="btn btn-success" href="{{ route('admin.projects.show', $proj->slug) }}">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
