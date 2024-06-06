<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
</head>
<body>
    <a href="/"> Back </a>
    <br>
    <br>
    <h1> Welcome back to Mundus </h1>
    <form action="/login" method="post">
        @csrf
        <label for="email"> Email: </label>
        <input type="text" name="email"><br><br>
        <label for="password"> Password: </label>
        <input type="password" name="password"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>