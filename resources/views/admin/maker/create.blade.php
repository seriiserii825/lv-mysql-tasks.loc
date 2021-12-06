@extends('layouts.admin-layout')
@section('content')
    <h2 class="admin-layout__title">Create maker</h2>
    <form class="form" action="{{ route('maker.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input id="title" type="text" name="title">
        </div>
        <button type="submit" class="btn">Create</button>
    </form>
@endsection
