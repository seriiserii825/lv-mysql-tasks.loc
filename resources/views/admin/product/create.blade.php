@extends('layouts.admin-layout')
@section('content')
    <h2 class="admin-layout__title">Create product</h2>
    <form class="form" action="{{ route('product.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="maker">Maker</label>
            <input id="maker" type="text" name="maker">
        </div>
        <div class="form-group">
            <label for="model">Model</label>
            <input id="model" type="number" name="model">
        </div>
        <div class="form-group">
            <label for="type">Type</label>
            <select name="type" id="type">
                @foreach($product_types as $type)
                    <option value="{{ $type->id }}">{{ $type->type }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn">Create</button>
    </form>
@endsection
