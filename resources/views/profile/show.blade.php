<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Image still cannot be shown. Supposed to be default image when user doesnt upload their image yet -->
    <img src="image.png" alt="Profile Picture" width=200px>
    <br><br>
    <form action="/edit/1" method="GET">
        <input type="submit" value="Edit">
    </form>
    <p><strong>fName:</strong> {{ $user->f_name }}</p>
    <p><strong>lName:</strong> {{ $user->l_name }}</p>
    <p><strong>Email:</strong> {{ $user->email }}</p>
    <p><strong>Bio:</strong> {{ $user->bio }}</p>
</body>
</html>

