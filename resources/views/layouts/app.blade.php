<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Hospital App Dashboard</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <style>
            body {
                min-height: 100vh;
                display: flex;
                flex-direction: column;
            }
            .wrapper {
                flex: 1;
                display: flex;
            }
            .sidebar {
                width: 220px;
                background-color: #343a40;
                color: #fff;
            }
            .sidebar .nav-link {
                color: #adb5bd;
            }
            .sidebar .nav-link.active, .sidebar .nav-link:hover {
                background-color: #495057;
                color: #fff;
            }
            .content {
                flex: 1;
                padding: 20px;
                background: #f8f9fa;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-dark bg-dark sticky-top">
            <div class="container-fluid d-flex justify-content-between">
                <a class="navbar-brand" href="#">🏥 Hospital App</a>
                <form method="POST" action="{{ route('logout') }}" class="d-inline">
                    @csrf
                    <button class="btn btn-danger btn-sm">Logout</button>
                </form>
            </div>
        </nav>

        <div class="wrapper">
            <!-- Sidebar -->
            <div class="sidebar d-flex flex-column p-3">
                <h5 class="text-white">Menu</h5>
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a href="{{ route('hospitals.index') }}" class="nav-link {{ request()->is('hospitals*') ? 'active' : '' }}">
                            🏥
                            {{-- <x-icon type="hospital" width="24" height="24" class="me-2"/> Rumah Sakit --}}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('patients.index') }}" class="nav-link {{ request()->is('patients*') ? 'active' : '' }}">
                            👨‍⚕️ Pasien
                            {{-- <x-icon type="patient" width="24" height="24" class="me-2"/> Pasien --}}
                        </a>
                    </li>
                </ul>
            </div>

            <div class="content">
                @yield('content')
            </div>
        </div>

        <footer class="bg-dark text-white text-center py-2">
            <small>&copy; {{ date('Y') }} Hospital App - Laravel + Bootstrap</small>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
