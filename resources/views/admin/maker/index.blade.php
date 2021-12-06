@extends('layouts.admin-layout')
@section('content')
    <h2 class="admin-layout__title">Maker</h2>

    <div class="admin-layout__new">
        <a class="btn" href="{{ route('maker.create') }}">New maker</a>
    </div>

    @if (count($makers))
        <table class="admin-table">
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
            @foreach ($makers as $maker)
                <tr style="background: {{ $maker->color }};">
                    <td>{{ $maker->id }}</td>
                    <td>{{ $maker->title }}</td>
                    <td>{{ $maker->created_at }}</td>
                    <td>
                        <div class="admin-table__actions">
                            <a href="{{ route('maker.edit', ['maker' => $maker->id]) }}"
                               class="btn">Edit</a>
                            <form action="{{ route('maker.destroy', ['maker' => $maker->id]) }}" method="post">
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
