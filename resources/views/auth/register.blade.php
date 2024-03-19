@extends('layouts.app')

@section('content')
    <main class="signup-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <h3 class="card-header text-center">Register User</h3>
                        <div class="card-body">
                            <form action="{{ route('register.custom') }}" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <label for="role" class="col-md-4 col-form-label text-md-right">Role</label>
                                    <div class="col-md-6">
                                        <select id="role" class="form-control @error('role') is-invalid @enderror" name="role" required>
                                            <option value="student">Student</option>
                                            <option value="teacher">Teacher</option>
                                        </select>
                                        @error('role')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div id="student_fields">
                                    <div class="form-group mb-3">
                                        <select name="group_id" class="form-control">
                                            <option value="">Select Group</option>
{{--                                            @foreach($groups as $group)--}}
{{--                                                <option value="{{ $group->id }}">{{ $group->name }}</option>--}}
{{--                                            @endforeach--}}
                                        </select>
                                        @error('group_id')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div id="teacher_fields" style="display: none;">
                                    <div class="form-group mb-3">
                                        <input type="text" placeholder="Post" id="post" class="form-control" name="post">
                                        @error('post')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Name" id="name" class="form-control" name="name" required autofocus>
                                    @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Email" id="email_address" class="form-control" name="email" required autofocus>
                                    @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                                    @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <div class="checkbox">
                                        <label><input type="checkbox" name="remember"> Remember Me</label>
                                    </div>
                                </div>
                                <div class="d-grid mx-auto">
                                    <button type="submit" class="btn btn-dark btn-block">Sign up</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var roleSelect = document.getElementById('role');
            var studentFields = document.getElementById('student_fields');
            var teacherFields = document.getElementById('teacher_fields');

            // По умолчанию показываем поля для студента
            studentFields.style.display = 'block';
            teacherFields.style.display = 'none';

            roleSelect.addEventListener('change', function() {
                if (roleSelect.value === 'student') {
                    studentFields.style.display = 'block';
                    teacherFields.style.display = 'none';
                } else if (roleSelect.value === 'teacher') {
                    studentFields.style.display = 'none';
                    teacherFields.style.display = 'block';
                } else {
                    studentFields.style.display = 'none';
                    teacherFields.style.display = 'none';
                }
            });
        });
    </script>
@endsection
