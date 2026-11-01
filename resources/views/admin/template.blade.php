<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('DataTables/datatables.min.css') }}">
    <script src="{{ asset('DataTables/jquery-3.6.1.js') }}"></script>
    <script src="{{ asset('DataTables/datatables.min.js') }}"></script>
</head>
<style>
    body {
        background-color: #f8f9fa;
    }

    .admin-sidebar {
        width: 250px;
        background-color: #343a40;
        color: #fff;
        min-height: 100vh;
        position: fixed;
        top: 0;
        left: 0;
        padding-top: 20px;
    }

    .admin-sidebar .nav-link {
        color: #fff;
        padding: 10px 20px
    }

    .admin-sidebar .nav-link:hover {
        background-color: #495057;
        color: #fff;
    }

    .admin-content {
        margin-left: 250px;
        padding: 30px;
    }

    @media (max-width:768px) {
        .admin-sidebar {
            width: 100%;
            position: relative;
            height: auto;
        }

        .admin-content {
            margin-left: 250px;
            padding: 30px;
        }
    }
</style>

<body>
    <div class="admin-sidebar shadow">
        <h4 class="text-center fw-bold text-white pb-3 border-bottom border-secondary">Admin Panel</h4>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('admin.home') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('admin.projects.index') }}">Projects</a>
            </li>
        </ul>
    </div>
    <div class="admin-content">
        <div
            class="d-flex justify-content-between align-items-center pb-3 mb-4 border-bottom bg-white rounded shadow-sm">
            <h3 class="fw-bold mb-0">Admin Dashboard</h3>
            <span class="text-muted fw-semibold">Halo, Administrator</span>
        </div>
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @yield('content')
    </div>
    @stack('scripts')
</body>

</html>
