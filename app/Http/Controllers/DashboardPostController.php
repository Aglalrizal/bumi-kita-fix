<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Cviebrock\EloquentSluggable\Services\SlugService;
// use Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.posts.index', [
            'posts'=>Post::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.posts.create',[
            'categories'=> Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        $validatedData = $request->validate([
            'title' => 'required|max:255|unique:posts',
            'category_id' => 'required',
            'body' => 'required|min:200'
        ]); 

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['slug'] = Str::slug($validatedData['title']);
        $validatedData['excerpt'] = Str::limit(strip_tags($validatedData['body']), 100);

        Post::create($validatedData);
        return redirect('/dashboard/posts')->with('success', 'New post has been added.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('dashboard.posts.show', [
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('dashboard.posts.edit', [
            'post' => $post,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255|unique:posts',
            'category_id' => 'required',
            'body' => 'required|min:200'
        ]); 

        if($request->title != $post->title){
            $validatedData['slug'] = Str::slug($validatedData['title']);
        }else{
            $validatedData['slug'] = $post->slug;
        }
        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($validatedData['body']), 100);
        $validatedData['updated_at'] = Carbon::now();
        Post::where('id', $post['id'])->update($validatedData);
        return redirect('/dashboard/posts')->with('success', 'Post berhasil diubah.');
    
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        Post::destroy($post->id);
        return redirect('/dashboard/posts')->with('success', 'Post berhasil dihapus!');
    }
    // public function checkSlug(Request $request){
    //     $slug = SlugService::createSlug(Post::class, 'slug', $request->title);
    //     return response()->json(['slug' => $slug]);
    // }
}
