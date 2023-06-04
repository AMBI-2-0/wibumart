@extends('dashboard.main')

@section('content')

    <body class="body ">
        <div class="d-flex justify-content-center align-items-center mt-5 pt-5 ">

            <form class="border border-5 border-dark p-5" style="border-radius:15px" action="/dashboard/users/create" method="post" enctype="multipart/form-data">
                @csrf

                <div class="row mb-3">
                    <label for="nama" class="form-label ">Nama :</label>
                    <input type="text" name="nama" id="nama"
                        class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}" />
                    @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="row mb-3">
                    <label for="email" class="form-label">Email :</label>
                    <input type="email" name="email" id="email"
                        class="form-control @error('email') is-invalid @enderror" placeholder="example@email.com"/>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="row mb-3">
                    <label for="username" class="form-label">Username :</label>
                    <input type="text" name="username" id="username"
                        class="form-control @error('username') is-invalid @enderror" value="{{ old('username') }}" />
                    @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="row mb-3">
                    <label for="password" class="form-label">Password :</label>
                    <input type="password" name="password" id="email"
                        class="form-control @error('password') is-invalid @enderror" value="" />
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="row mb-3">
                    <label for="gambar_profile" class="form-label">Gambar Profile :</label>
                    <input class="form-control" type="file" id="gambar_profile" name="gambar_profile"
                        class="form-control @error('gambar_profile') is-invalid @enderror" value="" />
                    @error('gambar_profile')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="row  mb-3">
                    <label for="is_admin" class="form-label">Apakah User Seorang Admin ?</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="is_admin" id="is_admin1" value="admin" >
                        <label class="form-check-label" for="is_admin1">
                          Ya
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="is_admin" id="is_admin0" value="user" >
                        <label class="form-check-label" for="is_admin0">
                          Tidak
                        </label>
                      </div>
                      
                </div>

                <div class="row mb-3">
                    <label for="alamat" class="form-label">Alamat :</label>
                    <textarea type="text" name="alamat" id="alamat" class="form-control @error('alamat') is-invalid @enderror"
                        value="{{ old('alamat') }}"></textarea>
                    @error('alamat')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>


                <button type="submit" class="btn btn-outline-Success">Create</button>

            </form>

        </div>
    @endsection
