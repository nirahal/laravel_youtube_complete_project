<x-app-layout>
<body class="bg-body-secondary">
    <div class="container">
        <h2 class="text-center m-4 fw-bold">MY BLOG </h2>
        <hr class="border border-dark">

        

        <a class="btn btn-success rounded p-2 my-3" href="{{ route("blog.create") }}" role="button">Make a new Article</a>

        @foreach ($articles as $article)
        <div class="my-4">
            <h3 class="fw-bold">Article# {{$article->id}}</h3>
            <div class="bg-white rounded p-3 mx-2 row">
                <div class="col-11">
                    <h4 class="ps-3 fw-bold"><a href="{{ route("blog.show", $article->id) }}">{{$article->title}}</a></h4>
                    <div class="fw-bold fs-5 my-2">Subject : {{$article->subject}}</div>
                    <div class="text-secondary">Made by <a class="text-decoration-none text-success" href="">{{$article->user->name}}</a> on {{$article->updated_at->format('d-m-Y')}}</div>
                </div>

                @if(Auth::id()===$article->user_id)
                    <div class="col">
                        <a class="btn btn-primary px-3 my-2" href="{{ route("blog.edit", $article->id) }}" >Edit</a>
                        <form action="{{ route("blog.destroy", $article->id) }}" method="POST">
                            @csrf
                            @method("delete")
                            <button type="submit" class="btn btn-danger ">Delete</button>
                        </form> 
                    </div>
                @endif
            </div>
        </div>
        @endforeach

        <div class="mt-5">{{$articles->links()}}</div>

        
    
            
          
     
        
    </div>
    
</body>
</x-app-layout>
