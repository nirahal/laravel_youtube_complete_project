<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use App\Models\Article;
use Illuminate\Http\Request;


class ArticlesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('create','destroy','edit','update');
    }




    
    /**
     *  
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::paginate(3); 
        return view("blog.index", ["articles" => $articles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("blog.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $user = Auth::user()->id;
        

        Article::create([
            'title' => $request->title,
            'user_id'=>$user,
            'subject' => $request->subject,
            'body' => $request->body,
            'likes'=>0,
            'comments' => "",
            'isPublished' => $request->isPublished === "on"
        ]);

        return redirect(route("blog.index"));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::where("id", $id)->get();
        return view("blog.show", ["article"=> $article[0]]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::where("id", $id)->get();
        return view("blog.edit", ["article" =>$article[0]] );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Article::where("id", $id)->update([
            'title' => $request->title,
            'subject' => $request->subject,
            'body' => $request->body,
            'likes'=>0,
            'comments' => "",
            'isPublished' => $request->isPublished == "on"
        ]);


        return redirect(route("blog.index"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Article::where("id", $id)->delete();
        return redirect(route("blog.index"));
    }
}
