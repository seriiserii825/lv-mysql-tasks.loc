@extends('layouts.admin-layout')
@section('content')
    <h2 class="admin-layout__title">Product type</h2>

    <div class="admin-layout__new">
        <a class="btn" href="{{ route('product_type.create') }}">New product_type</a>
    </div>

    @if (count($product_types))
        <table class="admin-table">
            <tr>
                <th>Id</th>
                <th>Type</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
            @foreach ($product_types as $product_type)
                <tr style="background: {{ $product_type->color }};">
                    <td>{{ $product_type->id }}</td>
                    <td>{{ $product_type->type }}</td>
                    <td>{{ $product_type->created_at }}</td>
                    <td>
                        <div class="admin-table__actions">
                            <a href="{{ route('product_type.edit', ['product_type' => $product_type->id]) }}"
                                class="btn">Edit</a>
                            <form action="{{ route('product_type.destroy', ['product_type' => $product_type->id]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Do you want to delete?','Yes')" class="btn btn--danger">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </table>
    @endif
@endsection
