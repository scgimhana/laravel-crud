@extends('layouts.app')

@section('title', 'Edit Student')
@section('content')
<div class="py-5">
    <h2>Edit Student</h2>

    <form class="mt-4" method="POST" action="{{ route('students.update', $student->id) }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="firstname" class="form-label">First Name:</label>
            <input type="text" name="firstname" class="form-control" value="{{ old('title', $student->firstname) }}" required>
        </div>

        <div class="mb-3">
            <label for="lastname" class="form-label">Last Name:</label>
            <input type="text" name="lastname" class="form-control" value="{{ old('title', $student->lastname) }}">
        </div>

        <button class="btn btn-outline-primary" type="submit">Update Student</button>
    </form>
</div>
@endsection
