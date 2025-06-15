<?php

use App\Http\Controllers\StaticContentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Include Breeze's auth routes first, or at least before the root route logic.
// This ensures the login/register routes are defined.
require __DIR__.'/auth.php';

// The root route:
// If unauthenticated, Breeze's default behavior will redirect to /login
// if you remove the public '/' route.
// If authenticated, it can redirect to /dashboard.
Route::get('/', function () {
    if (Auth::check()) {
        return redirect()->route('home'); // Redirect authenticated users to dashboard
    }
    // If not authenticated, you could redirect to login,
    // or display a public landing page.
    // For a Breeze-like flow, often the root is redirected.
    return redirect()->route('login'); // Explicitly redirect guests to login
})->name('welcome'); // Renamed to 'welcome' as 'home' might conflict conceptually

// Or if you want a public "welcome" page that just has login links
// Route::get('/', function () { return view('welcome'); });


// Public FAQ and Posts index
Route::get('/faq', [FaqController::class, 'index'])->name('faqs.index');
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

// Protect all following routes with auth middleware
Route::middleware('auth')->group(function () {
    // Your actual home page for authenticated users (if different from dashboard)
    // You can rename this to something like 'app.home' if 'home' is your public '/' route.
    Route::get('/home', [StaticContentController::class, 'home'])->name('home');

    // Dashboard - this will be the landing page after login by default for Breeze
    Route::get('/dashboard', [StaticContentController::class, 'dashboard'])->name('dashboard');

    Route::get('/my-profile', [StaticContentController::class, 'profile'])->name('static.profile');


    // User profile management routes from Breeze
    // Make sure you're using Breeze's ProfileController here.
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Posts CRUD routes
    Route::get('posts/create', [PostController::class, 'create'])->name('posts.create');
    Route::post('posts', [PostController::class, 'store'])->name('posts.store');
    Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show');
    Route::get('posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
    Route::put('posts/{post}', [PostController::class, 'update'])->name('posts.update');
    Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
});


// Error page route
Route::get('/404', [StaticContentController::class, 'error404'])->name('errors.404');

// Optional test route to trigger a 500 error
Route::get('/test-500', function () {
    abort(500);
});
