@extends('layouts.admin-layout')
@section('content')
    <h2 class="admin-layout__title">Edit maker</h2>
    <form class="form" action="{{ route('maker.update', ['maker' => $maker->id]) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input id="title" type="text" name="title" value="{{ $maker->title }}">
        </div>
        <button type="submit" class="btn">Edit</button>
    </form>
@endsection
