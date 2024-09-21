<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CriteriaController;
    
Route::get('/', function () {
    return view('welcome');
});



// Route to display the event list ////IMPORTANTTTTTTTT
Route::get('/events', [EventController::class, 'index'])->name('events.index');

// Route to add a new event (this will handle the form submission)
Route::post('/events/add', [EventController::class, 'addEvent'])->name('add_event');

Route::get('/events/{id}/manage', [EventController::class, 'manageEvent'])->name('events.manage');

// Route to display the form (GET request)
Route::get('/events/{id}/category/create', [CategoryController::class, 'create'])->name('category.create');

// Route to handle form submission (POST request)
Route::post('/category', [CategoryController::class, 'store'])->name('category.store');

Route::post('/criteria', [CriteriaController::class, 'store'])->name('criteria.store');

// Route to handle storing multiple criteria
Route::post('/criteria/store-multiple', [CriteriaController::class, 'storeMultiple'])->name('criteria.storeMultiple');

Route::post('/category/store-with-criteria', [CategoryController::class, 'storeWithCriteria'])->name('category.storeWithCriteria');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
