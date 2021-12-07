@extends('layouts.admin-layout')
@section('content')
    <h2 class="admin-layout__title">Pc</h2>

    <div class="admin-layout__new">
        <a class="btn" href="{{ route('pc.create') }}">New pc</a>
    </div>

    @if (count($pcs))
        <table class="admin-table">
            <tr>
                <th>id</th>
                <th>code</th>
                <th>model</th>
                <th>speed</th>
                <th>ram</th>
                <th>hd</th>
                <th>cd</th>
                <th>price</th>
                <th>date</th>
                <th>actions</th>
            </tr>
            @foreach ($pcs as $pc)
                <tr style="background: {{ $pc->color }};">
                    <td>{{ $pc->id }}</td>
                    <td>{{ $pc->code}}</td>
                    <td>{{ $pc->model }}</td>
                    <td>{{ $pc->speed }}</td>
                    <td>{{ $pc->ram }}</td>
                    <td>{{ $pc->hd }}</td>
                    <td>{{ $pc->cd }}</td>
                    <td>{{ $pc->price }}</td>
                    <td>{{ $pc->created_at }}</td>
                    <td>
                        <div class="admin-table__actions">
                            <a href="{{ route('pc.edit', ['pc' => $pc->id]) }}" class="btn">Edit</a>
                            <form action="{{ route('pc.destroy', ['pc' => $pc->id]) }}" method="post">
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
