<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class ArticleController extends Controller
{
    // Fetch all articles with category relation
    public function index()
    {
        $articles = Article::with('category')->get();
        return response()->json($articles);
    }

    // Store a new article
    public function store(Request $request)
    {
        // Validate incoming request
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'meta_title' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'slug' => 'required|string|max:255|unique:articles,slug',
            'description' => 'nullable|string',
            'yt_iframe' => 'nullable|string',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string',
            'status' => 'boolean',
            'created_by' => 'required|exists:users,id',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'The given data was invalid.',
                'errors' => $validator->errors()
            ], 422);
        }

        // Create new article
        $article = new Article();
        $article->name = $request->input('name');
        $article->meta_title = $request->input('meta_title');
        $article->category_id = $request->input('category_id');
        $article->slug = Str::slug($request->input('name'));
        $article->description = $request->input('description');
        $article->yt_iframe = $request->input('yt_iframe');
        $article->meta_description = $request->input('meta_description');
        $article->meta_keywords = $request->input('meta_keywords');
        $article->status = $request->input('status') ? 1 : 0;
        $article->created_by = $request->input('created_by');

        $article->save();

        return response()->json($article, 201);
    }

    // Show a single article
    public function show(Article $article)
    {
        return response()->json($article);
    }

    // Update an existing article
    public function update(Request $request, Article $article)
    {
        // Validate incoming request
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'meta_title' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'description' => 'nullable|string',
            'yt_iframe' => 'nullable|string',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string',
            'status' => 'required|boolean',
            'created_by' => 'required|exists:users,id',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'The given data was invalid.',
                'errors' => $validator->errors()
            ], 422);
        }

        // Update article attributes
        $article->name = $request->input('name');
        $article->meta_title = $request->input('meta_title');
        $article->category_id = $request->input('category_id');
        $article->slug = Str::slug($request->input('name'));
        $article->description = $request->input('description');
        $article->yt_iframe = $request->input('yt_iframe');
        $article->meta_description = $request->input('meta_description');
        $article->meta_keywords = $request->input('meta_keywords');
        $article->status = $request->input('status') ? 1 : 0;
        $article->created_by = $request->input('created_by');

        $article->save();

        return response()->json($article);
    }

    // Delete an article
    public function destroy(Article $article)
    {
        $article->delete();
        return response()->json(null, 204);
    }
}
