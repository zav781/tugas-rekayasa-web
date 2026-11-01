@extends('layouts.app')

@section('title', 'home')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow-sm border-0">
                <div class="card-body justify-content-center px-4">
                    <h3>Selamat datang di halaman home</h3>
                    <a class="btn btn-success btn-lg" href="{{ url('/profile') }}">Lihat Detail</a>
                </div>
            </div>
        </div>
    </div>
@endsection
