<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div >
            <h3 class="text-center fw-bold p-4">Add new post</h3>
        </div>
        <hr class="border border-dark">

        <form action="{{ route("blog.store") }}" method="POST" enctype="">
        @csrf
            
            <div class="mt-5">
                <div class="form-check my-3">
                    <label class="form-check-label fw-bold" for="is_published">Is Published </label>
                    <input class="form-check-input" value="on" name="isPublished" type="checkbox" value="" id="is_published">
                </div>
                
                <input type="text" name="title" class="form-control my-3" placeholder="Title">
                <input type="text" name="subject" class="form-control my-3" placeholder="Subject">
                <div class="form-floating my-3">
                    <textarea class="form-control" placeholder="Body here" id="floatingTextarea" style="height: 100px" name="body"></textarea>
                    <label for="floatingTextarea" class="text-secondary">Body...</label>
                </div>
    
                <button class="btn btn-primary" type="submit">Submit a post</button>
            </div>
        </form>




    </div>
</body>
</html>