@extends('layouts.app')

@section('title', 'home')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-white text-center py-4">
                    <div class="d-flex justify-content-center mb-3">
                        <img src="image/img1.jpg" alt="" style="width: 120px; height: 120px; object-fit:cover;">
                    </div>
                    <h4 class="mb-0 fw-bold">{{ $mahasiswa['nama'] }}</h4>
                    <span class="badge bg-success mt-1">{{ $mahasiswa['status'] }}</span>
                    <div class="card-body px-4">
                        <ul>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span class="fw-bold text-muted">NIM</span>
                                <span>{{ $mahasiswa['nim'] }}</span>
                            </li>

                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span class="fw-bold text-muted">Email</span>
                                <span>{{ $mahasiswa['email'] }}</span>
                            </li>

                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span class="fw-bold text-muted">Program Studi</span>
                                <span>{{ $mahasiswa['prodi'] }}</span>
                            </li>

                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span class="fw-bold text-muted">Kampus</span>
                                <span>{{ $mahasiswa['kampus'] }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
