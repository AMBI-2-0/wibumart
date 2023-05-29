@include('layouts.link')

<body class="body bg-dark">
    <div class="d-flex justify-content-center align-items-center mt-5 pt-5 " style="color:azure">

        <form class="border border-5 p-5" style="border-radius:15px" action="/register" method="post">
            @csrf
            <div class="row mb-3">
                <label for="nama" class="form-label ">Nama :</label>
                <input type="text" name="nama" id="nama"
                    class="form-control @error('nama') is-invalid @enderror" />
                @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="row mb-3">
                <label for="username" class="form-label">Username :</label>
                <input type="text" name="username" id="username"
                    class="form-control @error('username') is-invalid @enderror" />
                @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="row mb-3">
                <label for="password" class="form-label">Password :</label>
                <input type="password" name="password" id="email"
                    class="form-control @error('password') is-invalid @enderror" />
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="row mb-3">
                <label for="alamat" class="form-label">Alamat :</label>
                <textarea type="text" name="alamat" id="alamat" class="form-control @error('alamat') is-invalid @enderror"></textarea>
                @error('alamat')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="row mb-3">
                <label for="gambar_profile" class="form-label">Gambar Profile :</label>
                <input class="form-control" type="file" id="gambar_profile" name="gambar_profile"
                    class="form-control @error('gambar_profile') is-invalid @enderror" />
                @error('gambar_profile')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-outline-light">Register</button>

        </form>

    </div>
</body>
