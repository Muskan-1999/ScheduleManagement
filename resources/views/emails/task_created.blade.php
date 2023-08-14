<!DOCTYPE html>
<html>
<head>
    <title>New Task Created</title>
</head>
<body>
    <h1>New Task Created</h1>
    <p>Hello,</p>
    <p>A new task has been created with the following details:</p>
    <ul>
        <li>Title: {{ $task->title }}</li>
        <li>Description: {{ $task->description }}</li>
        <li>Start Date: {{ $task->start_date }}</li>
        <li>End Date: {{ $task->end_date }}</li>
    </ul>
    <p>Thank you!</p>
</body>
</html>
