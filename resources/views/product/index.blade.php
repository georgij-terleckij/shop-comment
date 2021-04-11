@extends('layout')
@section('content')
    <h4>Агрегатор отзывов о товаре</h4>

    <table class="w-100" id="example">
        <thead>
        <tr>
            <th>№</th>
            <th>Img</th>
            <th>Name</th>
            <th>Date</th>
            <th>User name</th>
            <th>Reviews</th>
        </tr>
        </thead>
        <tbody>
        @forelse($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>
                    <div
                            style="min-height: 20px; min-width: 20px;background: #cccccc; background-image: url('{{ $product->img }}');background-size: cover;"
                    ></div>
                </td>
                <td><a href="/product/{{ $product->id }}">{{ $product->name }}</a></td>
                <td>{{ $product->created_at }}</td>
                <td>{{ $product->user_name }}</td>
                <td>{{ count($product->comments) }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="6">No Product</td>
            </tr>
        @endforelse
        </tbody>
    </table>
@endsection

@push('scripts')
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>
@endpush