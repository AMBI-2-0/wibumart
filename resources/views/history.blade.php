@extends('layouts.master')

@section('content')

<head>
    <title>History</title>
</head>
<body class="container">
    <div class="container">
        <h1>History</h1>
        <table class="table table-striped">
            <thead class="container">
                <tr>
                    <th></th>
                    <th>Keterangan</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($purchases as $purchase)
                <tr>
                    <td><img src="images\bailu.jpeg" alt="" style="height:10rem;width:10rem"></td>
                    <td>{{ $purchase['keterangan'] }}</td>
                    <td>{{ $purchase['status'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
@endsection
