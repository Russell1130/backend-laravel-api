<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Article;
use Validator;


class BlogController extends Controller
{
    /**
     * Create a new BlogController instance.
     *
     * @return void
     */

    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function insert(Request $request){
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|unique:articles',
            'body' => 'required|string',
            'keywords' => 'required|string',
            'author' => 'required|string',
            'image' => 'required',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors()->toJson(), 400);
        }

        $article = new Article;
        $article->title = $request->input('title');
        $article->body = $request->input('body');
        $article->keywords = $request->input('keywords');
        $article->author = $request->input('author');
    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = 'image_'.time().'.'.$image->getClientOriginalExtension();
            $path = $image->storeAs('public/images', $filename);
            $url = asset('storage/images/'.$filename);
            $article->image_url = $url;
        }
    
        $article->save();
    }

    public function get_all(Request $request) {
        $articles = Article::all();
        return $articles;
    }

    public function get_by_title(Request $request) {
        $title = $request->input('title');
        $article = Article::where('title', $title) -> first();

        if ($article) {
            return response()->json($article, 200);
        } else {
            return response()->json([], 404);
        }
    }
}