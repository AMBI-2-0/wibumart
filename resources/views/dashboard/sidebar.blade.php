@include('layouts.link')

<div class="row">

    <div class="d-flex justify-content-start sidebar-sticky" style="height: 100%">

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark flex-column pe-5 ps-4">
            <a class="navbar-brand" href="/home">WibuMart</a>
            <button class="navbar-toggler" type="button" data-bs-target="#navbarNav" aria-controls="navbarNav"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <hr class="divider text-light" style='width:100%'>



            <div class="navbar-nav pt-2" id="navbarNav">
                <ul class="d-flex navbar-nav flex-column align-items-start">
                    <li class="nav-item">
                        <a class="nav-link {{ $title == 'Dashboard' ? 'active' : '' }}" href="/dashboard"><i
                                class="fa-solid fa-house pe-2"></i>Dasbor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $title == 'Users' ? 'active' : '' }}" href="/dashboard/users"><i
                                class="fa-solid fa-users pe-2"></i>Pengguna</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $title == 'Products' ? 'active' : '' }}"
                            href="/dashboard/products"><i class="fa-brands fa-product-hunt"></i> Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $title == 'Figurine' ? 'active' : '' }}"
                            href="/dashboard/figurine"><i class="fa-solid fa-piggy-bank pe-2"></i></i>Figura</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $title == 'Clothing' ? 'active' : '' }}" href="#"><i
                                class="fa-solid fa-user-nurse pe-2"></i>Pakaian</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $title == 'Props' ? 'active' : '' }}" href="#"><i
                                class="fa-solid fa-boxes-packing pe-2"></i>Atribut</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $title == 'Accessories' ? 'active' : '' }}" href="#"><i
                                class="fa-solid fa-scale-balanced pe-2"></i>Aksesoris</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $title == 'Books' ? 'active' : '' }}" href="#"><i
                                class="fa-solid fa-book pe-2"></i> Buku</a>
                    </li>
                </ul>

            </div>
        </nav>

    </div>
</div>
