@include('layouts.link')

    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Edit Profile') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group row mb-4">
                                <label for="nama" class="col-md-4 col-form-label text-md-right">{{ __('Nama') }}</label>

                                <div class="col-md-6">
                                    <input id="nama" type="text" class="form-control" name="nama" value="{{ old('nama', $user->nama) }}" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                                <div class="col-md-6">
                                    <input id="username" type="text" class="form-control" name="username" value="{{ old('username', $user->username) }}" required>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email', $user->email) }}" required>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password">
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label for="alamat" class="col-md-4 col-form-label text-md-right">{{ __('Alamat') }}</label>

                                <div class="col-md-6">
                                    <textarea id="alamat" class="form-control" name="alamat" required>{{ old('alamat', $user->alamat) }}</textarea>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label for="gambar_profile" class="col-md-4 col-form-label text-md-right">{{ __('Gambar Profile') }}</label>

                                <div class="col-md-6">
                                    <input id="gambar_profile" type="file" class="form-control" name="gambar_profile">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-outline-success">
                                        {{ __('Update') }}
                                    </button>
                                    <a href="{{ route('profile.show') }}" class="btn btn-outline-danger">{{ __('Cancel') }}</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@include('layouts.scripts')
