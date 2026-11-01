@extends('layouts.app')

@section('title', 'project')

@section('content')
    <div class="mb-4 text-center">
        <h2 class="fw-bold">Portofolio Projects</h2>
        <p class="text-muted">Daftar Project Yang pernah dikerjakan Mahasiswa</p>
    </div>
    <div class="row justify-content-center">
        @foreach ($projects as $project)
            <div class="col-md-4">
                <div class="card h-100 shadow-sm border-0">
                    <img src="{{ asset('image/' . $project->image) }}" alt="Project image" class="card-img-top"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <span class="badge {{ $project->status == 'selesai' ? 'bg-success' : 'bg-danger' }} mb-2">
                            {{ $project->status }}
                        </span>
                        <h5 class="card-tittle">{{ $project->title }}</h5>
                        <p class="card-text">{{ Str::limit($project->description, 100) }}</p>
                    </div>
                    <div class="card-footer bg-white border-0 pb-3">
                        <div class="mb-2">
                            <small class="text-muted">Tech : {{ $project->teknologi }}</small>
                        </div>
                        <a href="{{ route('project.show', $project->id) }}" class="btn btn-primary w-100">Lihat detail</a>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="d-flex justify-content-center mt-5">
            {{ $projects->links('pagination::bootstrap-5') }}
        </div>
    </div>

@endsection
