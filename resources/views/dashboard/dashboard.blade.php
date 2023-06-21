@extends('dashboard.main')

@section('content')
    <div class="row">

        <div class="col">
            <div class="card mb-3 text-bg-primary" style="max-width: 340px;max-height:150px">
                <div class="row g-0">
                    <div class="d-flex col-md-4 justify-content-center p-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" style="fill:#8cb8fa">
                            <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path
                                d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z" />
                        </svg>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Pengguna</h5>
                            <h6 class="card-text"> Total Pengguna: {{ $user }}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card mb-3 text-light" style="max-width: 340px;max-height:150px;background-color:#d4a117">
                <div class="row g-0">
                    <div class="d-flex col-md-4 justify-content-center p-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"style="fill:#ffdc2b">
                            <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path
                                d="M326.3 218.8c0 20.5-16.7 37.2-37.2 37.2h-70.3v-74.4h70.3c20.5 0 37.2 16.7 37.2 37.2zM504 256c0 137-111 248-248 248S8 393 8 256 119 8 256 8s248 111 248 248zm-128.1-37.2c0-47.9-38.9-86.8-86.8-86.8H169.2v248h49.6v-74.4h70.3c47.9 0 86.8-38.9 86.8-86.8z" />
                        </svg>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Produk</h5>
                            <h6 class="card-text"> Total Produk: {{ $products }}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
@endsection
