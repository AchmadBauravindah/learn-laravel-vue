<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="/css/app.css">
</head>

<body>
    <main id="app">
        <navigation></navigation>
    </main>

    <div class="py-4">
        <router-view></router-view>
    </div>

    <script src="/js/app.js"></script>
</body>

</html>
