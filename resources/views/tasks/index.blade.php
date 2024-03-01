@extends('layouts.app')

@section('title', 'Task  Lisr')
@section('content')
<h1>Task List</h1>

<a href="{{ route('tasks.create') }}">Create New Task</a>

<ul>
    @foreach ($tasks as $task)
        <li>
            {{ $task->title }}
            <a href="{{ route('tasks.edit', $task) }}">Edit</a>
            <form action="{{ route('tasks.destroy', $task) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </li>
    @endforeach
</ul>
@endsection
