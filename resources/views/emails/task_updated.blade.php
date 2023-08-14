<!DOCTYPE html>
<html>
<head>
    <title>Task Updated</title>
</head>
<body>
    <h1>Task Updated</h1>
    <p>Hello,</p>
    <p>The following task has been updated:</p>
    <ul>
        <li>Title: {{ $task->title }}</li>
        <li>Description: {{ $task->description }}</li>
        <li>Start Date: {{ $task->start_date }}</li>
        <li>End Date: {{ $task->end_date }}</li>
    </ul>
    <p>Thank you!</p>
</body>
</html>
