<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
    <h1>Create Event</h1>

    <form action="{{ route('events.store')}}" method="post">
        @csrf <!-- Agrega el token CSRF si estás utilizando Laravel -->

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="date">Date:</label>
        <input type="date" id="date" name="date" required><br><br>

        <label for="time">Hour:</label>
        <input type="time" id="time" name="hour" required step="60"><br><br>

        <label for="description">Description:</label><br>
        <textarea id="description" name="description" rows="4" cols="50" required></textarea><br><br>

        <label for="location">Location:</label>
        <input type="text" id="location" name="location" required><br><br>

        <label for="imagen">Image:</label>
        <input type="text" id="imagen" name="imagen"><br><br>

        <label for="type">Type:</label>
        <input type="text" id="type" name="type" required><br><br>

        <label for="category">Category:</label>
        <input type="text" id="category" name="category" required><br><br>

        <input type="submit" value="Submit">
    </form>
</div>
</body>
</html>




