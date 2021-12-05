@extends('layouts.admin-layout')
@section('content')
    <h2 class="admin-layout__title">Create product type</h2>
    <form class="form" action="{{ route('product_type.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="type">Type</label>
            <input id="type" type="text" name="type">
        </div>
        <button type="submit" class="btn">Create</button>
    </form>
@endsection
