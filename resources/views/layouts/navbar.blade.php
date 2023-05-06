<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="#">WibuMart</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                @if ($title == 'figurine')
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"> Figurine</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Clothing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Props</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Accessories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Books</a>
                    </li>
                @endif

                @if ($title == 'clothing')
                    <li class="nav-item">
                        <a class="nav-link" href="#"> Figurine</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Clothing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Props</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Accessories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Books</a>
                    </li>
                @endif

                @if ($title == 'props')
                    <li class="nav-item">
                        <a class="nav-link" href="#"> Figurine</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Clothing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Props</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Accessories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Books</a>
                    </li>
                @endif

                @if ($title == 'accessories')
                    <li class="nav-item">
                        <a class="nav-link" href="#"> Figurine</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Clothing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Props</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Accessories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Books</a>
                    </li>
                @endif

                @if ($title == 'books')
                    <li class="nav-item">
                        <a class="nav-link" href="#"> Figurine</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Clothing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Props</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Accessories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Books</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="#"> Figurine</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Clothing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Props</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Accessories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Books</a>
                    </li>
                @endif


            </ul>
        </div>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="btn btn-outline-light" href="/login">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
