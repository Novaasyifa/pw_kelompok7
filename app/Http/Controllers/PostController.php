<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        // $posts = Post::latest();

        // if(request('search')) {
        //     $posts->where('title', 'like', '%' . request('search') . '%');
        // }
        // dd(request('search'));

        return view('posts.index', [
            "title" => "Posts",
            "posts" => Post::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function search(Request $request)
    {
        if ($request->ajax()) {
            $output = '<section class="grid grid-cols-1 gap-3 mx-5 my-5 ml-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 home">';
            $posts = Post::where('title', 'LIKE', '%' . $request->search . '%')
                ->orWhere('author', 'LIKE', '%' . $request->search . '%')
                ->get();

            if ($posts) {
                foreach ($posts as $post) {
                    $output .= '<div class="w-full max-w-[125%] border border-black rounded-lg shadow"  >' .
                        '<div class="overflow-hidden max-h-475px max-w-303px">
                        <img class="p-8 rounded-t-lg w-[100%]" src=" ' . asset("storage/" . $post->image) . ' " alt=" ' . $post->title . ' " />
                    </div>
                    <div class="px-5 pb-5">
                        <ul>
                            <li>
                                <h5 class="font-sans text-xl tracking-tight text-gray-900"> Write by ' . $post->author->username . ' </h5>
                            </li>
                            <li>
                                <a href="/showHome/ ' . $post->title . '  ">
                                    <h3 class="font-sans text-xl tracking-tight text-gray-900 hover:font-serif"> ' . $post->title . ' </h3>
                                </a>
                            </li>
                            <li>
                                <h3 class="font-sans text-xl tracking-tight text-gray-900"> ' . $post->category->name . ' </h3>
                            </li>
                        </ul>
                        <div class="flex items-center justify-between">
                            <small class="text-2xl font-bold text-gray-900">Rp. ' . $post->price . ' </small>
                        </div>
                    </div>
                </div>';
                }
                $output .= '</section>';
                return $output;
            }
        }
        return 'not found';
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'author_id' => 'required|max:255',
            'title' => 'required|unique:posts',
            'genre_id' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:10000',
            'category_id' => 'required',
            'price' => 'required',
            'description' => 'required'

        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-images', 'public');
        }

        Post::create($validatedData);

        return redirect('/dashboard/posts')->with('success', 'New book has been added!');
    }

    /**
     * Display the specified resource.
     */

    public function showHome(Post $post)
    {
        return view('showInUser', [
            "title" => "Single Post",
            "post" => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
