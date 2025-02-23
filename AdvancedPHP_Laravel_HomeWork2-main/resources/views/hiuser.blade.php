<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Привет, {{ $user['user_name'] }} {{ $user['user_surname'] }}... </title>
</head>
<body>
    <h2>Привет, {{ $user['user_name'] }} {{ $user['user_surname'] }}. Ваша почта: {{ $user['email'] }} </h2>
</body>
</html>
