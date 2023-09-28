<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <!-- Header content -->
    </header>

    <div class="container">
        @yield('content')
    </div>

    <footer>
        <!-- Footer content -->
    </footer>
</body>
</html>