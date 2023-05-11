@extends('dashboard.dashboard')

@section('content')

    <div class="d-flex justify-content-end align-item-center">
        <a href="/dashboard/users/create" class="btn btn-success btn-sm"><i class="fa-solid fa-plus pe-3"></i>Create User</a>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Username</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Gambar Profile</th>
                    <th scope="col">Duit</th>
                    <th scope="col">Admin</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->nama }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->alamat }}</td>
                        <td>
                            @php
                                $gambar = $user->gambar_profile;
                            @endphp
                            <img src="{{ $gambar }}" alt="" class="img-fluid rounded-circle"
                                style="width: 50px; height: 50px;">
                        </td>
                        <td>Rp. {{ $user->duit }}</td>
                        <td>{{ $user->is_admin }}</td>
                        <td>
                            <a href="/dashboard/users/edit/{{ $user->id }}" class="btn btn-warning btn-sm">Edit</a>
                            <a href="/dashboard/users/{{ $user->id }}" class="btn btn-primary btn-sm">Detail</a>
                            <form action="/dasboard/users" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
