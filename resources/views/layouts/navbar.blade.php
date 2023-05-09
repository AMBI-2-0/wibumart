<div class="container text-center p-4">
    <div class="row">
        <div class="col-3 text-white">
            WibuMart
        </div>
        <div class="col">
            <ul class="nav justify-content-center text-white">

                @if ($title == 'Figurine')
                    <li class="nav-item active">
                        <a class="nav-link text-white" href="/figurine">Figurine</a>
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
                @elseif ($title == 'Clothing')
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/figurine"> Figurine</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white active" href="#">Clothing</a>
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
                @elseif ($title == 'Props')
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/figurine"> Figurine</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Clothing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white active" href="#">Props</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Accessories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Books</a>
                    </li>
                @elseif ($title == 'Accessories')
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/figurine"> Figurine</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Clothing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Props</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white active" href="#">Accessories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Books</a>
                    </li>
                @elseif ($title == 'Books')
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/figurine"> Figurine</a>
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
                        <a class="nav-link text-white active" href="#">Books</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/figurine"> Figurine</a>
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
                @endif

                @auth
                    <div class="col-5">
                        <div class="dropdown">
                            <a class="nav-link text-white dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                {{ strlen(auth()->user()->nama) > 15 ? substr(auth()->user()->nama, 0, 15) . '...' : auth()->user()->nama }}
                            </a>
                            <ul class="dropdown-menu">
                                <li><button class="dropdown-item" type="button">Action</button></li>
                                <li><button class="dropdown-item" type="button">Another action</button></li>
                                <li><button class="dropdown-item" type="button">Something else here</button></li>
                                <hr class="dropdown-divider">
                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item"><i
                                            class="fa-solid fa-right-from-bracket me-2"></i>Logout</button>
                                </form>
                            </ul>
                        </div>
                    </div>
                @else
                    <div class="col-5">
                        <a href="/login" class="btn btn-outline-light">
                            <i class="bi bi-box-arrow-in-right pe-2"></i>Login</a>
                    </div>
                @endauth

            </ul>
        </div>
    </div>
</div>
