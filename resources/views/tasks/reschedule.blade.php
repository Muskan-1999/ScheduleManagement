{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <h2>Reschedule Task</h2>
    <form id="reschedule-task-form">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="new_start_date">New Start Date</label>
            <input type="datetime-local" class="form-control" id="new_start_date" name="new_start_date" required>
        </div>
        <div class="form-group">
            <label for="new_end_date">New End Date</label>
            <input type="datetime-local" class="form-control" id="new_end_date" name="new_end_date" required>
        </div>
        <button type="submit" class="btn btn-primary">Reschedule Task</button>
    </form>
</div>

<script>
    // AJAX handling for rescheduling a task
    $(document).ready(function () {
        $('#reschedule-task-form').submit(function (e) {
            e.preventDefault();

            $.ajax({
                url: '/tasks/{{ $task->id }}/reschedule',
                type: 'PATCH',
                data: $(this).serialize(),
                success: function (response) {
                    
                showSuccess('Task rescheduled successfully.');

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
    <h2>Reschedule Task</h2>
    <form method="POST" action="{{ route('tasks.rescheduled', $task->id) }}">
        @csrf
        @method('PATCH')
        <div class="mb-3">
            <label for="new_start_date" class="form-label">New Start Date</label>
            <input type="datetime-local" class="form-control" id="new_start_date" name="new_start_date" required>
        </div>
        <div class="mb-3">
            <label for="new_end_date" class="form-label">New End Date</label>
            <input type="datetime-local" class="form-control" id="new_end_date" name="new_end_date" required>
        </div>
        <button type="submit" class="btn btn-primary">Reschedule Task</button>
    </form>
</div>
@endsection

