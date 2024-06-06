<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
    <a href="/"> Back </a>
    <br>
    <br>
    <h1> Reach What You've Dreamed for Here </h1>
    <form action="" method="post">
        @csrf
        <label for="name"> Name: </label>
        <input type="text" name="name"><br><br>
        <label for="email"> Email: </label>
        <input type="email" name="email"><br><br>
        <label for="password"> Password: </label>
        <input type="password" name="password"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>