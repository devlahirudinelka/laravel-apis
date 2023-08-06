<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Management</title>

    @include('libraries.styles')

</head>

<body>
    @include('components.nav')
    {{-- //any name --}}
    @yield('pageContent')
    @include('components.footer')
    @include('libraries.scripts')
</body>

</html>
