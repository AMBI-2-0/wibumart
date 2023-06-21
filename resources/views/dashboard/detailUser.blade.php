@extends('dashboard.main')


@section('content')
    <div class="card mb-3 mt-3 mx-auto" style="width: 50rem;">


        <img src="{{ asset('storage/'.$user->gambar_profile) }}" class="card-img-top img-fluid" alt="">

    <div class="card-body">
        <h4 class="card-title p-2 text-center">{{ $user->nama }}</h4>
        <div class="card-text container p-2">
            <p>Nama Pengguna: {{ $user->username }}</p>
            <p>Email: {{ $user->email }}</p>
            <p>Alamat: {{ $user->alamat }}</p>
            {{-- {!! asdawdas!!} --}}
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start mt-4">
            <a href="/dashboard/users/edit/{{ $user->id }}" class="btn btn-warning btn-sm">Edit</a>
            <form action="{{ route('users.destroy', $user->id) }}" class="d-inline" method="post">
                @method('delete')
                @csrf
                <button class="btn btn-danger text-light" onclick="return confirm('Hapus user ?')">Hapus</button>
            </form>
        </div>
    </div>
</div>
@endsection

