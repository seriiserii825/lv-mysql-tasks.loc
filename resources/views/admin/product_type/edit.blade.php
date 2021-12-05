@extends('layouts.admin-layout')
@section('content')
    <h2 class="admin-layout__title">Edit product type</h2>
    <form class="form" action="{{ route('product_type.update', ['product_type' => $product_type->id]) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="type">Type</label>
            <input id="type" type="text" name="type" value="{{ $product_type->type }}">
        </div>
        <button type="submit" class="btn">Edit</button>
    </form>
@endsection
