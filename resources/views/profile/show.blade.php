@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Profil Pengguna') }}</div>

                    <div class="card-body">
                        <div class="text-center mb-4">
                            <img src="{{ asset('storage/' . auth()->user()->gambar_profile) }}" alt="Profile Picture"
                                class="img-fluid rounded-circle" style="width: 200px; height: 200px; object-fit: cover">
                        </div>
                        <h5 class="card-title text-center"><strong>{{ auth()->user()->nama }}</strong></h5>
                        <hr>
                        <div class="row ps-5 pe-5">
                            <div class="col-sm-3">
                                <p><strong>Username</strong></p>
                                <p><strong>Email</strong></p>
                                <p><strong>Alamat</strong></p>
                            </div>
                            <div class="col-sm-1">
                                <p><strong>:</strong></p>
                                <p><strong>:</strong></p>
                                <p><strong>:</strong></p>
                            </div>
                            <div class="col-sm">
                                <p>{{ auth()->user()->username }}</p>
                                <p>{{ auth()->user()->email }}</p>
                                <p>{{ auth()->user()->alamat }}</p>
                            </div>
                        </div>
                        <hr> <!-- Pemisah -->
                        <div class="text-center">
                            <a href="{{ route('profile.edit') }}" class="btn btn-primary">{{ __('Edit Profil') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
