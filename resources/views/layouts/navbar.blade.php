<div class="container text-center p-4">
    <div class="row">
        <div class="col-3 text-white">
            <a class="navbar-brand" href="/home">WibuMart</a>
        </div>
        <div class="col">
            <ul class="nav justify-content-center text-white">

                <li class="nav-item {{ $title == 'Figurine' ? 'active' : '' }}">
                    <a class="nav-link text-white" href="/figurine">Figurine</a>
                </li>
                <li class="nav-item {{ $title == 'Clothing' ? 'active' : '' }}">
                    <a class="nav-link text-white" href="#">Clothing</a>
                </li>
                <li class="nav-item {{ $title == 'Props' ? 'active' : '' }}">
                    <a class="nav-link text-white" href="#">Props</a>
                </li>
                <li class="nav-item {{ $title == 'Accessories' ? 'active' : '' }}">
                    <a class="nav-link text-white" href="#">Accessories</a>
                </li>
                <li class="nav-item {{ $title == 'Books' ? 'active' : '' }}">
                    <a class="nav-link text-white" href="#">Books</a>
                </li>

                @auth
                <div class="col-5">
                    <div class="dropdown">
                    <a class="nav-link text-white dropdown-toggle" type="button" data-bs-toggle="dropdown">
                      {{  (strlen(auth()->user()->nama) > 15) ? substr(auth()->user()->nama, 0, 15).'...' : auth()->user()->nama }}
                    </a>   
                    <ul class="dropdown-menu">
                      <li><button class="dropdown-item" type="button">Action</button></li>
                      <li><a class="dropdown-item" href="/cart">Keranjang</a></li>
                      @if (auth()->user()->is_admin == 'admin')
                      <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
                      @endif
                      
                      <hr class="dropdown-divider">
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="dropdown-item"><i class="fa-solid fa-right-from-bracket me-2"></i>Logout</button>
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
