<h1>Task List</h1>

<a href="{{ route('tasks.index') }}">Task List</a>

<form method="POST" action="{{ route('tasks.store') }}">
    @csrf

    <label for="title">Title:</label>
    <input type="text" name="title" required>

    <label for="description">Description:</label>
    <textarea name="description"></textarea>

    <button type="submit">Create Task</button>
</form>
