@extends('layouts.app')

@section('title', 'Edit Student')
@section('content')
<div class="py-5">
    <h2>Edit Task</h2>

    <form class="mt-4" method="POST" action="{{ route('tasks.update', $task->id) }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Title:</label>
            <input type="text" class="form-control" name="title" value="{{ old('title', $task->title) }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description:</label>
            <textarea name="description" class="form-control" required>{{ old('description', $task->description) }}</textarea>
        </div>

        <button class="btn btn-outline-primary" type="submit">Update Student</button>
    </form>
</div>
@endsection
