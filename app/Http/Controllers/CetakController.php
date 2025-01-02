<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use Illuminate\Http\Request;
use PDF;
use App\Models\Post;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class CetakController extends Controller
{
    public function cetakBuku()
    {
        // $buku = \App\Models\Post::all();
        // $pdf = PDF::loadview('buku_pdf',['buku'=>$buku]);
        // return $pdf->stream();

        $buku = Post::with('category')->get();
        return view('dashboard.posts.cetakBuku', compact('buku'));
    }
}
=======
use App\Models\Category;
use App\Models\Post;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            // $title = ' in ' . $category->name;

        }

        return view('categories', [
            "title" => "Post Categories",
            "categories" => Category::all(),
            'posts' => Post::latest()->filter(request(['category']))->paginate(25)->withQueryString()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}
>>>>>>> main
