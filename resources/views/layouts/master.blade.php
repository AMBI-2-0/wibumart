<html>

<head>
    @if ($title)
        <title>{{ $title }}</title>
    @else
        <title>WibuMart</title>
    @endif
    <meta charset="utf-8">

    @include('layouts.link')

</head>

<body class="body bg-general">
    @include('layouts.navbar')
    @yield('content')
    @include('layouts.footer')
</body>

</html>
