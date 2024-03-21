@extends('admin.layouts')

@section('content')
    <h1>Groups</h1>

    <table>
        <thead>
        <tr>
            <th>Group name</th>
            <th>Group code</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($groups as $group)
            <tr>
                <td>{{ $group->group_name }}</td>
                <td><a href="{{ route('admin.group.show', $group->id) }}">{{ $group->group_code }}</a></td>
            </tr>
        @endforeach
        <tr>
            <th>
                <button onclick="location.href='{{ route('admin.groups.index') }}'">+</button>
                <button onclick="">-</button>
                <button onclick="">редактировать</button>
            </th>
        </tr>
        </tbody>
    </table>
@endsection
