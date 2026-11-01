@extends('admin.template')
@section('title', 'Tambah Project')
@section('content')
    <div class="card border-0 shadow-sm">
        <div class="card-body">
            <h5 class="mb-3">Tambah Project</h5>
            <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Gambar</label>
                    <img id="preview" src="" alt="Preview" class="img-thumbnail"
                        style="width: 300px; object-fit: cover;">
                    <input type="file" name="image" id="image" class="form-control" accept="image/*">
                </div>
                <div class="mb-3">
                    <label class="form-label">Judul</label>
                    <input type="text" name="title" class="form-control" value="{{ old('title') }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <textarea name="description" rows="4" class="form-control">{{ old('description') }}</textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Teknologi</label>
                    <input type="text" name="teknologi" class="form-control" value="{{ old('teknologi') }}"
                        placeholder="Laravel, MySQL, Bootstrap">
                </div>
                <div class="mb-3">
                    <label class="form-label">Status</label>
                    <select name="status" class="form-select">
                        <option value="selesai" @selected(old('status') == 'selesai')>Selesai</option>
                        <option value="In progress" @selected(old('status') == 'In progress')>In progress</option>
                    </select>
                </div>

                <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary">Kembali</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        document.getElementById('image').addEventListener('change', function(e) {
            const file = e.target.files[0];
            const preview = document.getElementById('preview');

            if (file) {
                preview.src = URL.createObjectURL(file);
                preview.classList.remove('d-none');
            } else {
                preview.src = '';
                preview.classList.add('d-none');
            }
        });
    </script>
@endpush
