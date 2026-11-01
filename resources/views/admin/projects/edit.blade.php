@extends('admin.template')
@section('title', 'Edit Project')
@section('content')
    <div class="card border-0 shadow-sm">
        <div class="card-body">
            <h5 class="mb-3">Edit Project</h5>
            <form action="{{ route('admin.projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label">Gambar</label>
                    @if ($project->image)
                        <div class="mb-2">
                            <img src="{{ asset('image/' . $project->image) }}" class="img-thumbnail" style="width: 300px;"
                                alt="">
                        </div>
                    @endif
                    <input type="file" name="image" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Judul</label>
                    <input type="text" name="title" class="form-control" value="{{ old('title', $project->title) }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <textarea name="description" rows="4" class="form-control">{{ old('description', $project->description) }}</textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Teknologi</label>
                    <input type="text" name="teknologi" class="form-control"
                        value="{{ old('teknologi', $project->teknologi) }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Status</label>
                    <select name="status" class="form-select">
                        <option value="selesai" @selected(old('status', $project->status) == 'selesai')>Selesai</option>
                        <option value="In progress" @selected(old('status', $project->status) == 'In progress')>In progress</option>
                    </select>
                </div>
                <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary">Kembali</a>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection
