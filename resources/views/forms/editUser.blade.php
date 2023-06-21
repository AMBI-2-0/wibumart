@extends('dashboard.main')

@section('content')

    <body class="body">
        <div class="d-flex justify-content-center align-items-center mt-5 pt-5 ">

            <form class="border border-5 border-dark p-5" style="border-radius:15px"
                action="/dashboard/users/edit/{{ $user->id }}" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf

                <div class="row mb-3">
                    <label for="nama" class="form-label ">Nama :</label>
                    <input type="text" name="nama" id="nama"
                        class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama', $user->nama) }}" />
                    @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="row mb-3">
                    <label for="email" class="form-label">Email :</label>
                    <input type="email" name="email" id="email"
                        class="form-control disable @error('email') is-invalid @enderror" placeholder="example@email.com"value="{{ old('email', $user->email) }}"/>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="row mb-3">
                    <label for="username" class="form-label">Username :</label>
                    <input type="text" name="username" id="username"
                        class="form-control @error('username') is-invalid @enderror"
                        value="{{ old('username', $user->username) }}" />
                    @error('username')
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
                    <label for="is_admin">Apakah User Seorang Admin ?</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="is_admin" id="is_admin1" value="admin" {{ old('is_admin', $user->is_admin) == 'admin' ? 'checked' : '' }}>
                        <label class="form-check-label" for="is_admin1">
                          Ya
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="is_admin" id="is_admin0" value="user" {{ old('is_admin', $user->is_admin) == 'user' ? 'checked' : '' }}>
                        <label class="form-check-label" for="is_admin0">
                          Tidak
                        </label>
                      </div>
                      
                </div>

                <div class="row mb-3">
                    <label for="alamat" class="form-label">Alamat :</label>
                    <textarea type="text" name="alamat" id="alamat" class="form-control @error('alamat') is-invalid @enderror">{{ old('alamat', $user->alamat) }}</textarea>
                    @error('alamat')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>


                <button type="submit" class="btn btn-outline-warning">Edit</button>

            </form>

        </div>
    @endsection
