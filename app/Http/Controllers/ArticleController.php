<?php

namespace App\Http\Controllers;
use App\Models\Article;
use App\Models\ArticleImages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all();
        return view('articles.index')->with('articles', $articles);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request->hasFile("cover")){
            $file=$request->file("cover");
            $imageName=time().'_'.$file->getClientOriginalName();
            $file->move(\public_path("cover/"),$imageName);
 
            $articles = new Article([
                "add_user" =>$request->add_user,
                "article_name" =>$request->article_name,
                "article_data" =>$request->article_data,
                "tags" => $request->tags,
                "cover" =>$imageName,
            ]);
           $articles->save();
        }
 
        // if($request->hasFile("images")){
        //         $files=$request->file("images");
        //         foreach($files as $file){
        //             $imageName=time().'_'.$file->getClientOriginalName();
        //             $request['article_id']=$articles->id;
        //             $request['images']=$imageName;
        //             $file->move(\public_path("/images"),$imageName);
        //             ArticleImages::create($request->all());
        //         }
        // }
 
        return redirect("/");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
