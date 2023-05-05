<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Wibumart</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                @if ($title == 'Figurine Page')
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
                @if ($title == 'Clothing Page')
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
                @if ($title == 'Props Page')
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
                @if ($title == 'Accessories Page')
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
                @if ($title == 'Books Page')
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

                <a href="login" class="btn btn-outline-light d-flex">Login</a>
            </ul>
        </div>
    </div>
</nav>
