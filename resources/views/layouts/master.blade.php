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

<body style="background: #2D3233">
    @include('layouts.navbar')
    @yield('content')
    @include('layouts.footer')
</body>


</html>
