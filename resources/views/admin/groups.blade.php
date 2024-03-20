@extends('admin.layouts')

@section('content')
    <h1>Groups</h1>

    <table>
        <thead>
        <tr>
            <th>Group name</th>
            <th>Group code</th>
            <th>Students</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($groups as $group)
            <tr>
                <td>{{ $group->group_name }}</td>
                <td>{{ $group->group_code }}</td>
                <td>
                    @foreach($group->students as $student)
                        {{ $student->user->name }}
                    @endforeach
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
