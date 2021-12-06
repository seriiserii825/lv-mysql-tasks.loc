@extends('layouts.default')
@section('content')
    <div class="table">
        @if(count($product_types))
            <div class="table__item">
                <h3 class="table__title">Product Type</h3>
                <table>
                    <thead>
                    <th>ID</th>
                    <th>Type</th>
                    </thead>
                    <tbody>
                    @foreach($product_types as $product_type)
                        <tr>
                            <td>{{ $product_type->id }}</td>
                            <td>{{ $product_type->type }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
@endsection
