<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1.0"
        />
        <meta
            http-equiv="X-UA-Compatible"
            content="ie=edge"
        />
        <title>MyBlog</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>

    <body class="container">
        <div class="mx-auto my-4">
            <div class="mb-5">
                <a href="{{ route("blog.index") }}" class="text-success text-decoration-none fw-bold">< Back to previous page</a>
            </div>

            <div class="p-2">

                <div >
                    <h4 class="my-2 fs-2 fw-bold">{{$article->title}}</h4>
                    <span class="">Made by: <a href="" class="fw-bold text-success text-decoration-none"> Code With Nora</a> On 17-07-2022</span>
                </div>

                <div class="text-dark">
                    <p class="fw-bold">Subject : {{$article->subject}}</p>
                    <p class="fs-6">{{$article->body}}</p>
                </div>
        
                <form action="" method=""> 
                    <button type="submit" class="btn btn-primary"> Likes </button>
                    <button type="submit" class="btn btn-success"> I KNOW </button>
                </form>
            </div>
        </div>
    </body>
</html>