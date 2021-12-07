@extends('layouts.admin-layout')
@section('content')
    <h2 class="admin-layout__title">Update pc</h2>
    <form class="form" action="{{ route('pc.update', ['pc' > $pc->id]) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="code">Code</label>
            <input id="code" type="number" name="code" value="{{ $pc->code }}">
        </div>
        <div class="form-group">
            <label for="model">Model</label>
            <input id="model" type="number" name="model"  value="{{ $pc->model }}">
        </div>
        <div class="form-group">
            <label for="speed">Speed(processor in mHz)</label>
            <input id="speed" type="number" name="speed"  value="{{ $pc->speed }}">
        </div>
        <div class="form-group">
            <label for="ram">Ram(Mb)</label>
            <input id="ram" type="number" name="ram"  value="{{ $pc->ram }}">
        </div>
        <div class="form-group">
            <label for="hd">Hd(Gb)</label>
            <input id="hd" type="number" name="hd"  value="{{ $pc->hd }}">
        </div>
        <div class="form-group">
            <label for="cd">Cd (4x)</label>
            <input id="cd" type="text" name="cd"  value="{{ $pc->cd }}">
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input id="price" type="number" name="price"  value="{{ $pc->price }}">
        </div>
        <button type="submit" class="btn">Update</button>
    </form>
@endsection
