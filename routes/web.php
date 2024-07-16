<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('welcome');
})->middleware(['auth', 'verified'])->name('home');
Route::get('/', function () {
    return view('welcome');
})->middleware(['auth', 'verified']);
/* Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard'); */

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
/* Route::post('/logout', [LogoutController::class, 'logout'])->name('logout')->middleware('auth'); */


// ---------------admin dash-----------

Route::get('/cards', function () {
    return view('components.admin.cart.produits');
})->name('cards');


//admin routes
Route::middleware(['auth','role:admin'])->group(function () {
    Route::get('/admin/dashboard',[App\Http\Controllers\AdminController::class, 'index'])->name('admindash')->middleware('role:admin');
});

//agent routes
Route::middleware(['auth','role:agent'])->group(function () {
    Route::get('/agent/dashboard',[AgentController::class,'dashboard'])->name('agent.dashboard');
});

// -------------------produits------------

Route::get('/admin/dashboard/produits', [App\Http\Controllers\ProduitController::class, 'index'])->name('admin.produits.index');
Route::get('/admin/dashboard/produits-listes', [App\Http\Controllers\ProduitController::class, 'index'])->name('listes');
Route::get('/admin/dashboard/produits-create', [App\Http\Controllers\ProduitController::class, 'create'])->name('create');
Route::post('/admin/dashboard/produits-store', [App\Http\Controllers\ProduitController::class, 'store'])->name('produits.store');
Route::post('/admin/dashboard/produits-update', [App\Http\Controllers\ProduitController::class, 'update'])->name('produits.update');
Route::post('/admin/dashboard/produits-edit', [App\Http\Controllers\ProduitController::class, 'edit'])->name('produits.edit');
Route::post('/admin/dashboard/produits-destroy', [App\Http\Controllers\ProduitController::class, 'destroy'])->name('produits.destroy');
Route::resource('products', ProduitController::class);
// -------------------FORMATIONS------------
Route::get('/admin/dashboard/Formation-listes', [App\Http\Controllers\FormationController::class, 'index'])->name('listes.formation');
Route::get('/admin/dashboard/Formation-create', [App\Http\Controllers\FormationController::class, 'create'])->name('create.formation');
Route::post('/admin/dashboard/Formation-store', [App\Http\Controllers\FormationController::class, 'store'])->name('formations.store');
Route::post('/admin/dashboard/Formation-store', [App\Http\Controllers\FormationController::class, 'update'])->name('formations.update');
Route::post('/admin/dashboard/Formation-edit', [App\Http\Controllers\FormationController::class, 'edit'])->name('formations.edit');
Route::post('/admin/dashboard/Formation-destroy', [App\Http\Controllers\FormationController::class, 'destroy'])->name('formations.destroy');


// Route::middleware(['auth', 'userMiddleware'])->group(function(){

// Route::get('dashboard', [UserController::class, 'index'])->name('dashboard');

// });

// --------preinscriptions-------

Route::get('preinscription', function(){
    return view('partials.layouts.backend.etudiant.preinscription');
})->name('preinscription');
Route::get('etudiant', [App\Http\Controllers\PreinscriptionController::class, 'preinscription'])->name('etudiant');
Route::post('/preinscription/store', [App\Http\Controllers\PreinscriptionController::class, 'store'])->name('preinscription.store');
Route::get('generate-pdf/{id}', [App\Http\Controllers\PreinscriptionController::class, 'generatePDF'])->name('generate-pdf');
Route::get('/preinscription.delete/{id}', [App\Http\Controllers\PreinscriptionController::class, 'destroy'])->name('destroypre');
Route::get('Etudiant', function () {
    return view('partials.layouts.backend.etudiant.index');
})->name('etudiants');

Route::get('/search', 'SearchController@search')->name('search');
Route::get('faq', function(){
    return view('partials.faq');
})->name('faq');

//-----cart panier-----
Route::get('/remove-from-cart/{id}', [App\Http\Controllers\ProduitController::class, 'removeFromCart'])->name('remove.from.cart');
Route::get('/cart', [App\Http\Controllers\ProduitController::class, 'cart'])->name('cart');
Route::post('/add-to-cart/{id}', [App\Http\Controllers\ProduitController::class, 'addToCart'])->name('add.to.cart');
Route::get('/', [App\Http\Controllers\ProduitController::class, 'home'])->name('home');

require_once __DIR__.'/auth.php';
