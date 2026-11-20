<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Templating Laravel</title>
</head>
<body style="margin: 0; font-family: Arial, sans-serif;">

    {{-- HEADER --}}
    @include('template/header')

    <div style="display: flex;">
        {{-- SIDEBAR --}}
        @include('template/sidebar')

        {{-- CONTENT --}}
        <div style="flex: 1; padding: 20px;">
            @yield('content')
        </div>
    </div>

</body>
</html>
