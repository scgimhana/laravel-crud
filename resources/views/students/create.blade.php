@extends('layouts.app')

@section('title', 'Create New Task')
@section('content')
<div class="py-5">
    <h1>Create New Student</h1>

    <a class='text-decoration-none' href="{{ route('students.index') }}">Student List</a>

    <form class="mt-4" method="POST" action="{{ route('students.store') }}">
        @csrf

        <div class="mb-3">
            <label for="firstname" class="form-label">First Name:</label>
            <input type="text" name="firstname" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="lastname" class="form-label">Last Name:</label>
            <input type="text" name="lastname" class="form-control">
        </div>

        <button type="submit">Create Student</button>
    </form>
</div>
@endsection
