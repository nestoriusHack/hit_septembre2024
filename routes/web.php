<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\PreinscriptionController;
use App\Http\Controllers\SlideController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/home', function () {
//     return view('welcome');
// })->middleware(['auth', 'verified'])->name('home');
// Route::get('/', function () {
//     return view('welcome');
// })->middleware(['auth', 'verified']);
/* Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard'); */

Route::get('/login', [AuthenticatedSessionController::class, 'create'])
    ->middleware('guest')
    ->name('login');

Route::post('/login', [AuthenticatedSessionController::class, 'store'])
    ->middleware('guest');

Route::get('/register', [RegisteredUserController::class, 'create'])
    ->middleware('guest')
    ->name('register');

Route::post('/register', [RegisteredUserController::class, 'store'])
    ->middleware('guest');


Route::get('/home', [HomeController::class, 'home'])->name('home');

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/home'); // Redirection après déconnexion
})->name('logout');

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
// Admin routes
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [App\Http\Controllers\AdminController::class, 'index'])->name('admindash');

});


//agent routes
Route::middleware(['auth','role:agent'])->group(function () {
    Route::get('/agent/dashboard',[App\Http\Controllers\AgentController::class,'dashboard'])->name('agent.dashboard');
});
//agent user
Route::middleware(['auth','role:user'])->group(function () {
    Route::get('/',[App\Http\Controllers\HomeController::class,'index'])->name('user');
});

// -------------------produits------------

// Route::get('/admin/dashboard/produits', [App\Http\Controllers\ProduitController::class, 'index'])->name('admin.produits.index');
// Route::get('/admin/dashboard/produits-listes/{id}', [App\Http\Controllers\ProduitController::class, 'index'])->name('listes');
// Route::get('/admin/dashboard/produits-create', [App\Http\Controllers\ProduitController::class, 'create'])->name('create');
// Route::post('/admin/dashboard/produits-store', [App\Http\Controllers\ProduitController::class, 'store'])->name('produits.store');
// Route::put('/admin/dashboard/produits-update/{id}', [App\Http\Controllers\ProduitController::class, 'update'])->name('produits.update');
// Route::get('/admin/dashboard/produits-edit/{id}', [App\Http\Controllers\ProduitController::class, 'edit'])->name('produits.edit');
// Route::post('/admin/dashboard/produits-destroy/{id}', [App\Http\Controllers\ProduitController::class, 'destroy'])->name('produits.destroy');
// Route::resource('products', ProduitController::class);
// -------------------FORMATIONS------------
Route::get('/admin/dashboard/Formation-listes/', [App\Http\Controllers\FormationController::class, 'index'])->name('listes.formation');
Route::get('/admin/dashboard/Formation-create', [App\Http\Controllers\FormationController::class, 'create'])->name('create.formation');
Route::post('/admin/dashboard/Formation-store', [App\Http\Controllers\FormationController::class, 'store'])->name('formations.store');
Route::post('/admin/dashboard/Formation-update/{id}', [FormationController::class, 'update'])->name('formation.update');
Route::get('/admin/dashboard/Formation-edit/{id}', [App\Http\Controllers\FormationController::class, 'edit'])->name('formation.edit');
Route::get('/admin/dashboard/Formation-show/{id}', [App\Http\Controllers\FormationController::class, 'show'])->name('formation.show');
Route::delete('/formations/{id}', [FormationController::class, 'destroy'])->name('formation.destroy');


// Route::middleware(['auth', 'userMiddleware'])->group(function(){

// Route::get('dashboard', [UserController::class, 'index'])->name('dashboard');

// });

// --------services-------
Route::resource('services', ServiceController::class);
Route::get('/admin/dashboard/services-listes/', [App\Http\Controllers\ServiceController::class, 'index'])->name('listes.services');
Route::get('/admin/dashboard/services-create', [App\Http\Controllers\ServiceController::class, 'create'])->name('create.services');

// --------slides-------
Route::resource('slides', SlideController::class);
// Route::get('/slides/create', [SlideController::class, 'create'])->name('slides.create');
// Route::get('/slides/{id}', [SlideController::class, 'show'])->name('slides.index');
// Route::get('/slides/{id}', [SlideController::class, 'store'])->name('slides.store');

// --------categories-------
Route::get('/categories/create', [FormationController::class, 'create'])->name('categories.create');
Route::get('/categories', [FormationController::class, 'listCategories'])->name('categories.index');
Route::get('/categories/{id}', [FormationController::class, 'showCategory'])->name('categorie.show');
Route::resource('categories', CategorieController::class);
// --------formation-------
Route::get('/Formation-show/{id}', [App\Http\Controllers\FormationController::class, 'show'])->name('formations.show');
Route::get('/formations/{id}', [FormationController::class, 'showFormations']);

// --------preinscriptions-------

Route::get('preinscription', function(){
    return view('partials.layouts.backend.etudiant.preinscription');
            })->name('preinscription');
Route::get('etudiant', [App\Http\Controllers\PreinscriptionController::class, 'preinscription'])->name('etudiant');
Route::get('/etudiant/liste', [App\Http\Controllers\PreinscriptionController::class, 'show'])->name('show.etudiant');
Route::post('/preinscription/store', [App\Http\Controllers\PreinscriptionController::class, 'store'])->name('preinscription.store');
Route::get('generate-pdf/{id}', [App\Http\Controllers\PreinscriptionController::class, 'generatePDF'])->name('generate-pdf');
Route::get('/preinscription/edit/{id}', [App\Http\Controllers\PreinscriptionController::class, 'edit'])->name('preinscription.edit');
Route::put('/preinscription/update/{id}', [App\Http\Controllers\PreinscriptionController::class, 'update'])->name('preinscription.update');
Route::put('/preinscription/destroy/{id}', [App\Http\Controllers\PreinscriptionController::class, 'destroy'])->name('preinscription.destroy');

Route::get('Etudiant', function () {
    return view('partials.layouts.backend.etudiant.index');
})->name('etudiants');


Route::get('/search', [App\Http\Controllers\SearchController::class, 'search'])->name('search');
Route::get('faq', function(){
    return view('partials.faq');
})->name('faq');

//-----cart panier-----
Route::get('/remove-from-cart/{id}', [App\Http\Controllers\ProduitController::class, 'removeFromCart'])->name('remove.from.cart');
Route::get('/cart', [App\Http\Controllers\ProduitController::class, 'cart'])->name('cart');
Route::post('/add-to-cart/{id}', [App\Http\Controllers\ProduitController::class, 'addToCart'])->name('add.to.cart');


require_once __DIR__.'/auth.php';
