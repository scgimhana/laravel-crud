@extends('layouts.app')

@section('title', 'Student List')
@section('content')
<div class="py-5">
    <h1>Student List</h1>
    <a href="{{ route('students.create') }}" class="text-decoration-none">Create New Student</a>
    <table class="table mt-4 table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->firstname }}</td>
                    <td>
                        <div class="d-flex">
                            <a href="{{ route('students.edit', $student) }}" class="text-decoration-none me-3">Edit</a>
                            <form action="{{ route('students.destroy', $student) }}" method="POST">
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
