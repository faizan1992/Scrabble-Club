<!-- resources/views/layout.blade.php -->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Scrabble Club</title>
         <!-- Include Bootstrap CSS from CDN -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <style>
            body {
                background-color: #f8f9fa;
            }
            .navbar-custom {
                background-color: #007bff;
            }
            .navbar-custom .nav-link {
                color: #fff;
            }
            .navbar-custom .nav-link:hover {
                color: #ffc107;
            }
            .card-custom {
                box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            }
            .footer-custom {
                background-color: #343a40;
                color: #fff;
            }
        </style>
</head>
<body>
    <!-- Navigation bar -->
    <header class="navbar navbar-expand-lg navbar-custom">
        <div class="container">
            <a class="navbar-brand text-white" href="#">Scrabble Club</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('members.index') }}">Members</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('members.leaderboard') }}">Leaderboard</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <!-- Main content area -->
    <main class="container mt-4">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer-custom py-4 mt-4">
        <div class="container text-center">
            <p>&copy; 2024 Scrabble Club</p>
        </div>
    </footer>

    <!-- Include Bootstrap JS and dependencies from CDN -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>