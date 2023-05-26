@extends('layouts.master')

@section('content')
    <div class="container">
        <h1>Purchase History</h1>

        <div class="mb-3">
            <form action="{{ route('history') }}" method="GET">
                <div class="form-group">
                    <label for="status">Filter by Status:</label>
                    <select name="status" id="status" class="form-control">
                        <option value="">All</option>
                        <option value="berlangsung"{{ Request::input('status') === 'berlangsung' ? ' selected' : '' }}>Berlangsung</option>
                        <option value="dibatalkan"{{ Request::input('status') === 'dibatalkan' ? ' selected' : '' }}>Dibatalkan</option>
                        <option value="selesai"{{ Request::input('status') === 'selesai' ? ' selected' : '' }}>Selesai</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Filter</button>
            </form>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Ordered At</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($History as $history)
                    <tr>
                        <td>
                            <img src="{{ $history->image }}" alt="" style="height:10rem;width:10rem">
                        </td>
                        <td>{{ $history->product_name }}</td>
                        <td>{{ $history->price }}</td>
                        <td>{{ $history->ordered_at }}</td>
                        <td>{{ $history->status }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
