@extends('layouts.app')

@section('content')
    <h1>Schedule</h1>

    <table>
        <thead>
        <tr>
            <th>Date and Time</th>
            <th>Location</th>
            <th>Teacher</th>
            <th>Group</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($schedule as $class)
            <tr>
                <td>{{ $class->class_datetime }}</td>
                <td>{{ $class->class_location }}</td>
                <td>{{ $class->teacher->user->name }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
