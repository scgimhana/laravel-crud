@extends('layouts.app')

@section('title', 'Edit Task')
@section('content')
<h2>Edit Task</h2>

<form method="POST" action="{{ route('tasks.update', $task->id) }}">
    @csrf
    @method('PUT')

    <label for="title">Title:</label>
    <input type="text" name="title" value="{{ old('title', $task->title) }}" required>

    <label for="description">Description:</label>
    <textarea name="description" required>{{ old('description', $task->description) }}</textarea>


    <button type="submit">Update Task</button>
</form>
@endsection
