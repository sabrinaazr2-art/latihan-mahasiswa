<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title', 'Laravel Admin')</title>

    <link href="{{ asset('sb-admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('sb-admin/css/sb-admin-2.min.css') }}" rel="stylesheet">
</head>
<body id="page-top">
    <div id="wrapper">

        {{-- SIDEBAR --}}
        @include('template.sidebar')

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">

                {{-- HEADER --}}
                @include('template.header')

                {{-- CONTENT --}}
                <div class="container-fluid">
                    @yield('content')
                </div>

            </div>

            {{-- FOOTER --}}
            @include('template.footer')
        </div>

    </div>

    <script src="{{ asset('sb-admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('sb-admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('sb-admin/js/sb-admin-2.min.js') }}"></script>
</body>
</html>