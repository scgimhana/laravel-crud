@extends('layouts.app')

@section('title', 'Task List')
@section('content')
<div class="py-5">
    <h1>Task List</h1>
    <a href="{{ route('tasks.create') }}" class="text-decoration-none">Create New Task</a>
    <table class="table mt-4 table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
                <tr>
                    <td>{{ $task->title }}</td>
                    <td>
                        <div class="d-flex">
                            <a href="{{ route('tasks.edit', $task) }}" class="text-decoration-none me-3">Edit</a>
                            <form action="{{ route('tasks.destroy', $task) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-transparent p-0 border-0">&times;</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
