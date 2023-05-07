<html>
    <head>
        @if ($title)
                <title>{{ $title }}</title>
        @else
                <title>WibuMart</title>
        @endif
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        

        <style>
            .css-selector {
                background: radial-gradient(ellipse at 70% center, #739aff, #000000);
                background-size: 400% 400%;

                -webkit-animation: AnimationName 10s ease infinite;
                -moz-animation: AnimationName 10s ease infinite;
                animation: AnimationName 10s ease infinite;
            }

            @-webkit-keyframes AnimationName {
                0%{background-position:0% 10%}
                50%{background-position:10% 2%}
                100%{background-position:0% 10%}
            }
            @-moz-keyframes AnimationName {
                0%{background-position:0% 10%}
                50%{background-position:10% 2%}
                100%{background-position:0% 10%}
            }
            @keyframes AnimationName {
                0%{background-position:0% 10%}
                50%{background-position:10% 2%}
                100%{background-position:0% 10%}
            }

            body {
                font-family: "Montserrat", sans-serif;
            }

            .card {
            transition: all 0.2s ease-in-out;
            }

            .card:hover {
            transform: scale(1.05);
            box-shadow: 0px 0px 30px rgba(0,0,0,0.3);
            }
            
            .nav-item.active {
            background-color: rgba(0, 0, 0, 0.2);
            border-radius: 50px;
            padding: 5px;
            }

        </style>
    </head>
    <body class ="css-selector">
    <div class="container text-center p-4">
        <div class="row">
            <div class="col text-white">
            WibuMart
            </div>
            <div class="col-6">
            <ul class="nav justify-content-center text-white">
                <li class="nav-item active">
                    <a class="nav-link text-white" href="#">Figurine</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Clothing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Props</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Accessories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Books</a>
                </li>
            </ul>
            </div>
            <div class="col">
            <button type="button" class="btn btn-outline-light">Login</button>
            </div>
        </div>
    </div>
        <div class="container">
            @yield('content')
        </div>

        <footer class="bg-dark mt-4 text-white py-4">
        <div class="container">
            <div class="row">
            <div class="col-md-2 col-sm-6">
                <h5>About</h5>
                <ul>
                <li>Home</li>
                <li>Shop</li>
                <li>Our Story</li>
                </ul>
            </div>
            <div class="col-md-2 col-sm-6">
                <h5>Help</h5>
                <ul>
                <li>Track Order</li>
                <li>FAQs</li>
                </ul>
            </div>
            <div class="col-md-4 col-sm-3">
                <h5>Contact</h5>
                <ul>
                <li>Phone Number:
                    (+62)85342537653
                </li>
                <li>Email:
                    wibumart@gmail.com
                </li>
                </ul>
            </div>
            <div class="col-md-4 col-sm-6">
                <h5>Subscribe</h5>
                <form>
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Enter email">
                </div>
                <button type="submit" class="btn btn-primary mt-3">Submit</button>
                </form>
                <div class="col">
                <h6>Our Social Media</h6>
                <ul class="list-unstyled">
                    <li><a href="#"><i class="fab fa-facebook-f text-white"></i> Facebook</a></li>
                    <li><a href="#"><i class="fab fa-twitter text-white"></i> Twitter</a></li>
                    <li><a href="#"><i class="fab fa-instagram text-white"></i> Instagram</a></li>
                </ul>
                </div>

            </div>
            </div>
            <div class="row mt-4">
            <div class="col text-center">
                <p>&copy; 2023 Your Company. All Rights Reserved.</p>
            </div>
            </div>
        </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
    </body>
</html>
    