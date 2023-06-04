@extends('dashboard.main')


@section('content')
    <div class="card mb-3 mt-3" style="width: 50rem;">


        <img src="{{ asset('storage/'.$user->gambar) }}" class="card-img-top img-fluid" alt="">

    <div class="card-body">
        <h4 class="card-title p-2">Nama user : {{ $user->nama }}</h4>
        <div class="card-text container p-2">
            <p>Deskripsi user :</p>
            {{-- {!! asdawdas!!} --}}
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start mt-4">
            <a href="/edit-user/{{ $user->id }}" class="btn btn-warning d-grid">Edit</a>
            <form action="/users/{{ $user->id }}" class="d-inline" method="post">
                @method('delete')
                @csrf
                <button class="btn btn-danger text-light" onclick="return confirm('Hapus user ?')">Delete</button>
            </form>
        </div>
    </div>
</div>
@endsection

