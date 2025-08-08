<?php
/*
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;         // ✅ ضروري عشان $request->only() يشتغل
use Illuminate\Support\Facades\Auth; // ✅ ضروري عشان Auth::attempt() تشتغل

use App\Http\Controllers\ArticleController;

// Public routes - anyone can view articles (no login required)
Route::get('/', fn () => view('welcome'))->name('home'); // Homepage
Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index'); // List all articles

// Protected CRUD routes - only authenticated users can access
Route::middleware(['auth'])->group(function () {
    // Resource routes for articles (create, store, edit, update, destroy, show)
    // except(['index']) means skip index route (already defined above)
    Route::resource('articles', ArticleController::class)->except(['index']);
});
// Public routes outside the middleware group

// Route::get('/articles', [ArticleController::class, 'index']);
Route::get('/articles/{article}', [ArticleController::class, 'show'])->name('articles.show');
// Route::get('/articles/{article}', [ArticleController::class, 'show'])->name('articles.show');








Route::get('/about', function () {
    return view('about');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::post('/login', function (Request $request) {
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        return redirect()->intended('/');
    }

    return back()->withErrors([
        'email' => 'Invalid credentials.',
    ]);
});

Route::post('/register', function (Request $request) {
    $data = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8|confirmed',
    ]);

    $data['password'] = bcrypt($data['password']);

    \App\Models\User::create($data);

    return redirect()->route('login')->with('success', 'Registration successful. Please log in.');
});

Route::post('/logout', function () {
    Auth::logout();
    return redirect()->route('home');
})->name('logout');
Route::get('/logout', function () {
    Auth::logout();
    return redirect()->route('home');
})->name('logout');*/




use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\ArticleController;

Route::get('/', fn () => view('welcome'))->name('home'); // Homepage
Route::get('/about', fn () => view('about'))->name('about'); // Static about page
Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index'); // List all articles
Route::get('/dashboard', function () {
    $user = Auth::user();
    $totalArticles = \App\Models\Article::where('user_id', $user->id)->count();
    $recentArticles = \App\Models\Article::where('user_id', $user->id)->latest()->take(5)->get();
    return view('dashboard', compact('totalArticles', 'recentArticles'));
})->middleware('auth')->name('dashboard');

Route::middleware(['auth'])->group(function () {
    // Resource routes for articles (create, store, edit, update, destroy, show)
    
    Route::resource('articles', ArticleController::class)->except(['index']);
});

Route::get('/articles/{article}', [ArticleController::class, 'show'])->name('articles.show'); // View single article
Route::get('/about', fn () => view('about'))->name('about'); // Static about page


Route::get('/login', fn () => view('auth.login'))->name('login');
Route::get('/register', fn () => view('auth.register'))->name('register');

// Handle login
Route::post('/login', function (Request $request) {
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        return redirect()->intended('/');
    }

    return back()->withErrors([
        'email' => 'Invalid credentials.',
    ]);
});

// Handle registration
Route::post('/register', function (Request $request) {
    $data = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8|confirmed',
    ]);

    $data['password'] = bcrypt($data['password']);

    \App\Models\User::create($data);

    return redirect()->route('login')->with('success', 'Registration successful. Please log in.');
});

// Handle logout (POST only for safety)
Route::post('/logout', function () {
    Auth::logout();
    return redirect()->route('home');
})->name('logout');

/*

// ===========================
// ✅ Public Routes
// ===========================

// Homepage
Route::get('/', fn () => view('welcome'))->name('home');

// List all articles
Route::middleware(['auth'])->group(function () {
Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create'); // Create new article form
// View single article
Route::get('/articles/{article}', [ArticleController::class, 'show'])->name('articles.show');
});
// Static pages
Route::get('/about', fn () => view('about'))->name('about');
Route::get('/dashboard', fn () => view('dashboard'))->middleware('auth')->name('dashboard');



// ===========================
// ✅ Auth Routes (Register, Login, Logout)
// ===========================

// Show login & register forms
Route::get('/login', fn () => view('auth.login'))->name('login');
Route::get('/register', fn () => view('auth.register'))->name('register');

// Handle login
Route::post('/login', function (Request $request) {
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        return redirect()->intended('/');
    }

    return back()->withErrors([
        'email' => 'Invalid credentials.',
    ]);
});

// Handle registration
Route::post('/register', function (Request $request) {
    $data = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8|confirmed',
    ]);

    $data['password'] = bcrypt($data['password']);

    \App\Models\User::create($data);

    return redirect()->route('login')->with('success', 'Registration successful. Please log in.');
});

// Handle logout (POST only for safety)
Route::post('/logout', function () {
    Auth::logout();
    return redirect()->route('home');
})->name('logout');

// ===========================
// ✅ Protected Article Routes (auth required)
// ===========================
Route::middleware(['auth'])->group(function () {
    Route::resource('articles', ArticleController::class)->except(['index', 'show']);
});
*/