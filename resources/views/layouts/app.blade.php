<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <title>SGQ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-light">

    @include('layouts.partials.navbar')

    <div class="container-fluid">
        <div class="row">
            <div class="d-flex">
                @include('layouts.partials.sidebar')

                <main class="flex-fill p-4">
                    @yield('content')
                </main>
            </div>
        </div>
    </div>
</body>

</html>