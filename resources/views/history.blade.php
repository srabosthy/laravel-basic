<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History</title>
</head>
<body>
    <div>
        <h2>History</h2>
        <p>This is our history page.</p>
        <p>Name: {{ $name }}</p>
        <p>Email: {{ $email }}</p>
        <p>Category: {{ $category }}</p>
        <ul>
            @foreach($employess as $e)
            <li> {{ $e }}</li>
            @endforeach 
        </ul>
    </div>
</body>
</html>