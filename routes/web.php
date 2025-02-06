<?php
    
    use App\Http\Controllers\PostController;
    use App\Http\Controllers\ProfileController;
    use Illuminate\Support\Facades\Route;
    
    
    Route::view('/', 'welcome')->name('home');
    Route::view('contacto', 'contact')->name('contact');
    Route::view('blog', 'blog')->name('blog');
    Route::view('nosotros', 'about')->name('about');
    
    Route::get('/post/{post}', [PostController::class, 'show'])->name('post.show');
    Route::get('/index', [PostController::class, 'index'])->name('posts.index');
    
    Route::middleware('auth')->group(function () {
        Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
        Route::get('/posts/edit/{post}', [PostController::class, 'edit'])->name('posts.edit');
        Route::patch('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
        Route::post('/posts/{post}', [PostController::class, 'destroy'])->name('posts.delete');
        Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
        
        Route::get('/index-admin/{esAdmin}', [PostController::class, 'index'])->name('index-admin');
        Route::view('/dashboard', 'dashboard')->name('dashboard');
        
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });
    
    require __DIR__.'/auth.php';
