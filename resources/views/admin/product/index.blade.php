@extends('layouts.admin-layout')
@section('content')
    <h2 class="admin-layout__title">Product</h2>

    <div class="admin-layout__new">
        <a class="btn" href="{{ route('product.create') }}">New product</a>
    </div>

    @if (count($products))
        <table class="admin-table">
            <tr>
                <th>Id</th>
                <th>Type</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
            @foreach ($products as $product)
                <tr style="background: {{ $product->color }};">
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->type }}</td>
                    <td>{{ $product->created_at }}</td>
                    <td>
                        <div class="admin-table__actions">
                            <a href="{{ route('product.edit', ['product' => $product->id]) }}"
                               class="btn">Edit</a>
                            <form action="{{ route('product.destroy', ['product' => $product->id]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Do you want to delete?','Yes')"
                                        class="btn btn--danger">Delete
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </table>
    @endif
@endsection
