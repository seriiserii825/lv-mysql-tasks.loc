<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
<div class="tasks">
    <div class="sidebar tasks__sidebar">
        <ul class="tasks__list">
            <li><a href="#">Task 1</a></li>
            <li><a href="#">Task 2</a></li>
        </ul>
    </div>
    <div class="content tasks__content">
        @yield('content')
    </div>
</div>
</body>
</html>
