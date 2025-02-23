<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User registration form</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>

<div class="form-user-registration">
    <h2>User registration</h2>
    <form name="add-new-user" id="add-new-user" method="post" action="/store_form">
        @csrf
        <div class="form-elements">
            <label for="user_name">Имя: </label>
            <input type="text" name="user_name" id="user_name" required>
            <label for="user_surname">Фамилия: </label>
            <input type="text" name="user_surname" id="user_surname" required>
            <label for="email">Email: </label>
            <input type="text" name="email" id="email">
        </div>
        <button type="submit">Submit</button>
    </form>
</div>

</body>
</html>
