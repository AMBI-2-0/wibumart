<html>

<head>
    @if ($title)
        <title>{{ $title }}</title>
    @else
        <title>WibuMart</title>
    @endif
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.0/mdb.min.css" rel="stylesheet" />
    @yield('style')

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Itim&display=swap');

        .title-web {
            font-family: 'Itim', cursive;
        }

        .css-selector {
            background: radial-gradient(ellipse at 70% center, #739aff, #000000);
            background-size: 400% 400%;

            -webkit-animation: AnimationName 10s ease infinite;
            -moz-animation: AnimationName 10s ease infinite;
            animation: AnimationName 10s ease infinite;
        }

        @-webkit-keyframes AnimationName {
            0% {
                background-position: 0% 10%
            }

            50% {
                background-position: 10% 2%
            }

            100% {
                background-position: 0% 10%
            }
        }

        @-moz-keyframes AnimationName {
            0% {
                background-position: 0% 10%
            }

            50% {
                background-position: 10% 2%
            }

            100% {
                background-position: 0% 10%
            }
        }

        @keyframes AnimationName {
            0% {
                background-position: 0% 10%
            }

            50% {
                background-position: 10% 2%
            }

            100% {
                background-position: 0% 10%
            }
        }

        body {
            font-family: "Montserrat", sans-serif;
        }

        .card {
            transition: all 0.2s ease-in-out;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.3);
        }

        .nav-item.active {
            background-color: rgba(0, 0, 0, 0.2);
            border-radius: 50px;
            padding: 5px;
        }

        a {
            text-decoration: none;
        }
    </style>
</head>

<body class="css-selector">
    @include('layouts.navbar')
    <div class="container">
        @yield('content')
    </div>

    
@include('layouts.footer')


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"
        integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous">
    </script>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.0/mdb.min.js"></script>
</body>

</html>
