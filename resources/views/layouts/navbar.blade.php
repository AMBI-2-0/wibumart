<style>
    .login-btn {
        position: relative;
        overflow: hidden;
        transition: transform 0.3s ease-in-out;
    }

    .login-btn::before {
        content: "";
        position: absolute;
        width: 100%;
        height: 100%;
        background-color: #92BCFFA9;
        top: 0;
        left: 0;
        transform: translateY(100%);
        transition: transform 0.3s ease-in-out;
        z-index: -1;
    }

    .login-btn:hover {
        transform: translateY(-2px);
    }

    .login-btn:hover::before {
        transform: translateY(0);
    }

    .nav-item {
        position: relative;
    }

    .nav-item::before {
        content: "";
        position: absolute;
        width: 100%;
        height: 2px;
        background-color: #89BEF7;
        bottom: -5px;
        left: 0;
        transform: scaleX(0);
        transition: transform 0.3s ease-in-out;
    }

    .nav-item:hover::before {
        transform: scaleX(1);
    }
</style>

<div class="container text-center p-4">
    <div class="row">
        <div class="col-3 text-white">
            <a class='title-web text-white' style="text-decoration: none; font-size: 2rem; font-family: 'Itim', cursive;"
                href="/home">WibuMart</a>
        </div>
        <div class="col">
            <ul class="nav justify-content-center text-white">


                <li class="nav-item {{ $title == 'Figurine Page' ? 'active' : '' }}">
                    <a class="nav-link text-white" href="/figure_product">Figurine</a>
                </li>
                <li class="nav-item {{ $title == 'Clothing Page' ? 'active' : '' }}">
                    <a class="nav-link text-white" href="/clothing">Clothing</a>
                </li>
                <li class="nav-item {{ $title == 'Props Page' ? 'active' : '' }}">
                    <a class="nav-link text-white" href="/props">Props</a>
                </li>
                <li class="nav-item {{ $title == 'Accessories Page' ? 'active' : '' }}">
                    <a class="nav-link text-white" href="/accessories">Accessories</a>
                </li>
                <li class="nav-item {{ $title == 'Book Page' ? 'active' : '' }}">
                    <a class="nav-link text-white" href="/book">Books</a>
                </li>

                @auth
                    <div class="col-5">
                        <div class="dropdown">
                            <a class="nav-link text-white dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                {{ strlen(auth()->user()->nama) > 15 ? substr(auth()->user()->nama, 0, 15) . '...' : auth()->user()->nama }}
                            </a>
                            <ul class="dropdown-menu">
                                <li><button class="dropdown-item" type="button">Action</button></li>
                                <li>
                                    <?php
                                    $keranjang_utama = \App\Models\Keranjang::where('users_id', auth()->user()->id)
                                        ->where('status', 0)
                                        ->first();
                                    $notif = 0;
                                    if ($keranjang_utama !== null) {
                                        $notif = \App\Models\KeranjangDetail::where('keranjangs_id', $keranjang_utama->id)->count();
                                    }
                                    ?>
                                    <a class="dropdown-item" href="/cart">Cart ({{ $notif }})</a>
                                </li>
                                <li><a class="dropdown-item" href="/history">Riwayat Belanja</a></li>
                                @if (auth()->user()->is_admin == 'admin')
                                    <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
                                @endif

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
                        <a href="/login" class="btn login-btn btn-outline-light mt-2">
                            <i class="bi bi-box-arrow-in-right pe-2"></i>Login</a>
                    </div>
                @endauth

            </ul>
        </div>
    </div>
</div>
