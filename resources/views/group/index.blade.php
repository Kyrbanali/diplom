@extends('admin.layouts')

@section('content')

    <h1>Group Details</h1>

    <form method="POST" action="{{ route('group.update', $group->id) }}">
        @csrf
        @method('PUT')
        <div>
            <label for="group_name">Group Name:</label>
            <input type="text" id="group_name" name="group_name" value="{{ $group->group_name }}">
        </div>
        <div>
            <label for="group_code">Group Code:</label>
            <input type="text" id="group_code" name="group_code" value="{{ $group->group_code }}">
        </div>
        <div>
            <label for="students">Students:</label>
            <select name="students[]" id="students" multiple>
                @foreach($group->students as $student)
                    <option value="{{ $student->id }}" {{ $group->students->contains($student) ? 'selected' : '' }}>
                        {{ $student->user->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit">Save</button>
    </form>

@endsection
