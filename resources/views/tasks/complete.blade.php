

@extends('layouts.app')

@section('content')
<div class="container">
<h2>Mark Task as Completed</h2>
<form method="POST" action="{{ route('tasks.complete', $task->id) }}" >
@csrf
@method('PATCH')
<button type="submit" class="btn btn-success">Mark as Completed</button>
</form>
</div>
@endsection

