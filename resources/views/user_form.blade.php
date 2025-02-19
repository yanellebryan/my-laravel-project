<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>
    <body>
        <h2>Create User</h2>
        <form action = "{{ url('/submit-form') }}" method="POST">
            <label for="name">Name:</label>
            <input type = "text" id ="name" name="name" required><br><br>

            <label for="email">Email:</label>
            <input>

    </body>
</html>
