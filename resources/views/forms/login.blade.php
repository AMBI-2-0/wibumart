@include('layouts.link')

@if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if (session()->has('LoginError'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<div class="d-flex justify-content-center align-items-center mt-5 pt-5">

    <div class="row">
        <div class="d-flex col border-end border-5 justify-content-center align-items-center">
            <img src="images\raidenlogin.png" alt="" style="height:15rem;width:15rem">
        </div>

        <div class="col">
            <div class="p-4">
                <form action="/login" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="username" class="form-label">Nama Pengguna</label>
                        <input type="text" class="form-control @error('username') is-invalid @enderror"
                            id="username" name="username" placeholder="Masukkan Nama Pengguna" autofocus
                            value="{{ old('username') }}">
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <div class="mb-3">
                            <label for="password" class="form-label">Kata Sandi</label>
                            <input type="password" name="password" class="form-control" id="password"
                                placeholder="Kata Sandi">
                        </div>
                        <a href="{{ route('forget.password.get') }}">Lupa Kata Sandi? <br></a>

                        <button type="submit" class="btn btn-primary mt-3">Masuk</button>

                        <div class="mt-3">Tidak punya akun? <a href="/register">Registrasi disini!</a></div>
                </form>
            </div>

        </div>

    </div>
