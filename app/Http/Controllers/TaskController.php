<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\TaskCreatedNotification;
use App\Mail\TaskUpdatedNotification;
use App\Mail\TaskCompletedNotification;

class TaskController extends Controller
{
public function index()
{
$tasks = Task::orderBy('start_date', 'asc')->get();
return view('tasks.index', compact('tasks'));
}

public function create()
{
return view('tasks.create');
}

public function store(Request $request)
{
$data = $request->validate([
'title' => 'required',
'description' => 'nullable',
'start_date' => 'required|date',
'end_date' => 'required|date|after:start_date',
]);

$task = Task::create($data);
$user = User::find(1);
// Send email notification
Mail::to($user->email)->send(new TaskCreatedNotification($task));

return redirect()->route('tasks.index');
}

public function edit(Task $task)
{
return view('tasks.edit', compact('task'));
}

public function update(Request $request, Task $task)
{
$data = $request->validate([
'title' => 'required',
'description' => 'nullable',
'start_date' => 'required|date',
'end_date' => 'required|date|after:start_date',
]);

$task->update($data);

// Send email notification
$user = User::find(1);
Mail::to($user->email)->send(new TaskUpdatedNotification($task));

return redirect()->route('tasks.index');
}

public function reschedulepage(Task $task)
{
return view('tasks.reschedule', compact('task'));
}


public function reschedule(Request $request, Task $task)
{
// Update start_date and end_date based on user input
$task->update([
'start_date' => $request->input('new_start_date'),
'end_date' => $request->input('new_end_date'),
]);

return redirect()->route('tasks.index');
}

public function completepage(Task $task)
{
return view('tasks.complete', compact('task'));
}

public function complete(Task $task)
{
$task->update(['completed' => true]);

// Send email notification
$user=User::find(1);
Mail::to($user->email)->send(new TaskCompletedNotification($task));

return redirect()->route('tasks.index');
}
}
