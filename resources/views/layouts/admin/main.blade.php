<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">
    <meta name="keywords"
        content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">
    @include('layouts.admin._css')
</head>

<body>

    <div class="wrapper">
        @include('layouts.admin.sidebar')

        <div class="main">
            @include('layouts.admin.header')

            <main class="content">
                <div class="container-fluid p-0">
                    {{--                <strong>Analytics</strong> Dashboard --}}
                    <h1 class="h3 mb-3">@yield('title_page')</h1>

                    @yield('content')

                </div>
            </main>

            @include('layouts.admin.footer')
        </div>
    </div>

    @include('layouts.admin._js')

    @yield('custom_js')

</body>

</html>
