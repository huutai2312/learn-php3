<!DOCTYPE html>
<html lang="vi">

<head>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>We'll be right back</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    @yield('head')
</head>

<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/lien-he">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/ps27199">PS27199</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/txn">Tin xem nhiều</a>
            </li><li class="nav-item">
                <a class="nav-link" href="/tinmoi">Tin mới</a>
            </li>
        </ul>
    </div>
</nav>
@yield('content')

</body>
{{--<div class="mt-5 p-4 bg-dark text-white text-center">--}}
{{--    <p>PS27199</p>--}}
{{--</div>--}}

</html>
