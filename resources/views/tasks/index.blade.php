@extends('layouts.app')

</div>
@section('content')
<div class="container">
    <h2>Task List</h2>
    <a href="{{ route('tasks.create') }}" class="btn btn-primary">Create New Task</a>

    <table class="table mt-3">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
                <tr>
                    <td>{{ $task->title }}</td>
                    <td>{{ $task->description }}</td>
                    <td>{{ $task->start_date }}</td>
                    <td>{{ $task->end_date }}</td>
                    <td>
                        <a href="{{ route('tasks.edit', $task) }}" class="btn btn-sm btn-primary">Edit</a>
                        <a href="{{ route('tasks.reschedule', $task) }}" class="btn btn-sm btn-warning">Reschedule</a>
                        <a href="{{ route('tasks.complete', $task) }}" class="btn btn-sm btn-success">Complete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection