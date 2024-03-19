<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin')</title>
    <!-- Подключение стилей CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
        }

        header h1 {
            margin: 0;
        }

        nav ul {
            margin: 0;
            padding: 0;
            list-style-type: none;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
        }

        main {
            padding: 20px;
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body>

<header>
    <h1>ADMIN Site Name</h1>
    <nav>
        <ul>
            {{--            <li class="nav-item">--}}
            {{--                <a class="nav-link" href="{{ route('main') }}">Home</a>--}}
            {{--            </li>--}}
            <li class="nav-item">
                <a class="nav-link" href="{{ route('schedule') }}">Schedule</a>
            </li>
            @guest('admin')
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.login') }}">Login</a>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('signout') }}">Logout</a>
                </li>
            @endguest
        </ul>
    </nav>
</header>

<main>
    @yield('content')
</main>

<footer>
    <p>&copy; {{ date('Y') }} ADMIN ADMIN ADMIN</p>
</footer>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
