<?php

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
// use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostController;
use App\Models\Post;
use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CetakController;
use App\Http\Controllers\OrdersController;
use App\Http\Middleware\AdminMiddleware;
use App\Models\Book;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/home', function () {
//     return view('home');
// });

// Route::get('/login', function () {
//     return view('login.index');
// });

// Route::get('/register', function () {
//     return view('register.index');
// });

Route::get('/navbar', function () {
    return view('navbar');
});

Route::get('/', function () {
    return view(
        'home',
        [
            "title" => "Home",
            'posts' => Post::latest()->filter(request(['search', 'category']))->paginate(8)->withQueryString()
        ]
    );
});


Route::get('/categories', function () {
    return view('categories', [
        "title" => "Post Categories",
        "categories" => Category::all(),
        'posts' => Post::all()
    ]);
});

// Route::get('/categories?category={category:slug}', function (Category $category) {
//     return view('categories', [
//         "title" => $category->name,
//         "posts" => $category->posts,
//         "category" => $category->name,
//         "categories" => Category::all(),
//         "posts" => Post::all()
//     ]);
// });

Route::get('/categories', [CategoryController::class, 'index']);



Route::get('/Products', function () {
    return view('Products', [
        "title" => "Products",
        'posts' => Post::all()
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware(AdminMiddleware::class);


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->middleware('guest');
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');


Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');


// Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/auth/google', [GoogleAuthController::class, 'redirect'])->name('google-auth');
Route::get('/auth/google/call-back', [GoogleAuthController::class, 'callbackGoogle']);

Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::post('/dashboard/posts/create', [PostController::class, 'store'])->name('create_post');
Route::get('/dashboard/posts/{post:title}/edit', [DashboardPostController::class, 'edit']);
Route::put('/dashboard/posts/{post:title}', [DashboardPostController::class, 'update']);
Route::get('/dashboard/show/{post:title}', [DashboardPostController::class, 'show'])->name('show_post');
Route::get('/showHome/{post:title}', [PostController::class, 'showHome'])->name('show_postInHome');
// Route::get('/Products/{post:title}', [PostController::class, 'show'])->name('show_post');

Route::get('/cetakBuku', [CetakController::class, 'cetakBuku'])->name('cetakBuku');

Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show');

Route::post('/dashboard/categories', [AdminCategoryController::class, 'index'])->name('create_category');

Route::get('/about', function () {
    return view('about');
});
Route::get('/privacy', function () {
    return view('privacy');
});

Route::get('/contact', function () {
    return view('contact');
});

// Route::get('/placeOrder', function () {
//     return view('php/placeOrder');
// });

// routes/web.php atau routes/api.php

// Route::post('/placeOrder', [OrdersController::class, 'placeOrder']);

// routes/web.php

// Route::post('/placeOrder', 'OrdersController@handlePlaceOrder');


Route::get('search', [PostController::class, 'search']);
// Route::get('searchResult', [Post::class, 'searchResult']);

Route::get('/index', [BookController::class, 'index']);

// test push and pull
