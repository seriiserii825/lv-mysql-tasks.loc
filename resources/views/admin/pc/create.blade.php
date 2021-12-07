@extends('layouts.admin-layout')
@section('content')
    <h2 class="admin-layout__title">Create pc</h2>
    <form class="form" action="{{ route('pc.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="code">Code</label>
            <input id="code" type="number" name="code">
        </div>
        <div class="form-group">
            <label for="model">Model</label>
            <select name="model" id="model">
                @foreach($products as $product)
                    <option value="{{ $product->model }}">{{ $product->maker }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="speed">Speed(processor in mHz)</label>
            <input id="speed" type="number" name="speed">
        </div>
        <div class="form-group">
            <label for="ram">Ram(Mb)</label>
            <input id="ram" type="number" name="ram">
        </div>
        <div class="form-group">
            <label for="hd">Hd(Gb)</label>
            <input id="hd" type="number" name="hd">
        </div>
        <div class="form-group">
            <label for="cd">Cd (4x)</label>
            <input id="cd" type="text" name="cd">
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input id="price" type="number" name="price">
        </div>
        <button type="submit" class="btn">Create</button>
    </form>
@endsection
