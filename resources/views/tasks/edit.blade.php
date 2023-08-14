{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Task</h2>
    <form id="edit-task-form">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $task->title }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description">{{ $task->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="start_date">Start Date</label>
            <input type="datetime-local" class="form-control" id="start_date" name="start_date" value="{{ $task->start_date }}" required>
        </div>
        <div class="form-group">
            <label for="end_date">End Date</label>
            <input type="datetime-local" class="form-control" id="end_date" name="end_date" value="{{ $task->end_date }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Task</button>
    </form>
</div>

<script>
    // AJAX handling for updating a task
    $(document).ready(function () {
        $('#edit-task-form').submit(function (e) {
            e.preventDefault();

            $.ajax({
                url: '/tasks/{{ $task->id }}',
                type: 'PUT',
                data: $(this).serialize(),
                success: function (response) {
                    showSuccess('Task updated successfully.');
                },
                error: function (xhr) {
                    showError(xhr.responseJSON.errors);
                }
            });
        });
    });
</script>
@endsection --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Task</h2>
    <form method="POST" action="{{ route('tasks.update', $task->id) }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $task->title }}" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description">{{ $task->description }}</textarea>
        </div>
        <div class="mb-3">
            <label for="start_date" class="form-label">Start Date</label>
            <input type="datetime-local" class="form-control" id="start_date" name="start_date" value="{{ $task->start_date }}" required>
        </div>
        <div class="mb-3">
            <label for="end_date" class="form-label">End Date</label>
            <input type="datetime-local" class="form-control" id="end_date" name="end_date" value="{{ $task->end_date }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Task</button>
    </form>
</div>
@endsection