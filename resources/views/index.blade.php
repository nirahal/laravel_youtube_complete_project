<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>myBlog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div class="text-center">
        <h1 class="my-5">Welcome to myBlog</h1>
        <p>Here is the <a href="{{ route("login") }}">link</a> Login</p>
        <p>Here is the <a href="{{ route("register") }}">link</a> Register</p>
        <p>Here is the <a href="{{ route("blog.index") }}">link</a> for the blog page</p>
    </div>
</body>
</html>