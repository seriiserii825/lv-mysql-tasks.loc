@extends('layouts.admin-layout')
@section('content')
    <h2 class="admin-layout__title">Update product</h2>
    <form class="form" action="{{ route('product.update', ['product' > $product->id]) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="maker">Maker</label>
            <select name="maker_id" id="maker">
                @foreach($makers as $maker)
                    <option @if($maker->id === $product->maker_id) selected  @endif value="{{ $maker->id }}">{{ $maker->title }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="model">Model</label>
            <input id="model" type="number" name="model" value="{{ $product->model }}">
        </div>
        <div class="form-group">
            <label for="type">Type</label>
            <select name="type" id="type">
                @foreach($product_types as $type)
                    <option @if($type->id === $product->type) selected  @endif value="{{ $type->id }}">{{ $type->type }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn">Update</button>
    </form>
@endsection
