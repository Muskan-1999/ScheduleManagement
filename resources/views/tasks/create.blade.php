{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <h3>Create Task</h3>
    <form id="create-task-form">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description"></textarea>
        </div>
        <div class="form-group">
            <label for="start_date">Start Date</label>
            <input type="datetime-local" class="form-control" id="start_date" name="start_date" required>
        </div>
        <div class="form-group">
            <label for="end_date">End Date</label>
            <input type="datetime-local" class="form-control" id="end_date" name="end_date" required>
        </div><br>
        <button type="submit" class="btn btn-primary">Create Task</button>
    </form>
</div>

<script>
    // AJAX handling for creating a task
    $(document).ready(function () {
        $('#create-task-form').submit(function (e) {
            e.preventDefault();

            $.ajax({
                url: '/tasks',
                type: 'POST',
                data: $(this).serialize(),
                success: function (response) {
                    showSuccess('Task created successfully.');
                    // Handle success, maybe display a message or update the task list
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
    <h2>Create Task</h2>
    <form method="POST" action="{{ route('tasks.store') }}">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description"></textarea>
        </div>
        <div class="mb-3">
            <label for="start_date" class="form-label">Start Date</label>
            <input type="datetime-local" class="form-control" id="start_date" name="start_date" required>
        </div>
        <div class="mb-3">
            <label for="end_date" class="form-label">End Date</label>
            <input type="datetime-local" class="form-control" id="end_date" name="end_date" required>
        </div>
        <button type="submit" class="btn btn-primary">Create Task</button>
    </form>
</div>
@endsection