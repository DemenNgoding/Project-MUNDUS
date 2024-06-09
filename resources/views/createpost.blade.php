<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Create Post</title>
    </head>

    <body>
        <div>

        <h3> CREATE POST </h3>
            <form action="/post" method="POST" enctype ="multipart/form-data">

            @csrf

                <div>
                    <label>Title</label><br>
                    <input type="text" name="title">
                </div>

                <div>
                    <label>Description</label><br>
                    <textarea name="description"></textarea>
                </div>

                <div>
                    <label>Add Image</label><br>
                    <input type="file" name="image">
                </div>
                <br>
                <br>
                <div>
                    <input type="submit" value="Create Post" class = btn btn-outline-secondary>
                </div>
            </form>

        </div>
    </body>
</html>
