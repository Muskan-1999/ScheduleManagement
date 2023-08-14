<!DOCTYPE html>
<html>
<head>
    <title>Task Completed</title>
</head>
<body>
    <h1>Task Completed</h1>
    <p>Hello,</p>
    <p>The following task has been marked as completed:</p>
    <ul>
        <li>Title: {{ $task->title }}</li>
        <li>Description: {{ $task->description }}</li>
        <li>Start Date: {{ $task->start_date }}</li>
        <li>End Date: {{ $task->end_date }}</li>
    </ul>
    <p>Thank you!</p>
</body>
</html>
